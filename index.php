<?php get_header();?>
  
  <!--<div class="container">
    <div class="row">
      <div class="my-slide">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">

            <?php
              $my_args = array(
                //'post_type' => 'post',
                //'posts_per_page'=> 3,
                //'orderby' => 'date',
                //'order' => 'DESC'
                );

                $my_query = new WP_Query ($my_args);
              ?>

               <?php if($my_query->have_posts()) :
                  $banner = $banners[0];
                  $c = 0;
                  while ($my_query->have_posts()) :
                  $my_query->the_post();
            ?>

            <div class="carousel-item <?php $c++; if($c == 1) {echo 'active';}?>">
             <?php //the_post_thumbnail('post-thumbnail', array('class'=>'img-fluid'));?>
              <div class="carousel-caption d-none d-md-block">
                 <a href="<?php the_permalink()?>"><h5><?php the_title(); ?> </h5></a>
              </div>
            </div>
           <?php endwhile; endif;
                 wp_reset_postdata();
            ?>

          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>-->

    <?php
      //args
      $my_args_banner = array(
          'post_type' => 'banners',
          'post_per_page' => 1,
      );

      //query

      $my_query_banner = new WP_Query ($my_args_banner);
    ?>

    

    <div class="container-fluid bg-banner-top">
      <div class="row">
        <div class="container">
        <div class="content-bg">

          <?php if($my_query_banner->have_posts()) : while($my_query_banner->have_posts() ) : $my_query_banner->the_post();?>
            
            <div class="col-md-6 col-lg-6 col-sm-12 text-abaout">
              <div class="about-omarson">
                <h4><?php the_title();?></h4>
                <p><?php the_excerpt()?></p>
              </div>

                <?php endwhile; endif; ?>
                <?php wp_reset_query(); ?>

              <div class="buttons-about">
                <button class="btn btn-default leia"><a href="#">leia meus artigos</a></button>
                <button class="btn btn-default fale-comigo"><a href="#">fale comigo</a></button>
              </div>
            </div>
            
            <div class="col-md-6 col-lg-6 col-sm-12 imagem-omarson">
             <?php the_post_thumbnail();?>
            </div>

           
          </div>
      </div>
      </div>
    </div>


    
      <div class="container">
        <div class="assine-mid">
          <div class="row">
            <div class="assine-content">
              <h4>Assine nossa newsletter e receba todo mês um artigo em seu e-mail.</h4>
              <?php echo do_shortcode('[wpli_login_link]');?>
            </div>
          </div>
        </div>
      </div>


    <?php
    $nova_consulta = new WP_Query( 
        array(
            'posts_per_page'      => 3,                 // Máximo de 5 artigos
            'no_found_rows'       => true,              // Não conta linhas
            'post_status'         => 'publish',         // Somente posts publicados
            'ignore_sticky_posts' => true,              // Ignora posts fixos
            'orderby'             => 'meta_value_num',  // Ordena pelo valor da post meta
            'meta_key'            => 'tp_post_counter', // A nossa post meta
            'order'               => 'DESC'             // Ordem decrescente
        )
    );
    ?>

<style type="text/css">
  .content-posts{
    display: flex;
    flex-wrap: wrap;
  }
</style>

  <div class="container custom-padding mais-vistos alm-listing content-posts">
    <h3 class="topico">Mais Vistos</h3>
    <div class="row">

          <?php if ( $nova_consulta->have_posts() ): ?>
              <?php while ( $nova_consulta->have_posts() ): ?>
                  <?php $nova_consulta->the_post(); ?>
                  <?php $tp_post_counter = get_post_meta( $post->ID, 'tp_post_counter', true );?>
                  
                  <?php/*
                    echo do_shortcode('[ajax_load_more  meta_key="tp_post_counter" orderby="meta_value_num" order="DESC" posts_per_page="3" scroll="false" transition_container="false" button_label="Carregar Mais" button_loading_label="Carregando Posts"]');*/
                   ?>
                   <div class="col-lg-4 col-md-6 col-xs-12">
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
        <?php endif; // have_posts ?>

          <?php wp_reset_postdata(); ?>
          
    </div>
  </div><!--container mais vistos-->



  <div class="container custom-padding tags">
    <h3 class="topico">tags</h3>
    <div class="row">
      <div class="content-tags">
        <?php if ( function_exists( 'wp_tag_cloud' ) ) : ?>
        <ul>
        <li ><?php wp_tag_cloud( 'smallest=8&largest=22' ); ?></li>
        </ul>
        <?php endif; ?>
      </div>
    </div>
  </div><!--container tags-->

 <?php get_footer();?>