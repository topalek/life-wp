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
        $('#wedding .portfolio-carousel').owlCarousel(c_def);

        $('.tab').on('shown.bs.tab', function (e) {
            console.log($(this).attr('href')+' .portfolio-carousel');
            $($(this).attr('href')+' .portfolio-carousel').owlCarousel(c_def)

        });

        $('.search_trigger,#close-search').click(function () {
            $('.header_search').toggleClass('active');
        })
    });
    function carouselInit() {
        $('.owl-carousel').owlCarousel(c_def);
    }
})(jQuery);

