<?php  get_header();?>

<!--Main layout-->
    <main>
        <section>
            <div class="container">
                
            </div>
        </section>

        <section class="indigo grey lighten-2">
            <div class="container">
			<a target="_self" href="<? echo site_url('membership/checkout/?level=1'); ?>" class="btn btn-indigo btn-lg mt-4">Sign Up Now</a>
				Insert call to action 1
            </div>
        </section>
<!-- Site Trailer -->
		<header>
  <div class="overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
  </video>
  <div class="container h-100">
    <div class="d-flex h-100 text-center align-items-center">
      <div class="w-100 text-white">
        <h1 class="display-3">Trailer</h1>
        <p class="lead mb-0">With HTML5 Video and Bootstrap 4</p>
      </div>
    </div>
  </div>
</header>

<section class="my-5">
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <p>The HTML5 video element uses an mp4 video as a source. Change the source video to add in your own background! The header text is vertically centered using flex utilities that are build into Bootstrap 4.</p>
        <p>The overlay color can be changed by changing the <code>background-color</code> of the <code>.overlay</code> class in the CSS.</p>
        <p>Set the mobile fallback image in the CSS by changing the background image of the header element within the media query at the bottom of the CSS snippet.</p>
        <p class="mb-0">
          Created by <a href="https://startbootstrap.com">Start Bootstrap</a>
        </p>
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


 </main>

<!-- FAQ Section -->
<section class="accordion-section clearfix mt-3" aria-label="Question Accordions">
  <div class="container">
  
	  <h2>Frequently Asked Questions </h2><br>
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

<?php  get_footer(); ?>

