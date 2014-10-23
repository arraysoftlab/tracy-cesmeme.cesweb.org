<?php
use Facebook\FacebookSession;
use Facebook\FacebookRequest;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequestException;

include('lib/Facebook/Entities/AccessToken.php');
include('lib/Facebook/FacebookSession.php');
include('lib/Facebook/HttpClients/FacebookCurl.php');
include('lib/Facebook/HttpClients/FacebookHttpable.php');
include('lib/Facebook/HttpClients/FacebookCurlHttpClient.php');
include('lib/Facebook/GraphObject.php');
include('lib/Facebook/FacebookResponse.php');
include('lib/Facebook/FacebookRequest.php');
include('lib/Facebook/FacebookRedirectLoginHelper.php');
include('lib/Facebook/FacebookSDKException.php');
include('lib/Facebook/FacebookRequestException.php');
include('lib/Facebook/FacebookAuthorizationException.php');
include('lib/Facebook/FacebookPermissionException.php');

$base_url = "http://$_SERVER[HTTP_HOST]";
$absolute_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$picture = $absolute_url . 'assets/meme/international/astronauts.png';
$message = "I just generated the world's greatest CES Meme. Be sure to create your own CES Meme and share it to promote why you're attending the show. Don't forget to
tag it #CES2015";
$description = "CES is awesome. Memes are awesome. Put them together and you have the ultra-awesome CES Meme Generator. Using proprietary algorithms and decades of data,
the CES Meme Generator will automatically create a message you can share on Facebook and other social media to highlight why you’ll be at the 2015 CES. All you have to do is
answer a few simple and fun questions.";

if(isset($_GET['share_on_fb'])) {
    FacebookSession::setDefaultApplication('371501986308208', '69ae6db203d02b3ddb477d823d3bffa2');
    $redirect_to = substr($absolute_url, 0, strpos($absolute_url, "&") ? strpos($absolute_url, "&") : strlen($absolute_url));
    $helper = new FacebookRedirectLoginHelper($redirect_to);
    $session = null;
    try {
        $session = $helper->getSessionFromRedirect();
    } catch(FacebookRequestException $e) {
        echo "#{$e->getCode()}: {$e->getMessage()}";
    } catch(Exception $e) {
        echo "#{$e->getCode()}: {$e->getMessage()}";
    }
    if($session) {
        if(isset($_GET['picture'])) {
            $picture = $_GET['picture'];
        }
        if(isset($_GET['message'])) {
            $message = $_GET['message'];
        }
        try {
            $response = (new FacebookRequest(
                $session, 'POST', '/me/feed', array(
                    'link' => $absolute_url,
                    'picture' => $picture,
                    'message' => $message,
                    'description' => $description
                )
            ))->execute()->getGraphObject();
        } catch(FacebookRequestException $e) {
            echo "#{$e->getCode()}: {$e->getMessage()}";
        } catch(Exception $e) {
            echo "#{$e->getCode()}: {$e->getMessage()}";
        }
    } else {
        $permissions = array('email', 'publish_actions');
        header("Location: {$helper->getLoginUrl($permissions)}" );
    }
}