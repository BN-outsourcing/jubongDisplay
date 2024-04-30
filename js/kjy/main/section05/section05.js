"use strict"

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

    ScrollTrigger.create(
        {
            trigger : "._main .section05 .tbx",
            endTrigger : "._main .section05",
            start : "center center",
            end : "bottom bottom",
            pin : true,
            pinSpacing : false,
            // markers : true,
        }
    )

    $('._main .section05 .grid .col').each((_,e)=>{

        gsap.set(e,{
            xPercent : `random(50%, -50%)`,
            // yPercent : `random(0%, 100%, 3.5%)`,
            rotateX : 'random(0, -60)',
            scaleY : 'random(1, 1.3)',
            z : 'random(-100, -5000)'
        })

    });

    const tl = gsap.timeline({
        scrollTrigger : {
            trigger : "._main .section05",
            start : "top center",
            end : "bottom bottom",
            scrub : true,
            markers : true
        }
    });

    tl.fromTo('._main .section05 .grid',{
        yPercent : 50
    },{
        yPercent : 0
    },'a')

    $('._main .section05 .grid .col').each((_,e)=>{

        tl.fromTo(e,{
            y : `random(-5%, -30%)`,
        },{
            y : "+=5%"
        },'a+=5%')

    });

    tl.fromTo('._main .section05 .grid',{
        scale : 0.4,
        z : 0, 
    },{
        scale : 0.8,
        z : 10000,
    },'a+=5%')

}