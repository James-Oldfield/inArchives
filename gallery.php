<?php
/*
Template Name: gallery template
*/ ?>
<?php get_header(); ?>
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

<?php get_footer(); ?>



