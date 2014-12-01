<?php include "../header.php"; ?>
<!-- wrapper starts -->
<div class="wrapper">
    <!-- container starts -->
    <div class="container">
        <!-- Header Starts -->
        <div class="header">
	        
	        
            <!--h2>The Official 2015 International CES <span class="trade-mark">&reg;</span> Meme Generator</h2-->
        </div>
        <span class="clear"></span>
        <!-- Header ends -->
        <!-- main-content Starts -->
        <div class="main-content">
<div class="ces-meme" style="text-align: center">
    <!--h1>CONGRATULATIONS! <br> HERE’S YOUR CES MEME</h1-->
    <img src="/images/mymeme-header.gif" style="width: 95%; max-width: 854px; margin: 30px 0">

    <div class="post">
        <div class="random-image">
            <img id="ces-meme-picture" src="" alt="Yeah! I shall be There" width="100%"/>
        </div>
        <div class="social-group">
            <h4>Now that you have the perfect CES meme, why not share it ?</h4>

            <h2>GIVE IT A CAPTION</h2>
            <textarea id="ces-meme-caption" placeholder="<?php echo $message ?>"></textarea>
            <ul class="share">
                <li>
                    <a id="fb-post-btn" class="post-btn" href="<?php echo $context_uri ?>/includes/post-on-facebook.php">
                        <img src="<?php echo $context_uri ?>/images/fb-share-btn.png" alt="share on facebook" width="218" height="52">
                    </a>
                </li>
                <li>
                    <a id="tw-post-btn"  class="post-btn" href="<?php echo $context_uri ?>/includes/post-on-twitter.php">
                        <img src="<?php echo $context_uri ?>/images/twt-share-btn.png" alt="share on twitter" width="219" height="53">
                    </a>
                </li>
                <li class="last">
                    <a id="gp-post-btn" class="post-btn" href="https://plus.google.com/share">
                        <img src="<?php echo $context_uri ?>/images/gp-share-btn.png" alt="share on google plus" width="219" height="54">
                    </a>
                </li>
            </ul>
            <span class="clear"></span>

            <div class="download">
                <ul>
                    <li><a id="download-meme" href="#" download="CESMEME2015.jpg">Download File</a></li>
                    <li>Right click (Option click on Mac) and “Save Link As…”</li>
                </ul>
                <span class="clear"></span>
            </div>
        </div>
    </div>
    <span class="clear"></span>

    <div class="highlight">
        <p>We can’t wait to see you at the 2015 CES!<br> Check out our awesome schedule of <a
                href="http://cesweb.org/conference" class="cesweb" target="_blank">conferences and events</a>.
        </p>
    </div>
</div>
<?php include "../footer.php" ?>