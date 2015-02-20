<?php
/*
Template Name: twpol template
*/ ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>
            <?php 
                wp_title('|', 'true', 'right');
                bloginfo( 'name' );
            ?>
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--css-->
        <link rel="stylesheet" href="<?php bloginfo( 'template_url' );?>/style.css" type="text/css" />
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
        
        <!--Favicon-->
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico" />
        
        <?php wp_head()?>
    </head>
<body class="twpolBody">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

<div class="twpol text-center">
	<div class="twpolMain">
        <div class="col-xs-12">
            <img src="<?php bloginfo( 'template_url' );?>/images/logo.png" alt="In Archives logo" width="250px" height="auto">
            <h1>THE WORST PART OF LIFE</h1>
        </div>
        <div class="col-xs-12 col-sm-7">
            <div class="videoWrapper">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/rp4S-vtUz34" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-xs-12 col-sm-5">
            <div class="albumWrapper">
                <img src="<?php bloginfo( 'template_url' );?>/images/albumArt.jpg" alt="Girl album artwork" width="auto%" height="100%">
            </div>
    	</div>
        <div class="col-xs-12">
            <h2><a href="/">Stream "The worst part of life" EP for free</a></h2>
            <h2><a href="/">Purchase merch and bundles</a></h2>
        </div>
    </div>

<script src="<?php bloginfo( 'template_url' );?>/assets/js/vendor/a.js"></script>
<script src="<?php bloginfo( 'template_url' );?>/assets/js/vendor/b.js"></script>
<script src="<?php bloginfo( 'template_url' );?>/assets/js/inarchives.min.js"></script>

</body>
</html>

