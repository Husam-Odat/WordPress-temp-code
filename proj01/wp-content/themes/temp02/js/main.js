// jquery function
jQuery(function ($) {
    $('.single-post').slick(
        {
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            adaptiveHeight: true,
            autoplay: true,
            // autoplaySpeed: 2000

            // infinite: true,
            // slidesToShow: 3,
            // slidesToScroll: 3
        }
    );
    $('.multiple-posts').slick({
        dots: true,
        infinite: true,
        speed: 600,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });


    $('.slider-posts-container').slick({
        dots: true,
        infinite: true,
        speed: 600,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
});