				<div id="sidebar1" class="sidebar fourcol last clearfix" role="complementary">
					
<?php wpdbones_ad_content_side(); ?>
					<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar1' ); ?>
						<?php if ( function_exists('wp_is_mobile') && wp_is_mobile() ) :?>
						<!-- Rakuten Widget FROM HERE --><script type="text/javascript">rakuten_design="slide";rakuten_affiliateId="0b6b446d.5a240e9c.0b6b448a.baba55ac";rakuten_items="ctsmatch";rakuten_genreId=0;rakuten_size="320x48";rakuten_target="_blank";rakuten_theme="gray";rakuten_border="off";rakuten_auto_mode="off";rakuten_genre_title="off";rakuten_recommend="on";</script><script type="text/javascript" src="http://xml.affiliate.rakuten.co.jp/widget/js/rakuten_widget.js"></script><!-- Rakuten Widget TO HERE -->
						<?php else: ?>						
						<div class="scrollside">
						<h4 class="widgettitle">おすすめ図書</h4>
						<a style="float: left; margin-right: 10px; "  href="http://wp-d.org/2013/01/14/1938/"><img style="width:100px;height:100px;" src="http://wp-d.org/wp-content/uploads/2013/01/book2012.jpg" alt="おすすめ図書"></a>
						<p><a href="http://wp-d.org/2013/01/14/1938/">新春座談会 このコンピュータ書がすごい！ 2013年版</a></p>

<h4 class="widgettitle" style="clear:both">ヘッドラインはじめました。</h4>
<a style="float: left; margin-right: 10px;"  href="http://wp-d.org/2013/01/28/2300/" alt="ヘッドライン"><img  style="width:100px;height:100px;" src="http://wp-d.org/wp-content/uploads/2013/01/83341231_400x300-200x200.jpg" alt="おすすめ図書"></a>
						<p><a href="http://wp-d.org/2013/01/28/2300/">2013年1月28日のWP-Dヘッドライン</a></p>


						<div class="clearfix" style="clear:both;">
					<!-- Rakuten Widget FROM HERE --><script type="text/javascript">rakuten_design="slide";rakuten_affiliateId="0b6b446d.5a240e9c.0b6b448a.baba55ac";rakuten_items="ctsmatch";rakuten_genreId=0;rakuten_size="336x280";rakuten_target="_blank";rakuten_theme="gray";rakuten_border="on";rakuten_auto_mode="off";rakuten_genre_title="off";rakuten_recommend="on";</script><script type="text/javascript" src="http://xml.affiliate.rakuten.co.jp/widget/js/rakuten_widget.js"></script><!-- Rakuten Widget TO HERE -->
						</div>
						</div>
						<?php endif; ?>
					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->
						
						<div class="alert help">
							<p><?php _e("Please activate some Widgets.", "bonestheme");  ?></p>
						</div>

					<?php endif; ?>
				</div>