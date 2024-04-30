"use strict"

import { isDesktop, isMobile } from "../../constant/responsive.js";

gsap.registerPlugin(ScrollTrigger);

export default ()=>{

    ScrollTrigger.create({
        trigger : "._main .section06",
        // markers : true,
        start : "top top",
        onEnter : ()=>{
            $('.header').addClass("on");
        },
        onLeaveBack : ()=>{
            $('.header').removeClass("on");
        }
    });

    const mm = gsap.matchMedia();

    mm.add({
        isDesktop,
        isMobile
    },(context)=>{

        const { isDesktop } = context.conditions;

        gsap.timeline({
            scrollTrigger : {
                trigger : "._main .section06 .tbx",
                start : isDesktop ? "top center" : "top bottom-=10%",
                // markers : true,
            }
        })
        .set('._main .section06 .tbx dl dd p:nth-of-type(2)',{
            backgroundPosition: 'left 0px top 100px'
        })
        .fromTo('._main .section06 .tbx dl dt',{
            y : 100,
            opacity : 0
        },{
            y : 0,
            opacity : 1
        })
        .fromTo('._main .section06 .tbx dl dd',{
            y : 100,
            opacity : 0
        },{
            y : 0,
            opacity : 1,
            onComplete : ()=>{
    
                gsap.timeline({
                    defaults : {
                        ease : "none",
                        duration : 1,
                    },
                })
                .to('._main .section06 .tbx dl dd p:nth-of-type(2)',{
                    backgroundPosition: 'left 400px top -20px'
                })
                .to('._main .section06 .tbx dl dd p:nth-of-type(2)',{
                    backgroundPosition: 'left 800px top -20px'
                })
                .to('._main .section06 .tbx dl dd p:nth-of-type(2)',{
                    backgroundPosition: 'left 1200px top -40px'
                })
                .to('._main .section06 .tbx dl dd p:nth-of-type(2)',{
                    backgroundPosition: isDesktop ? 'left 1800px top -60px' : 'left 1800px top -80px'
                })
    
            }
        })
        .fromTo('._main .section06 .tbx a',{
            y : 100,
            opacity : 0
        },{
            y : 0,
            opacity : 1
        });

    });
    

}