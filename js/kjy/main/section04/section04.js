"use strict"

import { isDesktop, isMobile } from "../../constant/responsive.js";

export default ()=>{

    const mm = gsap.matchMedia();

    mm.add({isDesktop,isMobile},(context)=>{

        const {isDesktop} = context.conditions;

        const tl = gsap.timeline({
            scrollTrigger : {
                trigger : "._main .section04",
                start : "top top",
                pin : true,
                pinType : isDesktop ? "transform" : "fixed",
                scrub : true,
                end : "+=300%"
            }
        });
    
        $('._main .section04 .tbx p span').each((i,e)=>{
            tl.from(e,{
                clipPath: "inset(0% 100% 0% 0%)"
            })
        });

    })
    
}