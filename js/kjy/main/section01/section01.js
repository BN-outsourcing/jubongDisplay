"use strict"

import { isDesktop, isMobile } from "../../constant/responsive.js";

export default ()=>{

    /* gsap.set('.header',{
        yPercent : -100,
        opacity : 0
    }); */

    new Swiper('._main .section01 .move .up_scale .movie_video .swiper', {
        speed: 600,
        spaceBetween: 0,
    });

    gsap.from('.section01 .move',{
        clipPath: "circle(0% at 50% 50%)",
        delay : 0.5,
        duration : 2,
    });

    $('.section01 .move .up_scale .movie_video ul li').each((i,e)=>{
        gsap.set(e,{
            y : 100,
            opacity : 0
        })
    });

    const mm = gsap.matchMedia();

    mm.add({isDesktop,isMobile},(context)=>{

        const { isDesktop } = context.conditions;

        gsap.timeline({
            scrollTrigger : {
                trigger : ".section01",
                markers : true,
                pin : true,
                pinType : isDesktop ? "transform" : "fixed",
                scrub : true,
                end : "+=200%"
            }
        })
        .to('.section01 .move h1',{
            opacity : 0,
            duration : 0.5
        },'a')
        .to('.section01 .move .up_scale .scrollDown',{
            opacity : 0,
            duration : 0.5
        },'a')
        .from(".section01 .up_scale",{
            top: ()=>`${700/980*100}%`,
        },'a+=25%')
        .from(".section01 .up_scale .movie_video",{
            borderRadius: '220 220 0 0',
            width : ()=>`${1465/1920*100}%`,
            onComplete : ()=>{
                const tl = gsap.timeline();
                $('.section01 .move .up_scale .movie_video ul li').each((i,e)=>{
                    tl.to(e,{
                        y : 0,
                        opacity : 1
                    })
                })
            }
        });

    });

}