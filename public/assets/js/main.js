(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();


    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Sidebar Toggler
    $('.sidebar-toggler').click(function () {
        $('.sidebar, .content').toggleClass("open");
        return false;
    });


    // Progress Bar
    $('.pg-bar').waypoint(function () {
        $('.progress .progress-bar').each(function () {
            $(this).css("width", $(this).attr("aria-valuenow") + '%');
        });
    }, {offset: '80%'});


    // Calender
    $('#calender').datetimepicker({
        inline: true,
        format: 'L'
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        items: 1,
        dots: true,
        loop: true,
        nav : false
    });


    //Product update
    $("#productUpdate").change(function (){
        var id=this.value;
        if(id!=0) {
            $.ajax({
                type: 'GET',
                url: '/adminUpdate/{id}',
                data: {
                    id: id
                },
                success: function (data) {
                    data.forEach(el => {
                        $("#nameUpdate").val(el.name);
                        $("#priceUpdate").val(el.price);
                        $("#genreUpdate").val(el.genre_id);
                        $("#publisherUpdate").val(el.publisher_id);
                        $("#categoryUpdate").val(el.category_id);
                        $("#descriptionUpdate").val(el.description);
                        $("#imageLinkUpdate").val(el.imagelink);
                        $("#releaseDateUpdate").val(el.release_date);
                    });
                },
                error: function (xhr) {
                    console.log(xhr);
                }

            });
        }
    });


})(jQuery);

