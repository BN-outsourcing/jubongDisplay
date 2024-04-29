"use strict"

gsap.registerPlugin(ScrollTrigger);

export default ()=>{

    gsap.set('.cursor-point',{
        opacity : 0,
    });

    $(window).mousemove(function(e){
        const {clientX,clientY} = e;
        console.log($('.cursor-point').width());
        gsap.to('.cursor-point',{
            left : clientX - ($('.cursor-point').width()/2),
            top : clientY - ($('.cursor-point').height()/2)
        })
    });

    ScrollTrigger.create({
        trigger : "._main .section02",
        markers : true,
        start : "top center",
        onEnter : ()=>{
            gsap.to('.cursor-point',{
                opacity : 1,
            });
        },
        onLeaveBack : ()=>{
            gsap.to('.cursor-point',{
                opacity : 0,
            });
        }
    });

    gsap.set('._main .section02 .flex .grid.left',{
        yPercent : 100
    });
    
    gsap.set('._main .section02 .flex .grid:not(.left)',{
        yPercent : -100
    });

    gsap.timeline({
        scrollTrigger : {
            trigger : "._main .section02",
            // markers : true,
            pin : true,
            scrub : true,
            end : "+=300%",
        }
    })
    .from('._main .section02 .tbx h1',{
        fontSize : "52px"
    })
    .to('._main .section02 .flex .grid.left',{
        yPercent : -50
    },'a')
    .to('._main .section02 .flex .grid:not(.left)',{
        yPercent : 50
    },'a');

}