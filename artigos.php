<?php
/*
Template Name: artigos
*/
?>

<?php get_header();?>


      <?php 
          $args = array(
            'post_type' => 'post',
            'ignore_sticky_posts' => 1,
            'year'  => '2019',
            'posts_per_page'=>-1,
            'order' => 'DESC',
          );
        ?>

    <style type="text/css">
      .btn-link{
            color: #5f656d;
            font-weight: bold;
            text-decoration: none;
            font-size: 30px;
      }
      .collapsed{
        font-weight: normal;
      }
      .filter-posts{
        display: flex;
        align-items: baseline;
      }
      .btn-link:hover{
        text-decoration: none;
        color: #000;
      }
    </style>
      
      <div class="container-fluid bg-artigo">
        <div class="container">
          <div class="row">
            <div class="message-site">
             <p>Os artigos que publico neste blog refletem minhas opiniões pessoais sobre tecnologia e inovação sob a ótica da governança corporativa e a competitividade de negócios nestes mercados.</p>
             
            </div>
          </div>
        </div>
      </div><!--container do slide-->
      
      <div class="container custom-padding blog-content mais-vistos">
           <p class="filter-posts">Artigos de:
            <button class="btn btn-link" data-toggle="collapse" data-target="#collapsezero" aria-expanded="true" aria-controls="collapsezero">
              2020
            </button>
             <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              2019
            </button>
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              2018
            </button>
             <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseTwo">
              2017
            </button>
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseTwo">
              2016
            </button>

          </p>

            <div id="accordion">
              <div class="card-accordion">
                <div id="collapsezero" class="collapse show" aria-labelledby="headingzero" data-parent="#accordion">
                  <div class="row">
                  <?php 
                  $args = array(
                    'post_type' => 'post',
                    'ignore_sticky_posts' => 1,
                    'year'  => '2020',
                    'posts_per_page'=>-1,
                    'order' => 'DESC',
                  );
                ?>
                    <?php $query = new WP_Query($args);

                      if ( $query->have_posts() ) :
                        while ( $query->have_posts() ) : $query->the_post();
                    ?>
                    <div class="col-lg-4">
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
                    </div>
                    <?php 
                     endwhile;
                      endif;

                      wp_reset_postdata();
                    ?>
                </div>
              </div><!--collapse one-->

              <!--2019-->
              <div class="card-accordion">
                <?php 
                  $args = array(
                    'post_type' => 'post',
                    'ignore_sticky_posts' => 1,
                    'year'  => '2019',
                    'posts_per_page'=>-1,
                    'order' => 'DESC',
                  );
                ?>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="row">
                    <?php $query = new WP_Query($args);

                      if ( $query->have_posts() ) :
                        while ( $query->have_posts() ) : $query->the_post();
                    ?>
                    <div class="col-lg-4">
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
                    </div>
                    <?php 
                     endwhile;
                      endif;

                      wp_reset_postdata();
                    ?>
                </div>
                </div><!--collapse one-->
              </div>
              
              <!--2018-->
              <div class="card-accordion">
                <?php 
                  $args = array(
                    'post_type' => 'post',
                    'ignore_sticky_posts' => 1,
                    'year'  => '2018',
                    'posts_per_page'=>-1,
                    'order' => 'DESC',
                  );
                ?>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                  <div class="row">
                    <?php $query = new WP_Query($args);

                      if ( $query->have_posts() ) :
                        while ( $query->have_posts() ) : $query->the_post();
                    ?>
                    <div class="col-lg-4">
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
                    </div>
                    <?php 
                     endwhile;
                      endif;

                      wp_reset_postdata();
                    ?>
                </div>
                </div><!--collapse two-->
              </div>


              <!--2017-->
              <div class="card-accordion">
                <?php 
                  $args = array(
                    'post_type' => 'post',
                    'ignore_sticky_posts' => 1,
                    'year'  => '2017',
                    'posts_per_page'=>-1,
                    'order' => 'DESC',
                  );
                ?>
                <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                  <div class="row">
                    <?php $query = new WP_Query($args);

                      if ( $query->have_posts() ) :
                        while ( $query->have_posts() ) : $query->the_post();
                    ?>
                    <div class="col-lg-4">
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
                    </div>
                    <?php 
                     endwhile;
                      endif;

                      wp_reset_postdata();
                    ?>
                </div>
                </div><!--collapse two-->
              </div>
              
              <!--2016-->
              <div class="card-accordion">
                <?php 
                  $args = array(
                    'post_type' => 'post',
                    'ignore_sticky_posts' => 1,
                    'year'  => '2016',
                    'posts_per_page'=>-1,
                    'order' => 'DESC',
                  );
                ?>
                <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                  <div class="row">
                    <?php $query = new WP_Query($args);

                      if ( $query->have_posts() ) :
                        while ( $query->have_posts() ) : $query->the_post();
                    ?>
                    <div class="col-lg-4">
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
                    </div>
                    <?php 
                     endwhile;
                      endif;

                      wp_reset_postdata();
                    ?>
                </div>
                </div><!--collapse two-->
              </div>

        
              
          </div>
      </div>
    </div>
   



  <?php get_footer();?>