$(function () {
    if (typeof Fancybox !== 'undefined') {
        Fancybox.bind("[data-fancybox]", {
            tpl: {
                closeButton: '<button data-fancybox-close class="f-button is-close-btn" title=""><svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="1.42188" y="0.822266" width="41.5778" height="0.848526" transform="rotate(45 1.42188 0.822266)" fill="white"/><rect x="0.820312" y="30.2222" width="41.5778" height="0.848526" transform="rotate(-45 0.820312 30.2222)" fill="white"/></svg></button>'
            },
            dragToClose: false,
            Images: {
                zoom: false,
            },
            hideScrollbar: false,
        });

        $('.button-add').click(function (e) {
            Fancybox.close(true)
        })
    }

    function getExtraPrices() {
        let extraPrices = '';
        $('.extra-grid input:checked').each(function () {
            extraPrices += '<div class="extra"><span>+$'+$(this).attr('data-price')+'</span> '+$(this).val()+'</div>'
        })
        $('.extra-amount').html(extraPrices)
    }

    getExtraPrices();

    $('.extra-grid input').change(function () {
        getExtraPrices()
    })

    if (typeof Swiper !== 'undefined') {
        new Swiper('.gift-categories', {
            slidesPerView: 'auto',
            freeMode: true,
            speed: 500,
        })
        new Swiper('.partners-slider .swiper', {
            maxBackfaceHiddenSlides: 5,
            autoplay: {
                delay: 5000,
            },
            slidesPerView: 5,
            speed: 800,
            navigation: {
                nextEl: '.partners-slider .next',
                prevEl: '.partners-slider .prev',
            },
        })
        const productSwiper = new Swiper('.product-gallery .swiper', {
            slidesPerView: 1,
            speed: 500
        })

        productSwiper.on('slideChange', function (e) {
            $('.thumbnails a').eq(e.realIndex).addClass('active').siblings().removeClass('active')
        });

        $('.thumbnails a').click(function (e) {
            $(this).addClass('active').siblings().removeClass('active');
            productSwiper.slideTo($(this).index())
            e.preventDefault()
        })

        $('.gift-categories a').click(function (e) {
            $(this).addClass('active').parent().siblings().find('a').removeClass('active');
            $('.gifts-pages .page').eq($(this).parent().index()).show().siblings().hide()
            e.preventDefault()
        })
    }

    if (typeof IMask !== 'undefined') {
        const phoneMask = document.querySelectorAll('[type="tel"]')
        phoneMask.forEach(element => IMask(element, {
            mask: '{61} (00) 0000 0000'
        }))
    }

    $('form').submit(function (e) {
        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            success: function (data) {
                console.log(data);
            }
        })
        e.preventDefault();
    })

    $('.cart-icon').click(function () {
        $(this).next().toggleClass('cart-open');
        return false
    })

    $('[name="color"]').change(function () {
        $('[data-color]').html($(this).val())
    })

    $('.variant-items button').click(function () {
        $(this).addClass('active').siblings().removeClass('active')
        return false
    })

    $('.faq-button').click(function () {
        $(this).next().slideToggle(300);
        $(this).toggleClass('open');
        return false
    })

    $('.cart-close').click(function () {
        $('.cart-content').removeClass('cart-open');
    })

    $('.product-cards .remove').click(function () {
        $(this).parent().remove()
    })

    $(document).on('click', function (event) {
        if (!$(event.target).closest('.cart-content').length) {
            $('.cart-content').removeClass('cart-open');
        }
    });

    $('.cart-remove').click(function () {
        let $cart = $(this).parents('.cart-item');
        let $cartBlock = $(this).parents('.cart-bottom');
        let $items = $cartBlock.find('.cart-item');

        let items_length = $items.length;
        if (items_length < 2) {
            $('.header .button--subtotal').hide()
        }
        $(this).parents('.cart-item').slideUp(300, function () {
            let items_length = $items.length;
            if (items_length < 2) {
                $('.header .cart-bottom').html('<span style="opacity: .5; display: block;">Cart is empty</span>')
                $('.cart-page .cart-bottom').html('<span style="opacity: .5; display: block; padding-top: 10px;">Cart is empty</span>')
                $('.cart-page .column:first-child').html('<div class="large-title">Cart is empty</div>');
                $('.cart-page .column:last-child').remove()
            }

            $cart.remove();
            let items_length_after = $('.cart-bottom .cart-item').length;
            $('.cart-counter span').html(items_length_after ? '(' + items_length_after + ')' : '');
            $('.cart-count').html(items_length_after);

        })
        return false
    })

    $('.cart-amount .plus').click(function () {
        $(this).parents('.cart-amount').find('.cart-input').get(0).value++
    })

    $('.product-tabs button').click(function () {
        $(this).addClass('active').siblings().removeClass('active')
        $('.products-content .page').eq($(this).index()).show().siblings().hide()
    })

    $('.info-item > button').click(function () {
        $(this).parents('.info-item').find('.information-block').slideToggle(400)
        $(this).parents('.info-item').toggleClass('active')
    })

    $('.cart-amount .minus').click(function () {
        if ($(this).parents('.cart-amount').find('.cart-input').val() > 1)
            $(this).parents('.cart-amount').find('.cart-input').get(0).value--
    })

    function initHeaderEvents() {
        function init() {
            if ($(window).scrollTop() >= 90) {
                $('header').addClass('small');
            } else {
                $('header').removeClass('small');
            }
            if ($(window).scrollTop() >= 10) {
                $('.header-faq,.header-blog, .header-service, .header-cart .header, .header-contact-us, .header-yellow header, .header-article header').addClass('header--blur');
            } else {
                $('.header-faq, .header-blog, .header-service, .header-cart .header, .header-contact-us, .header-yellow header, .header-article header').removeClass('header--blur');
            }
        }
        init();
        $(window).scroll(function (e) {
            init();
        })
    }

    const sections = document.querySelectorAll('.service');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                $(entry.target).css({'opacity': '1'});
            }
        });
    }, {
        root: null,
        threshold: 0.5,
    });
    sections.forEach((section) => {
        observer.observe(section);
    });

    const sectionsFooter = document.querySelectorAll('.footer .seo-page');
    const observerFooter = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                $(entry.target).css({'opacity': '1'});
            }
        });
    }, {
        root: null,
        threshold: 0.7,
    });
    sectionsFooter.forEach((section) => {
        observerFooter.observe(section);
    });

    const sectionsAnimation = document.querySelectorAll('.faqs .faq-item, .article-list .article, .gallery .gallery-item, .contact-us-service');
    const observerAnimation = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                $(entry.target).css({'opacity': '1'});
            }
        });
    }, {
        root: null,
        threshold: 0.35,
    });
    sectionsAnimation.forEach((section) => {
        observerAnimation.observe(section);
    });

    const imageRowAnimation = document.querySelectorAll('.images-grid .row');
    const observerImageRowAnimation = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                $(entry.target).css({'opacity': '1'});
            }
        });
    }, {
        root: null,
        threshold: 0.4,
    });
    imageRowAnimation.forEach((section) => {
        observerImageRowAnimation.observe(section);
    });

    const partnersAnimation = document.querySelectorAll('.partners .container');
    const observerPartners = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                $(entry.target).css({'opacity': '1'});
            }
        });
    }, {
        root: null,
        threshold: 0.6,
    });
    partnersAnimation.forEach((section) => {
        observerPartners.observe(section);
    });

    initHeaderEvents();

})