<?php
/**
 * Template Name: Privacy Policy
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

    <div class="text-page">
        <div class="container">
            <?php the_content(); ?>
        </div>
    </div>

</div>

<?php
get_footer();
?>