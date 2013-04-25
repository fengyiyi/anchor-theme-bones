<?php

/**
 * For the complete list of functions you can use in this template please see:
 *
 * @see http://anchorcms.com/docs/theming-functions/search
 * @see http://anchorcms.com/docs/theming-functions/articles
 * @see http://anchorcms.com/docs/theming-functions/posts
 */

theme_include('partials/header'); ?>

		<section>
			<p>You searched for &ldquo;<?php echo search_term(); ?>&rdquo;.</p>

			<?php if(has_search_results()): while(search_results()): ?>
			<article>
				<h2><a href="<?php echo article_url(); ?>"><?php echo article_title(); ?></a></h2>

				<aside><p>Posted on <time datetime="<?php echo article_date(); ?>"><?php echo article_date(); ?></time>
				<em>by <?php echo article_author(); ?> in
				<a href="<?php echo article_category_url(); ?>"><?php echo article_category(); ?></a></em></p></aside>

				<summary><?php echo article_description(); ?></summary>
			</article>
			<?php endwhile; ?>

			<?php if(has_search_pagination()): ?>
			<nav><?php echo search_prev(); ?> <?php echo search_next(); ?></nav>
			<?php endif; ?>

			<?php else: ?>
			<p>Unfortunately, there's no results for &ldquo;<?php echo search_term(); ?>&rdquo;.
			Did you spell everything correctly?</p>
			<?php endif; ?>
		</section>

<?php theme_include('partials/footer'); ?>