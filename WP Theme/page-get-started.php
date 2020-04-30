<?php  get_header();?>

    <div class="view full-page-intro get-started-img background-tint">

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

    <main>

        <!-- Sign-up Section -->

        <!-- Row -->

        <hr class="my-4 rgba-white-light">

        <div class="pt-2">
            <a target="_self" href="<? echo site_url('membership/checkout/?level=1'); ?>" class="btn btn-outline-white">Sign Up Now</a>
        </div>

        <!-- End of Sign-Up Section -->

        <!-- Site Trailer -->

        <section class="my-5">
            <div class="container">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/137857207" allowfullscreen></iframe>
                </div>
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsa? Asperiores nobis, aliqu</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- End of Site Trailer -->

        <!-- Information Section -->
        <section>

            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>list with checkmarks</h2>
                        <ul class="list-display list-checkmarks">
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsa? Asperiores nobis, aliquid repellat earum soluta expedita voluptate sapiente nam vel. </li>
                            <li>Integer molestie lorem at massa</li>
                            <li>Facilisis in pretium nisl aliquet</li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsa? Asperiores nobis, aliquid repellat earum soluta expedita voluptate sapiente nam vel. </li>
                            <li>Aenean sit amet erat nunc</li>
                            <li>Eget porttitor lorem</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h2>list with more white space</h2>
                        <ul class="list-display">
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsa? Asperiores nobis, aliquid repellat earum soluta expedita voluptate sapiente nam vel. </li>
                            <li>Integer molestie lorem at massa</li>
                            <li>Facilisis in pretium nisl aliquet</li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsa? Asperiores nobis, aliquid repellat earum soluta expedita voluptate sapiente nam vel. </li>
                            <li>Aenean sit amet erat nunc</li>
                            <li>Eget porttitor lorem</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Information Section -->

        <!-- Sign Up Stepper Section -->

        <!-- Horizontal Steppers -->
        <div class="row">
            <div class="col-md-12">

                <!-- Stepers Wrapper -->
                <ul class="stepper stepper-horizontal">

                    <!-- First Step -->
                    <li class="completed">
                        <a href="#!">
                            <span class="circle">1</span>
                            <span class="label">First step</span>

                        </a>
                    </li>

                    <!-- Second Step -->
                    <li class="active">
                        <a href="#!">
                            <span class="circle">2</span>
                            <span class="label">Second step</span>
                        </a>
                    </li>

                    <!-- Third Step -->
                    <li class="warning">
                        <a href="#!">
                            <span class="circle"><i class="fas fa-exclamation"></i></span>
                            <span class="label">Third step</span>
                        </a>
                    </li>

                </ul>
                <!-- /.Stepers Wrapper -->

            </div>
        </div>
        <!-- /.Horizontal Steppers -->

        <!--End of Sign Up Section -->

        <!-- FAQ Section -->
        <section class="accordion-section clearfix mt-3" aria-label="Question Accordions">
            <div class="container">

                <h2>Frequently Asked Questions </h2>
                <br>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading p-3 mb-3" role="tab" id="heading0">
                            <h3 class="panel-title">
								<a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse0" aria-expanded="true" aria-controls="collapse0">
									What are the benefits??
								</a>
							</h3>
                        </div>
                        <div id="collapse0" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading0">
                            <div class="panel-body px-3 mb-4">
                                <p>With THE Talk Made Simple, you will benefit from a finely-tuned video based ciriculum...</p>
                                <ul>
                                    <li>Light speed deployment on the most secure and stable cloud infrastructure available on the market.</li>
                                    <li>Scalability – pay for what you need today and add-on options as you grow.</li>
                                    <li>All of the bells and whistles of other enterprise CMS options but without the design limitations - this CMS simply lets you realize your creative visions.</li>
                                    <li>Amazing support backed by a team of Solodev pros – here when you need them.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading p-3 mb-3" role="tab" id="heading1">
                            <h3 class="panel-title">
								<a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
									How easy is it?
								</a>
							</h3>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
                            <div class="panel-body px-3 mb-4">
                                <p>Building a website is extremely easy. With a working knowledge of HTML and CSS you will be able to have a site up and running in no time.</p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading p-3 mb-3" role="tab" id="heading2">
                            <h3 class="panel-title">
								<a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
									What is the uptime for Solodev CMS?
								</a>
							</h3>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                            <div class="panel-body px-3 mb-4">
                                <p>Using Amazon AWS technology which is an industry leader for reliability you will be able to experience an uptime in the vicinity of 99.95%.</p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading p-3 mb-3" role="tab" id="heading3">
                            <h3 class="panel-title">
								<a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
									Can Solodev CMS handle multiple websites for my company?
								</a>
							</h3>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                            <div class="panel-body px-3 mb-4">
                                <p>Yes, Solodev CMS is built to handle the needs of any size company. With our Multi-Site Management, you will be able to easily manage all of your websites.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!--End of FAQ Section -->
    </main>
    <?php  get_footer(); ?>