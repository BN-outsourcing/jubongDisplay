<?php
    include_once $_SERVER["DOCUMENT_ROOT"]."/_head.php";
    include_once $_SERVER["DOCUMENT_ROOT"]."/components/layout/_header.html";
?>
<link rel="stylesheet" href="/css/product.css">


<div class="ask">
	견적문의 <i class="xi-message-o"></i>
</div>

<div class="cursor-point custom">
    <div class="dot"></div>
    <div class="scrollbx">
        <span>scroll</span>
        <i class="xi-angle-down"></i>
    </div>
</div>

<div id="smooth-wrapper">
	<div id="smooth-content">
		<main class="_sub _product _view">

			<section class="subTitle">
				<div class="subwrap" max="1500"></div>
				<script src="/js/ldh/subTab.js"></script>
				<script>
					subTab({
						title: 'LCD Signage',
						depth: 3,
						act: 1,
					});
				</script>

			</section>

            <article class="view">
                <div class="introimg">
                    <div class="bg" style="background-image: url(/asset/image/sub/product/led_intro.jpg);"></div>
                </div>

                <div class="_cont">
                    <div class="subwrap" max="1600">

                        <div class="pbx _1">
                            <div class="txtbx">
                                <strong>LCD 단독형</strong>
                                <b></b>
                                <p>
                                    다양한 각도에서는 물론 어떤 위치에서든지 선명한 컬러로 뚜렷하게 볼 수 있으며 <br class="none"/>효율적인 소비전력을 가지고 있어 경제적인 절감 효과에도 우수합니다. <br/>상황에 따라, 현장에 따라, 고객선호에 따라 다양한 솔루션으로 구성 할 수 있는 제품으로 <br class="none"/> PC타입, USB플레이어 타입 등으로 원하는 UI구성이 가능합니다. <br/>또한 디스플레이 전용패널의 사용으로 <br class="none"/> 오래 사용해도 생생한 밝기와 긴 수명을 자랑하는 제품입니다.
                                </p>
                            </div>
                            <div class="imgbx">
                                <canvas id="product1" width="770" height="577" style="background-image: url(/asset/image/sub/product/led1/led01_1.gif);"></canvas>
                                <iframe src="https://player.vimeo.com/video/946863274?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write" title="JBDisplay_LED_실외용_외부건물"></iframe>
                            </div>
                        </div>

                        <div class="pbx _2">
                            <div class="txtbx">
                                <strong>LCD 비디오월</strong>
                                <b></b>
                                <p>
                                    고해상도 컴퓨터 및 고화질 비디오 등을 화면구성의 크기로  <br class="none"/> 확대하여 표출하는 시스템으로 어떤형태로든 원하는 패널 배열이 가능합니다. <br/>제어실, 회사 회의실 등 다수의 입력영상과 출력을 관리할 목적으로 이루어진 제품군으로 <br class="none"/> 다수의 CCTV나 컴퓨터 혹은 셋탑의 출력을 복합적으로 구성하여  <br class="none"/>다면 영상처리를 할 수 있습니다.
                                </p>
                            </div>
                            <div class="imgbx">
                                <canvas id="product2" width="770" height="577" style="background-image: url(/asset/image/sub/product/led1/led01_1.gif);"></canvas>
                                <iframe src="https://player.vimeo.com/video/946863646?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write" title="JBDisplay_LED_실외용_외부건물"></iframe>
                            </div>
                        </div>

                        <div class="pbx _3">
                            <div class="txtbx">
                                <strong>LCD 메뉴보드</strong>
                                <b></b>
                                <p>
                                    레스토랑, 카페 및 상점의 메뉴 및 광고를 위한 현대적인 디지털 메뉴보드입니다. <br/>설치 시 화면 사이사이 베젤 간격을 조정함으로써, <br class="none"/> 더욱 깔끔한 디스플레이 광고를 재생할 수 있으며,  <br class="none"/>벽면에 매입, 천장에 행잉 등 고객이 원하는 방식으로  <br class="none"/>필요공간에 설치를 최소화 할 수 있습니다.
                                </p>
                            </div>
                            <div class="imgbx">
                                <canvas id="product3" width="770" height="577" style="background-image: url(/asset/image/sub/product/led1/led01_1.gif);"></canvas>
                                <iframe src="https://player.vimeo.com/video/946863454?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write" title="JBDisplay_LED_실외용_외부건물"></iframe>
                            </div>
                        </div>

                    </div>
                </div>
            </article>

			

		</main>
		<?php
            include_once $_SERVER["DOCUMENT_ROOT"]."/components/layout/_footer.html";
        ?>
	</div>
</div>

<script type="module" src="/js/jyj/sub/common/sub_share.js"></script>

<script>
    // header
    ScrollTrigger.create({
        trigger: '.view',
        start: 'top top',
        onEnter: function () {
            $('.header').addClass('on');
        },
        onLeaveBack: function () {
            $('.header').removeClass('on');
        }
    });

    // motion
    ScrollTrigger.matchMedia({
        "(min-width: 821px)" : function () {
            gsap.to('._sub._product._view .introimg .bg', { 
                scrollTrigger: {
                    trigger: 0,
                    endTrigger: '._sub._product._view .introimg .bg',
                    start: 'top top',
                    end: 'bottom top',
                    // markers: true,
                    scrub: 1,
                }
                ,yPercent: -47
            });
        },
        "(max-width: 820px)" : function () {
            gsap.to('._sub._product._view .introimg .bg', { 
                scrollTrigger: {
                    trigger: 0,
                    endTrigger: '._sub._product._view .introimg .bg',
                    start: 'top top',
                    end: 'bottom top',
                    // markers: true,
                    scrub: 1,
                }
                ,yPercent: -30
            });
        }
    });

    let boxs = gsap.utils.toArray('._sub._product._view ._cont .pbx');
    boxs.forEach(function (item,idx) {
        gsap.timeline({
            scrollTrigger: {
                trigger: item,
                start: 'top center+=20%',
                // markers: true,
                toggleActions: 'play none none reverse'
            }
        })
        .from(item.querySelector('._sub._product._view ._cont .pbx strong'), { opacity: 0, duration: .6, y: 40 })
        .from(item.querySelector('._sub._product._view ._cont .pbx b'), { scaleX: 0, duration: .6 }, '-=80%')
        .from(item.querySelector('._sub._product._view ._cont .pbx p'), { opacity: 0, duration: .6, y: 40 }, '-=80%')
    });
    
</script>

<script src="/js/jyj/sub/led.js"></script>

<?php
    include_once $_SERVER["DOCUMENT_ROOT"]."/_end.php"
?>