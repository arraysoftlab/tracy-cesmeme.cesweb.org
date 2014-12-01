<?php include "header.php" ?>
<!-- wrapper starts -->
<div class="wrapper">
    <!-- container starts -->
    <div class="container">
        <!-- Header Starts -->
        <div class="header">
	        <img src="/images/CES-Meme-Head.gif" style="width: 95%; max-width: 100%; margin: 30px 0">
	        
            <!--h2>The Official 2015 International CES <span class="trade-mark">&reg;</span> Meme Generator</h2-->
        </div>
        <span class="clear"></span>
        <!-- Header ends -->
        <!-- main-content Starts -->
        <div class="main-content">
    <div class="banner">
        <div class="banner-image"><img src="images/main_img.jpg" alt="banner-image"></div>
        <p><?php echo $description ?></p>
        <span class="clear"></span>
        <a href="<?php echo $context_uri ?>/questions" onclick="_gaq.push(['_trackEvent', 'Step1', 'clicked']" class="start-meme">Start your CES meme-ing
            here.</a>
    </div>
    <span class="clear"></span>
<?php include "footer.php" ?>