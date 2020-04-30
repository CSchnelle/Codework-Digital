<?php get_header(); ?>

<!--Main layout-->
    <main class="min-vh-80">
		<section>
			<div class="container">
				<h1><?php _e('Page Not Found', 'thetalk'); ?></h1>

				<div class="intro-text">
					<p>The page you were looking for could not be found. Use this link to return to our
						<a target="_self" href="<? echo site_url(); ?>" class="indigo-text">home page</a>
					</p>
				</div>

			</div>
		</section>
    </main>
<!--Main layout-->

<?php  get_footer(); ?>