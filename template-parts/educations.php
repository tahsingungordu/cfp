<?php
/*
	Template Name: Educations
*/
?>

<?php require_once get_template_directory() .'/template-parts/parts/header.php'; ?>

<body id="code" <?php body_class(); ?>>
	<div class="row t1 end">
		<div class="cmd">/**</div>
	</div>
	<div class="row t2 end">
		<div class="cmd"><?php echo $general_options['personal']['name']; ?> CV - educations.json</div>
	</div>
	<div class="row t1 end">
		<div class="cmd">**/</div>
	</div>
	<div class="row t1 end"></div>
	<div class="row t1 end">
		<div class="obj">{</div>
	</div>
	<div class="row t2 end">
		<div class="name">"educations"</div>
		<div class="obj">[</div>
	</div>
	<?php
	$education_args = array(
		'post_type'         => 'education',
		'post_status'       => 'publish',
		'meta_key'          => '_cfp_education_row',
		'orderby'           => 'meta_value',
		'order'             => 'DESC',
		'posts_per_page'    => -1
	);
	foreach (query_posts( $education_args ) as $education) :
		$start_date = get_post_meta( $education->ID, '_cfp_education_start_date', true );
		$end_date = get_post_meta( $education->ID, '_cfp_education_end_date', true );
		$education_department = get_post_meta( $education->ID, '_cfp_education_department', true );
		?>
	<div class="row t3 end">
		<div class="obj">{</div>
	</div>
	<div class="row t4">
		<div class="name">"school"</div>
		<div class="value">"<?php echo $education->post_title ?>"</div>
	</div>
	<div class="row t4">
		<div class="name">"department"</div>
		<div class="value">"<?php echo $education_department ?>"</div>
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