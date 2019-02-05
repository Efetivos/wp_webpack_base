//* --------------- STYLE
const css = require('./sass/app.sass');

//* --------------- LIBS
import { TweenMax } from 'gsap'
import scrollToPlugin from 'gsap/scrollToPlugin'
import ScrollMagic from 'scrollmagic'
import 'ScrollMagicGSAP'


//* --------------- JS
const { sayHelloTo } = require('./js/main.js');
const { menuJs } = require('./js/menu.js');
const { searchJs } = require('./js/search.js');



//* --------------- JS
sayHelloTo(ScrollMagic)
menuJs()
searchJs()
