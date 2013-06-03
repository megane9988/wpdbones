<?php
/**
 * wpdbones functions and definitions
 */

/*********************
SCRIPTS & ENQUEUEING
*********************/

// loading modernizr and jquery, and reply script
function wpdbones_scripts_and_styles() {
  if (!is_admin()) {
    
    remove_filter( 'style_loader_src', 'bones_remove_wp_ver_css_js', 9999 );
  	
  	wp_dequeue_style( 'bones-stylesheet' );
  	wp_dequeue_style( 'bones-ie-only' );
  	
    wp_enqueue_style( 'wpdbones-stylesheet', get_stylesheet_directory_uri() . '/library/css/style.css', array(), '20130602', 'all' );
    wp_enqueue_style( 'bones-ie-only', '', array('wpdbones-stylesheet') );

  }
}
add_action('wp_enqueue_scripts', 'wpdbones_scripts_and_styles', 9999);

/*********************
MENUS & NAVIGATION
*********************/

// the main menu
function wpdbones_main_nav() {
  // display the wp3 menu if available
    wp_nav_menu(array(
      'container' => 'ture',                           // remove nav container
      'container_class' => 'menu clearfix',           // class of container (should you choose to use it)
      'menu' => 'The Main Menu',                      // nav name
      'menu_class' => 'nav top-nav clearfix',         // adding custom nav class
      'theme_location' => 'main-nav',                 // where it's located in the theme
      'before' => '',                                 // before the menu
        'after' => '',                                  // after the menu
        'link_before' => '',                            // before each link
        'link_after' => '',                             // after each link
        'depth' => 0,                                   // limit the depth of the nav
      'fallback_cb' => 'wpdbones_main_nav_fallback'      // fallback function
  ));
} /* end wpdbones main nav */

// the footer menu (should you choose to use one)
function wpdbones_footer_links() {
  // display the wp3 menu if available
    wp_nav_menu(array(
      'container' => '',                              // remove nav container
      'container_class' => 'footer-links clearfix',   // class of container (should you choose to use it)
      'menu' => 'Footer Links',                       // nav name
      'menu_class' => 'nav footer-nav clearfix',      // adding custom nav class
      'theme_location' => 'footer-links',             // where it's located in the theme
      'before' => '',                                 // before the menu
        'after' => '',                                  // after the menu
        'link_before' => '',                            // before each link
        'link_after' => '',                             // after each link
        'depth' => 0,                                   // limit the depth of the nav
      'fallback_cb' => 'wpdbones_footer_links_fallback'  // fallback function
  ));
} /* end wpdbones footer link */

// this is the fallback for header menu
function wpdbones_main_nav_fallback() {
  wp_page_menu( 'show_home=Home' );
}

// this is the fallback for footer menu
function wpdbones_footer_links_fallback() {
  /* you can put a default here if you like */
}

/**
 * Ad Manage
 */

function wpdbones_ad_content_above(){
if ( function_exists('wp_is_mobile') && wp_is_mobile() ) :?>
<div class="adtxt">スポンサードリンク</div>
<script type="text/javascript"><!--
google_ad_client = "ca-pub-2866035444666228";
/* mobile */
google_ad_slot = "7941700887";
google_ad_width = 320;
google_ad_height = 50;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<?php else: ?>
<div class="adtxt">スポンサードリンク</div><script type="text/javascript"><!--
google_ad_client = "ca-pub-2866035444666228";
/* su-pa- */
google_ad_slot = "5313631022";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<?php endif;
}

function wpdbones_ad_content_below(){
if ( function_exists('wp_is_mobile') && wp_is_mobile() ) :?>
<div class="clr"></div>
<script type="text/javascript"><!--
google_ad_client = "ca-pub-2866035444666228";
/* 新1 */
google_ad_slot = "6271049840";
google_ad_width = 300;
google_ad_height = 250;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<?php else: ?>
<div class="clr"></div>
  <script type="text/javascript"><!--
  google_ad_client = "ca-pub-2866035444666228";
  /* su-pa- */
  google_ad_slot = "5313631022";
  google_ad_width = 728;
  google_ad_height = 90;
  //-->
  </script>
  <script type="text/javascript"
  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
  </script>
<?php endif;
}


function wpdbones_ad_content_side(){
if ( function_exists('wp_is_mobile') && wp_is_mobile() ) :?>
<div id="socialside" class="socialwidget">
<p style="background-color: #145470;color: #fff;padding: 10px;margin-top: 0px;">フォローして新着情報をキャッチ！</p>
<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FWP-D%2F292801787485325&amp;width=292&amp;height=62&amp;show_faces=false&amp;colorscheme=light&amp;stream=false&amp;border_color&amp;header=false&amp;appId=269852913138083" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:62px;" allowTransparency="true"></iframe>
<div style="margin-top: 10px;background-color: #fff;text-align: center;padding: 10px 0 5px 0;">
<a href="https://twitter.com/wp_d_official" class="twitter-follow-button" data-show-count="false" data-lang="ja" data-size="large">@wp_d_officialさんをフォロー</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>
</div>
<script type="text/javascript"><!--
google_ad_client = "ca-pub-2866035444666228";
/* 小さいの */
google_ad_slot = "7605205182";
google_ad_width = 234;
google_ad_height = 60;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<?php else: ?>
<div id="socialside" class="socialwidget">
<p style="background-color: #145470;color: #fff;padding: 10px;margin-top: 0px;">フォローして新着情報をキャッチ！</p>
<div class="fb-like-box" style="background-color:#fff;width: 100%;">
  <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FWP-D%2F292801787485325&amp;width=292&amp;height=198&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;border_color&amp;header=false&amp;appId=269852913138083" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100%; height:198px;" allowTransparency="true"></iframe>
</div>
<div style="margin-top: 10px;background-color: #fff;text-align: center;padding: 10px 0 5px 0;">
<a href="https://twitter.com/wp_d_official" class="twitter-follow-button" data-show-count="false" data-lang="ja" data-size="large">@wp_d_officialさんをフォロー</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>
</div>
<div style="height: 300px;">
<script type="text/javascript"><!--
google_ad_client = "ca-pub-2866035444666228";
/* 336x280, 作成済み 09/04/19 */
google_ad_slot = "4267328340";
google_ad_width = 336;
google_ad_height = 280;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>
<?php endif;
}



/**
 * Fix Facebook locale setting
 */
function filter_facebook_locale($locale){
  $wp_locale = get_locale();
  if ( $wp_locale = 'ja' ) $locale = 'ja_JP';
  return $locale;
}
add_filter('fb_locale','filter_facebook_locale');

/**
 * scrole
 */
function wpdbones_sclole(){
  ?>
<script>
jQuery(function($){
$('div.scrollside').exFlexFixed({
container : 'div#main'
});
});
</script>
  <?php
}

/**
 * Bookmark Manage
 */
function wpdbones_bookmarks(){
	?>
<script>(function(w,d){
  w._gaq=[["_setAccount","UA-33477429-1"],["_trackPageview"]];
  w.___gcfg={lang:"ja"};
  var s,e = d.getElementsByTagName("script")[0],
  a=function(u,f){if(!d.getElementById(f)){s=d.createElement("script");
  s.src=u;if(f){s.id=f;}e.parentNode.insertBefore(s,e);}};
  a(("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js","ga");
  a("https://apis.google.com/js/plusone.js");
  a("//b.st-hatena.com/js/bookmark_button_wo_al.js");
  a("//platform.twitter.com/widgets.js","twitter-wjs");
  a("//connect.facebook.net/ja_JP/all.js#xfbml=1","facebook-jssdk");
})(this, document);</script>
<script type="text/javascript">!function(d,i){if(!d.getElementById(i)){var j=d.createElement("script");j.id=i;j.src="https://widgets.getpocket.com/v1/j/btn.js?v=1";var w=d.getElementById(i);d.body.appendChild(j);}}(document,"pocket-btn-js");</script>
	<?php
}

add_filter('nginxchampuru_get_cache', 'nginxchampuru_get_cache', 10, 2);
function nginxchampuru_get_cache($key, $url = null) {
    global $nginxchampuru;
    if (!$url) {
        $url = $nginxchampuru->get_the_url();
    }
    $keys = array(
        $key,
        $nginxchampuru->get_cache_key($url.'@ktai'),
        $nginxchampuru->get_cache_key($url.'@smartphone'),
    );
    if ($key !== $nginxchampuru->get_cache_key($url)) {
        $keys[] = $nginxchampuru->get_cache_key($url);
    }
    return $nginxchampuru->get_cache_file($keys);
}

function SocialButtonVertical()
{ ?>
  <div class="social">
<ul>
<li>
    <a href="http://b.hatena.ne.jp/entry/" class="hatena-bookmark-button"
  data-hatena-bookmark-layout="vertical-balloon"
  data-hatena-bookmark-url="<?php the_permalink(); ?>">
  <img src="http://b.st-hatena.com/images/entry-button/button-only.gif"
      alt="このエントリーをはてなブックマークに追加" width="20" height="20"
      style="border: none">
    </a>
</li>
<li>
    <a href="https://twitter.com/share" class="twitter-share-button"
  data-lang="en"
  data-url="<?php the_permalink(); ?>"
  data-text="<?php the_title(); ?>"
  data-count="vertical"
    >Tweet</a>
</li>
<li>
    <div class="g-plusone" data-size="tall" data-href="<?php the_permalink(); ?>"></div>
</li>
<li>
    <div class="fb-like"
  data-href="<?php the_permalink(); ?>"
  data-layout="box_count"
  data-send="false"
  data-width="70"
  data-show-faces="false">
    </div>
</li>
<li>
<a href="https://getpocket.com/save"
class="pocket-btn"
data-lang="en"
data-save-url="<?php get_permalink(); ?>"
data-pocket-count="vertical"
data-pocket-align="left" >Pocket</a>
</li>
</ul>
</div>
<?php }

// アイキャッチ画像を使用
add_theme_support('post-thumbnails');

// 幅 100px、高さ 100px、切り抜きモード
set_post_thumbnail_size(200, 200, true);

// add actions
add_image_size('meganeogp', 200, 200, true);
add_action( 'wpdbones-ad-header', 'wpdbones_ad_header' );
add_action('wp_footer', 'wpdbones_sclole');
add_action('wp_footer', 'wpdbones_bookmarks');
add_action( 'wpdbones-ad-content-above', 'wpdbones_ad_content_above' );
add_action( 'wpdbones-ad-content-below', 'wpdbones_ad_content_below' );
