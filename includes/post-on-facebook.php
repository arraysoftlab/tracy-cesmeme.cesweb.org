<?php
session_start();

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

include('../conf.php');

if(isset($_GET['post_on_fb'])) {
    FacebookSession::setDefaultApplication('706477252792498', '8620106a1f77bba613538159ae4fbc4f');
    $redirect_to = substr($absolute_url, 0, strpos($absolute_url, "&query_end") ? strpos($absolute_url, "&query_end") + 10 : strlen($absolute_url));
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
            $caption = resolveHasTags($message);
            $redirect_to = $base_url . $context_uri;
            $response = (new FacebookRequest(
                $session, 'POST', '/me/feed', array(
                    'link' => $redirect_to . '/viewmeme?image=' . urlencode($picture) . '&' . 'caption=' . str_replace(PHP_EOL, '|n|', urlencode($caption)),
                    'picture' => $picture,
                    'message' => $caption,
                    'description' => $description
                )
            ))->execute()->getGraphObject();
        } catch(FacebookRequestException $e) {
            echo "#{$e->getCode()}: {$e->getMessage()}";
        } catch(Exception $e) {
            echo "#{$e->getCode()}: {$e->getMessage()}";
        }
        header("Location: $redirect_to?close_window=true");
        exit();
    } else {
        $permissions = array('email', 'publish_actions');
        header("Location: {$helper->getLoginUrl($permissions)}");
    }
}