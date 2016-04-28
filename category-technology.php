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
<div class="page-zxc col-lg-9 col-md-9 col-sm-9 col-xs-12">
<h2 class="latest-zxc">احدث المقالات</h2>
<?php


$count_posts = wp_count_posts();
$published_posts_count = $count_posts->publish;

$count_qwe=1;

if (have_posts()) {
	while (have_posts()) {
		the_post();
		echo '<div id="post-';the_ID();echo '"';post_class();echo '>';

		// echo '<div class="post-wrapper-zxc">';
echo '<div class="postedby">';

echo '<a class="date-zxc" href="';
the_permalink();
echo '">';
echo get_the_date('d-m-Y');

echo '</a>';

echo '<p class="author-zxc" href="';
echo '">بواسطة : ';
the_author_posts_link();
echo '</p>';
echo '</div>';
?>
<div class="article-zxc">
<?php

the_post_thumbnail();

?>
</div>

<?php
echo '<!-- END post by class -->';

$logo_zxc=get_template_directory_uri() .'/images/circle.jpg';

echo '<div class="wrap-image-zxc">';
// echo '<img class="index-zxc" src="';echo get_theme_mod('logo_zxc',$logo_zxc);echo '" alt=""/>';
echo get_avatar( get_the_author_meta( 'ID' ), 64 );
echo '</div>';

echo '<div class="wrap-index-zxc">';
			echo '<h1 class="page-title-zxc"><a href="';the_permalink();echo '">';the_title();echo'</a></h1>';
			echo '<hr class="hr-h1"/>';

			the_excerpt();
echo '</div>';
the_category();
		echo '</div>';
		echo '<hr class="hr" />';

	}
}

echo '<div class="pagination-zxc">';
the_posts_pagination( array(
    'mid_size' => 1,
    'prev_text' => __( 'PREV POSTS', 'textdomain' ),
    'next_text' => __( 'NEXT POSTS', 'textdomain' ),
) );
echo '</div>';
?>

</div>
<!-- end col and page-->


<div class="sidebar-zxc col-lg-3 col-md-3 col-sm-3 col-xs-12">
<?php dynamic_sidebar('sidebar-inspire'); ?>
</div>
<!-- end col and sidebar-->


<div class="page-popular-zxc col-lg-3 col-md-3 col-sm-3 col-xs-12">
<h2 class="recent-zxc">المقالات الاكثر انتشارا</h2>
<?php
// To Display Most popular
query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC');


$count_posts = wp_count_posts();
$published_posts_count = $count_posts->publish;

$count_qwe=1;

if (have_posts()) {
	while (have_posts()) {
		the_post();
		echo '<div id="post-';the_ID();echo '"';post_class();echo '>';

echo '<div class="postedby">';

echo '<a class="date-zxc" href="';
the_permalink();
echo '">';
echo get_the_date('d-m-Y');

echo '</a>';

echo '<p class="author-zxc" href="';
echo '">بواسطة :  ';
the_author_posts_link(); 
echo '</p>';

echo '</div>';
?>
	<div class="article-zxc">
	<?php

	the_post_thumbnail();

	?>
	</div>
<?php
echo '<!-- END post by class -->';

$logo_zxc=get_template_directory_uri() .'/images/circle.jpg';

echo '<div class="wrap-image-zxc">';
echo get_avatar( get_the_author_meta( 'ID' ), 64 );
echo '</div>';

echo '<div class="wrap-index-zxc">';
			echo '<h1 class="page-title-zxc"><a href="';the_permalink();echo '">';the_title();echo'</a></h1>';
			echo '<hr class="hr-h1"/>';

			the_excerpt();

echo '</div>';
the_category();
		echo '</div>';
		echo '<hr class="hr" />';

	}
}


// previous_posts_link( 'PREV POSTS' );next_posts_link( 'NEXT POSTS' );
?>
</div>
<!-- end col and page popular-->

<!-- <div class="writers-zxc">
<h2>كتاب المقالات</h2>
<ul>
<?php wp_list_authors(); ?>
</ul>
</div> -->
<!-- end class="writers-zxc"-->

</div>
<!-- end main and row -->

<!-- danger don't use width with footer or footer class -->
<footer class="row footer-zxc">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="footer-inspire">
   <?php  dynamic_sidebar('footer-inspire' ); ?>
   </div>
   <div class="copyright">
   <a href="http://www.inspireforweb.com/Support">&copy;حقوق التأليف والنشر هشام حسين<?php echo date('Y') ?> </a>
	</div>
</div>
<!-- end col footer -->
</footer>
<!-- end footer and row -->

</div>
<!-- end container -->


<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/inspire.js"></script>

<?php wp_footer(); ?>

</body>
</html>