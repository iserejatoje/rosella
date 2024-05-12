<?php
get_header();
$cat = get_the_category(get_the_ID());
$catlink = get_category_link($cat[0]);
$image = get_field('image', get_the_ID())['sizes']['single'];
?>

<section class="main-section section-article" style="background:  linear-gradient(180deg, rgba(0, 0, 0, 0.876033), rgba(0, 0, 0, 0) 30%), url(<?=$image;?>) no-repeat top center / cover">
	<div class="container">
        <div class="breadcrumbs breadcrumbs--page breadcrumbs--light">
            <a href="<?= home_url(); ?>" class="breadcrumbs-item breadcrumbs-link">Home</a>
            <span class="breadcrumbs-item breadcrumbs-divider">&mdash;</span>
            <a href="/blog/" class="breadcrumbs-item breadcrumbs-link">Blog</a>
            <span class="breadcrumbs-item breadcrumbs-divider">&mdash;</span>
            <a href="<?=$catlink;?>" class="breadcrumbs-item breadcrumbs-link"><?=$cat[0]->cat_name;?></a>
            <span class="breadcrumbs-item breadcrumbs-divider">&mdash;</span>
            <span class="breadcrumbs-item breadcrumbs-current"><?php the_title();?></span>
        </div>

		<h1><?php the_title();?></h1>
		<div class="date">
			<?= wp_date( 'F j, Y', strtotime( $post->post_date ) ); ?>
		</div>

	</div>
</section>
<div class="container">
	<div class="text-content">
		<?php the_content(); ?>
	</div>

	<div class="content-navigation">
        <?php
        $previous_adjacent_post = get_adjacent_post(true,'',true);
        $next_adjacent_post = get_adjacent_post(true,'',false);

        $previous_title = $next_title = '';
        $previous_link = $next_link = '';

        ?>

        <?php

        if (is_a($previous_adjacent_post, 'WP_Post')) {
	        $previous_link = get_permalink($previous_adjacent_post->ID);
	        $previous_title = $previous_adjacent_post->post_title;
	        $previous_date = $previous_adjacent_post->post_date;
            ?>
            <div class="prev">
                <a href="<?=$previous_link;?>">
                    <svg width="29" height="28" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M28.3781 14.1415H1M1 14.1415L14.1415 1M1 14.1415L14.1415 27.283" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Previous
                </a>
                <div class="title"><?=$previous_title;?></div>
                <div class="date"><?= wp_date( 'F j, Y', strtotime( $previous_date ) ); ?></div>
            </div>
            <?php
        }
        ?>


        <?php
        if (!is_a($previous_adjacent_post, 'WP_Post')) {
            ?>&nbsp;<?php
        }

        if (is_a($next_adjacent_post, 'WP_Post')) {
	        $next_link = get_permalink($next_adjacent_post->ID);
	        $next_title = $next_adjacent_post->post_title;
	        $next_date = $next_adjacent_post->post_date;
            ?>
            <div class="next">
                <a href="<?=$next_link;?>">
                    Next
                    <svg width="29" height="28" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.00082 14.1415H28.3789M28.3789 14.1415L15.2374 1M28.3789 14.1415L15.2374 27.283" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
                <div class="title"><?=$next_title;?></div>
                <div class="date"><?= wp_date( 'F j, Y', strtotime( $next_date ) ); ?></div>
            </div>
            <?php
        }
        ?>


	</div>
</div>

<?php
get_footer();
?>