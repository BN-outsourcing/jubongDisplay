ScrollTrigger.create({
    trigger : ".footer",
    // markers : true,
    start : "bottom-=1% bottom",
    onEnter : ()=>{
        $('#top').removeClass('hide');
    },
    onLeaveBack : ()=>{
        $('#top').addClass('hide');
    }
})

$('#top').click(function(){
    gsap.to(window,{duration : 1, scrollTo: 0});
});