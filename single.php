<?php get_header();?>



	<div class="container">
	  <div class="row">
	  	<div class="col">
	  		<?php if(have_posts()) : while(have_posts()) : the_post();?>
	    	<div class="single-post">
    	      <div class="content-header-post">
    	         <div class="autor">
                    <div class="img-autor">
                      <a href="<?php the_permalink()?>"><?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?></a>
                    </div><!--div img-autor-->
                    <div class="publicado">
                      <span><?php the_author();?></span>
                      <span>Publicado: <?php the_time('j \d\e F \d\e Y') ?></span>
                    </div>
                  </div><!--div autor-->
    	         <div class="share">
    	           <span>compartilhar: <?php echo do_shortcode('[Sassy_Social_Share]') ?></span>
    	           
    	         </div>
    	       </div><!--div content-header post-->
	    	       <h2><?php the_title();?></h2>
	    	       <?php //the_post_thumbnail('post_thumbnail', array('class'=> 'img-fluid'));?>
	    
	    	       <div class="content-post">
	    	         <?php the_content();?>
	    	       </div><!--content post-->
	    	</div>
	    </div><!--single post-->

	  </div><!--row-->
	</div><!--container do slide-->


<?php endwhile; ?>
<?php endif; ?>

<?php get_footer();?>