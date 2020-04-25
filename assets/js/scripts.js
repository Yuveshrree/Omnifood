$(document).ready(function() {
    
    //Sticky Navigation    
    $('.js-features').waypoint(function(direction) {
        if(direction == "down") {
            $('nav').addClass('sticky');
        } else {
            $('nav').removeClass('sticky');
        }
    }, {
        offset: '60px' //The sticky class appears 60px above the features section
    });

    // Scroll to sections
    $('.js-scroll-to-plan').click(function() {
        $('html, body').animate({scrollTop: $('.js-plans').offset().top }, 1500)
    });
    
    $('.js-scroll-to-start').click(function() {
        $('html, body').animate({scrollTop: $('.js-features').offset().top }, 700)
    });

    //Navigation Scroll
    $('a[href*="#"]').on('click', function(e) {
        e.preventDefault()
        $('html, body').animate(
          { scrollTop: $($(this).attr('href')).offset().top }, 1000)
      });

    // Animations on Scroll
    $('.js-fadeIn').waypoint(function(direction) {
        $('.js-fadeIn').addClass('animated fadeIn');
    }, {
        offset: '60%' //When the section is loaded 40%, the animation appears
    });

    $('.js-fadeInUp').waypoint(function(direction) {
        $('.js-fadeInUp').addClass('animated fadeInUp');
    }, {
        offset: '60%' //When the section is loaded 40%, the animation appears
    });

    $('.js-fadeIn-1').waypoint(function(direction) {
        $('.js-fadeIn-1').addClass('animated fadeIn');
    }, {
        offset: '60%' //When the section is loaded 40%, the animation appears
    });

    $('.js-pulse').waypoint(function(direction) {
        $('.js-pulse').addClass('animated pulse');
    }, {
        offset: '60%' //When the section is loaded 40%, the animation appears
    });
});