<?php

/*

Template Name: midia

*/

?>



<?php get_header();?>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/owlcarousel/assets/owl.carousel.min.css">

    

    <!-- Owl JS -->

    <script src="<?php bloginfo('template_url');?>/assets/vendors/jquery.min.js"></script>

    <script src="<?php bloginfo('template_url');?>/assets/owlcarousel/owl.carousel.js"></script>





	<!--tras os posts do proxxima-->

	<?php

    $nova_consulta = new WP_Query( 

        array(

            'category_name' => 'proxxima',

            'posts_per_page'      => 10,                 // Máximo de 5 artigos

            'no_found_rows'       => true,              // Não conta linhas

            'post_status'         => 'publish',         // Somente posts publicados

            'ignore_sticky_posts' => true,              // Ignora posts fixos

            'order'               => 'DESC'             // Ordem decrescente

        )

    );

    ?>



   

      <div class="container mais-vistos midia">

        <h3 class="topico">Artigos publicados na PROXXIMA</h3>

        <div class="row">

          <div class="owl-carousel owl-theme">



            <?php if ( $nova_consulta->have_posts() ): ?>

            <?php while ( $nova_consulta->have_posts() ): ?>             

            <?php $nova_consulta->the_post(); ?>



              <div class="item">

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

              <?php endwhile; ?>

              <?php endif; // have_posts ?>

              <?php wp_reset_postdata(); ?>

              

          </div>

        </div>

      </div><!--container do slide-->

    <script>

       $('.owl-carousel').owlCarousel({

        loop:true,

        margin:10,

        nav:true,

        autoWidth:true,

        responsive:{

            0:{

                items:1

            },

            600:{

                items:3

            },

            1000:{

                items:3

            }

        }

    })

     </script>





     <?php

    $nova_consulta = new WP_Query( 

        array(

            'category_name' => 'isto e dinheiro',

            'posts_per_page'      => 10,                 // Máximo de 5 artigos

            'no_found_rows'       => true,              // Não conta linhas

            'post_status'         => 'publish',         // Somente posts publicados

            'ignore_sticky_posts' => true,              // Ignora posts fixos

            'order'               => 'DESC'             // Ordem decrescente

        )

    );

    ?>



   

      <div class="container mais-vistos midia">

        <h3 class="topico">Artigos publicados na isto é dinheiro</h3>

        <div class="row">

          <div class="owl-carousel owl-theme">



            <?php if ( $nova_consulta->have_posts() ): ?>

            <?php while ( $nova_consulta->have_posts() ): ?>             

            <?php $nova_consulta->the_post(); ?>



              <div class="item">

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

              <?php endwhile; ?>

              <?php endif; // have_posts ?>

              <?php wp_reset_postdata(); ?>

              

          </div>

        </div>

      </div><!--container do slide-->

    <script>

       $('.owl-carousel').owlCarousel({

        loop:true,

        margin:10,

        nav:true,

        autoWidth:true,

        responsive:{

            0:{

                items:1

            },

            600:{

                items:3

            },

            1000:{

                items:3

            }

        }

    })

     </script>

    







  <?php get_footer();?>