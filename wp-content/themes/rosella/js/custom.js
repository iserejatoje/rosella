$('.read-more').click(function (e) {
    $(this).parents('.seo-page').find('.excerpt').remove();
    $(this).parents('.seo-page').find('.fulltext').show();
    e.preventDefault();
})

$('form').submit(function (e) {
    let $form = $(this)
    $.ajax({
        url: wp_theme_settings.ajax_url,
        type: 'POST',
        data: $(this).serialize(),
        dataType: 'json',
        success: function () {
            $form[0].reset();
            new Fancybox(
                [
                    {
                        src: "<form action='' style='max-width: 520px;\n" +
                            "    line-height: 160%;\n" +
                            "    font-size: 30px;\n" +
                            "    min-height: 380px;\n" +
                            "    background-size: cover;\n" +
                            "    background-position: center;\n" +
                            "    color: #fff;\n" +
                            "    width: 100%;\n" +
                            "    display: grid;\n" +
                            "    place-content: center;'>Request has been sended!</form>",
                        type: "html",
                    },
                ],
                {
                    mainClass: 'form',
                    hideScrollbar: true,
                    tpl: {
                        closeButton: '<button data-fancybox-close class="f-button is-close-btn" title=""><svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="1.42188" y="0.822266" width="41.5778" height="0.848526" transform="rotate(45 1.42188 0.822266)" fill="white"/><rect x="0.820312" y="30.2222" width="41.5778" height="0.848526" transform="rotate(-45 0.820312 30.2222)" fill="white"/></svg></button>'
                    },
                    on: {
                        "close": (fancybox, eventName) => {
                            Fancybox.close(true);
                        },
                    }
                }
            )
        }
    })
    e.preventDefault();
})