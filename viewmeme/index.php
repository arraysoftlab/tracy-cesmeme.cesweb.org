<?php include '../header.php' ?>
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
                <img id="ces-meme-picture" src="<?php echo $_GET['image'] ?>" alt="Yeah! I shall be There" width="100%"/>
            </div>
        </div>
        <span class="clear"></span>

        <div class="caption">
            <p style="width: 800px; margin: 30px auto; font-size: 18px; font-family: 'MyriadProRegular';"><?php echo str_replace('|n|', '<br>', $_GET['caption']) ?></p>
        </div>
        <span class="clear"></span>
        <div class="banner" style="margin-top: 30px;">
            <a href="<?php echo $context_uri ?>/questions" class="start-meme">Start your CES meme-ing here.</a>
        </div>
    </div>
<?php include '../footer.php' ?>