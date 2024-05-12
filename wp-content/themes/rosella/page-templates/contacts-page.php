<?php
/**
 * Template Name: Contacts
 */
?>

<?php
get_header(); ?>

<div class="rosella-page">
	<section class="main-section">
		<div class="container">
			<div class="breadcrumbs breadcrumbs--page breadcrumbs--light">
				<a href="<?=home_url();?>" class="breadcrumbs-item breadcrumbs-link">Home</a>
				<span class="breadcrumbs-item breadcrumbs-divider">&mdash;</span>
				<span class="breadcrumbs-item breadcrumbs-current"><? the_title();?></span>
			</div>
			<h1><?= get_field('address', 'option');?></h1>
		</div>
	</section>
	<div class="container">
		<div class="contacts-info">
			<a href="tel:<?= get_field('phone', 'option');?>" class="phone"><?= get_field('phone', 'option');?></a>
			<a href="mailto:<?= get_field('email', 'option');?>" class="email"><?= get_field('email', 'option');?></a>
			<button class="button button--white" data-fancybox data-src="#contact-us"><span>Contact us</span></button>
		</div>
		<div class="contacts-time">

			<?php
			if( have_rows('schedule', 'option') ):
				while ( have_rows('schedule', 'option') ) : the_row();
                    ?>
                    <div class="time">
                        <span class="day"><?php the_sub_field('day'); ?></span>
                        <span class="time"><?php the_sub_field('time'); ?></span>
                    </div>
                <?php
				endwhile;
			endif;
			?>

		</div>
		<div class="contacts-gallery">
            <?php
            $images = get_field('gallery', 'option');
            foreach ($images as $image): ?>

                <a href="<?php echo wp_get_attachment_image_url($image, 'full'); ?>" class="image" data-fancybox rel="gallery">
                    <?php echo wp_get_attachment_image($image, 'contacts-gallery-thumb'); ?>
                </a>
            <?php endforeach; ?>
		</div>
		<div id="map">
			<iframe title="Rosella Map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1105.2235416595574!2d151.25030385878262!3d-33.891492677536654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12adf228109467%3A0xbf7e6660c334073e!2zMywgV2VzdGZpZWxkIEJvbmRpIEp1bmN0aW9uLCA1MDAgT3hmb3JkIFN0LCBCb25kaSBKdW5jdGlvbiBOU1cgMjAyMiwg0JDQstGB0YLRgNCw0LvQuNGP!5e0!3m2!1sru!2sru!4v1714448278988!5m2!1sru!2sru" width="100%" height="450" style="border: 0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
	</div>
</div>

<form method="post" action="" enctype="application/x-www-form-urlencoded" id="contact-us" class="form form-light" style="display: none;">
    <div class="title">Contact Us</div>

    <div class="description">Send us a message and we'll get back to you as quickly as possible</div>
    <div class="row">
        <input type="text" name="firstname" placeholder="First name *">
    </div>
    <div class="row">
        <input type="text" name="lastname" placeholder="Last name *">
    </div>
    <div class="row">
        <input type="email" name="email" placeholder="Email *">
    </div>
    <div class="row">
        <input type="tel" name="phone" placeholder="Phone *">
    </div>

    <button type="submit" class="button button--white"><span>Submit</span></button>

</form>

<?php
get_footer();
?>