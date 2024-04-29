"use strict"
gsap.registerPlugin(ScrollTrigger);
export default ()=>{

    ScrollTrigger.create({
        trigger : ".section03 .tbx h1",
        endTrigger : ".section03",
        start : "top top",
        pin : true,
        pinSpacing : false
    })

}