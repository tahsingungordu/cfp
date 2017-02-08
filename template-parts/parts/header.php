<!DOCTYPE html><!--[if IE 8]>
<script type="text/javascript">
	alert("Sitenin Görüntülenmesi için Güncel Bir Tarayıcı Kullanın");
	window.location.href = "http://www.google.com/intl/tr/chrome/";
</script><![endif]-->
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="UTF-8">
		<title>
			<?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?>
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<!--BROWSER COLOR-->
		<meta name="theme-color" content="#333333">
		<meta name="msapplication-navbutton-color" content="#333333">
		<meta name="apple-mobile-web-app-status-bar-style" content="#333333">
		<!--CSS IMPORT-->
		<?php wp_head(); ?>
		<!--JS IMPORT-->
		<?php wp_footer(); ?>
		<!--SEO META-->
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="robots" content="index, follow">
	</head>