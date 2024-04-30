"use strict"

import { useIsMobile } from "../constant/responsive.js";
import section01 from "./section01/section01.js"
import section02 from "./section02/section02.js";
import section03 from "./section03/section03.js";
import section04 from "./section04/section04.js";
import section05 from "./section05/section05.js";
import section06 from "./section06/section06.js";

gsap.registerPlugin(ScrollTrigger,ScrollSmoother);

let smoother = ScrollSmoother.create({
    smooth: 1,
});

smoother.paused(true);

$(window).resize(function(){

    if(window.innerWidth >= 821 && !useIsMobile()){
        console.log(1);

        if(smoother === undefined){
            smoother = ScrollSmoother.create({
                smooth: 1,
            });
            ScrollTrigger.refresh();
        }
        
    }else{
        
        if(smoother){
            smoother.kill();
            smoother = undefined;
        }

    }

}).resize();

if(smoother){
    smoother.paused(false);
}

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