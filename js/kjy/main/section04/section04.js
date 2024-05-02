"use strict"

gsap.registerPlugin(ScrollTrigger);

export default ()=>{

    ScrollTrigger.create({
        trigger : "._main .section04",
        // markers : true,
        start : "top top",
        invalidateOnRefresh : true,
        onEnter : ()=>{
            $('.header').addClass("on");
        },
        onLeaveBack : ()=>{
            $('.header').removeClass("on");
        }
    });

    const mm = gsap.matchMedia();

    mm.add("(min-width:821px)",()=>{

        const tl = gsap.timeline({
            scrollTrigger : {
                trigger : "._main .section04",
                start : "top top",
                pin : true,
                // pinType : isDesktop ? "transform" : "fixed",
                scrub : true,
                end : "+=300%"
            }
        });
    
        $('._main .section04 .tbx.pc p span').each((i,e)=>{
            tl.from(e,{
                clipPath: "inset(0% 100% 0% 0%)"
            })
        });

    });

    mm.add("(max-width:820px)",()=>{

        const tl = gsap.timeline({
            scrollTrigger : {
                trigger : "._main .section04",
                start : "top top",
                pin : true,
                // pinType : isDesktop ? "transform" : "fixed",
                scrub : true,
                end : "+=300%"
            }
        });
    
        $('._main .section04 .tbx.mob p span').each((i,e)=>{
            tl.from(e,{
                clipPath: "inset(0% 100% 0% 0%)"
            })
        });

    });
    
}