<?php

/**
 * For the complete list of functions you can use in this template please see:
 *
 * @see http://anchorcms.com/docs/theming-functions/articles
 * @see http://anchorcms.com/docs/theming-functions/comments
 */

theme_include('partials/header'); ?>

		<section>
			<h1><?php echo article_title(); ?></h1>

			<article><?php echo article_markdown(); ?></article>
		</section>

		<?php if(comments_open()): ?>
		<section>
			<?php if(has_comments()): while(comments()): ?>
			<article>
				<h2><?php echo comment_name(); ?></h2>
				<time><?php echo comment_date(); ?></time>

				<?php echo comment_text(); ?>
			</article>
			<?php endwhile; endif; ?>

			<form method="post" action="<?php echo comment_form_url(); ?>">
				<?php echo comment_form_notifications(); ?>

				<p><label>Name<br>
				<?php echo comment_form_input_name('placeholder="Your name"'); ?></label></p>

				<p><label>Email<br>
				<?php echo comment_form_input_email('placeholder="Your email (won’t be published)"'); ?></label></p>

				<p><label>Comment<br>
				<?php echo comment_form_input_text('placeholder="Your comment"'); ?></label></p>

				<?php echo comment_form_button(); ?>
			</form>

		</section>
		<?php endif; ?>

<?php theme_include('partials/footer'); ?>