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
				<ul>
					<li><a href="<?php echo site_url() ?>/personal/" target="editor" class="active">personal<span>.json</span></a></li>
					<li><a href="<?php echo site_url() ?>/avatar/" target="editor">avatar<span>.jpg</span></a></li>
				</ul>
			</div>
			<div class="file-frame">
				<iframe id="iframe" name="editor" src="<?php echo site_url() ?>/personal/" onLoad="$.frameLoad();"></iframe>
			</div>
		</div>
	</main>
</body>

<?php get_footer(); ?>