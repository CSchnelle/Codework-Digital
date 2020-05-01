<!-- Written by: Chanse Stephens -->
<!-- Tested by: All -->
<!-- Debugged by: Chanse Stephens -->

<?php  get_header();?>
<!--Main layout-->
<main>
  <section>
    <div class="container">
      <h1 class="mb-2 display-4 font-weight-normal mb-5">All Lessons
      </h1>
      <h2 class="mb-2 mt-5 font-weight-light">Some lessons to get you started
      </h2>
      <hr class="mb-5 mt-0">
      <!--Grid row-->
      <div class="row wow fadeIn">
        <?php
$catquery = new WP_Query(  array( 'category_name' => 'lessons page featured' ) ); 
?>
        <?php
if ( $catquery->have_posts() ) {
$counter = 1;
while ( $catquery->have_posts() ) {
$catquery->the_post();
?>
        <!--Grid column-->
        <div class="col-xl-4 mb-4 d-flex">
          <div id="featured-section" class="card mdb-color lighten-2">
            <!--Featured image-->
            <div class="view overlay rounded">
              <?php the_post_thumbnail( 'medium-large', array( 'class'=> 'img-fluid')); ?>
              <a href="<?php echo get_permalink() ?>">
                <div class="mask">
                </div>
              </a>
            </div>
            <!--Excerpt-->
            <div class="card-body text-center white-text d-flex flex-column">
              <h4 class="mb-3 font-weight-bold text-center">
                <strong>
                  <?php the_title(); ?>
                </strong>
              </h4>
              <?php  echo '<p class="text-left">' . get_the_excerpt() . '</p>' ?>
              <a href="<?php echo get_permalink() ?>" class="btn btn-outline-white btn-md mt-auto waves-effect">Read More
              </a>
            </div>
          </div>
        </div>
        <!--Grid column-->
        <?php
if ($counter % 3 == 0) {
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
  </section>
  <!--Category section-->
  <?php if (get_category('39')->category_count > 0) {?>
  <section class="grey lighten-2">
    <div class="container mb-3">
      <h2 class="mb-2 font-weight-light">
        <?php echo get_category('39')->cat_name; ?>
      </h2>
      <hr class="mb-4 mt-0">
      <?php
$catquery = new WP_Query(  array( 'cat' => 39 ) ); 
if ( $catquery->have_posts() ) {
while ( $catquery->have_posts() ) {
$catquery->the_post();
?>
      <!--Grid row-->
      <div class="row wow fadeIn position-relative mb-2 py-3 hoverable-shade rounded">
        <!--Grid column-->
        <div class="col-md-3 position-static">
          <!--Featured image-->
          <div class="view overlay rounded z-depth-1">
            <?php the_post_thumbnail( 'medium-large', array( 'class'=> 'lessons-img img-fluid')); ?>
          </div>
        </div>
        <div class="col-md-9 position-static">
          <!--Excerpt-->
          <div class="">
            <a href="<?php echo get_permalink() ?>" class="stretched-link">
              <h4 class="mb-3 font-weight-bold text-left text-dark pt-2">
                <strong>
                  <?php the_title(); ?>
                </strong>
              </h4>
              <?php  echo '<p class="text-left text-muted">' . get_the_excerpt() . '</p>' ?>
            </a>
          </div>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
      <?php
}
}
?>
    </div>
  </section>
  <?php } ?>
  <!--Category section-->
  <!--Category section-->
  <?php if (get_category('40')->category_count > 0) {?>
  <section>
    <div class="container mb-3">
      <h2 class="mb-2 font-weight-light">
        <?php echo get_category('40')->cat_name; ?>
      </h2>
      <hr class="mb-4 mt-0">
      <?php
$catquery = new WP_Query(  array( 'cat' => 40 ) ); 
if ( $catquery->have_posts() ) {
while ( $catquery->have_posts() ) {
$catquery->the_post();
?>
      <!--Grid row-->
      <div class="row wow fadeIn position-relative mb-2 py-3 hoverable-shade rounded">
        <!--Grid column-->
        <div class="col-md-3 position-static">
          <!--Featured image-->
          <div class="view overlay rounded z-depth-1">
            <?php the_post_thumbnail( 'medium-large', array( 'class'=> 'lessons-img img-fluid')); ?>
          </div>
        </div>
        <div class="col-md-9 position-static">
          <!--Excerpt-->
          <div class="">
            <a href="<?php echo get_permalink() ?>" class="stretched-link">
              <h4 class="mb-3 font-weight-bold text-left text-dark pt-2">
                <strong>
                  <?php the_title(); ?>
                </strong>
              </h4>
              <?php  echo '<p class="text-left text-muted">' . get_the_excerpt() . '</p>' ?>
            </a>
          </div>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
      <?php
}
}
?>
    </div>
  </section>
  <?php } ?>
  <!--Category section-->
  <!--Category section-->
  <?php if (get_category('41')->category_count > 0) {?>
  <section class="grey lighten-2">
    <div class="container mb-3">
      <h2 class="mb-2 font-weight-light">
        <?php echo get_category('41')->cat_name; ?>
      </h2>
      <hr class="mb-4 mt-0">
      <?php
$catquery = new WP_Query(  array( 'cat' => 41 ) ); 
if ( $catquery->have_posts() ) {
while ( $catquery->have_posts() ) {
$catquery->the_post();
?>
      <!--Grid row-->
      <div class="row wow fadeIn position-relative mb-2 py-3 hoverable-shade rounded">
        <!--Grid column-->
        <div class="col-md-3 position-static">
          <!--Featured image-->
          <div class="view overlay rounded z-depth-1">
            <?php the_post_thumbnail( 'medium-large', array( 'class'=> 'lessons-img img-fluid')); ?>
          </div>
        </div>
        <div class="col-md-9 position-static">
          <!--Excerpt-->
          <div class="">
            <a href="<?php echo get_permalink() ?>" class="stretched-link">
              <h4 class="mb-3 font-weight-bold text-left text-dark pt-2">
                <strong>
                  <?php the_title(); ?>
                </strong>
              </h4>
              <?php  echo '<p class="text-left text-muted">' . get_the_excerpt() . '</p>' ?>
            </a>
          </div>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
      <?php
}
}
?>
    </div>
  </section>
  <?php } ?>
  <!--Category section-->
  <!--Category section-->
  <?php if (get_category('42')->category_count > 0) {?>
  <section>
    <div class="container mb-3">
      <h2 class="mb-2 font-weight-light">
        <?php echo get_category('42')->cat_name; ?>
      </h2>
      <hr class="mb-4 mt-0">
      <?php
$catquery = new WP_Query(  array( 'cat' => 42 ) ); 
if ( $catquery->have_posts() ) {
while ( $catquery->have_posts() ) {
$catquery->the_post();
?>
      <!--Grid row-->
      <div class="row wow fadeIn position-relative mb-2 py-3 hoverable-shade rounded">
        <!--Grid column-->
        <div class="col-md-3 position-static">
          <!--Featured image-->
          <div class="view overlay rounded z-depth-1">
            <?php the_post_thumbnail( 'medium-large', array( 'class'=> 'lessons-img img-fluid')); ?>
          </div>
        </div>
        <div class="col-md-9 position-static">
          <!--Excerpt-->
          <div class="">
            <a href="<?php echo get_permalink() ?>" class="stretched-link">
              <h4 class="mb-3 font-weight-bold text-left text-dark pt-2">
                <strong>
                  <?php the_title(); ?>
                </strong>
              </h4>
              <?php  echo '<p class="text-left text-muted">' . get_the_excerpt() . '</p>' ?>
            </a>
          </div>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
      <?php
}
}
?>
    </div>
  </section>
  <?php } ?>
  <!--Category section-->
  <!--Category section-->
  <?php if (get_category('43')->category_count > 0) {?>
  <section class="grey lighten-2">
    <div class="container mb-3">
      <h2 class="mb-2 font-weight-light">
        <?php echo get_category('43')->cat_name; ?>
      </h2>
      <hr class="mb-4 mt-0">
      <?php
$catquery = new WP_Query(  array( 'cat' => 43 ) ); 
if ( $catquery->have_posts() ) {
while ( $catquery->have_posts() ) {
$catquery->the_post();
?>
      <!--Grid row-->
      <div class="row wow fadeIn position-relative mb-2 py-3 hoverable-shade rounded">
        <!--Grid column-->
        <div class="col-md-3 position-static">
          <!--Featured image-->
          <div class="view overlay rounded z-depth-1">
            <?php the_post_thumbnail( 'medium-large', array( 'class'=> 'lessons-img img-fluid')); ?>
          </div>
        </div>
        <div class="col-md-9 position-static">
          <!--Excerpt-->
          <div class="">
            <a href="<?php echo get_permalink() ?>" class="stretched-link">
              <h4 class="mb-3 font-weight-bold text-left text-dark pt-2">
                <strong>
                  <?php the_title(); ?>
                </strong>
              </h4>
              <?php  echo '<p class="text-left text-muted">' . get_the_excerpt() . '</p>' ?>
            </a>
          </div>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
      <?php
}
}
?>
    </div>
  </section>
  <?php } ?>
  <!--Category section-->
  <!--Category section-->
  <?php if (get_category('44')->category_count > 0) {?>
  <section>
    <div class="container mb-3">
      <h2 class="mb-2 font-weight-light">
        <?php echo get_category('44')->cat_name; ?>
      </h2>
      <hr class="mb-4 mt-0">
      <?php
$catquery = new WP_Query(  array( 'cat' => 44 ) ); 
if ( $catquery->have_posts() ) {
while ( $catquery->have_posts() ) {
$catquery->the_post();
?>
      <!--Grid row-->
      <div class="row wow fadeIn position-relative mb-2 py-3 hoverable-shade rounded">
        <!--Grid column-->
        <div class="col-md-3 position-static">
          <!--Featured image-->
          <div class="view overlay rounded z-depth-1">
            <?php the_post_thumbnail( 'medium-large', array( 'class'=> 'lessons-img img-fluid')); ?>
          </div>
        </div>
        <div class="col-md-9 position-static">
          <!--Excerpt-->
          <div class="">
            <a href="<?php echo get_permalink() ?>" class="stretched-link">
              <h4 class="mb-3 font-weight-bold text-left text-dark pt-2">
                <strong>
                  <?php the_title(); ?>
                </strong>
              </h4>
              <?php  echo '<p class="text-left text-muted">' . get_the_excerpt() . '</p>' ?>
            </a>
          </div>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
      <?php
}
}
?>
    </div>
  </section>
  <?php } ?>
  <!--Category section-->
  <!--Category section-->
  <?php if (get_category('45')->category_count > 0) {?>
  <section class="grey lighten-2">
    <div class="container mb-3">
      <h2 class="mb-2 font-weight-light">
        <?php echo get_category('45')->cat_name; ?>
      </h2>
      <hr class="mb-4 mt-0">
      <?php
$catquery = new WP_Query(  array( 'cat' => 45 ) ); 
if ( $catquery->have_posts() ) {
while ( $catquery->have_posts() ) {
$catquery->the_post();
?>
      <!--Grid row-->
      <div class="row wow fadeIn position-relative mb-2 py-3 hoverable-shade rounded">
        <!--Grid column-->
        <div class="col-md-3 position-static">
          <!--Featured image-->
          <div class="view overlay rounded z-depth-1">
            <?php the_post_thumbnail( 'medium-large', array( 'class'=> 'lessons-img img-fluid')); ?>
          </div>
        </div>
        <div class="col-md-9 position-static">
          <!--Excerpt-->
          <div class="">
            <a href="<?php echo get_permalink() ?>" class="stretched-link">
              <h4 class="mb-3 font-weight-bold text-left text-dark pt-2">
                <strong>
                  <?php the_title(); ?>
                </strong>
              </h4>
              <?php  echo '<p class="text-left text-muted">' . get_the_excerpt() . '</p>' ?>
            </a>
          </div>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
      <?php
}
}
?>
    </div>
  </section>
  <?php } ?>
  <!--Category section-->
  <!--Category section-->
  <?php if (get_category('46')->category_count > 0) {?>
  <section>
    <div class="container mb-3">
      <h2 class="mb-2 font-weight-light">
        <?php echo get_category('46')->cat_name; ?>
      </h2>
      <hr class="mb-4 mt-0">
      <?php
$catquery = new WP_Query(  array( 'cat' => 46 ) ); 
if ( $catquery->have_posts() ) {
while ( $catquery->have_posts() ) {
$catquery->the_post();
?>
      <!--Grid row-->
      <div class="row wow fadeIn position-relative mb-2 py-3 hoverable-shade rounded">
        <!--Grid column-->
        <div class="col-md-3 position-static">
          <!--Featured image-->
          <div class="view overlay rounded z-depth-1">
            <?php the_post_thumbnail( 'medium-large', array( 'class'=> 'lessons-img img-fluid')); ?>
          </div>
        </div>
        <div class="col-md-9 position-static">
          <!--Excerpt-->
          <div class="">
            <a href="<?php echo get_permalink() ?>" class="stretched-link">
              <h4 class="mb-3 font-weight-bold text-left text-dark pt-2">
                <strong>
                  <?php the_title(); ?>
                </strong>
              </h4>
              <?php  echo '<p class="text-left text-muted">' . get_the_excerpt() . '</p>' ?>
            </a>
          </div>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
      <?php
}
}
?>
    </div>
  </section>
  <?php } ?>
  <!--Category section-->
  <!--Category section-->
  <?php if (get_category('47')->category_count > 0) {?>
  <section class="grey lighten-2">
    <div class="container mb-3">
      <h2 class="mb-2 font-weight-light">
        <?php echo get_category('47')->cat_name; ?>
      </h2>
      <hr class="mb-4 mt-0">
      <?php
$catquery = new WP_Query(  array( 'cat' => 47 ) ); 
if ( $catquery->have_posts() ) {
while ( $catquery->have_posts() ) {
$catquery->the_post();
?>
      <!--Grid row-->
      <div class="row wow fadeIn position-relative mb-2 py-3 hoverable-shade rounded">
        <!--Grid column-->
        <div class="col-md-3 position-static">
          <!--Featured image-->
          <div class="view overlay rounded z-depth-1">
            <?php the_post_thumbnail( 'medium-large', array( 'class'=> 'lessons-img img-fluid')); ?>
          </div>
        </div>
        <div class="col-md-9 position-static">
          <!--Excerpt-->
          <div class="">
            <a href="<?php echo get_permalink() ?>" class="stretched-link">
              <h4 class="mb-3 font-weight-bold text-left text-dark pt-2">
                <strong>
                  <?php the_title(); ?>
                </strong>
              </h4>
              <?php  echo '<p class="text-left text-muted">' . get_the_excerpt() . '</p>' ?>
            </a>
          </div>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
      <?php
}
}
?>
    </div>
  </section>
  <?php } ?>
  <!--Category section-->
  <!--Category section-->
  <?php if (get_category('48')->category_count > 0) {?>
  <section>
    <div class="container mb-3">
      <h2 class="mb-2 font-weight-light">
        <?php echo get_category('48')->cat_name; ?>
      </h2>
      <hr class="mb-4 mt-0">
      <?php
$catquery = new WP_Query(  array( 'cat' => 48 ) ); 
if ( $catquery->have_posts() ) {
while ( $catquery->have_posts() ) {
$catquery->the_post();
?>
      <!--Grid row-->
      <div class="row wow fadeIn position-relative mb-2 py-3 hoverable-shade rounded">
        <!--Grid column-->
        <div class="col-md-3 position-static">
          <!--Featured image-->
          <div class="view overlay rounded z-depth-1">
            <?php the_post_thumbnail( 'medium-large', array( 'class'=> 'lessons-img img-fluid')); ?>
          </div>
        </div>
        <div class="col-md-9 position-static">
          <!--Excerpt-->
          <div class="">
            <a href="<?php echo get_permalink() ?>" class="stretched-link">
              <h4 class="mb-3 font-weight-bold text-left text-dark pt-2">
                <strong>
                  <?php the_title(); ?>
                </strong>
              </h4>
              <?php  echo '<p class="text-left text-muted">' . get_the_excerpt() . '</p>' ?>
            </a>
          </div>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
      <?php
}
}
?>
    </div>
  </section>
  <?php } ?>
  <!--Category section-->
  <!--Category section-->
  <?php if (get_category('49')->category_count > 0) {?>
  <section class="grey lighten-2">
    <div class="container mb-3">
      <h2 class="mb-2 font-weight-light">
        <?php echo get_category('49')->cat_name; ?>
      </h2>
      <hr class="mb-4 mt-0">
      <?php
$catquery = new WP_Query(  array( 'cat' => 49 ) ); 
if ( $catquery->have_posts() ) {
while ( $catquery->have_posts() ) {
$catquery->the_post();
?>
      <!--Grid row-->
      <div class="row wow fadeIn position-relative mb-2 py-3 hoverable-shade rounded">
        <!--Grid column-->
        <div class="col-md-3 position-static">
          <!--Featured image-->
          <div class="view overlay rounded z-depth-1">
            <?php the_post_thumbnail( 'medium-large', array( 'class'=> 'lessons-img img-fluid')); ?>
          </div>
        </div>
        <div class="col-md-9 position-static">
          <!--Excerpt-->
          <div class="">
            <a href="<?php echo get_permalink() ?>" class="stretched-link">
              <h4 class="mb-3 font-weight-bold text-left text-dark pt-2">
                <strong>
                  <?php the_title(); ?>
                </strong>
              </h4>
              <?php  echo '<p class="text-left text-muted">' . get_the_excerpt() . '</p>' ?>
            </a>
          </div>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
      <?php
}
}
?>
    </div>
  </section>
  <?php } ?>
  <!--Category section-->
  <!--Category section-->
  <?php if (get_category('50')->category_count > 0) {?>
  <section>
    <div class="container mb-3">
      <h2 class="mb-2 font-weight-light">
        <?php echo get_category('50')->cat_name; ?>
      </h2>
      <hr class="mb-4 mt-0">
      <?php
$catquery = new WP_Query(  array( 'cat' => 50 ) ); 
if ( $catquery->have_posts() ) {
while ( $catquery->have_posts() ) {
$catquery->the_post();
?>
      <!--Grid row-->
      <div class="row wow fadeIn position-relative mb-2 py-3 hoverable-shade rounded">
        <!--Grid column-->
        <div class="col-md-3 position-static">
          <!--Featured image-->
          <div class="view overlay rounded z-depth-1">
            <?php the_post_thumbnail( 'medium-large', array( 'class'=> 'lessons-img img-fluid')); ?>
          </div>
        </div>
        <div class="col-md-9 position-static">
          <!--Excerpt-->
          <div class="">
            <a href="<?php echo get_permalink() ?>" class="stretched-link">
              <h4 class="mb-3 font-weight-bold text-left text-dark pt-2">
                <strong>
                  <?php the_title(); ?>
                </strong>
              </h4>
              <?php  echo '<p class="text-left text-muted">' . get_the_excerpt() . '</p>' ?>
            </a>
          </div>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
      <?php
}
}
?>
    </div>
  </section>
  <?php } ?>
  <!--Category section-->
  <!--Category section-->
  <?php if (get_category('51')->category_count > 0) {?>
  <section class="grey lighten-2">
    <div class="container mb-3">
      <h2 class="mb-2 font-weight-light">
        <?php echo get_category('51')->cat_name; ?>
      </h2>
      <hr class="mb-4 mt-0">
      <?php
$catquery = new WP_Query(  array( 'cat' => 51 ) ); 
if ( $catquery->have_posts() ) {
while ( $catquery->have_posts() ) {
$catquery->the_post();
?>
      <!--Grid row-->
      <div class="row wow fadeIn position-relative mb-2 py-3 hoverable-shade rounded">
        <!--Grid column-->
        <div class="col-md-3 position-static">
          <!--Featured image-->
          <div class="view overlay rounded z-depth-1">
            <?php the_post_thumbnail( 'medium-large', array( 'class'=> 'lessons-img img-fluid')); ?>
          </div>
        </div>
        <div class="col-md-9 position-static">
          <!--Excerpt-->
          <div class="">
            <a href="<?php echo get_permalink() ?>" class="stretched-link">
              <h4 class="mb-3 font-weight-bold text-left text-dark pt-2">
                <strong>
                  <?php the_title(); ?>
                </strong>
              </h4>
              <?php  echo '<p class="text-left text-muted">' . get_the_excerpt() . '</p>' ?>
            </a>
          </div>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
      <?php
}
}
?>
    </div>
  </section>
  <?php } ?>
  <!--Category section-->
  <!--Category section-->
  <?php if (get_category('52')->category_count > 0) {?>
  <section>
    <div class="container mb-3">
      <h2 class="mb-2 font-weight-light">
        <?php echo get_category('52')->cat_name; ?>
      </h2>
      <hr class="mb-4 mt-0">
      <?php
$catquery = new WP_Query(  array( 'cat' => 52 ) ); 
if ( $catquery->have_posts() ) {
while ( $catquery->have_posts() ) {
$catquery->the_post();
?>
      <!--Grid row-->
      <div class="row wow fadeIn position-relative mb-2 py-3 hoverable-shade rounded">
        <!--Grid column-->
        <div class="col-md-3 position-static">
          <!--Featured image-->
          <div class="view overlay rounded z-depth-1">
            <?php the_post_thumbnail( 'medium-large', array( 'class'=> 'lessons-img img-fluid')); ?>
          </div>
        </div>
        <div class="col-md-9 position-static">
          <!--Excerpt-->
          <div class="">
            <a href="<?php echo get_permalink() ?>" class="stretched-link">
              <h4 class="mb-3 font-weight-bold text-left text-dark pt-2">
                <strong>
                  <?php the_title(); ?>
                </strong>
              </h4>
              <?php  echo '<p class="text-left text-muted">' . get_the_excerpt() . '</p>' ?>
            </a>
          </div>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
      <?php
}
}
?>
    </div>
  </section>
  <?php } ?>
  <!--Category section-->
  <!--Category section-->
  <?php if (get_category('53')->category_count > 0) {?>
  <section class="grey lighten-2">
    <div class="container mb-3">
      <h2 class="mb-2 font-weight-light">
        <?php echo get_category('53')->cat_name; ?>
      </h2>
      <hr class="mb-4 mt-0">
      <?php
$catquery = new WP_Query(  array( 'cat' => 53 ) ); 
if ( $catquery->have_posts() ) {
while ( $catquery->have_posts() ) {
$catquery->the_post();
?>
      <!--Grid row-->
      <div class="row wow fadeIn position-relative mb-2 py-3 hoverable-shade rounded">
        <!--Grid column-->
        <div class="col-md-3 position-static">
          <!--Featured image-->
          <div class="view overlay rounded z-depth-1">
            <?php the_post_thumbnail( 'medium-large', array( 'class'=> 'lessons-img img-fluid')); ?>
          </div>
        </div>
        <div class="col-md-9 position-static">
          <!--Excerpt-->
          <div class="">
            <a href="<?php echo get_permalink() ?>" class="stretched-link">
              <h4 class="mb-3 font-weight-bold text-left text-dark pt-2">
                <strong>
                  <?php the_title(); ?>
                </strong>
              </h4>
              <?php  echo '<p class="text-left text-muted">' . get_the_excerpt() . '</p>' ?>
            </a>
          </div>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
      <?php
}
}
?>
    </div>
  </section>
  <?php } ?>
  <!--Category section-->
</main>
<!--Main layout-->
<?php  get_footer(); ?>
