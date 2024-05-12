<?php
/**
 * Template Name: FAQs
 */
?>

<?php
get_header(); ?>

<div class="rosella-page">
	<section class="main-section rose-flowers">
		<div class="container">
			<div class="breadcrumbs breadcrumbs--page breadcrumbs--light">
				<a href="<?=home_url();?>" class="breadcrumbs-item breadcrumbs-link">Home</a>
				<span class="breadcrumbs-item breadcrumbs-divider">&mdash;</span>
				<span class="breadcrumbs-item breadcrumbs-current"><?php the_title();?></span>
			</div>
			<h1><?php the_title();?></h1>
		</div>
	</section>

	<div class="faqs">
		<div class="container">
			<div class="page-title">Frequently Asked Questions</div>
			<div class="faqs-list">
				<div class="faq">

					<?php
					$args = array(
						'post_type'        => 'faq',
						'posts_per_page'   => -1,
					);
					$query = new WP_Query( $args );
					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post();
							?>
							<div class="faq-item">
								<button class="faq-button"><?php the_title();?> <span class="circle-arrow"><svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1L5 5L9 0.999999" stroke="black"/></svg></span></button>
								<div class="faq-content">
									<?php the_content();?>
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
	</div>
</div>

<?php
get_footer();
?>