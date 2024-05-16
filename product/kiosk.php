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
						title: 'Kiosk',
						depth: 3,
						act: 2,
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
                                <strong>KIOSK 실외용</strong>
                                <b></b>
                                <p>
                                    사용자와 상호작용하고 효율적인 정보를 제공하는 종합정보안내시스템입니다.  <br/>실외 환경에서 사용되므로 내구성이 뛰어나고 강화된 구조로 설계되었으며, <br class="none"/> 야외조명 아래에서도 화면이 잘 보일 수 있도록 고해상도, 고밝기를 제공합니다. <br/>개방된 장소에서 무인으로 운영되면서 이용자들이 정보획득, 물품구매, 발권, 등록 등의 처리를 쉽게 할 수 있도록 설계되었습니다.
                                </p>
                            </div>
                            <div class="imgbx">
                                <canvas id="product1" width="770" height="577" style="background-image: url(/asset/image/sub/product/led1/led01_1.gif);"></canvas>
                                <iframe src="https://player.vimeo.com/video/946865183?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write" title="JBDisplay_LED_실외용_외부건물"></iframe>
                            </div>
                        </div>

                        <div class="pbx _2">
                            <div class="txtbx">
                                <strong>KIOSK 가로형</strong>
                                <b></b>
                                <p>
                                    주로 사용되는 콘텐츠와 설치장소의 환경에 따라 정보를 제공하는 키오스크입니다.<br/> 대부분의 노트북과 모니터 화면과 유사한 가로방향의 화면을 갖고 있어 <br/>사용자들에게 익숙하게 다가갈 수 있는 제품이며, <br class="none"/>정보 제공이나 비교 분석 콘텐츠를 표시하는데 효과적입니다.
                                </p>
                            </div>
                            <div class="imgbx">
                                <canvas id="product2" width="770" height="577" style="background-image: url(/asset/image/sub/product/led1/led01_1.gif);"></canvas>
                                <iframe src="https://player.vimeo.com/video/946864008?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write" title="JBDisplay_LED_실외용_외부건물"></iframe>
                            </div>
                        </div>

                        <div class="pbx _3">
                            <div class="txtbx">
                                <strong>KIOSK 세로형</strong>
                                <b></b>
                                <p>
                                    주로 사용되는 콘텐츠와 설치장소의 환경에 따라 정보를 제공하는 키오스크입니다. <br/>모바일 기기의 화면 방향과 유사하며 사용자가 편리하게 상호작용 할 수 있으며, <br class="none"/>광고나 포스터 형식의 콘텐츠를 표시하는데 효과적입니다.
                                </p>
                            </div>
                            <div class="imgbx">
                                <canvas id="product3" width="770" height="577" style="background-image: url(/asset/image/sub/product/led1/led01_1.gif);"></canvas>
                                <iframe src="https://player.vimeo.com/video/946864242?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write" title="JBDisplay_LED_실외용_외부건물"></iframe>
                            </div>
                        </div>

                        <div class="pbx _4">
                            <div class="txtbx">
                                <strong>KIOSK 주문제작</strong>
                                <b></b>
                                <p>
                                    다양한 옵션 추가선택과 디자인이 가능하여 <br class="none"/>필요에 따른 다양한 형태의 제작이 가능합니다. <br/>주문결제시스템, 자동높이조절, 배리어프리(Barrier free) 등 <br class="none"/>모두가 편의를 얻을 서비스 제품을 제공합니다.
                                </p>
                            </div>
                            <div class="imgbx">
                                <canvas id="product4" width="770" height="577" style="background-image: url(/asset/image/sub/product/led1/led01_1.gif);"></canvas>
                                <iframe src="https://player.vimeo.com/video/946865308?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write" title="JBDisplay_LED_실외용_외부건물"></iframe>
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