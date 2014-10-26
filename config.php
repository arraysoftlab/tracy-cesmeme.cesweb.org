<?php
//TODO: you have to change context uri here and site url in developers.facebook.com settings
$context_uri = "/cesmeme.cesweb.org";
$base_url = "http://$_SERVER[HTTP_HOST]";
$absolute_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$picture = $absolute_url . 'assets/meme/international/astronauts.png';
$message = "I just generated the world's greatest CES Meme. Be sure to create your own CES Meme and share it to promote why you're attending the show. Don't forget to
tag it #CES2015";
$description = "CES is awesome. Memes are awesome. Put them together and you have the ultra-awesome CES Meme Generator. Using proprietary algorithms and decades of data,
the CES Meme Generator will automatically create a message you can share on Facebook and other social media to highlight why you’ll be at the 2015 CES. All you have to do is
answer a few simple and fun questions.";

$domestic_image_dir = 'assets/meme/domestic';
$international_image_dir = 'assets/meme/international';
$domestic_images = array_diff(scandir(__DIR__ . '/' . $domestic_image_dir), array('..', '.'));
$international_images = array_diff(scandir(__DIR__ . '/' . $international_image_dir), array('..', '.'));
$random_domestic_image = $domestic_images[rand(2, count($domestic_images) + 2 - 1)];
$random_international_image = $international_images[rand(2, count($international_images) + 2 - 1)];