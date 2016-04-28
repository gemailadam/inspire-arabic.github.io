<?php get_header('head'); ?>
<body <?php body_class(); ?>>
<div class="container">

<!-- danger don't use width with header or header class -->
<header class="row header-zxc wrap-odd">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

	<div class="nav-zxc wrap-50">
		<?php wp_nav_menu(array('theme_location'=>'header-top-home')); ?>
		<?php dynamic_sidebar('search'); ?>
	</div>
	<!-- end navbar -->

	<!-- Title STaRT-->
	<div class="site-title-zxc wrap-100">
		<p>
		<a href="<?php the_permalink();?>"><?php bloginfo('title' ); ?></a>
		<!--a href="<?php echo get_theme_mod( 'description1-link-zxc', '#' ); ?>"-->
		<!--?php echo get_theme_mod( 'description1-zxc', '- WELCOME -' ); ?--><!--/a-->
		<!--a href="<?php  the_permalink();?>"><?php bloginfo('description' );?></a-->
		<!--a href="#"><button><?php echo get_theme_mod('title-button-zxc','BUTTON' ); ?></button></a-->
		</p>
	</div>
	<!-- Title END -->

	<div class="nav-primary-zxc wrap-50 margin-zxc">
		<?php wp_nav_menu(array('theme_location'=>'header-primary-home')); ?>
	</div>

	<div class="slideshow-zxc margin-zxc col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="slideshow-big-zxc">
	<!--div class="slideshow-big-zxc" style="width:70.83333333333333%;float:left;margin-left:4.16666666666667%;"-->
	<?php
	$slice_zxc=get_template_directory_uri() .'/images/slice.jpg';
		// <img src="wp-content/themes/inspire.github.io/images/slice.jpg" alt="">
	echo '<img class="slice-zxc" src="';echo get_theme_mod('slice_zxc',$slice_zxc);echo '" alt=""/>';
	?>
	</div>


</div>
<!-- end col header -->
</header>
<!-- end header and row -->
<!-- danger don't use width with main or page classes -->
<div class="row main-zxc">
<div class="page-zxc col-lg-4 col-md-4 col-sm-4 col-xs-12">
<!-- <h2 class="latest-zxc">احدث المقالات</h2> -->
	<?php woocommerce_content(); ?>
</div>
<!--End  page-zxc-->
</div>
<!--End Row and main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
<?php get_footer('script'); ?>