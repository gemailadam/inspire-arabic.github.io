<?php


/* max size for content like images and videos */
if ( ! isset( $content_width ) ) {
	$content_width = 600;
}


	$defaults_2 = array(
		'before'           => '<p>' . 'Pages:',
		'after'            => '</p>',
		'link_before'      => '',
		'link_after'       => '',
		'next_or_number'   => 'number',
		'separator'        => ' ',
		'nextpagelink'     => 'Next page',
		'previouspagelink' => 'Previous page',
		'pagelink'         => '%',
		'echo'             => 1
	);
        wp_link_pages( $defaults_2 );



/////////////////////////////////////////////
/////////////    Top menu   /////////////////
/////////////////////////////////////////////

function register_nav_menu_zxc(){

    $location='header-top-home';
    $description='Top menu';
    register_nav_menu( $location, $description );

}
add_action('after_setup_theme','register_nav_menu_zxc' );



/////////////////////////////////////////////
/////////////    Secand menu ////////////////
/////////////////////////////////////////////

function register_nav_menu_primary_zxc(){

    $location='header-primary-home';
    $description='Primary menu the Secand one';
    register_nav_menu( $location, $description );

}
add_action('after_setup_theme','register_nav_menu_primary_zxc' );



function register_newsletter_social_qwe() {
$args = array('name' =>'newsletter-social',
	'id'=>'newsletter-social' ,
	'description'=> 'add wigjet newsletter signin and social',
	'class'  => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' ); 

register_sidebar($args);

}

add_action('widgets_init','register_newsletter_social_qwe');


/////////////////////////////////////////////
////////// sidebare arabic float   //////////
/////////////////////////////////////////////

function qwe_register_float_sidebar_arabic() {
$args = array('name' =>'sidebar-float-arabic',
	'id'=>'sidebar-float-arabic' ,
	'description'=> 'add wigjet to arabic sidebar',
	'class'  => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' ); 

register_sidebar($args);

}

add_action('widgets_init','qwe_register_float_sidebar_arabic');



/////////////////////////////////////////////
///////////// sidebare 1 ////////////////////
/////////////////////////////////////////////

function register_search_zxc() {
$args = array('name' =>'search',
	'id'=>'search' ,
	'description'=> 'add search',
	'class'  => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' );

register_sidebar($args);

}

add_action('widgets_init','register_search_zxc');

function register_sidebar_zxc() {
$args = array('name' =>'sidebar-inspire',
	'id'=>'sidebar-inspire' ,
	'description'=> 'add sidebar widgets',
	'class'  => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' );

register_sidebar($args);

}

add_action('widgets_init','register_sidebar_zxc');

function register_footer_zxc() {
$args = array('name' =>'footer-inspire',
	'id'=>'footer-inspire' ,
	'description'=> 'add footers links widget',
	'class'  => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' );

register_sidebar($args);

}

add_action('widgets_init','register_footer_zxc');

function new_excerpt_more_zxc( $more ) {
	return ' <div><a class="read-more" href="'.
	get_permalink( get_the_ID() ) . '">' . __('تابع القراءه', 'your-text-domain') . '</a></div>';
}
add_filter( 'excerpt_more', 'new_excerpt_more_zxc' );


/////////////////////////////////////////////
///////  view count popular posts    ////////
/////////////////////////////////////////////

function observePostViews_zxc($postID)
{
$count_key = 'post_views_count';
$count = get_post_meta($postID, $count_key, true);
if($count=='')
	{
	$count = 0;
	delete_post_meta($postID, $count_key);
	add_post_meta($postID, $count_key, '0');
	}
else
	{
	$count++;
	update_post_meta($postID, $count_key, $count);
	}
}

/////////////////////////////////////////////
/////    fetch most popular posts    ////////
/////////////////////////////////////////////

function fetchPostViews_zxc($postID)
{
$count_key = 'post_views_count';
$count = get_post_meta($postID, $count_key, true);
if($count=='')
	{
	delete_post_meta($postID, $count_key);
	add_post_meta($postID, $count_key, '0');
	return "0 View";
	}
	return $count.' Views';
}



/////////////////////////////////////////////
//////////// Tumbnail Image  ////////////////
/////////////////////////////////////////////

add_theme_support( 'post-thumbnails' );


?>