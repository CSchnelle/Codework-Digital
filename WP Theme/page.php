<?php  

get_header();
if ( have_posts() ) {
while ( have_posts() ) {
the_post();

?>

<!--Main layout-->
<main>
	<!-- Featured image -->
	<?php the_post_thumbnail( 'large', array( 'class'=> 'img-fluid z-depth-1-half mb-4')); ?>
    <div class="container min-vh-100">

        <!--Section: Post-->
        <section>
			
            <!--Grid row-->
            <div class="row wow fadeIn">

                <!--Grid column-->
                <div class="col-md-12">

                    <!--Card-->
                    <div class="card">

                        <!--Card content-->
                        <div class="card-body">
                                <h2 class="display-5 font-weight-light mb-4 text-center text-uppercase">
									<?php the_title(); ?>
								</h2>
                            <div class="post-content">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->

        </section>
        <!--Section: Post-->

    </div>
</main>
<!--Main layout-->

<?php
} // end while
} // end if
get_footer();
?>
