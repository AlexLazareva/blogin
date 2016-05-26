<?php get_header() ?>
<div class="center-block-main content">
	<main>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<!-- post -->
			<article>
				<header>
					<img src="<?php bloginfo('template_url')?>/img/content-img1.jpg" alt="">
					<p class="publish">Published by Alex Lazareva 21.05.2016</p>
				</header>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
				<p><a href="<?php the_permalink(); ?>" class="more">Continue Reading</a></p>
			</article>
		<?php endwhile; ?>
		<!-- post navigation -->
	<?php else: ?>
		<!-- no posts found -->
	<?php endif; ?>
</main>
<?php get_sidebar() ?>
<div class="clr">
	<div class="pager clearfix">
		<p class="previos-link">&larr;<a href="#">Previous</a></p>
		<p class="next-link"><a href="#">Next</a>&rarr;</p>
	</div>
</div>
</div>
<?php get_footer() ?>
