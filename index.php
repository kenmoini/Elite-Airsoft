<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Skeleton WordPress Theme Framework
 * @subpackage skeleton
 * @author Simple Themes - www.simplethemes.com
 */
get_header();
echo '<div id="blogContainer" class="sixteen columns">';
st_before_content($columns='two_thirds');
get_template_part( 'loop', 'index' );
st_after_content();
get_sidebar();
echo '</div>';
get_footer();
?>
