<?php
function anad_register_styles(){
  wp_enqueue_style('anad-style', get_template_directory_uri() . "/style.css", array(), '1.0', 'all');
  wp_enqueue_style('anad-bootstrap', get_template_directory_uri() . "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '1.0', 'all');
  wp_enqueue_style('anad-fontawesome', get_template_directory_uri() . "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'anad_register_styles');

?>