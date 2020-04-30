<?php  get_header(); ?>

    <div class="view full-page-intro front-page-img background-tint z-depth-1">

        <!-- Mask & flexbox options-->
        <div class="d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="container front-page-hero">
                <!--Grid row-->
                <div class="row wow fadeIn">
                    <!--Grid column-->
                    <div class="col-md-12 mb-4 white-text text-center">
                        <h1 class="display-3 font-weight-bold">The Talk Shouldn't be Scary</h1>
                        <hr class="hr-light">
                        <div class="mb-4 d-none d-md-block">
                            <h2>Join The Talk Made Simple to learn, discover, and understand.</h2>
                        </div>
                        <a target="_self" href="<? echo site_url('get-started'); ?>" class="btn btn-indigo btn-lg mt-4">Learn More</a>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->
            </div>
            <!-- Content -->
        </div>
        <!-- Mask & flexbox options-->
    </div>

    <!--Main layout-->
    <main>
        <section>
            <div class="wider-container text-center px-0">

                <h1 class="font-weight-bold">Let Us Help You</h1>

                <div class="container-fluid">
                    <h2 class="text-center mb-3">Take a peek at what we have to offer.</h2>
                    <!--Grid row-->
                    <div class="row wow fadeIn">
                        <?php
								$catquery = new WP_Query(  array( 'category_name' => 'front page featured' ) ); 
							?>

                            <?php
								if ( $catquery->have_posts() ) {
								$counter = 1;
								while ( $catquery->have_posts() ) {
								$catquery->the_post();
							?>

                                <!--Grid column-->
                                <div class="col-xl-3 pb-2 d-flex">
                                    <div id="featured-section" class="card mdb-color lighten-2">

                                        <!--Featured image-->
                                        <div class="view overlay rounded">
                                            <?php the_post_thumbnail( 'medium-large', array( 'class'=> 'img-fluid')); ?>
                                                <a href="<?php echo get_permalink() ?>">
                                                    <div class="mask"></div>
                                                </a>
                                        </div>

                                        <!--Excerpt-->
                                        <div class="card-body text-center white-text d-flex flex-column">

                                            <h4 class="mb-3 font-weight-bold text-center">
											<strong><?php the_title(); ?></strong>
										</h4>
                                            <?php  echo '<p class="text-left">' . get_the_excerpt() . '</p>' ?>
                                                <a href="<?php echo get_permalink() ?>" class="btn btn-outline-white btn-md mt-auto waves-effect">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <!--Grid column-->

                                <?php
						  if ($counter % 4 == 0) {
						  ?>
                    </div>
                    <!--Grid row-->
                    <!--Grid dynamic row-->
                    <div class="row wow fadeIn">
                        <?php
						  }
						  $counter++;
						  } // end while
						  } // end if
						  ?>
                    </div>
                    <!--Grid row-->

                </div>
            </div>
        </section>

        <section class="grey lighten-2">
            <div class="wider-container">
                <div class="row wow fadeIn">
                    <div class="col-md-10 offset-md-1">

                        <!-- Jumbotron -->
                        <div class="jumbotron mb-0 text-center indigo white-text rounded">

                            <!-- Title -->
                            <h2 class="card-title mb-5 h2">What it's all about!</h2>

                            <!-- Row -->
                            <div class="row">

                                <!-- Grid column -->
                                <div class="col-md-4 mb-1">
                                    <!-- Subtitle -->
                                    <p class="my-1 h6">Course Curriculum</p>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga aliquid dolorem ea distinctio exercitationem delectus qui, quas eum architecto, amet quasi accusantium.</p>
                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-md-4 mb-1">
                                    <!-- Subtitle -->
                                    <p class="my-1 h6">Information That Works</p>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga aliquid dolorem ea distinctio exercitationem delectus qui, quas eum architecto, amet quasi accusantium.</p>
                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-md-4 mb-1">
                                    <!-- Subtitle -->
                                    <p class="my-1 h6">Your Trusted Source</p>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga aliquid dolorem ea distinctio exercitationem delectus qui, quas eum architecto, amet quasi accusantium.</p>
                                </div>
                                <!-- Grid column -->

                            </div>
                            <!-- Row -->

                            <hr class="my-4 rgba-white-light">

                            <div class="pt-2">
                                <a target="_self" href="<? echo site_url('membership/checkout/?level=1'); ?>" class="btn btn-outline-white">Sign Up Now</a>
                            </div>

                        </div>
                        <!-- Jumbotron -->

                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row rounded z-depth-1">

                    <div class="col-md-4 p-0">
                        <img src="<?php echo get_bloginfo('template_url') ?>/assets/img/about-me.jpg" class="img-fluid z-depth-1 rounded" alt="Profile Picture">
                    </div>

                    <div class="col-md-8 py-5">
                        <div class="container">
                            <div class="mx-3">
                                <p class="h4 pb-3">About Me</p>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga aliquid dolorem ea distinctio exercitationem delectus qui, quas eum architecto, amet quasi accusantium. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.
                                </p>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga aliquid dolorem ea distinctio exercitationem delectus qui, quas eum architecto, amet quasi accusantium. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.
                                </p>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
    <!--Main layout-->

    <?php  get_footer(); ?>