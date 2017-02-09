<?php
/*
	Template Name: Avatar
*/
?>

<?php require_once get_template_directory() .'/template-parts/parts/header.php'; ?>

<body id="image" <?php body_class(); ?>>
	<?php $avatar_metadata = wp_get_attachment_metadata( $general_options['personal']['photo'] ); ?>
	<img src="<?php echo wp_get_attachment_image_src( $general_options['personal']['photo'], 'full' )[0]; ?>" alt="<?php echo $general_options['personal']['name']; ?> Avatar">
	<small>250 x 250 pixels (Natural: <?php echo $avatar_metadata['width'] ?> x <?php echo $avatar_metadata['height'] ?> pixels)</small>
</body>

<?php require_once get_template_directory() .'/template-parts/parts/footer.php'; ?>