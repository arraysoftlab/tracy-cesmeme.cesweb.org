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

include('../config.php');

if(isset($_GET['post_on_fb'])) {
    FacebookSession::setDefaultApplication('371501986308208', '69ae6db203d02b3ddb477d823d3bffa2');
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
        $redirect_to = $base_url . $context_uri;
        header("Location: $redirect_to");
        exit();
    } else {
        $permissions = array('email', 'publish_actions');
        header("Location: {$helper->getLoginUrl($permissions)}");
    }
}