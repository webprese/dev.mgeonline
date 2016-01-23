<?php

function string_limit_words_mpsp($string, $word_limit,$mpsp_word_limit,$id){


  
  $words = explode(' ', $string, ($word_limit + get_post_meta($id,'mpsp_posts_Desc_limit',true)));
  if(count($words) > $word_limit)
  array_pop($words);
  return implode(' ', $words);
}

function get_attachment_id_from_src ($image_src) {

                    global $wpdb;
                    $query = "SELECT ID FROM {$wpdb->posts} WHERE guid='$image_src'";
                     $attachemnt_id = $wpdb->get_var($query);
                   }

add_shortcode( 'mpsp_posts_slider', 'mpsp_shortcode_generate' );
function mpsp_shortcode_generate($atts, $content){
   ob_start();
  
	  extract( shortcode_atts( array(

			'id' => null,

		), $atts ) );


   include 'mpsp_slider_generator.php';


   return ob_get_clean();

	

}




 ?>