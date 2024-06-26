"use strict"

import { isDesktop, isMobile, useIsMobile } from "../../constant/responsive.js";

gsap.registerPlugin(ScrollToPlugin);

export default ()=>{

    // $('html').css('overflow','hidden');

    /* window.onload = function() {
        if(!useIsMobile()){
            gsap.to(window, { duration: 0.1, scrollTo: 0 });
        }
    }; */

    if(!useIsMobile()){
        ScrollTrigger.create({
            trigger : "html",
            // markers : true,
            start : "top+=1% top",
            onEnter : ()=>{
                $('.header').addClass('hide');
            },
            onLeaveBack : ()=>{
                $('.header').removeClass('hide');
            }
        })
    }

    const swiper = new Swiper('._main .section01 .move .up_scale .movie_video .swiper', {
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        speed: 600,
        spaceBetween: 0,
        touchRatio : 0,
        pagination : {
            el : "._main .section01 .move .up_scale .movie_video ul",
            clickable : true,
            bulletActiveClass : "act",
            bulletClass : "null",
            renderBullet : (index, className)=>{
                return `<li class=${className}>${String(index+1).padStart(2,'0')}</li>`;
            }
        },
        on : {
            slideChangeTransitionEnd : ()=>{
                if($('._main .section01 .move .up_scale .movie_video .swiper-slide-active').find('video').length !== 0){
                    $('._main .section01 .move .up_scale .movie_video .swiper-slide-active').find('video')[0].play();
                }
            }
        }
    });


    const intro = gsap.matchMedia();

    intro.add({
        isDesktop,
        isMobile
    },(context)=>{

        const { isDesktop } = context.conditions;

        gsap.fromTo('.section01 .move',{
            clipPath: `circle(0% at 50% 50vh)`,
        },{
            clipPath: `circle(100% at 50% 50vh)`,
            delay : isDesktop ? 0.8 : 0,
            duration : 3,
            onStart : ()=>{
                if(isDesktop){

                    gsap.timeline({})
                    .fromTo('._main .section01 .move h1',{
                        y : 100,
                        opacity : 0
                    },{
                        y : 0,
                        opacity : 1,
                        duration : 0.8
                    })
                    .fromTo('._main .section01 .move .up_scale',{
                        y : 100,
                        opacity : 0
                    },{
                        y : 0,
                        opacity : 1,
                        duration : 0.8
                    });

                }
            },
            onComplete : ()=>{
                $('html').css('overflow-y','auto');
                $('.header').removeClass('hide');
            }
        })

    });

    $('.section01 .move .up_scale .movie_video ul li').each((i,e)=>{
        gsap.set(e,{
            y : 100,
            opacity : 0
        })
    });

    gsap.timeline({
        scrollTrigger : {
            trigger : ".section01",
            // markers : true,
            scrub : 1,
            start : "top+=1% top",
            end : "center center"
            // pin : true,
            // pinType : isDesktop ? "transform" : "fixed",
            // end : "+=500%",
        },
    })
    .to('.section01 .move h1',{
        opacity : 0,
        duration : 1
    },'a')
    .to('.section01 .move .up_scale .scrollDown',{
        opacity : 0,
        duration : 1
    },'a')

    const mm = gsap.matchMedia();

    mm.add({
        min1281 : "(min-width:1281px)",
        max1280 : "(max-width:1280px)",
        max1024 : "(max-width:1024px)",
        min821 : "(min-width:821px)",
        max820 : "(max-width:820px)",
        max480 : "(max-width:480px)"
    },(context)=>{

        const { min1281,max1280,max1024,min821,max820,max480 } = context.conditions;

        gsap.from(".section01 .up_scale .movie_video",{
            scrollTrigger : {
                trigger : ".section01",
                // markers: {startColor: "blue", endColor: "green", fontSize: "18px", fontWeight: "bold", indent: 20},
                scrub : 1,
                start : "top+=5% top",
                end : "bottom bottom",
                onEnter : ()=>{
                    swiper.params.touchRatio = 1;
                },
                onLeaveBack : ()=>{
                    swiper.params.touchRatio = 0;
                }
            },
            // duration : 1,
            borderRadius: ()=>{
                if(min1281) return '220 220 220 220';                
                if(max480) return '50 50 50 50';
                if(max820) return '100 100 100 100';
                if(max1024) return '140 140 140 140';
                if(max1280) return '170 170 170 170';
            },
            width : ()=>{
                if(min821){
                    return `${1465/1920*100}%`
                }else{
                    return `90%`
                }
            },
            onComplete : ()=>{
                const tl = gsap.timeline();
                $('.section01 .move .up_scale .movie_video ul li').each((i,e)=>{
                    tl.to(e,{
                        y : 0,
                        opacity : 1
                    })
                });
            }
        })

    });


    ScrollTrigger.create({
        trigger : ".section01 .up_scale .movie_video",
        // markers : true,
        start : "top top",
        onEnter : ()=>{
            $('.header').addClass("on");
        },
        onLeaveBack : ()=>{
            $('.header').removeClass("on");
        }
    });

}