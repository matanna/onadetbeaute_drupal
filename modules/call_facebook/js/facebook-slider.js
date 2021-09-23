jQuery(document).ready(function() {
    console.log('ok');
    jQuery('.bloc-iframes').slick({
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 4,
    responsive: [
        {
        breakpoint: 1366,
        settings: {
            arrows: true,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 3
        }
        },
        {
        breakpoint: 1200,
        settings: {
            arrows: true,
            centerMode: true,
            centerPadding: '100px',
            slidesToShow: 2
        }
        },
        {
        breakpoint: 992,
        settings: {
            arrows: true,
            centerMode: true,
            centerPadding: '100px',
            slidesToShow: 1
        }
        },
        {
        breakpoint: 768,
        settings: {
            arrows: true,
            centerMode: true,
            centerPadding: '10px',
            slidesToShow: 1
        }
        },
        {
        breakpoint: 587,
        settings: {
            arrows: true,
            centerMode: true,
            centerPadding: '50px',
            slidesToShow: 1
        }
        },
        {
        breakpoint: 480,
        settings: {
            arrows: true,
            centerMode: true,
            centerPadding: '10px',
            slidesToShow: 1
        }
        }
        ]
    });
});