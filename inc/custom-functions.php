<?php

/**
 * Change Default "Enter Title Here" Text in WordPress
 *
 * @param $title
 *
 * @return string
 */
function change_default_title( $title ){
	$screen = get_current_screen();

	if  ( 'education' == $screen->post_type ) {
		$title = 'The new school name';
	}

	return $title;
}

add_filter( 'enter_title_here', 'change_default_title' );