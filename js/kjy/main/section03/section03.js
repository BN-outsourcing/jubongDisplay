"use strict"

import { isDesktop } from "../../constant/responsive.js";
import { cursorPoint } from "../index.js";

gsap.registerPlugin(ScrollTrigger);

export default ()=>{

    ScrollTrigger.create({
        trigger : "._main .section03",
        // markers : true,
        start : "top top",
        onEnter : ()=>{
            $('.header').removeClass("on");
        },
        onLeaveBack : ()=>{
            $('.header').addClass("on");
        }
    });

    ScrollTrigger.create({
        trigger : "._main .section03 .tbx h1",
        start : "top top+=10%",
        pin : true,
        pinSpacing : false,
    });

    const tl = gsap.timeline({
        scrollTrigger : {
            trigger : "._main .section03 .tbx",
            start : "top bottom-=10%",
        }
    });

    $('._main .section03 .tbx p').each((i,e)=>{
        tl.fromTo($(e).find('span'),{
            clipPath: "inset(0% 100% 0% 0%)"
        },{
            clipPath: "inset(0% 0% 0% 0%)"
        },i === 0 ? "a" : "a+=50%")
    });

    ScrollTrigger.create({
        trigger : "._main .section03",
        start : "top center",
        onEnter : ()=>{
            $('.cursor-point').hide();
            $(window).off('mousemove',cursorPoint);

            gsap.set('._main .section03 .cursor',{
                opacity : 1,
                left : ()=>{
                    return parseInt($('.cursor-point').css('left'));
                },
                top  : ()=>{
                    // console.log($('._main .section03')[0].getBoundingClientRect().top,parseInt($('.cursor-point').css("top")));
                    return parseInt($('.cursor-point').css("top")) - $('._main .section03')[0].getBoundingClientRect().top ;
                }
            });

            gsap.timeline()
            .from('._main .section03 .cursor',{
                width : 32,
            },'a')
            .to('._main .section03 .cursor',{
                left : ()=>{
                    if(window.innerWidth >= 1481){
                        return "80%";
                    }else{
    
                        if(window.innerWidth < 821){
                            return "80%";
                        }else{
                            return "90%";
                        }
    
                    }
                },
                top : ()=>{
                    return ($('._main .section03 .layout.layout1 .flex')[0].getBoundingClientRect().top + $('._main .section03 .layout.layout1 .flex')[0].getBoundingClientRect().height/2) - $('._main .section03')[0].getBoundingClientRect().top;
                },
                yPercent : -50,
                immediateRender: false,
            },'a');

        },
        onLeaveBack : ()=>{
            $('.cursor-point').show();

            gsap.set('._main .section03 .cursor',{
                opacity : 0,
                left : ()=>{
                    return 0;
                },
                top  : ()=>{
                    return 0;
                }
            });

            $(window).on('mousemove',cursorPoint);
        }
    });


    const mm = gsap.matchMedia();

    mm.add({
        isDesktop
    },()=>{

        $('._main .section03 .layout').each((_,e)=>{

            if($(e).hasClass("left")){
    
                gsap.fromTo($(e).find('.flex .swiper'),{
                    xPercent : -30,
                },{
                    xPercent : 0,
                    scrollTrigger : {
                        trigger : e,
                        start : "top center",
                        end : "center center",
                        scrub : 1,
                    }
                })
    
            }else{
    
                gsap.fromTo($(e).find('.flex .swiper'),{
                    xPercent : 30,
                },{
                    xPercent : 0,
                    scrollTrigger : {
                        trigger : e,
                        start : "top center",
                        end : "center center",
                        scrub : 1,
                    }
                })
    
            }
    
        });

    });

    const slideArr = [];

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

    const mm2 = gsap.matchMedia();

    mm2.add({
        min1481 : "(min-width : 1481px)",
        is1480 : "(max-width : 1480px)",
        is1024 : "(max-width : 1024px)",
        is820 : "(max-width : 820px)",
    },(context)=>{

        const {min1481,is820} = context.conditions;

        const tls = gsap.timeline();

        tls.to('._main .section03 .cursor',{
            left : ()=>{
                if(min1481){
                    return "-10%";
                }else{

                    if(is820){
                        return "-10%";
                    }else{
                        return "-30%";
                    }
                    
                }
            },
            top : ()=>{
                return ($('._main .section03 .layout.layout2 .flex')[0].getBoundingClientRect().top + $('._main .section03 .layout.layout2 .flex')[0].getBoundingClientRect().height/2) - $('._main .section03')[0].getBoundingClientRect().top;
            },
            yPercent : -50,
            immediateRender: false,
            scrollTrigger : {
                trigger : "._main .section03 .layout.layout1 .flex",
                endTrigger : "._main .section03 .layout.layout2 .flex",
                start : "center+=5% center",
                end : "center center",
                // markers : true,
                scrub : true,
                invalidateOnRefresh : true,
            }
        })
        tls.to('._main .section03 .cursor',{
            left : ()=>{
                if(min1481){
                    return "80%";
                }else{

                    if(is820){
                        return "80%";
                    }else{
                        return "90%";
                    }

                }
            },
            top : ()=>{
                return ($('._main .section03 .layout.layout3 .flex')[0].getBoundingClientRect().top + $('._main .section03 .layout.layout3 .flex')[0].getBoundingClientRect().height/2) - $('._main .section03')[0].getBoundingClientRect().top;
            },
            yPercent : -50,
            immediateRender: false,
            scrollTrigger : {
                trigger : "._main .section03 .layout.layout2 .flex",
                endTrigger : "._main .section03 .layout.layout3 .flex",
                start : "center+=5% center",
                end : "center center",
                // markers : true,
                scrub : true,
                invalidateOnRefresh : true,
            }
        });

    });

}