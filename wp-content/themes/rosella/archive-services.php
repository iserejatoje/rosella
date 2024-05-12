<?php
get_header();
?>

<section class="main-section">
	<div class="container">
		<div class="breadcrumbs breadcrumbs--long breadcrumbs--dark">
			<a href="<?=home_url();?>" class="breadcrumbs-item breadcrumbs-link">Home</a>
			<span class="breadcrumbs-item breadcrumbs-divider">&mdash;</span>
			<span class="breadcrumbs-item breadcrumbs-current">Services</span>
		</div>
	</div>
</section>

<div class="services">
	<div class="container">
		<h1 class="heading--service heading heading--clip">Services</h1>

		<div class="services-list">

			<?php
			$args = array(
				'post_type'        => 'services',
				'posts_per_page'   => -1,
			);
			$query = new WP_Query( $args );
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post();
					?>
                    <div class="service">
                        <a href="<?php the_permalink();?>" class="service-image">
                            <?php echo get_the_post_thumbnail($post->ID, 'services-thumb'); ?>
                        </a>
                        <div class="service-content">
                            <a href="<?php the_permalink();?>" class="service-title"><?php the_title();?></a>
                            <div class="service-excerpt"><?php the_excerpt();?></div>
                            <a href="<?php the_permalink();?>" class="button button--service service-link">Learn More</a>
                        </div>
                    </div>
					<?php
				}
			}
			wp_reset_query();
			?>

		</div>

	</div>


</div>

<?php
get_footer();
?>