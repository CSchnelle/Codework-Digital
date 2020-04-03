<?php
/**
 * The template for displaying the 404 template in the The Talk theme.
 *
 * @package WordPress
 * @subpackage The_Talk
 * @since 1.0.0
 */

get_header(); 
?>

<div id= "primary" class="content-area">
	<main id="main" class="site-main" role="main"></main>
</div>

<!--Main layout-->
    <main class="min-vh-80">
        <div class="container">
            <h1><?php _e('Page Not Found', 'thetalk'); ?></h1>

            <div class="intro-text"><p><?php _e( 'The page you were looking for could not be found. Maybe try one of the links below or search, or visit our <a href="/index.php"title="home page">home page</a>.', 'thetalk' ); ?></p></div>

        </div>
    </main>
<!--Main layout-->

<?php  get_footer(); ?>