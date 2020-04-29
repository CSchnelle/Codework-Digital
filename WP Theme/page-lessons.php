<?php  get_header();?>

<!--Main layout-->
    <main>
        <section>
            <div class="container">
				
				<?php
					$args = array( 
						'posts_per_page' => -1
					);

					$query = new WP_Query($args);   
					$q = array();

					while ( $query->have_posts() ) { 
						$query->the_post(); 
						$a = '<a href="'. get_permalink() .'">' . get_the_post_thumbnail() . get_the_title() . get_the_excerpt() .'</a>';
						$categories = get_the_category();

						foreach ( $categories as $key=>$category ) {
							$b = '<a href="' . get_category_link( $category ) . '">' . $category->name . '</a>';    
						}

						$q[$b][] = $a; // Create an array with the category names and post titles 
					}

					/* Restore original Post Data */
					wp_reset_postdata();

					foreach ($q as $key=>$values) {
						echo $key;

						echo '<ul>';
							foreach ($values as $value){
								echo '<li>' . $value . '</li>';
							}
						echo '</ul>';
					}
				?>
            </div>
        </section>

        <section class="indigo grey lighten-2">
            <div class="container">
				<?php
					// Transients API all categories and all posts
					$query_categories = get_transient('cached_categories');
					if ( false === $query_categories){
						$args_cat = array(
							// order by category name ascending
							'orderby' => 'name',
							'order' => 'ASC',
							// get only top level categories
							'parent' => 0
						);
						// Instead of caching a WP Query I cache 'get_categories()'.
						$query_categories = get_categories($args_cat);
						// var_dump($query_categories);
						set_transient('cached_categories', $query_categories, DAY_IN_SECONDS );
					}

					// Full posts query
					// if there are categories filled with posts
					if (!empty ($query_categories) && !is_wp_error( $query_categories )) {

						foreach ($query_categories as $category) {

							// var_dump($category);
							$query_category_posts = get_transient('cached_posts_' . $category->slug );
							if ( false === $query_category_posts ){

								// Query all posts by slug inside each category
								$args_category_posts = array(
									'post_type' => 'post',
									// The category slug and category name we get from the foreach over all categories
									'category_name' => $category->slug
								);

								// Here I cache the WP_Query, though this runs for all categories.
								// Because of that the '$category->slug' is used to serve a string and not an object.
								$query_category_posts = new WP_Query($args_category_posts);         
								set_transient( 'cached_posts_' . $category->slug , $query_category_posts, DAY_IN_SECONDS );
							}

							if ($query_category_posts->have_posts()) {
								while ($query_category_posts->have_posts()) {
									$query_category_posts->the_post(); ?>
									
									<article class="<?php echo $category->slug ?>-article">
										<h1 class="">
											
										</h1>
										<h2 class="<?php echo $category->slug ?>-article-title">
											<a href="<?php echo get_permalink() ?>"><?php echo get_the_title() ?></a>
										</h2>
										<div <?php post_class() ?> >
											<?php the_excerpt(); ?>
										</div>
									</article> <?php
								}
							} // end loop
						} // end foreach
					wp_reset_postdata() ;
					} // end if there are categories filled with posts
				?>
				
            </div>
        </section>

        <section>
            <div class="container">
	
			</div>
        </section>

    </main>
    <!--Main layout-->

<?php  get_footer(); ?>
