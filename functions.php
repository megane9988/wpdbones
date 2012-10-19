<?php
/**
 * wpdbones functions and definitions
 */


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
 * Ad Manage
 */
function wpdbones_ad_header(){
	if ( preg_match("/iPhone|Android/i", $_SERVER['HTTP_USER_AGENT']) ) : ?>
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
</script><?php else: ?>
<script type="text/javascript"><!--
google_ad_client = "ca-pub-2866035444666228";
/* サイト名下 */
google_ad_slot = "2339695504";
google_ad_width = 728;
google_ad_height = 15;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<?php endif;
}

function wpdbones_ad_content_above(){
	?>
<div class="adtxt">スポンサードリンク</div><script type="text/javascript"><!--
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
	<?php
}

function wpdbones_ad_content_below(){
	?>
<div class="clr"></div>
<script type="text/javascript"><!--
google_ad_client = "ca-pub-2866035444666228";
/* 新2 */
google_ad_slot = "5845455406";
google_ad_width = 300;
google_ad_height = 250;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<div class="fb-like-box" data-href="https://www.facebook.com/pages/WP-D/292801787485325" data-width="292" data-show-faces="true" data-stream="false" data-header="true"></div>
<?php if(function_exists('related_posts')): ?>
<div class="related_entries">
<?php related_posts(); ?>
</div>
<?php endif;
}

/**
 * Bookmark Manage
 */
function wpdbones_bookmarks(){
	?>
<script>(function(w,d){
  w._gaq=[["_setAccount","UA-XXXXXXXX-X"],["_trackPageview"]];
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
	<?php
}

function SocialButtonVertical()
{ ?>
  <div class="social">
<ul>
<li>
    <a href="http://b.hatena.ne.jp/entry/" class="hatena-bookmark-button"
  data-hatena-bookmark-layout="vertical"
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
</ul>
</div>
<?php }

function heatmap()
{ ?>
<script type="text/javascript">
  window._pt_sp_2 = [];
  _pt_sp_2.push('setSID,3bce4bf1');
  _pt_sp_2.push('setDomain,wp-d.org');
  var _protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
  document.write(unescape('%3Cscript src=%22' + _protocol + 'spjs.ptengine.jp/js/pta_mobile.js%22' + 'type=%22text/javascript%22%3E%3C/script%3E'));
</script>
<?php }


// add actions
add_action( 'wpdbones-ad-header', 'wpdbones_ad_header' );
add_action( 'wpdbones-ad-content-above', 'wpdbones_ad_content_above' );
add_action( 'wpdbones-ad-content-below', 'wpdbones_ad_content_below' );
add_action('wp_footer', 'wpdbones_bookmarks');
add_action('wp_footer', 'heatmap');