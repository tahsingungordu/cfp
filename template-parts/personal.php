<?php
/*
	Template Name: Personal
*/
?>

<?php require_once get_template_directory() .'/template-parts/parts/header.php'; ?>

<body id="code" <?php body_class(); ?>>
	<div class="row t1 end">
		<div class="cmd">/**</div>
	</div>
	<div class="row t2 end">
		<div class="cmd"><?php echo $general_options['personal']['name']; ?> CV - personal.json</div>
	</div>
	<div class="row t1 end">
		<div class="cmd">**/</div>
	</div>
	<div class="row t1 end"></div>
	<div class="row t1 end">
		<div class="obj">{</div>
	</div>
	<div class="row t2">
		<div class="name">"name"</div>
		<div class="value">"<?php echo $general_options['personal']['name']; ?>"</div>
	</div>
	<div class="row t2">
		<div class="name">"title"</div>
		<div class="value">"<?php echo $general_options['personal']['job_description']; ?>"</div>
	</div>
	<div class="row t2 end">
		<div class="name">"personal"</div>
		<div class="obj">{</div>
	</div>
	<div class="row t3">
		<div class="name">"birth"</div>
		<div class="value">"<?php echo $general_options['personal']['birth']; ?>"</div>
	</div>
	<div class="row t3">
		<div class="name">"place_of_birth"</div>
		<div class="value">"<?php echo $general_options['personal']['place_of_birth']; ?>"</div>
	</div>
	<div class="row t3">
		<div class="name">"military_service"</div>
		<div class="boo"><?php echo $general_options['personal']['military_service'] == 1 ? 'true' : 'false'; ?></div>
	</div>
	<div class="row t3">
		<div class="name">"marriage"</div>
		<div class="boo"><?php echo $general_options['personal']['marriage'] == 1 ? 'true' : 'false'; ?></div>
	</div>
	<div class="row t3 end">
		<div class="name">"driving_licence"</div>
		<div class="boo"><?php echo $general_options['personal']['driving_licence'] == 1 ? 'true' : 'false'; ?></div>
	</div>
	<div class="row t2">
		<div class="obj">}</div>
	</div>
	<div class="row t2 end">
		<div class="name">"contact"</div>
		<div class="obj">{</div>
	</div>
	<div class="row t3">
		<div class="name">"address"</div>
		<div class="value">"<?php echo $general_options['contact']['address']; ?>"</div>
	</div>
	<div class="row t3">
		<div class="name">"fixed_phone"</div>
		<a href="tel:<?php echo $general_options['contact']['fixed_phone']; ?>" class="value">"<?php echo $general_options['contact']['fixed_phone']; ?>"</a>
	</div>
	<div class="row t3">
		<div class="name">"mobile_phone"</div>
		<a href="tel:<?php echo $general_options['contact']['mobile_phone']; ?>" class="value">"<?php echo $general_options['contact']['mobile_phone']; ?>"</a>
	</div>
	<div class="row t3 end">
		<div class="name">"email"</div>
		<div class="obj">[</div>
	</div>
	<div class="row t4 end"><a href="mailto:<?php echo $general_options['contact']['email']; ?>" class="value">"<?php echo $general_options['contact']['email']; ?>"</a></div>
	<div class="row t3">
		<div class="obj">]</div>
	</div>
	<div class="row t3">
		<div class="name">"web_site"</div><a href="<?php echo $general_options['contact']['web_site']; ?>" target="_blank" class="value">"<?php echo $general_options['contact']['web_site']; ?>"</a>
	</div>
	<div class="row t2">
		<div class="obj">}</div>
	</div>
	<div class="row t1 end">
		<div class="obj">}</div>
	</div>
</body>

<?php require_once get_template_directory() .'/template-parts/parts/footer.php'; ?>