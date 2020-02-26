<?php get_header();?>

<?php if(have_posts()) : while(have_posts()) : the_post();?>

	<div class="container">

        <div class="row">
     		<h2><?php the_title();?></h2>

     		<?php the_content();?>
         
        </div><!--row-->
  </div><!--container -->

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer();?>