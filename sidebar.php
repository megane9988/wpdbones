				<div id="sidebar1" class="sidebar fourcol last clearfix" role="complementary">
					<?php wpdbones_ad_content_side(); ?>
					<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar1' ); ?>

						<div id="scrollside">
						<h4 class="widgettitle">おすすめ図書</h4>
						<a href="http://wp-d.org/2013/01/14/1938/"><img src="http://wp-d.org/wp-content/uploads/2013/01/book2012.jpg" alt="おすすめ図書"></a>
						<p><a href="http://wp-d.org/2013/01/14/1938/">新春座談会 このコンピュータ書がすごい！ 2013年版</a></p>
						</div>
					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->
						
						<div class="alert help">
							<p><?php _e("Please activate some Widgets.", "bonestheme");  ?></p>
						</div>

					<?php endif; ?>

				</div>