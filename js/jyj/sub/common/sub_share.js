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
