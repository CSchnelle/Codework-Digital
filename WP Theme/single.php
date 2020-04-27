<?php  get_header();
if ( have_posts() ) {
while ( have_posts() ) {
the_post();
?>

<!--Main layout-->
<main>
	
	<!-- Featured image -->
	<div>
			<?php the_post_thumbnail( 'full', array( 'class'=> 'img-fluid z-depth-1 full-width-img')); ?>
	</div>
	
	     <!--Section: Post-->
        <section class="my-0 py-0">
			<!--Grid row-->
            <div class="row wow fadeIn">
			
                <!--Grid column-->
                <div class="col-md pr-0 elegant-color-dark my-0 py-0">
					
					 <!-- Sticky content -->
                    <div class="sticky">
						<div id="dynamic-content">
							<!--Section: Dynamic Content Wrapper-->
							<!--Sidebar-->
							<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
							<?php dynamic_sidebar( 'sidebar' ); ?>
							<?php endif; ?>
							<!--/.Sidebar-->
						</div>
                    </div>
                    <!-- Sticky content -->
			
				</div>
					<!--Grid column-->

					<div class="col-md-7 post-sidebar">
						
						<!--Card-->
						<div class="card mb-4">

							<!--Card content-->
							<div class="card-body">
                                <h2 class="display-5 font-weight-light">
									<?php the_title(); ?>
								</h2>
                                <p>by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a> on <?php echo get_the_date(); ?></p>

                            <hr>

                            <div class="post-content">
                            <?php the_content(); ?>
                            </div>

                        </div>
                    </div>
                    <!--/.Card-->

                    <!--Card-->
                    <div class="card card-avatar mb-4 wow fadeIn">

                        <!-- Card header -->
                        <div class="card-header font-weight-bold">
                            <span>About the author</span>
                            <span class="pull-right">
                                <a href="" class="mr-3">
                                    <i class="fa fa-envelope mr-1"></i>
                                    Send message
                                </a>
                                <a href="">
                                    <i class="fab fa-facebook-f mr-2"></i>
                                </a>
                                <a href="">
                                    <i class="fab fa-twitter mr-2"></i>
                                </a>
                                <a href="">
                                    <i class="fa fa-instagram mr-2"></i>
                                </a>
                                <a href="">
                                    <i class="fab fa-linkedin-in mr-2"></i>
                                </a>
                            </span>
                        </div>

                        <!--Card content-->
                        <div class="card-body">

                            <div class="media">
                                <img class="d-flex mr-3 z-depth-1" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(20).jpg" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5 class="mt-0 font-weight-bold">Miley Steward</h5>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                                    vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                                    Donec lacinia congue felis in faucibus.
                                </div>
                            </div>

                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->		
				
				<!--Grid column-->
                <div class="col-md pr-0 my-0 py-0">
					
				</div>
				<!--Grid column-->
				
				</div>
            <!--Grid row-->
	</section>
	<!--Section: Post-->
</main>
<!--Main layout-->

<?php
} // end while
} // end if
get_footer();
?>