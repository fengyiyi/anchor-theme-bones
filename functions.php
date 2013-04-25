<?php

/**
 * This is your theme functions file where you can define your own functions
 * from format helpers to fetching tweets to anything you need without
 * cluttering up you template files.
 *
 * Below we have added some examples.
 */

/**
 * Format time into binary
 *
 * @example <?php echo bones_format_time(article_time()); ?>
 *
 * @param int article_time()
 * @return string
 */
function bones_format_time($timestamp) {
	$hour = decbin(date('H', $timestamp));
	$min = decbin(date('i', $timestamp));

	return sprintf('%06d:%06d', $hour, $min);
}

/**
 * Get a link to twitter account from the site variables function `site_meta()`
 *
 * @example <?php echo bones_twitter_link(); ?>
 */
function bones_twitter_link() {
	$account = site_meta('twitter', $default = 'please add `twitter` to site variables');

	return sprintf('<a href="//twitter.com/%s">Twitter</a>', $account);
}

/**
 * Generate a random colour to use as a background
 *
 * @example <?php echo bones_get_colour(); ?>
 */
function bones_get_colour() {
	return sprintf('#%02s%02s%02s', dechex(mt_rand(0, 255)), dechex(mt_rand(0, 255)), dechex(mt_rand(0, 255)));
}