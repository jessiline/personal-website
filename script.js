
let isLaptop = window.matchMedia('(min-width: 992px)').matches;
let isMobile = window.matchMedia('(max-width: 992px)').matches;
//animasi gambar popup
$(document).ready(function() {
    $('img.replace').animate({ top: '108px', width : '300px' }, 700, function() {
        $(this).css('z-index', -1);
    });
    $('img.blkg').animate({ top: '108px', width : '300px' }, 700, function() {
        $(this).css('z-index', -1);
    });
    setTimeout(function(){
        $('img.depan').hover(
        function() {
            $('img.depan').stop().animate({opacity: 1}, 200);
        },
        function() {
            $('img.depan').stop().animate({opacity: 0}, 200);
        }
        );
    }, 1000);
    
});
// animasi tulisan h1 fade saat scroll
$(window).scroll(function(){
    let scrollPos = $(window).scrollTop();
    $(".hero .first").css("opacity", 1 - scrollPos/100);
    $(".hero .last").css("opacity", 1 - scrollPos/200);

    if(($(".navbar").offset().top >0) && isLaptop){
        $(".navbar").css("background-color", "rgba(255, 255, 255, 0.8)");
        $(".navbar").css("backdrop-filter", "blur(10px)");
    }
    else{
        $(".navbar").css("background-color", "transparent")
    }

});


// animasi skill section		
$(document).ready(function() {
    let skillSection = $('.skillSection').offset().top - $(window).height() / 1.5;
    
    $(window).on('scroll', function() {
        skillSection = $('.skillSection').offset().top - $(window).height() / 1.5;
        if ($(window).scrollTop() > skillSection) {
            requestAnimationFrame(moveSkills);
        }
    });

    function moveSkills() {
        let isLaptop = window.matchMedia('(min-width: 992px)').matches;
        let isMobile = window.matchMedia('(max-width: 992px)').matches;
        let js = $('.js'),
            css = $('.css'),
            php = $('.php');
            cSharp = $('.cSharp');
            sql = $('.sql');
            python = $('.python');

        let distance = $(window).scrollTop() - skillSection;

        let jsX = distance * 0.85,
            cssX = distance * 0.8,
            pythonX = distance * 0.7,
            phpX = distance * 0.5;
            cSharpX = distance * 1.7,
            sqlX = distance * 1.65;
            cSharpY = distance * 0.9,
            sqlY = distance * 1.35;
            cssY = distance * 0.6;
            phpY = distance * 0.2;

        if (distance <= 0) {
            js.css({'transform': 'none'});
            css.css({'transform': 'none'});
            php.css({'transform': 'none'});
            cSharp.css({'transform': 'none'});
            sql.css({'transform': 'none'});
            python.css({'transform': 'none'});
        }else if (distance >= 150 && isLaptop) {
            python.css({'transform': 'translate3d('+ 150 * 0.7 + 'px,' + -150 * 0.7 + 'px, 0) scale3d(1, 1, 1) rotateZ(' + -150 * 0.1 + 'deg) '});
            js.css({'transform': 'translate3d('+ -150 * 0.85 + 'px,' + -150 * 0.85 + 'px, 0) scale3d(1, 1, 1) rotateZ(' + 150 * 0.1 + 'deg) '});
            css.css({'transform': 'translate3d(' + 150 * 0.8 + 'px, ' + 150 * 0.6 + 'px, 0 ) scale3d(1, 1, 1) rotateZ(' + 150 * 0.1 + 'deg)'});
            php.css({'transform': 'translate3d(' + -150 * 0.5 + 'px, ' + 150 * 0.2 + 'px, 0) scale3d(1, 1, 1) rotateZ(' + -150 * 0.1 + 'deg)'});
            cSharp.css({'transform': 'translate3d(' + 150 * 1.7 + 'px, ' + -150 * 0.9 + 'px, 0)'});
            sql.css({'transform': 'translate3d(' + -150 * 1.65 + 'px, ' + -150 * 1.35 + 'px, 0) scale3d(1, 1, 1) rotateZ(' + -150 * 0.1 + 'deg)'});
        }else if (distance >= 75 && isMobile) {
            python.css({'transform': 'translate3d(' + 75 * 0.7 + 'px,' + 75 * 0.7 + 'px, 0) scale3d(1, 1, 1) rotateZ(' + -75 * 0.1 + 'deg)'});
            js.css({'transform': 'translate3d(' + -75 * 1.2 + 'px,' + 75 * 0.3 + 'px, 0) scale3d(1, 1, 1) rotateZ(' + -75 * 0.1 + 'deg)'});
            cSharp.css({'transform': 'translate3d(' + 75 * 0.9 + 'px, ' + 75 * 0.5 + 'px, 0)'});
            sql.css({'transform': 'translate3d(' + -75 * 1.5 + 'px, ' + 75 * 0.1 + 'px, 0) scale3d(1, 1, 1) rotateZ(' + -75 * 0.1 + 'deg)'});
            css.css({'transform': 'translate3d(' + 75 * 1.8 + 'px, ' + 75 * 0.8 + 'px, 0) scale3d(1, 1, 1) rotateZ(' + 75 * 0.1 + 'deg)'});
            php.css({'transform': 'translate3d(' + -75 * 1.9 + 'px, ' + 75 * 0.2 + 'px, 0) scale3d(1, 1, 1) rotateZ(' + -75 * 0.1 + 'deg)'});
        }else if(isLaptop) {
            python.css({'transform': 'translate3d(' + pythonX + 'px,' + -pythonX + 'px, 0) scale3d(1, 1, 1) rotateZ(' + -150 * 0.1 + 'deg) '});
            js.css({'transform': 'translate3d(' + -jsX + 'px,' + -jsX + 'px, 0) scale3d(1, 1, 1) rotateZ(' + 150 * 0.1 + 'deg) '});
            css.css({'transform': 'translate3d(' + cssX + 'px, ' + cssY + 'px, 0) scale3d(1, 1, 1) rotateZ(' + 150 * 0.1 + 'deg)'});
            php.css({'transform': 'translate3d(' + -phpX + 'px, ' + phpY + 'px, 0) scale3d(1, 1, 1) rotateZ(' + -150 * 0.1 + 'deg)'});
            cSharp.css({'transform': 'translate3d(' + cSharpX + 'px, ' + -cSharpY + 'px, 0)'});
            sql.css({'transform': 'translate3d(' + -sqlX + 'px, ' + -sqlY + 'px, 0) scale3d(1, 1, 1) rotateZ(' + -150 * 0.1 + 'deg)'});
        }else{
            python.css({'transform': 'translate3d(' + pythonX + 'px,' + pythonX + 'px, 0) scale3d(1, 1, 1) rotateZ(' + -75 * 0.1 + 'deg)'});
            js.css({'transform': 'translate3d(' + -distance * 1.2 + 'px,' + distance * 0.3 + 'px, 0) scale3d(1, 1, 1) rotateZ(' + -75 * 0.1 + 'deg)'});
            cSharp.css({'transform': 'translate3d(' + distance * 0.9 + 'px, ' + distance * 0.5 + 'px, 0)'});
            sql.css({'transform': 'translate3d(' + -distance * 1.5 + 'px, ' + distance * 0.1 + 'px, 0) scale3d(1, 1, 1) rotateZ(' + -75 * 0.1 + 'deg)'});
            css.css({'transform': 'translate3d(' + distance * 1.8 + 'px, ' + distance * 0.8 + 'px, 0) scale3d(1, 1, 1) rotateZ(' + 75 * 0.1 + 'deg)'});
            php.css({'transform': 'translate3d(' + -distance * 1.9 + 'px, ' + distance * 0.2 + 'px, 0) scale3d(1, 1, 1) rotateZ(' + -75 * 0.1 + 'deg)'});
        }
        requestAnimationFrame(moveSkills);
    }
});
		
