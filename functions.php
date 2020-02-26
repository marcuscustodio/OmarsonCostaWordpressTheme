<?php 

//chamar a tag title

function theme_omarson_tag(){
	add_theme_support('title-tag');

    add_theme_support( 'post-formats', array('link', 'quote '));


}

add_action('after_setup_theme', 'theme_omarson_tag');

//previnir o erro na tag title em versões antigas

if(!function_exists('_wp_render_title_tag')) {
	function theme_omarson_render_title(){
		?>
		<title><?php wp_title('|', true, 'right')?></title>
		<?php
	}
	add_action('wp_head', 'theme_omarson_render_title');
}




/*adcionar logo ao thema*/
add_theme_support('custom-logo');

/*Registra o custom navigation walker*/

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

//Registrar os menus

register_nav_menus(array(
	'principal' => __('Menu principal', 'Omarson Theme')

));

// criar o tipo de post
    function create_post_type(){

        register_post_type('banners',
            //definir as opções
            array(
                'labels' => array(
                    'name' => __('Banners'),
                    'singular_name' => __('Banners')
                ),
                'supports' => array(
                    'title', 'editor', 'thumbnail'
                ),
                'public' => true,
                'has_archive' => true,
                'menu_icon' => 'dashicons-images-alt2',
                'rewrite' => array('slug' => 'banners'),
            ));

        register_post_type('depoimentos',
            //definir as opções
            array(
                'labels' => array(
                    'name' => __('Depoimentos'),
                    'singular_name' => __('Depoimentos')
                ),
                'supports' => array(
                    'title', 'editor', 'thumbnail', 'excerpt',
                ),
                'public' => true,
                'has_archive' => true,
                'menu_icon' => 'dashicons-format-status',
                'rewrite' => array('slug' => 'depoimentos'),
            ));


    register_post_type('clientes',
            //definir as opções
            array(
                'labels' => array(
                    'name' => __('Clientes'),
                    'singular_name' => __('Clientes')
                ),
                'supports' => array(
                     'title', 'thumbnail',
                ),
                'public' => true,
                'has_archive' => true,
                'menu_icon' => 'dashicons-admin-users',
                'rewrite' => array('slug' => 'clientes'),
            ));

    
    }

    //Iniciar o tipo de post
    add_action('init', 'create_post_type');




/*Definir as miniaturas dos posts*/

add_theme_support('post-thumbnails');

/*recorta as imagens*/
set_post_thumbnail_size( 1280, 720, true);


/*definir tamanho do resumo*/
add_filter('excerpt_length', function($length){
    return 20;
});

remove_filter ('the_exceprt', 'wpautop');
remove_filter ('the_content', 'wpautop');
remove_filter('term_description','wpautop');


// Verifica se não existe nenhuma função com o nome tutsup_session_start
if ( ! function_exists( 'tutsup_session_start' ) ) {
    // Cria a função
    function tutsup_session_start() {
        // Inicia uma sessão PHP
        if ( ! session_id() ) session_start();
    }
    // Executa a ação
    add_action( 'init', 'tutsup_session_start' );
}

// Verifica se não existe nenhuma função com o nome tp_count_post_views
if ( ! function_exists( 'tp_count_post_views' ) ) {
    // Conta os views do post
    function tp_count_post_views () {	
        // Garante que vamos tratar apenas de posts
        if ( is_single() ) {
        
            // Precisamos da variável $post global para obter o ID do post
            global $post;
            
            // Se a sessão daquele posts não estiver vazia
            if ( empty( $_SESSION[ 'tp_post_counter_' . $post->ID ] ) ) {
                
                // Cria a sessão do posts
                $_SESSION[ 'tp_post_counter_' . $post->ID ] = true;
            
                // Cria ou obtém o valor da chave para contarmos
                $key = 'tp_post_counter';
                $key_value = get_post_meta( $post->ID, $key, true );
                
                // Se a chave estiver vazia, valor será 1
                if ( empty( $key_value ) ) { // Verifica o valor
                    $key_value = 1;
                    update_post_meta( $post->ID, $key, $key_value );
                } else {
                    // Caso contrário, o valor atual + 1
                    $key_value += 1;
                    update_post_meta( $post->ID, $key, $key_value );
                } // Verifica o valor
                
            } // Checa a sessão
            
        } // is_single
        
        return;
        
    }
    add_action( 'get_header', 'tp_count_post_views' );

}

?>