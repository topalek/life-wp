var c_def = {
    items: 1,
    loop: true,
    margin: 10,
    nav: true,
    dots: true,
    navText: ['&nbsp;', '&nbsp;']
};


(function ($) {
    $(document).ready(function ($) {
        $('.video-gallery').lightGallery({
            selector: '.fancybox',
            mode:   'lg-tube'
        });
        $('#photo').lightGallery({
            selector: '.photo-gallery-item',
            mode:   'lg-tube'
        });

        $('#nav-icon-close').click(function(){
            $(this).toggleClass('open');
            $(".nav-container").toggleClass('opened');
        });
        $('.portfolio-carousel').owlCarousel(c_def);

        $('.tab').on('shown.bs.tab', function (e) {
            console.log($(this).attr('href')+' .portfolio-carousel');
            $($(this).attr('href')+' .portfolio-carousel').owlCarousel(c_def)

        });

        $('.search_trigger,#close-search').click(function () {
            $('.header_search').toggleClass('active');
        });
        $('.send-email').on('click',function (e) {
            e.preventDefault();
            $(this).closest('form').submit();
        });
        $('#reviews .wp-pagenavi').on('click','.page, .last, .first',function (e) {
            e.preventDefault();
            var url = window.location.href,
                href = $(this).attr('href'),
                query = $(this).parents('.tab-pane').attr('id'),
                parent = $(this).parents('.tab-pane').find('.col-md-12').eq(0);
            $.post(url,{'url':href,'query':query},function (res) {
                parent.children().fadeOut(300,function () {
                    parent.html(res).fadeIn('slow')
                });
            });
        });
    });

    function carouselInit() {
        $('.owl-carousel').owlCarousel(c_def);
    }
})(jQuery);

