<div id="left-content">
	<div id="logo">
		<a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a>
		<div class="corner"></div>
	</div>
	
	<?php hipsterist_navigation($active); ?>
	<div class="box" id="search">
		<h4><span>SEARCH</span></h4>
		<form method="get" id="searchform" action="<?php bloginfo('wpurl') ?>">
				<input type="text" name="s" id="s" value="Search Here" onClick="this.value=''" class="text" />
				<input type="submit" name="submit" value="SEARCH" id="submit" class="button" />
				<div class="clearfix"></div>
		</form>
	</div>
	<div id="widgets">
		<?php if ( !function_exists('dynamic_sidebar') OR !dynamic_sidebar() ) : ?>
		<?php endif; ?>
	</div>
</div>
