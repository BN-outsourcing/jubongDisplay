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

    // 색상채워짐
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

    let slideArr = [];
    const slide = gsap.matchMedia();

    slide.add({
        min1481 : "(min-width:1481px)",
        min1281 : "(min-width:1281px)",
        min821 : "(min-width:821px)"
    },(context)=>{

        // const {min1481,min1281,min821} = context.conditions;

        // Product 따라옴
        ScrollTrigger.create({
            trigger : "._main .section03 .tbx h1",
            endTrigger : "._main .section03",
            start : "top top+=7.5%",
            // start : "center center",
            end : "bottom bottom-=2.5%",
            // markers : true,
            pin : true,
            pinSpacing : false,
        });
        
        // 슬라이드
        if(slideArr.length > 0){
            slideArr.forEach((elm,_)=>{
                elm.destroy();
            })
            slideArr = [];
        }
        
        $('._main .section03 .layout').each((_,e)=>{

            const trigger = e;
    
            const tl = gsap.timeline({
                scrollTrigger : {
                    trigger,
                    endTrigger : $(e).siblings(),
                    start : "center center",
                    end : "bottom bottom-=15%",
                    // end : "bottom bottom",
                    pin : true,
                    scrub : 1.5,
                    // markers : true,
                    pinSpacing : false,
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
                            if($(trigger).hasClass('left')){
                                return "-105%";
                            }else{
                                return "105%";
                            }
                        }
                    },{
                        x : 0,
                        ease : "none",
                        onStart : ()=>{
                            $(trigger).find(".box ul li").removeClass('act');
                            $(trigger).find(".box ul li").eq(index).addClass('act');
                        }
                    })
    
                }else{
    
                    tl.fromTo(e,{
                        x : ()=>{
                            if($(trigger).hasClass('left')){
                                return "-105%";
                            }else{
                                return "105%";
                            }
                        }
                    },{
                        x : 0,
                        ease : "none",
                        onStart : ()=>{
                            $(trigger).find(".box ul li").removeClass('act');
                            $(trigger).find(".box ul li").eq(index).addClass('act');
                        },
                        onReverseComplete : ()=>{
                            console.log(index);
                            $(trigger).find(".box ul li").removeClass('act');
                            $(trigger).find(".box ul li").eq(index-1).addClass('act');
                        }
                    });
    
                }
    
            });
    
        });

    })
    
    slide.add("(max-width:820px)",()=>{
        $('._main .section03 .swiper').each((_,e)=>{
            const swiper = new Swiper(e,{
                effect : 'fade',
                on : {
                    slideChange : (swiper)=>{
                        const real = swiper.realIndex;
                        $(e).siblings('.box').find("li").removeClass('act');
                        $(e).siblings('.box').find("li").eq(real).addClass('act');
                    }
                }
            });
            slideArr.push(swiper);
        });

        $('._main .section03 .layout .box ul').each((i,e)=>{

            $(e).find('li').each((_,e)=>{
    
                $(e).find('div').mouseover(function(){
                    const index = $(this).parent().index();
                    $(this).parent().siblings().removeClass('act');
                    $(this).parent().addClass('act');
                    slideArr[i].slideTo(index);
                });
    
            });
    
        });

    });


    // 원 관련
    const circle = gsap.matchMedia();
    circle.add({
        min821 : "(min-width:821px)",
        max820 : "(max-width:820px)",
    },(context)=>{

        const {min821,max820} = context.conditions;

        ScrollTrigger.create({
            trigger : "._main .section03 .poa .cir",
            endTrigger : "._main .section03",
            start : "center center",
            end : "bottom bottom",
            // markers : true
            pin : true,
            pinSpacing : false
        });

        ScrollTrigger.create({
            trigger : '._main .section03',
            endTrigger : "._main .section03 .layout.layout1",
            start : "top center",
            end : "center bottom",
            // markers: {startColor: "white", endColor: "white", fontSize: "18px", fontWeight: "bold", indent: 20},
            // scrub : min821 ? true : 1,
            onEnter : ()=>{
                $('.cursor-point').hide();
                $(window).off('mousemove',cursorPoint);
                let x = parseInt($('.cursor-point').css('left'))*100 / window.innerWidth;
                let y = parseInt($('.cursor-point').css('top'))*100 / window.innerWidth;
                gsap.fromTo('._main .section03 .poa .cir .curb',{
                    left : ()=>{
                        return `${x}vw`;
                    },
                    top : ()=>{
                        return `${-y}vw`;
                    },
                    marginLeft : min821 ? "0%" : "0",
                    yPercent : min821 ? -50 : 0
                },{
                    left : min821 ? "80%" : "0",
                    top : "50%",
                    marginLeft : min821 ? "0%" : "90%",
                    yPercent : min821 ? -50 : 0,
                    duration : min821 ? 1 : 0,
                });
            },
            onLeaveBack : ()=>{
                $('.cursor-point').show();
                $(window).on('mousemove',cursorPoint);
            }
        });

        if(min821){

            $('._main .section03 .layoutbox').each((index,elm)=>{

                if(index === 0) return;

                gsap.fromTo('._main .section03 .poa .cir .curb',{
    
                    left : ()=>{
                        if(index === 1){
                            return "80%";
                        }else if(index === 2){
                            return "-10%";
                        }
                    },
    
                },{
                    left : ()=>{
                        if(index === 1){
                            return "-10%";
                        }else if(index === 2){
                            return "80%";
                        }
                    },
                    immediateRender : false,
                    scrollTrigger : {
                        trigger : elm,
                        start : "top center",
                        end : "center bottom",
                        /* markers: {startColor: "white", endColor: "white", fontSize: "18px", fontWeight: "bold", indent: 20}, */
                        scrub : 1,
                    }
                });
    
            });

        }

        if(max820){

            $('._main .section03 .layoutbox').each((index,elm)=>{

                if(index === 0) return;

                gsap.fromTo('._main .section03 .poa .cir .curb',{
    
                    marginLeft : ()=>{
                        if(index === 1){
                            return "90%";
                        }else if(index === 2){
                            return "-10%";
                        }
                    },
    
                },{
                    marginLeft : ()=>{
                        if(index === 1){
                            return "-10%";
                        }else if(index === 2){
                            return "90%";
                        }
                    },
                    immediateRender : false,
                    scrollTrigger : {
                        trigger : elm,
                        start : "top-=25% center",
                        end : "center center",
                        // markers: {startColor: "red", endColor: "red", fontSize: "18px", fontWeight: "bold", indent: 20},
                        scrub : 1,
                    }
                });
    
            });

        }

        

    });

}