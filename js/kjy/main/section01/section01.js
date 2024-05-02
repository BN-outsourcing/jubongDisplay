"use strict"

import { isDesktop, isMobile, useIsMobile } from "../../constant/responsive.js";

gsap.registerPlugin(ScrollToPlugin);

export default ()=>{

    window.onload = function() {
        if(!useIsMobile()){
            gsap.to(window, { duration: 0.1, scrollTo: 0 });
            $('html').css('overflow','hidden');
        }
    };

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

        gsap.from('.section01 .move',{
            clipPath: "circle(0% at 50% 50%)",
            delay : isDesktop ? 0.8 : 0,
            duration : 3,
            onStart : ()=>{
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
            },
            onComplete : ()=>{
                $('html').css('overflow-y','auto');
                $('.header').removeClass('hide');
                swiper.params.touchRatio = 1;
            }
        })

    });



    $('.section01 .move .up_scale .movie_video ul li').each((i,e)=>{
        gsap.set(e,{
            y : 100,
            opacity : 0
        })
    });


    ScrollTrigger.create({
        trigger : "html",
        // markers : true,
        start : "top+=1% top",
        onEnter : ()=>{
            $('.header').addClass('hide');
            $('#top').removeClass('hide');
        },
        onLeaveBack : ()=>{
            $('.header').removeClass('hide');
            $('#top').addClass('hide');
        }
    })


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

        gsap.timeline({
            scrollTrigger : {
                trigger : ".section01",
                // markers : true,
                pin : true,
                // pinType : isDesktop ? "transform" : "fixed",
                scrub : 1,
                end : "+=500%",
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
        /* .fromTo(".section01 .up_scale",{
            top: ()=>`${700/980*100}%`,
        },{
            top: ()=>`10%`,
        },'a+=25%') */
        .from(".section01 .up_scale",{
            top: ()=>`${700/980*100}%`,
            duration : 1
        },'a+=25%')
        .from(".section01 .up_scale .movie_video",{
            duration : 1,
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
        .to({},{},"+=1");
        /* .to('.section01 .up_scale',{
            top : 0
        },'b') */

    });

}