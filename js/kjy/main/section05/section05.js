"use strict"

import { isDesktop, isMobile } from "../../constant/responsive.js";

gsap.registerPlugin(ScrollTrigger);

export default ()=>{

    ScrollTrigger.create({
        trigger : "._main .section05",
        start : "top top",
        invalidateOnRefresh : true,
        onEnter : ()=>{
            $('.header').removeClass("on");
        },
        onLeaveBack : ()=>{
            $('.header').addClass("on");
        }
        // markers : true,
    });


    const tl = gsap.timeline({
        scrollTrigger : {
            trigger : "._main .section05 .tbx",
            endTrigger : "._main .section05",
            start : "center center",
            end : "bottom bottom",
            pin : true,
            pinSpacing : false,
            scrub : 1,
        }
    })

    $('._main .section05 .tbx dd .p span').each((i,e)=>{
        tl.to(e,{
            clipPath: "inset(0% 0% 0% 0%)"
        },i === 0 ? 'c' : "c+=50%");
    });


    gsap.timeline({
        scrollTrigger : {
            trigger : "._main .section05",
            endTrigger : "._main .section05",
            // markers : true,
            start : "top center",
            end : "bottom top",
            scrub : 1,
        }
    })
    .to('._main .section05 .h-grid .grid .col',{
        x : (index, target, targets)=>{
            if(gsap.getProperty(target,"x") > 0){
                return "+=random(50%, 150%)"
            }else{
                return "-=random(50%, 150%)"
            }
        },
        y : (index, target, targets)=>{
            if(gsap.getProperty(target,"y") > 0){
                return "+=random(50%, 150%)"
            }else{
                return "-=random(50%, 150%)"
            }
        }
    },'a')
    .to('._main .section05 .h-grid .grid .col',{
        x : (index, target, targets)=>{
            if(gsap.getProperty(target,"x") > 0){
                return "+=random(50%, 150%)"
            }else{
                return "-=random(50%, 150%)"
            }
        },
        y : (index, target, targets)=>{
            if(gsap.getProperty(target,"y") > 0){
                return "+=random(50%, 150%)"
            }else{
                return "-=random(50%, 150%)"
            }
        }
    },'a+=25%')
    .from('._main .section05 .h-grid .grid .col',{
        opacity : 0.5
    },'a')
    .to('._main .section05 .h-grid .grid',{
        z : 7000,
        xPercent : -25,
        yPercent : -15,
    },"a+=25%")

}