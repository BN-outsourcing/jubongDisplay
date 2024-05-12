"use strict"

import { useIsMobile } from "../constant/responsive.js";
import section01 from "./section01/section01.js"
import section02 from "./section02/section02.js";
import section03 from "./section03/section03.js";
import section04 from "./section04/section04.js";
import section05 from "./section05/section05.js";
import section06 from "./section06/section06.js";

gsap.registerPlugin(ScrollTrigger,ScrollSmoother);

export let smoother;

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
    });
}

let OFFSET = 0;
let chk = 0;

export const headerMove = ()=>{
    
    const scrollTo = $(window).scrollTop();

    if(scrollTo >= OFFSET){
        $('.header').addClass("hide");
        $('.header .menu').removeClass('on');
        $('.mob-menu').removeClass('on');
        chk = 0;
    }else{
        $('.header').removeClass("hide");
    }
    
    OFFSET = $(window).scrollTop();

}

if(!useIsMobile()){
    $(window).on('scroll',headerMove);
}

$(window).on('mousemove',cursorPoint);

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

window.addEventListener('DOMContentLoaded',function(){
    section01();
    section02();
    section03();
    section04();
    section05();
    section06();
});