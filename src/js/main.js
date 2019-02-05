
const sayHelloTo = function (ScrollMagic) {
    TweenMax.from('.img-header', 3,{scale: 1.3, opacity:0 , ease: Power3.easeInOut, delay: .5})
    TweenMax.from('header h1', 1.2,{ yPercent: 400, opacity: 0, delay: .5})
    

}


module.exports = {
    sayHelloTo
}