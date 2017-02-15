<?php
/* Plugin Name: Disable Images Sizes MU
Plugin Description: Just put it on mu-plugins and no more too much images sizes on upload, just the original file
Plugin URI: f5sites.com/disable-image-sizes
Plugin Author: Francisco Matelli Matulovic
Author URI: franciscomat.com
Tags: mu-plugins, 
*/

#
add_filter( 'intermediate_image_sizes', '__return_empty_array' );

?>
