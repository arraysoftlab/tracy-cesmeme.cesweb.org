<?php $context_uri = "/cesmeme.cesweb.org"; ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>CES MEME Generator</title>
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
        (function() {
            <?php
            if(isset($_GET['close_window'])) {
                    ?>
            window.close();
            <?php
            }
            ?>
        })();
    </script>
    <!-- END: SCRIPTS -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-2664056-24', 'auto');
        ga('send', 'pageview');

    </script>
</head>
<body>
<?php include "conf.php"; ?>
<!-- wrapper starts -->
<div class="wrapper">
    <!-- container starts -->
    <div class="container">
        <!-- Header Starts -->
        <div class="header">
            <h2>The Official 2015 International CES <span class="trade-mark">&reg;</span> Meme Generator</h2>
        </div>
        <span class="clear"></span>
        <!-- Header ends -->
        <!-- main-content Starts -->
        <div class="main-content">