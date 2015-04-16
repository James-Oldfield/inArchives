<?php
/*
Template Name: gallery template
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
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
        
        <!--Favicon-->
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico" />
        
        <?php wp_head()?>
    </head>
<body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
<div class="header galleryHeader text-center">
	<h1 class="galleryTitle">INARCHIVES</h1>
	<h2><a href="/">THE WORST PART OF LIFE</a></h2>
	<h3 class="gallerySubtitle">GALLERY</h3>
	<a class="gallery" style="margin-top:50px;" href="../">BACK TO MAIN SITE</a>
</div>

	<div class="main container text-center">
	    
	<!--post loop-->
	<!--display thumbnail loop-->
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) : the_post(); ?> 
	    
		<?php endwhile;
	// END display thumbnail loop
	else :
		echo wpautop( '<p class="sorry">Sorry, no posts were found</p>' );
	endif;
	?>

	<?php $debut = 0; ?>
	<?php while(have_posts()) : the_post(); ?>
	<?php
	$myposts = get_posts('numberposts=-1&offset=$debut');
	foreach($myposts as $post) :
	?>
	<div class="col-xs-12 col-sm-4 col-md-3">
		<div class="post-thumb">
			<a href="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ) ?>" rel="lb">
	      <?php the_post_thumbnail('post-thumb' , array( 'alt' => get_the_title() )); ?>
			</a>
		</div>
	  <span class="title"><p><?php the_title(); ?></p></span>
	</div>   
	<?php endforeach; ?>
	</ul>
	<?php endwhile; ?>
	    
	</div>

	<div class="galleryBottom text-center col-xs-12">
		<p>&copy; IN ARCHIVES 2015</p>
		<p>Built with &#9829; by <a href="http://james-oldfield.co" target="_blank">JAMES</a></p>
	</div>

</body>
</html>



