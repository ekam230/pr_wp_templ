<?php get_header(); ?>

	<div class="middle">
		 <nav class="main-navigation">
			<? wp_nav_menu(array('menu' => 'top-menu', 'menu_class' => 'fancyNav')); ?>
		</nav>
            
		<div class="container">

			<main class="content">
				<h1><?php the_title(); ?></h1>
				<?php if (have_posts()): while (have_posts()): the_post(); ?>
					<?php the_content(); ?>
					<?php endwhile; endif; ?>
			</main><!-- .content -->
		</div><!-- .container-->

		<?php get_sidebar(); ?>

	</div><!-- .middle-->

</div><!-- .wrapper -->

<?php get_footer(); ?>