<?php
//TODO: you have to change context uri here and site url in developers.facebook.com settings
$context_uri = "/dev";
$base_url = "http://$_SERVER[HTTP_HOST]";
$absolute_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$picture = $absolute_url . 'assets/meme/international/astronauts.png';
$message = "I just generated the world's greatest CES Meme. Be sure to create your own CES Meme and share it to promote why you're attending the show. Don't forget to
tag it #CES2015";
$description = "CES is awesome. Memes are awesome. Put them together and you have the ultra-awesome CES Meme Generator. Using proprietary algorithms and decades of data,
the CES Meme Generator will automatically create a message you can share on Facebook and other social media to highlight why you’ll be at the 2015 CES. All you have to do is
answer a few simple and fun questions.";