<?php get_header(); ?>

	<div class="container mais-vistos midia">

	<?php if (have_posts()) : ?>

		  <h2>Você pesquisou por: "<?php echo $s ?>"</h2>

		 <div class="row">

				<?php while (have_posts()) : the_post(); ?>

					 <div class="col-lg-4 col-md-4 col-xs-12 pb-2">
                     <div class="card">
                         <?php if( has_post_thumbnail() ): ?>
                                  
                           <a href="<?php the_permalink();?>">
                               <?php the_post_thumbnail(' card-img-top'); ?>
                           </a>
                                   
                          <?php endif; // has_post_thumbnail ?>
                           <div class="card-body">
                             <div class="autor">
                               <div class="img-autor">
                                 <a href="<?php the_permalink();?>"><?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?></a>
                               </div><!--div img-autor-->
                               <div class="publicado">
                                 <span><?php the_author();?></span>
                                 <span>Publicado: <?php the_time('j \d\e F \d\e Y') ?></span>
                               </div>
                             </div><!--div autor-->
                             <a href="<?php the_permalink();?>"><h5 class="card-title"><?php the_title();?></h5></a>
                             <a href="<?php the_permalink();?>"><p class="card-text"><?php the_excerpt();?></p></a>
                             
                           </div>
                     </div><!--card-->
                   </div><!--col-lg-4-->
					
					<hr>
				<?php endwhile; ?>

	

				<?php else : ?>

					<h2 class="center">Nenhum Post Encontrado. Tente um termo diferente!</h2>
					<?php include (TEMPLATEPATH . '/searchform.php'); ?>

				<?php endif; ?>

		</div> <!-- /row -->
	</div>
	

<?php get_footer(); ?>