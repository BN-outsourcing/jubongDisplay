"use strict"

import { useIsMobile } from "../constant/responsive.js";
import section01 from "./section01/section01.js"
import section02 from "./section02/section02.js";
import section03 from "./section03/section03.js";
import section04 from "./section04/section04.js";
import section05 from "./section05/section05.js";
import section06 from "./section06/section06.js";

gsap.registerPlugin(ScrollTrigger,ScrollSmoother);

let smoother;

if(!useIsMobile()){
    smoother = ScrollSmoother.create({
        smooth: 1,
    });
}

export const cursorPoint = (e)=>{
    const {clientX,clientY} = e;
    gsap.to('.cursor-point',{
        left : clientX - ($('.cursor-point').width()/2),
        top : clientY - ($('.cursor-point').height()/2)
    })
}

$('#top').click(function(){
    gsap.to(window,{duration : 1, scrollTo: 0});
});

$(window).on('mousemove',cursorPoint);

window.addEventListener('DOMContentLoaded',function(){
    section01();
    section02();
    section03();
    section04();
    section05();
    section06();
});