<?php
use Codebird\Codebird;

require_once('lib/twitter-codebird/codebird.php');

require_once('../config.php');

if(isset($_GET['post_on_tw'])) {
    Codebird::setConsumerKey("Kj72AcDtVn5ZChMeEdLZadnbe", "sniKxYn5Lbmiic3oYBsCPOpBBWYV649P850Tv3gsQdKBg9CAxF");
    $cb = Codebird::getInstance();
    $cb->setToken("1648015860-SrcvbqU8RRtHfq3wrB88qrrGS6U6UIrDnxiqh8i", "tBh00xYgKatl5lXwRiHbbIpu9RcRvYYeLyMxzBaHepk86");
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
        'status' => urldecode(substr(urlencode(resolveHasTags($message)), 0, 120)),
        'media_ids' => $reply->media_id_string
    ));
}
header("Location: $base_url$context_uri");