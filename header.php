<?php include "conf.php"; ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php echo $title; ?></title>
    <!-- SET: FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <!-- END: FAVICON -->
    <!-- SET: STYLESHEET -->
    <link href="<?php echo $context_uri ?>/css/style.css" rel="stylesheet" type="text/css" media="all">
    <link href="<?php echo $context_uri ?>/css/font-face.css" rel="stylesheet" type="text/css" media="all">
    <link href="<?php echo $context_uri ?>/css/responsive.css" rel="stylesheet" type="text/css" media="all">
    <link href="<?php echo $context_uri ?>/css/sweet-alert.css" rel="stylesheet" type="text/css" media="all">
    <!-- END: STYLESHEET -->
    <!-- SET: SCRIPTS -->
    <script src="<?php echo $context_uri ?>/js/jquery-1.11.1.js" type="text/javascript"></script>
    <script src="<?php echo $context_uri ?>/js/jquery.scrollTo.js" type="text/javascript"></script>
    <script src="<?php echo $context_uri ?>/js/sweet-alert.min.js" type="text/javascript"></script>
    <script src="<?php echo $context_uri ?>/js/app.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function() {
            <?php
            if(isset($_GET['close_window'])) {
                    ?>
            $('body').html('<img src="images/meme-shared.jpg">');
            setTimeout(function() {
                window.close();
            }, 5000);
            <?php
            }
            ?>
        });
    </script>
    <!-- END: SCRIPTS -->
    <script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-3975226-4']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</head>
<body>
