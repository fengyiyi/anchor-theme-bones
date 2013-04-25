<?php

/**
 * For the complete list of functions you can use in this template please see:
 *
 * @see http://anchorcms.com/docs/theming-functions/articles
 * @see http://anchorcms.com/docs/theming-functions/posts
 */

theme_include('partials/header'); ?>

		<section>

			<?php if(has_posts()): while(posts()): ?>
			<article>
				<h2><a href="<?php echo article_url(); ?>"><?php echo article_title(); ?></a></h2>

				<aside><p>Posted on <time datetime="<?php echo article_date(); ?>"><?php echo article_date(); ?></time>
				<em>by <?php echo article_author(); ?> in
				<a href="<?php echo article_category_url(); ?>"><?php echo article_category(); ?></a></em></p></aside>

				<summary><?php echo article_description(); ?></summary>
			</article>
			<?php endwhile; ?>

			<?php if(has_pagination()): ?>
			<nav><?php echo posts_prev('&larr; Older'); ?> <?php echo posts_next('Newer &rarr;'); ?></nav>
			<?php endif; ?>

			<?php else: ?>
			<p>Looks like you have some writing to do!</p>
			<?php endif; ?>

		</section>

<?php theme_include('partials/footer'); ?>