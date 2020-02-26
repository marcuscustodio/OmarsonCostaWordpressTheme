<?php
/*
Template Name: Clientes
*/
?>

<?php get_header();?>

    


<div class="clientes">
    <?php
      //args
      $my_args_clientes = array(
          'post_type' => 'clientes',
          'post_per_page' => -1,
      );

      //query

      $my_query_clientes = new WP_Query ($my_args_clientes);
    ?>

    <div class="container">
          <h3 class="topico">Clientes</h3>
          <div class="container-fluid">

            <div id="carousel-clientes" class="carousel slide" data-ride="carousel" data-interval="false">
                 
                <div class="carousel-inner row w-100 mx-auto" role="listbox">
                    <div class="row">
                    <?php if($my_query_clientes->have_posts()) :$banner = $banners[0];
                        $c = 0; while($my_query_clientes->have_posts() ) : $my_query_clientes->the_post();?>
                        
                        <div class="carousel-item col-lg-3 col-md-6 pt-md-4 col-sm-6 <?php $c++; if($c == 1) {echo 'active';}?>">
                            <?php the_post_thumbnail();?>
                        </div>


                    <?php endwhile; endif; ?>
                    <?php wp_reset_query(); ?>
                    
                </div>
            </div>
                <!--<a class="carousel-control-prev" href="#carousel-clientes" role="button" data-slide="prev">
                    <i class="fa fa-chevron-left fa-lg text-muted"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next text-faded" href="#carousel-clientes" role="button" data-slide="next">
                    <i class="fa fa-chevron-right fa-lg text-muted"></i>
                    <span class="sr-only">Next</span>
                </a>-->
            </div>

           
        </div>
    </div>
</div>


<div class="depoimentos">
    <?php
      //args
      $my_args_depoimentos = array(
          'post_type' => 'depoimentos',
          'post_per_page' => -1,
      );

      //query

      $my_query_depoimentos = new WP_Query ($my_args_depoimentos);
    ?>
    <div class="container">
        <h3 class="topico">Depoimentos</h3>
    </div>
      <div class="container-fluid">
          <div class="container">
              <!-- Section: Testimonials v.2 -->
              <section class="text-center ">

                <!-- Section heading -->
                <div class="wrapper-carousel-fix">
                  <!-- Carousel Wrapper -->
                  <div id="carousel-depoimentos" class="carousel no-flex testimonial-carousel slide carousel-fade" data-ride="carousel"
                    data-interval="false">

                    <div id="carousel-depoimentos" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                                <?php if($my_query_depoimentos->have_posts()) : ?>
                                    <?php $i = 0; ?>
                                    <?php while($my_query_depoimentos->have_posts()) : $my_query_depoimentos->the_post() ?>
                                        <li data-target="#carousel-depoimentos" data-slide-to="<?php echo $i ?>" class="<?php if($i === 0): ?>active<?php endif; ?>"></li>
                                        <?php $i++; ?>
                                    <?php endwhile ?>
                                <?php endif ?>
                                <?php wp_reset_postdata(); ?>
                        
                      </ol>
                    <!--Slides-->

                    <div class="carousel-inner" role="listbox">
                      <!--First slide-->
                      
                         <?php if($my_query_depoimentos->have_posts()) :$banner = $banners[0];
                        $c = 0; while($my_query_depoimentos->have_posts() ) : $my_query_depoimentos->the_post();?>
                        <div class="carousel-item <?php $c++; if($c == 1) {echo 'active';}?>">
                            <div class="testimonial">
                              <!--Avatar-->
                              
                              <!--Content-->
                              <p>
                                <i class="fas fa-quote-left"></i><?php the_content()?><i class="fas fa-quote-right"></i>
                              </p>
                              <h4><?php the_title();?></h4>
                              <h6><?php the_excerpt();?></h6>
                              
                              <div class="avatar mx-auto mb-4">
                                <?php the_post_thumbnail();?>
                              </div>
                              <!--Review-->
                              
                            </div>
                        </div>

                        <?php endwhile; endif; ?>
                        <?php wp_reset_query(); ?>
                      <!--First slide-->

                    </div>
                    <!--Slides-->

                    
                    <!--Controls-->
                    </div>
                  </div>
                  <!-- Carousel Wrapper -->
                </div>

              </section>
              <!-- Section: Testimonials v.2 -->
          </div>
      </div>
</div>



<?php get_footer();?>