<!doctype html>
<html lang="en" translate="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rosella Floral Coast <?php wp_title('&mdash;');?></title>
    <?php
    wp_head();

    $header_class = '';
    $header_swimming = ' header--filter';
    if (is_post_type_archive('services')) {
        $header_class = 'header-services';
        $header_swimming = '';
    }
    ?>
</head>
<body <?php body_class('body-rosella');?>>

<div class="rosella">
    <div class="rosella-inner">

        <header class="header header--swimming <?=$header_swimming;?> header--border <?=$header_class;?>">
            <a href="<?=home_url();?>" class="logo">
                <img width="166" height="65" srcset="<?=THEME_PATH;?>/img/logos/logoX2.png 2x" src="<?=THEME_PATH;?>/img/logos/logoX1.png" decoding="async" alt="Rosella Floral Coast">
            </a>
            <button class="burger" aria-label="Toggle menu">
            <span class="open">
                <span></span>
                <span></span>
                <span></span>
            </span>

                <span class="close">
                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="1.25" width="25" height="1.66667" transform="rotate(45 1.25 0)" fill="white"/><rect width="25" height="1.66667" transform="matrix(-0.707107 0.707107 0.707107 0.707107 17.749 0)" fill="white"/></svg>
            </span>
            </button>
            <nav>
                <ul>
                    <li><a href="">About</a></li>
                    <li><a href="">Best Sellers</a></li>
                    <li><a href=""><svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L5 5L9 1" stroke="white" stroke-opacity="0.5"/>
                            </svg> Occasions</a></li>
                    <li><a href=""><svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L5 5L9 1" stroke="white" stroke-opacity="0.5"/>
                            </svg> Flowers</a></li>
                    <li><a href=""><svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L5 5L9 1" stroke="white" stroke-opacity="0.5"/>
                            </svg> Styles</a></li>
                    <li><a href=""><svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L5 5L9 1" stroke="white" stroke-opacity="0.5"/>
                            </svg> Collections</a></li>
                    <li><a href=""><svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L5 5L9 1" stroke="white" stroke-opacity="0.5"/>
                            </svg> Price</a></li>
                    <li><a href="/contact-us/">Contacts</a></li>
                </ul>
            </nav>
            <div class="header-contacts">
                <div class="left">
                    <a href="tel:<?= get_field('phone', 'option');?>" class="phone"><?= get_field('phone', 'option');?></a>
                </div>

                <div class="right">
                    <a href="#" class="search-icon"><svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19 18.6611L25.0002 24.6611" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M1 10.9469C1 16.6275 5.6052 21.2326 11.286 21.2326C14.1313 21.2326 16.7069 20.0773 18.569 18.2103C20.4248 16.3498 21.572 13.7823 21.572 10.9469C21.572 5.26621 16.9668 0.661133 11.286 0.661133C5.6052 0.661133 1 5.26621 1 10.9469Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg></a>
                    <a href="#" class="personal-icon"><svg width="23" height="26" viewBox="0 0 23 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 24.6611V23.1611C1 17.3621 5.70102 12.6611 11.5 12.6611C17.299 12.6611 22 17.3621 22 23.1611V24.6611" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M11.5 12.6611C14.8137 12.6611 17.5 9.97476 17.5 6.66112C17.5 3.34741 14.8137 0.661133 11.5 0.661133C8.18629 0.661133 5.5 3.34741 5.5 6.66112C5.5 9.97476 8.18629 12.6611 11.5 12.6611Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg></a>
                    <div class="cart-wrapper">
                        <a href="#" class="cart-icon"><svg width="26" height="27" viewBox="0 0 26 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M23.0506 10.2997L24.9672 22.7998C25.2252 24.4824 23.9277 25.9999 22.231 25.9999H3.76901C2.07229 25.9999 0.774784 24.4824 1.03279 22.7998L2.94938 10.2997C3.15716 8.94464 4.31921 7.94434 5.68562 7.94434H20.3145C21.6808 7.94434 22.8429 8.94464 23.0506 10.2997Z" fill="white" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M15.7673 3.77778C15.7673 2.24365 14.5279 1 12.9989 1C11.4699 1 10.2305 2.24365 10.2305 3.77778" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg><span class="cart-count">3</span></a>
                        <div class="cart-content">
                            <div class="cart-top">
                                <div class="cart-counter">You CART <span>(3)</span></div>
                                <button aria-label="Close cart" class="cart-close"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.550781 17.4492L8.7754 9.22463M8.7754 9.22463L17 1M8.7754 9.22463L0.550781 1M8.7754 9.22463L17 17.4492" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg></button>
                            </div>
                            <div class="cart cart-bottom">
                                <div class="cart-item">
                                    <a href="#" class="cart-image">
                                        <img src="<?=THEME_PATH;?>/img/cart/cart-item.jpg" alt="" width="57" height="59">
                                    </a>
                                    <div class="cart-product">
                                        <a href="#">Breadseed Poppy Frosted Salmon</a>
                                    </div>
                                    <div class="cart-amount">
                                        <button aria-label="Plus" class="plus"><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.6785 10H4.3215V5.7113H0V4.30962H4.3215V0H5.6785V4.30962H10V5.7113H5.6785V10Z" fill="black" fill-opacity="0.3"/>
                                            </svg></button>
                                        <input class="cart-input" type="number" readonly name="amount" value="3">
                                        <button aria-label="Minus" class="minus"><svg width="10" height="2" viewBox="0 0 10 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 1.71124H4.3215H5.6785H10V0.30957H5.6785H4.3215H0V1.71124Z" fill="black" fill-opacity="0.3"/>
                                            </svg></button>
                                    </div>
                                    <div class="cart-actions">
                                        <div class="cart-price">$130</div>
                                        <button aria-label="Remove from cart" class="cart-remove">
                                            Remove
                                        </button>
                                    </div>
                                </div>
                                <div class="cart-item">
                                    <a href="#" class="cart-image">
                                        <img src="<?=THEME_PATH;?>/img/cart/cart-item.jpg" alt="" width="57" height="59">
                                    </a>
                                    <div class="cart-product">
                                        <a href="#">Breadseed Poppy Frosted Salmon</a>
                                    </div>
                                    <div class="cart-amount">
                                        <button aria-label="Plus" class="plus"><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.6785 10H4.3215V5.7113H0V4.30962H4.3215V0H5.6785V4.30962H10V5.7113H5.6785V10Z" fill="black" fill-opacity="0.3"/>
                                            </svg></button>
                                        <input class="cart-input" type="number" readonly name="amount" value="3">
                                        <button aria-label="Minus" class="minus"><svg width="10" height="2" viewBox="0 0 10 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 1.71124H4.3215H5.6785H10V0.30957H5.6785H4.3215H0V1.71124Z" fill="black" fill-opacity="0.3"/>
                                            </svg></button>
                                    </div>
                                    <div class="cart-actions">
                                        <div class="cart-price">$30</div>
                                        <button aria-label="Remove from cart" class="cart-remove">
                                            Remove
                                        </button>
                                    </div>
                                </div>
                                <div class="cart-item">
                                    <a href="#" class="cart-image">
                                        <img src="<?=THEME_PATH;?>/img/cart/cart-item.jpg" alt="" width="57" height="59">
                                    </a>
                                    <div class="cart-product">
                                        <a href="#">Breadseed Poppy Frosted Salmon</a>
                                    </div>
                                    <div class="cart-amount">
                                        <button aria-label="Plus" class="plus"><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.6785 10H4.3215V5.7113H0V4.30962H4.3215V0H5.6785V4.30962H10V5.7113H5.6785V10Z" fill="black" fill-opacity="0.3"/>
                                            </svg></button>
                                        <input class="cart-input" type="number" readonly name="amount" value="3">
                                        <button aria-label="Minus" class="minus"><svg width="10" height="2" viewBox="0 0 10 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 1.71124H4.3215H5.6785H10V0.30957H5.6785H4.3215H0V1.71124Z" fill="black" fill-opacity="0.3"/>
                                            </svg></button>
                                    </div>
                                    <div class="cart-actions">
                                        <div class="cart-price">$230</div>
                                        <button aria-label="Remove from cart" class="cart-remove">
                                            Remove
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <button class="button button--subtotal">
                                <span>Subtotal</span>
                                <span class="subtotal-amount">$328</span>
                                <span>
                            <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="17" cy="17" r="16.5" transform="rotate(90 17 17)" stroke="white"/>
                                <path d="M15.381 13.7618L18.6191 16.9999L15.381 20.238" stroke="white"/>
                            </svg>
                        </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>