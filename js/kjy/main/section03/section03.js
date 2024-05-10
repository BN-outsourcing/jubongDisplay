"use strict"

import { isDesktop, isMobile } from "../../constant/responsive.js";
import { cursorPoint } from "../index.js";

gsap.registerPlugin(ScrollTrigger);

export default ()=>{

    ScrollTrigger.create({
        trigger : "._main .section03",
        // markers : true,
        start : "top top",
        invalidateOnRefresh : true,
        onEnter : ()=>{
            $('.header').removeClass("on");
        },
        onLeaveBack : ()=>{
            $('.header').addClass("on");
        }
    });

    const title = gsap.matchMedia();

    title.add({
        isDesktop : "(min-width:821px)",
        isMobile : "(max-width:820px)",
    },(context)=>{
        const {isDesktop} = context.conditions;

        const tl = gsap.timeline({
            scrollTrigger : {
                trigger : "._main .section03 .tbx",
                start : isDesktop ? "top bottom-=10%" : "top bottom-=20%",
            }
        });
    
        $('._main .section03 .tbx p').each((i,e)=>{
            tl.fromTo($(e).find('span'),{
                clipPath: "inset(0% 100% 0% 0%)"
            },{
                clipPath: "inset(0% 0% 0% 0%)",
                duration : 0.8,
                ease : "none",
            },i === 0 ? "a" : "a+=50%")
        });

    });


    /* const slideArr = [];

    $('._main .section03 .flex .swiper').each((_,e)=>{
        const swiper = new Swiper(e,{
            // effect : 'fade',
        });
        slideArr.push(swiper);
    });

    $('._main .section03 .flex .box ul').each((i,e)=>{

        $(e).find('li').each((_,e)=>{

            $(e).find('div').mouseover(function(){
                const index = $(this).parent().index();
                $(this).parent().siblings().removeClass('act');
                $(this).parent().addClass('act');
                slideArr[i].slideTo(index);
            });

        });

    }); */

    


    const slide = gsap.matchMedia();

    slide.add("(min-width:821px)",()=>{

        /* gsap.utils.toArray('._main .section03 .layoutbox').forEach((e)=>{

            ScrollTrigger.create({
                trigger : $(e).find('.layout:not(.opacity)'),
                // endTrigger : $(e).find('.layout.opacity'), 
                start : "center center",
                // end : "center center",
                // markers : true,
                pin : true,
                // pinSpacing : false
            })

        });

        ScrollTrigger.create({
            trigger : "._main .section03",
            // markers : true,
        }) */

        $('._main .section03 .layout:not(.opacity) .flex').each((_,e)=>{

            const trigger = e;
    
            const tl = gsap.timeline({
                scrollTrigger : {
                    trigger,
                    start : "center center",
                    pin : true,
                    scrub : 1,
                    // endTrigger : $(e).parent().siblings(),
                    // end : "center center",
                    // markers : true,
                    // pinSpacing : false,
                }
            });
    
            $(e).find('.swiper-slide').each((index,e)=>{
    
                if(index === 0){
    
                    const tl = gsap.timeline({
                        scrollTrigger : {
                            trigger,
                            start : "top bottom",
                            end : "center center",
                            // markers : true,
                            scrub : 1,
                            invalidateOnRefresh : true,
                        }
                    });
    
                    tl.fromTo(e,{
                        x : ()=>{

                            if($(trigger).parents('.layout').hasClass('left')){
                                return "-102%";
                            }else{
                                return "102%";
                            }

                        },
                    },{
                        x : 0,
                        ease : "none"
                    })
    
                }else{
    
                    tl.fromTo(e,{
                        x : ()=>{
                            if($(trigger).parents('.layout').hasClass('left')){
                                return "-102%";
                            }else{
                                return "102%";
                            }
                        }
                    },{
                        x : 0,
                        ease : "none"
                    });
    
                }
    
            });
    
        });

        ScrollTrigger.create({
            trigger : "._main .section03 .tbx h1",
            endTrigger : "._main .section03",
            start : "top top+=10%",
            end : "bottom bottom-=2.5%",
            // markers : true,
            pin : true,
            pinSpacing : false,
        });

    });

    

    ScrollTrigger.create({
        trigger : "._main .section03 .cursor",
        endTrigger : "._main .section03",
        start : "center center",
        // markers : true,
        pin : true,
        pinSpacing : false
    })


    /* const mm2 = gsap.matchMedia();

    mm2.add({
        min1281 : "(min-width:1281px)",
        min1025 : "(min-width:1025px)",
        min821 : "(min-width:821px)",
        max820 : "(max-width:820px)",
    },(context)=>{

        const {min821,max820,min1025,min1281} = context.conditions;

        gsap.set('._main .section03 .cursor',{
            width : 32,
        })

        ScrollTrigger.create({
            trigger : "._main .section03",
            start : "top center",
            onEnter : ()=>{
                $('.cursor-point').hide();
                $(window).off('mousemove',cursorPoint);
    
                gsap.set('._main .section03 .cursor',{
                    left : ()=>{
                        return parseInt($('.cursor-point').css('left'));
                    },
                    top  : ()=>{
                        return parseInt($('.cursor-point').css("top")) - $('._main .section03')[0].getBoundingClientRect().top ;
                    },
                    yPercent : -50,
                });

                gsap.to('._main .section03 .cursor',{
                    width : 32,
                    opacity : 1,
                    duration : 0
                })
    
                gsap.timeline({
                    defaults : {
                        immediateRender: false,
                        ease : "none"
                    },
                })
                .to('._main .section03 .cursor',{
                    width : ()=>{
                        if(min1281) return 531;
                        if(min1025) return 401;
                        if(min821) return 261;
                        if(max820) return 201;
                    },
                    duration : 1,
                },'a')
                .to('._main .section03 .cursor',{
                    left : ()=>{
                        if(min821) return "80%"
                        if(max820) return "90%"
                    },
                    top : ()=>{
                        return ($('._main .section03 .layout.layout1 .flex')[0].getBoundingClientRect().top + $('._main .section03 .layout.layout1 .flex')[0].getBoundingClientRect().height/2) - $('._main .section03')[0].getBoundingClientRect().top;
                    },
                    duration : 1,
                },'a');
    
            },
            onLeaveBack : ()=>{
                $('.cursor-point').show();
    
                gsap.to('._main .section03 .cursor',{
                    opacity : 0,
                });
    
                $(window).on('mousemove',cursorPoint);
            }
        });

        gsap.fromTo('._main .section03 .cursor',{
            left : ()=>{
                if(min821) return "80%"
                if(max820) return "90%"
            },
            top : ()=>{
                return ($('._main .section03 .layout.layout1 .flex')[0].getBoundingClientRect().top + $('._main .section03 .layout.layout1 .flex')[0].getBoundingClientRect().height/2) - $('._main .section03')[0].getBoundingClientRect().top;
            },
        },{
            left : ()=>{
                if(min821) return "-10%";
                if(max820) return "-20%";
            },
            top : ()=>{
                return ($('._main .section03 .layout.layout2 .flex')[0].getBoundingClientRect().top + $('._main .section03 .layout.layout2 .flex')[0].getBoundingClientRect().height/2) - $('._main .section03')[0].getBoundingClientRect().top;
            },
            yPercent : -50,
            immediateRender: false,
            scrollTrigger : {
                trigger : "._main .section03 .layout.layout1 .flex",
                endTrigger : "._main .section03 .layout.layout2 .flex",
                start : "center+=15% center",
                end : "center center",
                // markers : true,
                scrub : true,
                invalidateOnRefresh : true,
            }
        });

        gsap.to('._main .section03 .cursor',{
            left : ()=>{
                if(min821) return "80%";
                if(max820) return "90%";
            },
            top : ()=>{
                return ($('._main .section03 .layout.layout3 .flex')[0].getBoundingClientRect().top + $('._main .section03 .layout.layout3 .flex')[0].getBoundingClientRect().height/2) - $('._main .section03')[0].getBoundingClientRect().top;
            },
            yPercent : -50,
            immediateRender: false,
            scrollTrigger : {
                trigger : "._main .section03 .layout.layout2 .flex",
                endTrigger : "._main .section03 .layout.layout3 .flex",
                start : "center+=15% center",
                end : "center center",
                // markers : true,
                scrub : true,
                invalidateOnRefresh : true,
            }
        });

    }); */


    
    /* const cirMm = gsap.matchMedia();

    cirMm.add({
        min1281 : "(min-width:1281px)",
        min1025 : "(min-width:1025px)",
        min821 : "(min-width:821px)",
        max820 : "(max-width:820px)",
    },(context)=>{

        const {max820,min821,min1025,min1281} = context.conditions;

        

    }); */

/*     const slideArr = [];

    $('._main .section03 .flex .swiper').each((_,e)=>{
        const swiper = new Swiper(e,{
            effect : 'fade',
        });
        slideArr.push(swiper);
    });

    $('._main .section03 .flex .box ul').each((i,e)=>{

        $(e).find('li').each((_,e)=>{

            $(e).find('div').mouseover(function(){
                const index = $(this).parent().index();
                $(this).parent().siblings().removeClass('act');
                $(this).parent().addClass('act');
                slideArr[i].slideTo(index);
            });

        });

    });
 */

    /* const mm = gsap.matchMedia();
    mm.add({
        min1281 : "(min-width:1281px)",
        min1025 : "(min-width:1025px)",
        min821 : "(min-width:821px)",
    },(context)=>{

        const {min1281,min1025,min821} = context.conditions;

        $('._main .section03 .layout').each((_,e)=>{

            if($(e).hasClass("left")){
    
                gsap.fromTo($(e).find('.flex .swiper'),{
                    x : ()=>{
                        if(min1281){
                            return -416
                        }
                        if(min1025){
                            return -326
                        }
                        if(min821){
                            return -246
                        }
                    },
                },{
                    x : 0,
                    scrollTrigger : {
                        trigger : e,
                        start : "top center",
                        end : "center center",
                        scrub : 1,
                    }
                });
    
            }else{
    
                gsap.fromTo($(e).find('.flex .swiper'),{
                    x : ()=>{
                        if(min1281){
                            return 416
                        }
                        if(min1025){
                            return 326
                        }
                        if(min821){
                            return 246
                        }
                    },
                },{
                    x : 0,
                    scrollTrigger : {
                        trigger : e,
                        start : "top center",
                        end : "center center",
                        scrub : 1,
                    }
                });
    
            }
    
        });

    }); */



    


}