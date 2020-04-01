<?php
/**
 * The template for displaying the 404 template in the The Talk theme.
 *
 * @package WordPress
 * @subpackage The_Talk
 * @since 1.0.0
 */

get_header();
require_once('components/navbar.inc.php');
?>

<!--Main layout-->
    <main class="min-vh-80">
        <div class="container">
            <h1><?php _e('Page Not Found', 'thetalk'); ?></h1>

            <div class="intro-text"><p><?php _e( 'The page you were looking for could not be found. It might have been removed, renamed, or did not exist in the first place.', 'thetalk' ); ?></p></div>

        </div>
    </main>
<!--Main layout-->

<?php  get_footer(); ?>