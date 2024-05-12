<?php
/**
 * Template Name: Blog
 **/

get_header();
?>
    <section class="main-section articles-section">
        <div class="container">
            <div class="breadcrumbs breadcrumbs--page breadcrumbs--light">
                <a href="<?= home_url(); ?>" class="breadcrumbs-item breadcrumbs-link">Home</a>
                <span class="breadcrumbs-item breadcrumbs-divider">&mdash;</span>
                <span class="breadcrumbs-item breadcrumbs-current"><?php the_title(); ?></span>
            </div>

            <div class="h1-block">
                <h1><?php the_title(); ?></h1>

                <div class="categories">
					<?php
					$categories = get_categories( array(
						'orderby'    => 'name',
						'parent'     => 0,
						'hide_empty' => false,
					) );
					foreach ( $categories as $category ) {
						printf( '<a href="%1$s">%2$s</a>',
							esc_url( get_category_link( $category->term_id ) ),
							esc_html( $category->name )
						);
					}
					?>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="article-list">

		    <?php
		    $paged = ( get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1 );

		    $args = [
			    'post_type' => 'post',
			    'post_status'         => 'publish',
			    'paged' => $paged,
			    'posts_per_page'      => 1,
		    ];

		    $products = new WP_Query( $args );
		    $counter = $products->found_posts;

		    if ($counter > 0) {
			    while ( $products->have_posts() ) {
				    $products->the_post();
				    global $post;
				    ?>
                    <a href="<?= get_permalink( $post->ID ); ?>" class="article">
                        <div class="article-image">
                            <?php
                            echo get_the_post_thumbnail($post->ID, 'post');
                            ?>
                        </div>
                        <div class="article-content">
                            <div class="article-date"><?= wp_date( 'F j, Y', strtotime( $post->post_date ) ); ?></div>
                            <div class="article-title"><?= $post->post_title; ?></div>
                            <div class="article-excerpt"><?= $post->post_excerpt; ?></div>
                        </div>
                    </a>
				    <?php
			    }
			    wp_reset_query();
		    } else {
			    ?>
                <h2>No articles</h2>
			    <?php
		    }
		    ?>

        </div>
	    <?php
	    $pagination = paginate_links( [
		    'base'      => str_replace( 999999999, '%#%', get_pagenum_link( 999999999 ) ),
		    'format'    => '',
		    'prev_text' => '',
		    'prev_next' => false,
		    'type'      => 'array',
		    'next_text' => '',
		    'end_size'  => 3,
		    'mid_size'  => 3,
		    'current'   => max( 1, $paged ),
		    'total'     => $products->max_num_pages,
	    ] );

	    if ( is_array( $pagination ) ) {
		    $nav = str_replace( 'class="page-numbers"', 'class="page"', implode( '', $pagination ) );
		    ?>
	    <?php }
	    ?>

	    <?php
	    if ($products->max_num_pages > 1) {
		    ?>
            <div class="pagination pagination-blog">
			    <?php
			    if (max( 1, $paged ) > 1) {
				    ?>
                    <a href="<?=str_replace( 999999999, max( 1, $paged ) - 1, get_pagenum_link( 999999999 ) );?>" class="prev">
                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path d="M10.1,23a1,1,0,0,0,0-1.41L5.5,17H29.05a1,1,0,0,0,0-2H5.53l4.57-4.57A1,1,0,0,0,8.68,9L2.32,15.37a.9.9,0,0,0,0,1.27L8.68,23A1,1,0,0,0,10.1,23Z"/>
                            </g>
                        </svg>
                        previous</a>
			    <?php } else { ?>
                    &nbsp;
			    <?php } ?>
                <div class="pagination-current">Page <?=max( 1, $paged );?> <span>of <?=$products->max_num_pages;?></span></div>

			    <?php
			    if (max( 1, $paged ) < $products->max_num_pages) { ?>
                    <a href="page/<?=max( 1, $paged ) + 1;?>/" class="next">next
                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path d="M22,9a1,1,0,0,0,0,1.42l4.6,4.6H3.06a1,1,0,1,0,0,2H26.58L22,21.59A1,1,0,0,0,22,23a1,1,0,0,0,1.41,0l6.36-6.36a.88.88,0,0,0,0-1.27L23.42,9A1,1,0,0,0,22,9Z"/>
                            </g>
                        </svg>
                    </a>
			    <?php } else {
				    ?>
                    &nbsp;
				    <?php
			    } ?>
            </div>
	    <?php } ?>
    </div>

<?php
get_footer();
?>