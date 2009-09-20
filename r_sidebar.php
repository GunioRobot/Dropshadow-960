<!-- begin r_sidebar -->

	<div id="r_sidebar">
	<ul id="r_sidebarwidgeted">
	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>
	
	<li id="Search">
	<h3>Find It</h3>
	   <div class="search">
	   		<form id="searchform" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<input type="text" name="s" id="s" value="search this site..."/></form>
		</div>
	</li>

	<li id="About">
	<h2>About</h2>
		<p>This is an area on your website where you can add text.  This will serve as an informative location on your website, where you can talk about your site.</p>
	</li>
		
	<li id="Recent">
	<h2>Recently Written</h2>
		<ul>
			<?php get_archives('postbypost', 10); ?>
		</ul>
	</li>
	
	<li id="Categories">
	<h2>Categories</h2>
		<ul>
		<?php wp_list_cats('sort_column=name'); ?>
		</ul>
	</li>
		
	<li id="Archives">
	<h2>Monthly Archives</h2>
		<ul>
			<?php wp_get_archives('type=monthly'); ?>
		</ul>
	</li>
		
	<li id="Blogroll">
	<h2>Blogroll</h2>
		<ul>
			<?php get_links(-1, '<li>', '</li>', ' - '); ?>
		</ul>
	</li>
		
	<li id="Admin">
	<h2>Admin</h2>
		<ul>
		<?php wp_register(); ?>
		<li><?php wp_loginout(); ?></li>
		<li><a href="http://www.wordpress.org/">Wordpress</a></li>
		<?php wp_meta(); ?>
		<li><a href="http://validator.w3.org/check?uri=referer">XHTML</a></li>
		</ul>
	</li>
		
	<?php endif; ?>
	</ul>
			
</div>

<!-- end r_sidebar -->