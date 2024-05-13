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
                start : "top top+=25%",
                end : "bottom bottom",
                // markers : true,
                // pin : true,
                // pinType : isDesktop ? "transform" : "fixed",
                // end : "+=300%"
            }
        });
    
        $('._main .section04 .tbx.pc p span').each((i,e)=>{
            tl.from(e,{
                clipPath: "inset(0% 100% 0% 0%)",
                duration : 1.3,
            },i === 0 ? "a" : "a+=75%")
        });

    });

    mm.add("(max-width:820px)",()=>{

        const tl = gsap.timeline({
            scrollTrigger : {
                trigger : "._main .section04",
                start : "top top+=25%",
                end : "bottom bottom",
                // pin : true,
                // pinType : isDesktop ? "transform" : "fixed",
                // end : "+=300%"
            }
        });
    
        $('._main .section04 .tbx.mob p span').each((i,e)=>{
            tl.from(e,{
                duration : 0.8,
                clipPath: "inset(0% 100% 0% 0%)"
            },">-=25%")
        });

    });
    
}