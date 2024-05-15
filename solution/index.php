<?php 
    include_once $_SERVER["DOCUMENT_ROOT"]."/_head.php";
    include_once $_SERVER["DOCUMENT_ROOT"]."/components/layout/_header.html";
?>
<link rel="stylesheet" href="/css/solution.css">


<div class="ask">
    견적문의 <i class="xi-message-o"></i>
</div>

<div class="cursor-point"></div>

<div id="smooth-wrapper">
    <div id="smooth-content">
        <main class="_sub _solution">
        
            <section class="subTitle">
                <div class="subwrap" max="1500">
                    <h1>Solution</h1>

	                <ul class="subTab"><!--카테고리-->
                        <li class="on"><a href="">CMS</a></li>
                        <li><a href="">콘텐츠</a></li>
                        <li><a href="">매트릭스 스위치 & 세톱박스</a></li>
                    </ul>
                </div>
            </section>

            <div class="flexWrap">
                <div class="lbx">
                    <div class="swiper vertical">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="_image" style="background-image: url(/asset/image/sub/solution/sample.jpg); background-color: #8c8e91;" data-swiper-parallax="50%"></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="_image" style="background-image: url(); background-color: #6187c1;" data-swiper-parallax="50%"></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="_image" style="background-image: url();  background-color: #cecece;" data-swiper-parallax="50%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="scroll">
                        <div class="bx">
                            <span></span>
                        </div>
                        <p>scroll down</p>
                    </div>
                </div>

                <div class="rbx">
                    <div class="swiper rightsw">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="inn">
                                    <strong>CMS</strong>
                                    <em></em>
                                    <p>
                                        내용이 들어가는 자리입니다.  내용이 들어가는 자리입니다.  내용이 들어가는 자리입니다. <br/>
                                        내용이 들어가는 자리입니다.  내용이 들어가는 자리입니다. <br/>
                                        내용이 들어가는 자리입니다.  내용이 들어가는 자리입니다.  내용이 들어가는 자리입니다. <br/>
                                        내용이 들어가는 자리입니다.  내용이 들어가는 자리입니다.  
                                        
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="inn">
                                    <strong>CMS</strong>
                                    <em></em>
                                    <p>
                                        내용이 들어가는 자리입니다.  내용이 들어가는 자리입니다. 2 내용이 들어가는 자리입니다. <br/>
                                        내용이 들어가는 자리입니다.  내용이 들어가는 자리입니다.  
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="inn">
                                    <strong>CMS</strong>
                                    <em></em>
                                    <p>
                                        내용이 들어가는 자리입니다.  내용이 들어가는 자리입니다. 3 내용이 들어가는 자리입니다. <br/>
                                        내용이 들어가는 자리입니다. <br/>
                                        내용이 들어가는 자리입니다.  내용이 들어가는 자리입니다.  내용이 들어가는 자리입니다. <br/>
                                        내용이 들어가는 자리입니다.  내용이 들어가는 자리입니다.  
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="wraps">
                        <div class="swiper-pagination"></div>
                    </div>
                    
                </div>
            </div>

            

        </main>  
        <?php
            include_once $_SERVER["DOCUMENT_ROOT"]."/components/layout/_footer.html";
        ?>
    </div>
</div>


<script type="module" src="/js/jyj/sub/common/sub_share.js"></script>
<script>
    

    var swiper1 = new Swiper(".vertical", {
        parallax: true,
        direction: "vertical",
        allowTouchMove: true,
        speed: 800,
        slidesPerView: 1,
        mousewheel: true,
        pagination: {
            el: ".swiper-pagination",
            type: "fraction",
        },
        on: {
            slideChange: function() {
                setTimeout(function () {
                    swiper1.params.touchReleaseOnEdges = false;  
                    swiper1.params.mousewheel.releaseOnEdges = false;
                });
            },
            reachEnd: function() {
                setTimeout(function () {
                    swiper1.params.touchReleaseOnEdges = true;
                    swiper1.params.mousewheel.releaseOnEdges = true;
                }, 500);
            },
            reachBeginning: function() {
                setTimeout(function () {
                    swiper1.params.touchReleaseOnEdges = true;
                    swiper1.params.mousewheel.releaseOnEdges = true;
                }, 500);
            }
        }
    });

    var swiper2 = new Swiper(".rightsw", {
        allowTouchMove: false,
        effect: "fade",
        fadeEffect: {
            crossFade: true
        },
        speed: 200,
        slidesPerView: 1,
        // mousewheel: true,
        // on: {
        //     slideChange: function() {
        //         setTimeout(function () {
        //             swiper2.params.touchReleaseOnEdges = false;  
        //             swiper2.params.mousewheel.releaseOnEdges = false;
        //         });
        //     },
        //     reachEnd: function() {
        //         setTimeout(function () {
        //             swiper2.params.touchReleaseOnEdges = true;
        //             swiper2.params.mousewheel.releaseOnEdges = true;
        //         }, 500);
        //     },
        //     reachBeginning: function() {
        //         setTimeout(function () {
        //             swiper2.params.touchReleaseOnEdges = true;
        //             swiper2.params.mousewheel.releaseOnEdges = true;
        //         }, 500);
        //     }
        // }
    });

    swiper1.on('slideChange', function () {
        swiper2.slideTo(swiper1.realIndex, 200);
    });



    $('._sub .subTitle .subTab li').click(function () {
        $(this).addClass('on').siblings().removeClass('on');
        return false;
    });



</script>

<?php 
    include_once $_SERVER["DOCUMENT_ROOT"]."/_end.php"
?>