<?php

/**
*
* Plugin Name: S7 CPT Testimonial
* Description: Plugin to display testimonial using custom post type.
* Plugin URI: 
* Plugin Author: SATYAM SAGAR
* Author URI: 
* Version: 1.0
*
*/

if (! defined('ABSPATH')) {
  die;
}


require_once(plugin_dir_path(__FILE__).'/inc/s7_requiredfiles.php');
require_once(plugin_dir_path(__FILE__).'/inc/s7_testimonial.php');


// Shortcode: [s7_testimonial]

function create_s7testimonial_shortcode() {
?>
          <div class="owl-carousel owl-theme">
            <?php
            $args = array(
              'post_type' => 'testimonial',
              'posts_per_page' => 3,
              'order' => 'ASC'
            );
            $testimonial = new WP_Query($args);
            if( $testimonial->have_posts() ) : ?>
              <?php while($testimonial->have_posts() ) : $testimonial->the_post(); ?>
                <div class="item">
                  <div class="shadow-effect">
                      <?php the_post_thumbnail('medium', array('class' => 'img-circle')) ?>
                      <p><?php the_content() ?></p>
                      <p class="author_name"><?php the_title() ?></p>
                  </div>    
                </div>
              <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
          </div>
<?php
}


add_shortcode( 's7_testimonial', 'create_s7testimonial_shortcode' );