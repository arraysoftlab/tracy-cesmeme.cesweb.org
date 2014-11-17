<?php include "header.php" ?>
    <div class="banner">
        <div class="banner-image"><img src="images/main_img.jpg" alt="banner-image"></div>
        <p><?php echo $description ?></p>
        <span class="clear"></span>
        <a href="<?php echo $context_uri ?>/questions" onclick="_gaq.push(['_trackEvent', 'Step1', 'clicked']" class="start-meme">Start your CES meme-ing
            here.</a>
    </div>
    <span class="clear"></span>
<?php include "footer.php" ?>