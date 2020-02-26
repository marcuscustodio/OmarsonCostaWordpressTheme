<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="wrap_1280">
        
        <div class="page-content-title-wrapper">

            <div class="wrap_1280">

                <?php if (have_posts()) : ?>

                <h2 class="page-content-title"><?php single_tag_title(__('Posts com a tag: '), true); ?></h2>

            <div class="clearfix"></div>

            </div>

        </div>
            
                <div class="container">
                    
                    <div class="row" >
                        
                        <?php while (have_posts()) : the_post(); ?>
                        
                        <div class="col-lg-4 col-md-6 col-xs-12 stretch">
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
                    
                        <?php endwhile; ?>
                        
                        <?php else : ?>

                        <article class="no-posts">

                            <h1>No posts were found.</h1>

                        </article>
                        
                        <?php endif; ?>
                        
                    </div>
                    
                </div>

                <div class="clearfix"></div>

                <div class="article-nav clearfix">
                    
                    <p class="article-nav-next pull-right"><?php previous_posts_link(__('Newer Posts »')); ?></p>
                    
                    <p class="article-nav-prev pull-left"><?php next_posts_link(__('« Older Posts')); ?></p>
                    
                </div>

        
    </div><!-- END wrap_1280 -->
  </div>
</div>    

<?php get_footer(); ?>