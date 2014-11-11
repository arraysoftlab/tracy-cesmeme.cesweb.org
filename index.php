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
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/font-face.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/responsive.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/sweet-alert.css" rel="stylesheet" type="text/css" media="all">
    <!-- END: STYLESHEET -->
    <!-- SET: SCRIPTS -->
    <script src="js/jquery-1.11.1.js" type="text/javascript"></script>
    <script src="js/jquery.scrollTo.js" type="text/javascript"></script>
    <script src="js/sweet-alert.min.js" type="text/javascript"></script>
    <script src="js/app.js" type="text/javascript"></script>
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
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-2664056-24']);
        _gaq.push(['_trackPageview']);
        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>
</head>
<body>
<?php include('config.php') ?>
<!-- wrapper starts -->
<div class="wrapper">
    <!-- container starts -->
    <div class="container">
        <!-- Header Starts -->
        <div class="header">
            <h2>The Official 2015 International CES <span class="trade-mark">&reg;</span> Meme Generator</h2>
        </div>
        <!-- Header ends -->
        <span class="clear"></span>
        <!-- main-content Starts -->
        <div class="main-content">
            <div class="banner">
                <div class="banner-image"><img src="images/main_img.png" alt="banner-image" height="245" width="1081"></div>
                <p><?php echo $description ?></p>
                <span class="clear"></span>
                <a href="#" class="start-meme">Start your CES meme-ing here.</a>
            </div>
            <span class="clear"></span>
            <div class="feedback">
                <div class="sub-container">
                    <div class="container-image" id="qone">
                        <h3 class="question">How many years have you been coming to CES</h3>
                    </div>
                    <span class="clear"></span>
                    <div class="feedback-options">
                        <ul>
                            <li><a href="#" class="one">It’s my first time</a></li>
                            <li><a href="#" class="two">1–5 years</a></li>
                            <li><a href="#" class="three">5-10 years</a></li>
                            <li><a href="#" class="four">10-Do you really expect me to remember?</a></li>
                        </ul>
                        <span class="clear"></span>
                    </div>
                    <span class="clear"></span>
                </div>
                <div class="sub-container">
                    <div class="container-image" id="qtwo">
                        <h3 class="question">What's your perfect amount of sleep each night at CES?</h3>
                    </div>
                    <span class="clear"></span>
                    <div class="feedback-options">
                        <ul>
                            <li><a href="#" class="five">10–12 hours</a></li>
                            <li><a href="#" class="six">8–10 hours</a></li>
                            <li><a href="#" class="seven">5–8 hours</a></li>
                            <li><a href="#" class="eight">I'll sleep on the plane home</a></li>
                        </ul>
                        <span class="clear"></span>
                    </div>
                    <span class="clear"></span>
                </div>
                <div class="sub-container">
                    <div class="container-image" id="qthree">
                        <h3 class="question">Which would best describe your goals at CES?</h3>
                    </div>
                    <span class="clear"></span>
                    <div class="feedback-options">
                        <ul>
                            <li><a href="#" class="nine">Simply put, change everything</a></li>
                            <li><a href="#" class="ten">Double our stock price</a></li>
                            <li><a href="#" class="eleven">Make contacts, contacts and more contacts</a></li>
                            <li><a href="#" class="twelve">That’s for us to know and the world to find out</a></li>
                        </ul>
                        <span class="clear"></span>
                    </div>
                    <span class="clear"></span>
                </div>
                <div class="sub-container">
                    <div class="container-image" id="qfour">
                        <h3 class="question">What do you expect to do at the 2015 CES?</h3>
                    </div>
                    <span class="clear"></span>
                    <div class="feedback-options">
                        <ul>
                            <li><a href="#" class="thirteen">Run out of business cards</a></li>
                            <li><a href="#" class="fourteen">Add 100 contacts to your phone</a></li>
                            <li><a href="#" class="fifteen">Seal that massive deal</a></li>
                            <li><a href="#" class="sixteen">Simply change the entire industry as we know it</a></li>
                        </ul>
                        <span class="clear"></span>
                    </div>
                    <span class="clear"></span>
                </div>
                <div class="sub-container attend-from">
                    <div class="container-image" id="qfive">
                        <h3 class="question">What best describes you and your team?</h3>
                    </div>
                    <span class="clear"></span>
                    <div class="feedback-options">
                        <ul>
                            <li><a href="#" class="seventeen" data-option="domestic">Domestic attendees</a></li>
                            <li><a href="#" class="eighteen" data-option="international">International attendees </a></li>
                            <li><a href="#" class="nineteen" data-option="both">Domestic and international attendees</a></li>
                            <li><a href="#" class="twenty" data-option="future">We come from the future</a></li>
                        </ul>
                        <span class="clear"></span>
                    </div>
                    <span class="clear"></span>
                    <a id="create-meme" href="#create-meme">CREATE YOUR CES MEME</a>
                </div>
            </div>
            <span class="clear"></span>
            <div class="ces-meme">
                <h1>CONGRATULATIONS! <br> HERE’S YOUR CES MEME</h1>
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
                                <a id="fb-post-btn" href="<?php echo $context_uri ?>/includes/post-on-facebook.php"
                                   onclick="javascript:window.open(this.href,  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=500');return false;">
                                    <img src="images/fb-share-btn.png" alt="share on facebook" width="218" height="52">
                                </a>
                            </li>
                            <li>
                                <a id="tw-post-btn" href="<?php echo $context_uri ?>/includes/post-on-twitter.php"
                                    onclick="javascript:window.open(this.href,  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=500');return false;">
                                    <img src="images/twt-share-btn.png" alt="share on twitter" width="219" height="53">
                                </a>
                            </li>
                            <li class="last">
                                <a id="gp-post-btn" href="https://plus.google.com/share"
                                   onclick="javascript:window.open(this.href,  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=500');return false;">
                                    <img src="images/gp-share-btn.png" alt="share on google plus" width="219" height="54">
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
                    <p>We can’t wait to see you at the 2015 CES! Check out our awesome schedule of conferences and events <a href="http://cesweb.org/conference" class="cesweb">CESweb.org/conference</a>.
                    </p>
                </div>
            </div>
        </div>
        <span class="clear"></span>
        <!-- main-content ends -->
        <!-- footer starts -->
        <div id="footer">
            <div class="footer">
                <p>By participating in this activity you confirm that, as of the upload date, you are at least 18 years of age or older. </p>
                <a href="http://www.cesweb.org/CESTimeTravelerTermsConditions" class="terms" target="_blank">Terms & Conditions</a>
                <span class="clear"></span>
                <div style="margin-top: 30px;">
                    <div style="width: 25%;float: left;">
                        <p>
                            <img src="images/ces-footer-logo.jpg" alt="ces logo">
                        </p>
                    </div>
                    <div style="width: 50%;float: left;text-align: left;">
                        <h3>LAS VEGAS, NV</h3>
                        JANUARY 6-9, 2015
                        <p style="padding-top: 5px;"><b>CES Tech East:</b> Las Vegas Convention and World Trade Center (LVCC)/the Westgate Las Vegas (Westgate) and
                            Renaissance
                            Las Vegas (Renaissance)</p>
                        <p style="padding-top: 5px;"><b>CES Tech West:</b> Sands Expo (Sands), The Venetian, The Palazzo, Wynn Las Vegas and Encore at Wynn (Wynn/Encore)</p>
                        <p style="padding-top: 5px;"><b>C Space at ARIA</b></p>
                    </div>
                    <div style="width: 25%;float: left;margin-top: 15px;">
                        <p style="width: 30%;float: left;text-align: right;">
                            <a href="http://www.cesweb.org">CESweb.org</a> <a href="https://twitter.com/intent/tweet?
url=cesmeme.cesweb.org&hashtags=CES2015" target="_blank">#CES2015</a>
                        </p>
                        <p style="width: 70%;float: right;">
                            <a href="https://ces.itnint.com/CES15/regonline/RegLogin.aspx" style="float: left;margin: 5px 0 0 5px;" target="_blank"><img src="images/register-now-button.png" alt="register now"></a>
                        </p>
                    </div>
                </div>
                <div style="margin-top: 20px;">
                </div>
            </div>
            <span class="clear"></span>
        </div>
        <!-- footer ends -->
        <span class="clear"></span>
    </div>
    <!-- container ends -->
</div>
<!-- wrapper ends -->
<div id="meme-pictures" style="display: none">
    <img id="domestic" src="<?php echo "$base_url$context_uri/$domestic_image_dir/$random_domestic_image" ?>"/>
    <img id="international" src="<?php echo "$base_url$context_uri/$international_image_dir/$random_international_image" ?>"/>
</div>
</body>
</html>
