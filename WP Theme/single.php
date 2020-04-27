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
			<div class="container-fluid">
				
			
			<!--Grid row-->
            <div class="row wow fadeIn">
			
                <!--Grid column-->
                <div class="col-md px-0 elegant-color-dark z-depth-1 my-0 py-0">
					
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
						<div class="pl-4 pr-4 mb-4">
							<!--Card content-->
							<div>
								
                                <h2 class="display-5 font-weight-light">
									<?php the_title(); ?>
								</h2>
                                <p>by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a></p>

                            <hr>

                            <div class="post-content">
                            	<?php the_content(); ?>
                            </div>

                        </div>
                    </div>
                    <!--/.Card-->

					<div class="mt-5 pt-4 pl-4 pr-4">
						<h2>
							Related Lessons
						</h2>					
						<hr>

						<!-- Card -->
								<div class="row wow fadeIn">		

									<?php $orig_post = $post;
									global $post;
									$tags = wp_get_post_tags($post->ID);

									if ($tags) {
										$tag_ids = array();
										foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
										$args=array(
											'tag__in' => $tag_ids,
											'post__not_in' => array($post->ID),
											'posts_per_page'=>3, // Number of related posts that will be shown.
											'ignore_sticky_posts'=>1
											);

										$my_query = new wp_query( $args );
										if( $my_query->have_posts() ) {

											while( $my_query->have_posts() ) {
												$my_query->the_post(); ?>

												<div class="col-xl-4 d-flex pb-2">
												<div class="card mdb-color lighten-2">
													<div class="view overlay rounded">
														<?php the_post_thumbnail( 'medium-large', array ( 'class' => 'img-fluid' )); ?>
														<a href="<?php echo get_permalink() ?>">
															<div class="mask"></div>
														</a>
													</div>

													<div class="card-body text-center d-flex flex-column white-text">
														<h4 class="mb-3 font-weight-bold">
															<strong><?php the_title(); ?></strong>
														</h4>
														<p>
															<?php the_excerpt(); ?>
															<a href="<?php echo get_permalink() ?>" class="btn btn-outline-white btn-md mt-auto waves-effect">Read More</a>
														</p>
													</div>

												</div>
											</div>
											<? }
										}
									}
									$post = $orig_post;
									wp_reset_query(); ?>

						<!--/ Card -->

						</div>
						<!--Grid column-->
					</div>
				</div>
				
				<!--Grid column-->
                <div class="col-md m-0 p-0">

				</div>
				<!--Grid column-->
				
				</div>
            <!--Grid row-->
				</div>
	</section>
	<!--Section: Post-->
</main>
<!--Main layout-->

<?php
} // end while
} // end if
get_footer();
?>