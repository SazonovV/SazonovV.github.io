  $(document).ready(function () {



    $('.main-menu ul li a[href*="#"], .mobile-menu ul li a[href*="#"]').on('click', function(event){
        event.preventDefault();
        var margin = $('.header').outerHeight();
        var anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $(anchor.attr('href')).offset().top - margin
        }, 8000);
    });

  }