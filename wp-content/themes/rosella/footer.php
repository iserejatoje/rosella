</div>

<?php
$footer_flowers = $seo_in_footer = false;
if (!is_page_template('page-templates/contacts-page.php')) {
	$footer_flowers = 'footer--flowers';
}
if (is_post_type_archive('services') || is_singular('services')) {
	$seo_in_footer = true;
}
?>

<footer class="footer <?=$footer_flowers;?>">

    <?php
    if (is_singular('services')) {
        ?>
        <div class="contact-us-service">
            <form action="" method="post" enctype="application/x-www-form-urlencoded" class="contact-us">
	            <?php wp_nonce_field('my_form_action', 'my_form_nonce'); ?>
                <input type="hidden" name="action" value="handle_form">
                <input type="hidden" name="subject" value="Contact Us">
                <div class="container">
                    <div class="large-title">Contact Us</div>

                    <div class="form form-light">
                        <div class="row">
                            <div class="column">
                                <input type="text" name="firstname" placeholder="Name *">
                            </div>
                            <div class="column">
                                <input type="email" name="email" placeholder="E-mail *">
                            </div>
                            <div class="column">
                                <input type="tel" name="phone" placeholder="Phone *">
                            </div>
                        </div>
                        <div class="row">
                            <textarea name="message" placeholder="Message"></textarea>
                        </div>

                    </div>
                    <div class="send-form">
                        <button type="submit" class="button button--submit">Send</button>
                    </div>

                </div>
            </form>
        </div>
        <?php
    }
    ?>

    <?php
    if ($seo_in_footer):
        $post_id = get_the_ID();
        $seo = get_field('seo', $post_id);
        if (!empty($seo)) {
    ?>
    <div class="container">
        <div class="footer-top">
            <div class="seo-pages">
                <?php
                foreach ($seo as $item) {
                    ?>
                    <div class="seo-page">
                        <div class="title"><?=$item['title'];?></div>
                        <div class="text">
                            <span class="excerpt"><?=$item['excerpt'];?></span>
                            <span class="fulltext" style="display: none;"><?=$item['text'];?></span>
                        </div>
                        <div class="detail">
                            <a href="#" class="read-more">Read more</a>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
    <?php } ?>
    <?php endif; ?>

    <div class="footer-menu">
        <div class="container">
            <div class="footer-columns">
                <div class="column">
                    <a href="/about/" class="large">About</a>
                    <a href="/collections" class="large">Collections</a>
                    <a href="/best-sellers/" class="large">Best Sellers</a>
                    <a href="/contact-us/" class="large">Contacts</a>
                    <a href="/blog/" class="large">Blog</a>
                </div>
                <div class="column">
                    <a href="" class="large">Flowers</a>
                    <a href="">Orchids</a>
                    <a href="">Signature Vases</a>
                    <a href="">White Flowers</a>
                    <a href="">Everything Bright!</a>
                    <a href="">Pretty Pinks</a>
                    <a href="">Plants</a>
                    <a href="">Plant Hampers</a>
                    <a href="">Dried & Preserved Flowers</a>
                    <a href="">Florist Choice Bouquets</a>
                    <a href="">Luxe Range</a>
                    <a href="">Native & Wildflowers</a>
                </div>
                <div class="column">
                    <a href="" class="large">Occasions</a>
                    <a href="">Birthday Flowers</a>
                    <a href="">Love & Anniversary</a>
                    <a href="">New Baby Flowers</a>
                    <a href="">Thank You Flowers</a>
                    <a href="">Get Well Flowers</a>
                    <a href="">Sympathy Flowers</a>
                    <a href="">Funeral Wreaths</a>
                    <a href="">Funeral Casket Covers</a>
                </div>
                <div class="column">
                    <a href="" class="large">Styles</a>
                    <a href="">Panel</a>
                    <a href="">Paralle</a>
                    <a href="">Pavé</a>
                    <a href="">Phoenix</a>
                    <a href="">Pillar</a>
                    <a href="">Pot-et-Fleur</a>
                    <a href="">Reflective</a>
                </div>
                <div class="column">
                    <a href="/services/" class="large">Services</a>

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
                            <a href="<?php the_permalink();?>"><?php the_title();?></a>
			                <?php
		                }
	                }
	                wp_reset_query();
	                ?>
                </div>
                <div class="column">
                    <a href="" class="large">Support</a>
                    <a href="/faqs/">FAQ</a>
                    <a href="">Delivery & Refunds</a>
                    <a href="">Terms & Consitions</a>
                    <a href="/privacy-policy/">Privacy Policy</a>
                    <a href="">Flower Care</a>
                </div>
                <div class="column">
                    <a href="" class="large">Price</a>
                    <a href="">Below $80</a>
                    <a href="">$80 - $100</a>
                    <a href="">$100 - $140</a>
                    <a href="">$140 and above</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="footer-bottom">
            <a href="<?=home_url();?>" class="logo">
                <img width="166" height="65" srcset="<?=THEME_PATH;?>/img/logos/logoX2.png 2x" src="<?=THEME_PATH;?>/img/logos/logoX1.png" decoding="async" alt="Rosella Floral Coast">
            </a>
            <div class="footer-address"><?= get_field('address', 'option');?></div>
            <div class="footer-info">
                <div class="footer-web">
                    <a href="#">Facebook</a>
                    <a href="#">Instagram</a>
                </div>
                <a href="tel:<?= get_field('phone', 'option');?>" class="phone"><?= get_field('phone', 'option');?></a>
            </div>
        </div>
    </div>
</footer>

<div class="menu">
    <div class="container">
        <div class="menu-inner">
            <div class="column">
                <a href="#">About</a>
                <a href="#">Shop</a>
                <a href="#">Services</a>
                <a href="#">Blog</a>
                <a href="#">Support</a>
                <a href="#">Contacts</a>
            </div>
            <div class="column"></div>
        </div>
    </div>
</div>

<?php
if (is_singular('services')):
?>
    <form method="post" action="" enctype="application/x-www-form-urlencoded" id="enquiry" class="form form-light" style="display: none;">
        <div class="title" style="font-size: 45px;">Make an enquiry</div>
	    <?php wp_nonce_field('my_form_action', 'my_form_nonce'); ?>
        <input type="hidden" name="action" value="handle_form">
        <input type="hidden" name="subject" value="Make an enquiry">
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
<?php endif; ?>


<?php
wp_footer();
?>
</div>