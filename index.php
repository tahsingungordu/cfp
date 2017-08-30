<?php get_header(); ?>
<body id="desktop" <?php body_class(); ?>>
	<main class="editor">
		<div class="editor-header">
			<div class="action-buttons">
				<div class="a"></div>
				<div class="b"></div>
				<div class="c"></div>
			</div>
			<div class="title">
				<span class="file">personal.json</span>
				<span class="desc"><?php echo $general_options['personal']['name']; ?> CV</span>
			</div>
		</div>
		<div class="editor-frame">
			<div class="file-menu">
				<div class="menu-title">Working Files</div>
				<?php $page_personal = get_page_by_path('personal'); ?>

				<?php wp_nav_menu(
					array(
						'menu_id'       => 'primary',
						'walker'        => new Cfp_Custom_Walker(),
						'menu_class'    => 'navbar-menu-list',
					)); ?>
			</div>
			<div class="file-frame">
				<iframe id="iframe" name="editor" src="<?php echo get_permalink($page_personal->ID); ?>" onLoad="$.frameLoad();"></iframe>
			</div>
		</div>
	</main>
</body>

<?php get_footer(); ?>