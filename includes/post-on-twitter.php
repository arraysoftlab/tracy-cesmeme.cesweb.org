<?php
session_start();

use Codebird\Codebird;

require_once('lib/twitter-codebird/codebird.php');

require_once('../conf.php');

if(isset($_GET['post_on_tw'])) {
    Codebird::setConsumerKey("Kj72AcDtVn5ZChMeEdLZadnbe", "sniKxYn5Lbmiic3oYBsCPOpBBWYV649P850Tv3gsQdKBg9CAxF");
    $cb = Codebird::getInstance();
    if(!isset($_SESSION['oauth_token'])) {
        // get the request token
        $reply = $cb->oauth_requestToken(array(
            'oauth_callback' => 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']
        ));

        // store the token
        $cb->setToken($reply->oauth_token, $reply->oauth_token_secret);
        $_SESSION['oauth_token'] = $reply->oauth_token;
        $_SESSION['oauth_token_secret'] = $reply->oauth_token_secret;
        $_SESSION['oauth_verify'] = true;

        // redirect to auth website
        $auth_url = $cb->oauth_authorize();
        header('Location: ' . $auth_url);
        die();

    } else if(isset($_GET['oauth_verifier']) && isset($_SESSION['oauth_verify'])) {
        // verify the token
        $cb->setToken($_SESSION['oauth_token'], $_SESSION['oauth_token_secret']);
        unset($_SESSION['oauth_verify']);

        // get the access token
        $reply = $cb->oauth_accessToken(array(
            'oauth_verifier' => $_GET['oauth_verifier']
        ));

        // store the token (which is different from the request token!)
        $_SESSION['oauth_token'] = $reply->oauth_token;
        $_SESSION['oauth_token_secret'] = $reply->oauth_token_secret;
        // assign access token on each page load
        $cb->setToken($_SESSION['oauth_token'], $_SESSION['oauth_token_secret']);

        if(isset($_GET['picture'])) {
            $picture = $_GET['picture'];
        }
        if(isset($_GET['message'])) {
            $message = $_GET['message'];
        }
        $reply = $cb->media_upload(array(
            'media' => $picture
        ));
        $reply = $cb->statuses_update(array(
            'status' => resolveHasTags(urldecode(substr(urlencode($message), 0, 110))),
            'media_ids' => $reply->media_id_string
        ));
        unset($_SESSION['oauth_token']);
        header("Location: $base_url$context_uri?close_window=true");
        die();
    }
}