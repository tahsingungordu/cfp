<?php
/*
	Template Name: Experiences
*/
?>

<?php require_once get_template_directory() .'/template-parts/parts/header.php'; ?>

<body id="code" <?php body_class(); ?>>
	<div class="row t1 end">
		<div class="cmd">/**</div>
	</div>
	<div class="row t2 end">
		<div class="cmd"><?php echo $general_options['personal']['name']; ?> CV - <?php echo $post->post_name ?>.json</div>
	</div>
	<div class="row t1 end">
		<div class="cmd">**/</div>
	</div>
	<div class="row t1 end"></div>
	<div class="row t1 end">
		<div class="obj">{</div>
	</div>
	<div class="row t2 end">
		<div class="name">"<?php echo $post->post_name ?>"</div>
		<div class="obj">[</div>
	</div>
	<?php
	$posts_args = array(
		'post_type'         => 'experience',
		'post_status'       => 'publish',
		'meta_key'          => '_cfp_experience_row',
		'orderby'           => 'meta_value',
		'order'             => 'DESC',
		'posts_per_page'    => -1
	);
	foreach (query_posts( $posts_args ) as $experience) :
		$start_date = get_post_meta( $experience->ID, '_cfp_experience_start_date', true );
		$end_date = get_post_meta( $experience->ID, '_cfp_experience_end_date', true );
		$company_position = get_post_meta( $experience->ID, '_cfp_experience_company_position', true );
		?>
	<div class="row t3 end">
		<div class="obj">{</div>
	</div>
	<div class="row t4">
		<div class="name">"company"</div>
		<div class="value">"<?php echo $experience->post_title ?>"</div>
	</div>
	<div class="row t4">
		<div class="name">"position"</div>
		<div class="value">"<?php echo $company_position ?>"</div>
	</div>
	<div class="row t4 end">
		<div class="name">"date"</div>
		<div class="value">"<?php echo $start_date ?> - <?php echo $end_date ?>"</div>
	</div>
	<div class="row t3">
		<div class="obj">}</div>
	</div>
	<?php endforeach; ?>
	<div class="row t2 end">
		<div class="obj">]</div>
	</div>
	<div class="row t1 end">
		<div class="obj">}</div>
	</div>
</body>

<?php require_once get_template_directory() .'/template-parts/parts/footer.php'; ?>