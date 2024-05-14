"use strict"

import { useIsMobile } from "../../../kjy/constant/responsive.js";

gsap.registerPlugin(ScrollTrigger,ScrollSmoother);

export let smoother;

// smooth scroll
if(!useIsMobile()){
    smoother = ScrollSmoother.create({
        smooth: 1,
    });
}


// header show
$('.header').removeClass('hide');


// cursor point
export const cursorPoint = (e)=>{
    const {clientX,clientY} = e;
    gsap.to('.cursor-point',{
        left : clientX - ($('.cursor-point').width()/2),
        top : clientY - ($('.cursor-point').height()/2)
    });
}

$(window).on('mousemove',cursorPoint); // init



// hamburger menu
let chk = 0;

$('.header .menu').click(function(){

    if(chk === 0){

        $(this).addClass('on');

        $('.mob-menu').addClass('on');

        chk = 1;

    }else{

        $(this).removeClass('on');
        $('.mob-menu').removeClass('on');

        chk = 0;

    }

});


// subtab motion
gsap.timeline()
.from('._sub .subTitle h1', { opacity: 0, y: 40, duration: .6 })
.from('._sub .subTitle .subTab li', { opacity: 0, y: 40, duration: .6, stagger: .1 }, '-=80%')