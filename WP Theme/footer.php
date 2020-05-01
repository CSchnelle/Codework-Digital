<-- Written by: Cat Schnelle & Chanse Stephens -->
<-- Tested by: All -->
<-- Debugged by: Cat Schnelle, Chanse Stephens -->
	
	
<?php wp_footer(); ?>
</body>
<script>
$("#mdb-navigation > ul > li").addClass("page-item")
$("#mdb-navigation > ul > li > a").addClass("page-link")
</script>

<!--Footer-->
<footer class="page-footer elegant-color text-center font-small wow fadeIn">

	<!-- Footer Menu -->
	<nav class="navbar navbar-expand-lg">
    <div class="container py-4">
			<ul class="navbar-nav ml-auto mr-auto">
				<?php
				$args = array(
					'theme_location' => 'footer-menu',
					'depth' => 2,
					'container' => false,
					'menu_class' => 'navbar-nav mr-auto',
					'walker' => new Bootstrap_Walker_Nav_Menu()
				);
				if (has_nav_menu('footer-menu')) {
					wp_nav_menu($args);
				}
				?>
			</ul>
    </div>
	</nav>

    <!--Copyright-->
    <div class="footer-copyright py-3">
        © 2020 Copyright:
        <a href="<?php echo site_url(''); ?>" target="_self"> TheTalkMadeSimple.com </a>
    </div>
    <!--/.Copyright-->
</html>
