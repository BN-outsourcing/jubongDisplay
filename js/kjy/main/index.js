"use strict"

import section01 from "./section01/section01.js"
import section02 from "./section02/section02.js";
import section03 from "./section03/section03.js";
import section04 from "./section04/section04.js";
import section05 from "./section05/section05.js";
import section06 from "./section06/section06.js";

gsap.registerPlugin(ScrollTrigger,ScrollSmoother);

const smoother = ScrollSmoother.create({
    smooth: 1,
    effects: true,
    smoothTouch: false
});

smoother.scrollTop(0);

export const cursorPoint = (e)=>{
    const {clientX,clientY} = e;
    gsap.to('.cursor-point',{
        left : clientX - ($('.cursor-point').width()/2),
        top : clientY - ($('.cursor-point').height()/2)
    })
}

$(window).on('mousemove',cursorPoint);

section01();
section02();
section03();
section04();
section05();
section06();