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
						title: 'LED Signage',
						depth: 3,
						act: 0,
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
                                <strong>LED 실외용</strong>
                                <b></b>
                                <p>
                                    주변환경 및 조명조건과 관계없이 야외 환경에서 정확하고 균일한 색감과 뛰어난 <br/>
                                    명암비로 콘텐츠를 더욱 실감나게 전달합니다. 장기간 사용에 대비하여  <br/>
                                    다양한 날씨조건 속에도 안전하게 이용할 수 있도록 강력한 내구성을 갖추고 있습니다. <br/>
                                    궁극의 몰입감을 주는 실외 LED SIGNAGE는 경기장, 공연장, 대형건물의 <br/>
                                    외벽 등을 화려하게 수놓아 특별한 시청경험을 선사합니다.
                                </p>
                            </div>
                            <div class="imgbx">
                                <canvas id="product1" width="770" height="577"></canvas>
                                <iframe src="https://player.vimeo.com/video/946063239?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write" title="JBDisplay_LED_실외용_외부건물"></iframe>
                            </div>
                        </div>

                        <div class="pbx _2">
                            <div class="txtbx">
                                <strong>LED 실내용</strong>
                                <b></b>
                                <p>
                                    쇼핑몰, 영화관, 방송 스튜디오, 기업 로비와 강당 등 다양한 스펙트럼을 가지고 <br/>
                                    있는 실내 LED SIGNAGE는 최대 2배 높은 밝기와 명암비로  <br/>
                                    생생한 화질을 구현합니다. 유연한 구조로 제작되어 곡면 형태의 디스플레이도 <br/>
                                    구현할 수 있으며, 매끄러운 접합면, 넓은 시야각, 크기에 제한 없으므로 <br/>
                                    실내 광고에 가장 적합한 제품입니다.
                                </p>
                            </div>
                            <div class="imgbx">
                                <canvas id="product2" width="770" height="577"></canvas>
                                <iframe src="https://player.vimeo.com/video/946063239?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write" title="JBDisplay_LED_실외용_외부건물"></iframe>
                            </div>
                        </div>

                        <div class="pbx _3">
                            <div class="txtbx">
                                <strong>LED 특수용</strong>
                                <b></b>
                                <p>
                                    옥내외의 시야를 연결시킬 수 있는 제품으로 빛이 통과하는 기능을 가진 유리와 유사한 <br/>
                                    LED DISPLAY로 시야를 방해하지 않으면서 건축과 미디어 디자인을 결합해 <br/>
                                    다양한 개성을 살릴 수 있는 특수 전광판입니다. <br/>
                                    쇼핑몰 매장내 쇼윈도, 유리난간 등에 활용되고 있습니다.
                                </p>
                            </div>
                            <div class="imgbx">
                                <canvas id="product3" width="770" height="577"></canvas>
                                <iframe src="https://player.vimeo.com/video/946063239?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write" title="JBDisplay_LED_실외용_외부건물"></iframe>
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
</script>

<script src="/js/jyj/sub/led.js"></script>

<?php
    include_once $_SERVER["DOCUMENT_ROOT"]."/_end.php"
?>