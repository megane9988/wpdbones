				<div id="sidebar1" class="sidebar fourcol last clearfix" role="complementary">
					
<?php wpdbones_ad_content_side(); ?>
					<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar1' ); ?>
<?php if ( function_exists('wp_is_mobile') && wp_is_mobile() ) :?>
						<?php else: ?>						
						<div class="scrollside">
						<h4 class="widgettitle">おすすめ図書</h4>			
						<a style="float: left; margin-right: 10px; "  href="http://wp-d.org/2013/04/02/3831/"><img style="width:100px;height:100px;" src="http://i0.wp.com/wp-d.org/wp-content/uploads/2013/04/amazon.png?zoom=2&resize=200%2C200" alt="おすすめ図書"></a>
						<p><a href="http://wp-d.org/2013/04/02/3831/">『プロが選ぶ WordPress 優良プラグイン事典』レビュー続々いただいてます。</a></p>
						<div style="clear: both"></div>		
						<a style="float: left; margin-right: 10px; "  href="http://wp-d.org/2013/04/15/3816/"><img style="width:100px;height:100px;" src="http://i0.wp.com/wp-d.org/wp-content/uploads/2013/04/37e3808047553cedb34daa9b1d7ab2a3.jpg?zoom=2&resize=200%2C200" alt="おすすめ図書"></a>
						<p><a href="http://wp-d.org/2013/04/15/3816/">WEB制作者必見!カスタム投稿タイプを極める電子書籍の紹介（著者インタビュー）プレゼント有り！</a></p>
						<div style="clear: both"></div>
						</div>
						<?php endif; ?>
					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->
						
						<div class="alert help">
							<p><?php _e("Please activate some Widgets.", "bonestheme");  ?></p>
						</div>

					<?php endif; ?>
				</div>