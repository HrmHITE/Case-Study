<?php

//FUNCTION SELECT SINGLE PAGE PORTFOLIO FOR CASESTUDY

  function get_custom_post_type_template($single_template){
    global $post;

    if($post->post_type == 'case-study'){
        $single_template = dirname(__FILE__).'/single-project.php';
    }
    return $single_template;
}
add_filter('single_template','get_custom_post_type_template');

//END FUNCTION SELECT SINGLE FOR CASESTUDY
//