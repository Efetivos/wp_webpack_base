
const menuJs = function () {
    
    let menuOpen = false;
    let tlMenuMob = new TimelineMax({ paused: true })
        .from('.menu-mob', 1.2, { autoAlpha: 0, width: 0, ease: Power3.easeInOut, right: 0 })
        .staggerFrom('.box-logo-menu, .box-links-mob a', 1.2, { autoAlpha: 0, y: 80, ease: Power2.easeOut }, 0.1, '-=.2')
        .addPause().add('exitMenu')
        .to('.menu-mob', 1.6, { width: 0, ease: Power3.easeInOut, left: 0 })
        .to('.menu-mob a, .box-logo-menu, .desenvolvido', 1, { autoAlpha: 0, x: -50, ease: Power3.easeInOut }, '-=1.4')
        .add(function () { menuOpen = false })
        .to('.menu-mob', .00001, { autoAlpha: 0, width: 0, })
        .add(function () { $('.line').text('contato'); }, '-=.6');
    $('.holder-trg-menu, .menu-mob .box-links-mob a, .menu-mob').click(function () {
        if (!menuOpen) {
            menuOpen = true;
            
            tlMenuMob.play(0);
            $('.line').text('fechar');
        } else {
            tlMenuMob.play('exitMenu');
        }
    })
    $(".ctn-trigger-menu").click(function () {
        tlTriggerMenu.reversed(!tlTriggerMenu.reversed());
    });
    // // <!-- --------------- MENU DESK --------------- -->
    let tracoMenu = $('.traco-menu');
    TweenMax.set('.traco-menu', { scaleX: 0 })
    $('.link-menu-desk').hover(
        function () {
            TweenMax.to($(this).find('.traco-menu'), .6, { scaleX: 1, transformOrigin: 'left', ease: Power3.easeIn })
        }, function () {

            TweenMax.to($(this).find('.traco-menu'), .6, { scaleX: 0, transformOrigin: 'right', ease: Power3.easeOut })
        }
    );

    $('.year-js').text((new Date()).getFullYear())
    

}


module.exports = {
    menuJs
}