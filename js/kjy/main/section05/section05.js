"use strict"

import { isDesktop, isMobile } from "../../constant/responsive.js";

gsap.registerPlugin(ScrollTrigger);

export default ()=>{

    ScrollTrigger.create({
        trigger : "._main .section05",
        // markers : true,
        start : "top top",
        onEnter : ()=>{
            $('.header').removeClass("on");
        },
        onLeaveBack : ()=>{
            $('.header').addClass("on");
        }
    });


    const mm = gsap.matchMedia();

    mm.add({
        isDesktop,
        isMobile
    },(context)=>{

        const {} = context.conditions;

        $('._main .section05 .grid .col').each((_,e)=>{

            gsap.set(e,{
                z : 'random(-600, -4000)',
                rotateX : 'random(0, -50)',
                scaleY : 'random(1, 1.2)',
                xPercent : `random(-50, -50)`,
                yPercent : `random(-50, 100)`,
                transformOrigin: "50% 0%"
            })
    
        });
    
        const ab = gsap.timeline({
            scrollTrigger : {
                trigger : "._main .section05",
                start : "top center",
                end : "center center",
                scrub : true,
                // markers : true
            }
        })
    
        ab.fromTo('._main .section05 .grid',{
            yPercent : 75
        },{
            yPercent : 0,
            
        },'b');
    
        $('._main .section05 .tbx dd .p span').each((i,e)=>{
            ab.to(e,{
                clipPath: "inset(0% 0% 0% 0%)"
            },i === 0 ? 'b' : "b+=50%");
        })
    
    
        const tl = gsap.timeline({
            scrollTrigger : {
                trigger : "._main .section05",
                start : isDesktop ? "top top+=25%" : "top top",
                end : "bottom center",
                /* pin : true,
                pinSpacing : true, */
                scrub : true,
                // markers : true
            }
        });
        
        $('._main .section05 .grid .col').each((_,e)=>{
    
            tl.to(e,{
                rotateX : 0,
                scaleY : 1,
                xPercent : 0,
                yPercent : 0,
                transformOrigin: "50% 0%"
            },'a');
    
        });
    
        tl.fromTo('._main .section05 .grid',{
            z : 0
        },{
            z : 6500
        },'a');

    })


}