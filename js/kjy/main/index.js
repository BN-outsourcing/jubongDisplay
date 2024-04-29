"use strict"

import { useIsMobile } from "../constant/responsive.js";
import section01 from "./section01/section01.js"
import section02 from "./section02/section02.js";
import section04 from "./section04/section04.js";

gsap.registerPlugin(ScrollTrigger,ScrollSmoother);

let smoother = undefined;

$(window).resize(function(){

    if(!useIsMobile() && window.innerWidth >= 821){

        smoother = ScrollSmoother.create({
            smooth: 1,
            effects: true,
            smoothTouch: 0,
        });

    }else{

        if(smoother){
            smoother.kill();
            smoother = undefined;
        }

    }

}).resize();

section01();
section02();
section04();