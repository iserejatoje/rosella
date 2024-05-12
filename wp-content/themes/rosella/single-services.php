<?php
get_header();

$main_image_field = get_field('main_image');
$main_image = $main_image_field['sizes']['2048x2048'];
?>

<section class="main-section section-service" style="background: url(<?=$main_image;?>) no-repeat fixed top center; background-size: 100%;">
	<div class="container">
		<div class="breadcrumbs breadcrumbs--page breadcrumbs--light">
			<a href="/" class="breadcrumbs-item breadcrumbs-link">Home</a>
			<span class="breadcrumbs-item breadcrumbs-divider">&mdash;</span>
			<span class="breadcrumbs-item breadcrumbs-current"><?php the_title();?></span>
		</div>

		<h1><?php the_title();?></h1>
		<div class="service-description"><?php the_excerpt();?></div>
		<button type="button" data-fancybox data-src="#enquiry" class="button button--white make-an-enquiry"><span>Make an Enquiry</span></button>
	</div>
</section>

<div class="images-grid">

    <?php
    $content = get_field('content');
    $position = 'left';
    foreach ($content as $index => $row) {
	    if ($index % 2 !== 0) {
            $position = 'right';
        }
        if ($position == 'left'):
        ?>
        <div class="row">
            <div class="column">
                <div class="container-left">
                    <div class="heading heading--clip heading--large" style="background-image: url(<?=$row['image']['sizes']['service-content-image'];?>)"><?=$row['title'];?></div>
                    <div class="description"><?=$row['text'];?></div>
                </div>
            </div>
            <div class="column">
                <?php echo wp_get_attachment_image($row['image']['ID'], 'service-content-image'); ?>
            </div>
        </div>
        <?php endif; ?>
	    <?php
	    if ($position == 'right'):
		    ?>
            <div class="row">
                <div class="column">
	                <?php echo wp_get_attachment_image($row['image']['ID'], 'service-content-image'); ?>
                </div>
                <div class="column">
                    <div class="container-right">
                        <div class="heading heading--clip heading--large" style="background-image: url(<?=$row['image']['sizes']['service-content-image'];?>)"><?=$row['title'];?></div>
                        <div class="description"><?=$row['text'];?></div>
                    </div>
                </div>
            </div>
	    <?php endif; ?>
        <?php
    }
    ?>

</div>

<?php
$template = get_field('template');
$partners = get_field('our_partners');
if ($partners && ($template == 'Corporate')):
?>

<div class="partners">
	<div class="container">
		<div class="page-title">Our Partners</div>
		<div class="partners-slider">
			<button class="prev"><svg width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M4.81878 8.4647L0.851562 4.49749L4.81878 0.530273" stroke="#fff"/>
				</svg></button>
			<button class="next">
				<svg width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M0.517162 8.4647L4.48438 4.49749L0.517162 0.530273" stroke="#fff"/>
				</svg></button>
			<div class="swiper">
				<div class="swiper-wrapper">
					<?php
					foreach ($partners as $partner):
					?>
					<div class="swiper-slide">
						<?php echo wp_get_attachment_image($partner['ID'], 'medium-width'); ?>
					</div>
					<?php endforeach; ?>

				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>

<?php
if( have_rows('gallery') ):
?>
<div class="container">
	<div class="gallery-wrapper">
		<div class="page-title">Gallery</div>

		<div class="gallery">

            <?php
				$gallery = [];
				while ( have_rows('gallery') ) : the_row();
                    $gallery[] = [
                        'title' => get_sub_field( 'title' ),
                        'image' => get_sub_field( 'image' ),
                    ]
                    ?>
			    <?php
			    endwhile;
				$gallery_array = array_chunk($gallery, 2);

                foreach ($gallery_array as $gallery_item):
                    ?>
                    <div class="row">
                        <?php
                        foreach ($gallery_item as $index => $item):
                            $type = (($index + 1) % 2 == 0) ? 'service-2-type' : 'service-1-type';
                        ?>
                            <a href="<?=wp_get_attachment_image_url($item['image']['ID'], 'full');?>" class="gallery-item" data-fancybox>
                                <div class="image">
                                    <?php
                                    echo wp_get_attachment_image($item['image']['ID'], $type, false, ['style' => 'width: 100%;', 'alt' => esc_attr($item['title'])]);
                                    ?>
                                    <div class="image-title"><?= $item['title'];?></div>
                                </div>
                            </a>
                        <?php endforeach; ?>

                    </div>
                <?php
                endforeach;
            ?>
		</div>

		<div class="gallery-bottom">
			<button type="button" class="button button--clear">Show more</button>
		</div>
	</div>
</div>
<?php endif; ?>

<?php
get_footer();
?>