<?php
function anad_register_styles(){
  wp_enqueue_style('anad-bootstrap', get_template_directory_uri() . "/style.css", array(), '1.0', 'all');
}

?>