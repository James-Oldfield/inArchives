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
	  <h1>test</h1>
	</div>
</div>

<script src="<?php bloginfo( 'template_url' );?>/assets/js/vendor/a.js"></script>
<script src="<?php bloginfo( 'template_url' );?>/assets/js/vendor/b.js"></script>
<script src="<?php bloginfo( 'template_url' );?>/assets/js/inarchives.min.js"></script>

</body>
</html>

