<?php get_header(); ?>
			
			<div id="content">

				<div id="inner-content" class="wrap clearfix">
			
					<div id="main" class="eightcol first clearfix" role="main">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
								<?php echo adrotate_ad(1); ?>
								<?php do_action('wpdbones-ad-content-above'); ?>
								<div class="sbver">
									<?php SocialButtonVertical(); ?>
								</div>
								<header class="article-header" style="clear:both">							
									<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
						
								</header> <!-- end article header -->
								<section class="entry-content clearfix" itemprop="articleBody">
									<?php the_content(); ?>
								</section> <!-- end article section -->
								<hr>						
									<p class="byline vcard"><time class="updated" datetime="<?php echo the_time('Y-m-j'); ?>" ><?php the_time('Y年m月d日（D）'); ?></time> | <span class="author <?php the_author(); ?>"><?php the_author_posts_link(); ?></span> <span class="amp"></span> | <?php the_category(', '); ?> | <?php comments_number(); ?>
									</p>
								<div class="sbver">
									<?php SocialButtonVertical(); ?>
								</div>

								<div class="adtxt">
									<?php do_action('wpdbones-ad-content-below'); ?>
<?php if ( function_exists('wp_is_mobile') && wp_is_mobile() ) :?>
						<!-- Rakuten Widget FROM HERE --><script type="text/javascript">rakuten_design="slide";rakuten_affiliateId="0b6b446d.5a240e9c.0b6b448a.baba55ac";rakuten_items="ctsmatch";rakuten_genreId=0;rakuten_size="300x250";rakuten_target="_blank";rakuten_theme="gray";rakuten_border="on";rakuten_auto_mode="on";rakuten_genre_title="off";rakuten_recommend="on";</script><script type="text/javascript" src="http://xml.affiliate.rakuten.co.jp/widget/js/rakuten_widget.js"></script><!-- Rakuten Widget TO HERE -->
						<?php else: ?>						
						<div class="rakuten">
								<!-- Rakuten Widget FROM HERE --><script type="text/javascript">rakuten_design="slide";rakuten_affiliateId="0b6b446d.5a240e9c.0b6b448a.baba55ac";rakuten_items="ctsmatch";rakuten_genreId=0;rakuten_size="728x90";rakuten_target="_blank";rakuten_theme="gray";rakuten_border="on";rakuten_auto_mode="on";rakuten_genre_title="off";rakuten_recommend="on";</script><script type="text/javascript" src="http://xml.affiliate.rakuten.co.jp/widget/js/rakuten_widget.js"></script><!-- Rakuten Widget TO HERE -->
						</div>
						<?php endif; ?>
								</div>	
  <div class="related_entries">
  <?php related_posts(); ?>
  </div>
					<!-- end article footer -->
								<?php comments_template(); ?>

								<footer class="article-footer">
									<?php the_tags('<p class="tags"><span class="tags-title">Tags:</span> ', ', ', '</p>'); ?>
<div class="otherPosts clearfix">
	<h3 class="<?php the_author_meta('display_name') ?>"><?php the_author_posts_link(); ?>の過去記事一覧</h3>
	<div class="posts yarpp-thumbnails-horizontal">
		<?php
            $author = get_the_author_meta('ID');
			$otherPosts = get_posts(array(
					'numberposts' => 5,
                    'author' => $author
				));
			if($otherPosts) :
		?>

		<?php foreach( $otherPosts as $op ) : ?>
			<a class="yarpp-thumbnail-megane" href="<?php echo get_permalink($op->ID); ?>"><?php echo get_the_post_thumbnail($op->ID); ?>
				<span class="yarpp-thumbnail-title-megane"><?php echo get_the_title($op->ID); ?></span></a>
		<?php endforeach; ?>
		<?php else : ?>
		<p>過去記事はまだありません。</p>
		<?php endif; ?>
	</div>
</div>

							
								</footer> 

<ul class="pn">
	<li><?php previous_post_link('前の記事：%link を読む'); ?></li>
	<li><?php next_post_link('次の記事：%link を読む'); ?></li>
</ul>
					
							</article> <!-- end article -->
					
						<?php endwhile; ?>			
					
						<?php else : ?>
					
							<article id="post-not-found" class="hentry clearfix">
					    		<header class="article-header">
					    			<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
					    		</header>
					    		<section class="entry-content">
					    			<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
					    		</section>	
					    		<footer class="article-footer">
					    		    <p><?php _e("This is the error message in the single.php template.", "bonestheme"); ?></p>
					    		</footer>
							</article>
					
						<?php endif; ?>
			
					</div> <!-- end #main -->
    
					<?php get_sidebar(); ?>

				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>