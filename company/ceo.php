<?php
    include_once $_SERVER["DOCUMENT_ROOT"]."/_head.php";
    include_once $_SERVER["DOCUMENT_ROOT"]."/components/layout/_header.html";
?>
<link rel="stylesheet" href="/css/ceo.css">


<div class="ask">
	견적문의 <i class="xi-message-o"></i>
</div>

<div class="cursor-point"></div>

<div id="smooth-wrapper">
	<div id="smooth-content">
		<main class="_sub _company _ceo">

			<section class="subTitle">
				<div class="subwrap" max="1500"></div>
				<script src="/js/ldh/subTab.js"></script>
				<script>
					subTab({
						title: 'CEO 소개',
						depth: 0,
						act: 1,
					});

					$('._sub .subTitle h1').css({
                        'font-weight' : '700',
                        'font-family' : 'Pretendard'
                    });
				</script>

			</section>

            <article class="visuals">
                <div class="bg" style="background-image: url(/asset/image/sub/company/ceo/visual.jpg);"></div>
                <div class="subwrap" max="1500">
                    <dl>
                        <dt>Light up, your life</dt>
                        <dd>멈추지 않겠습니다. 끊임없이 기술 혁신을 하고 고객과 <br/>
                            함께 꿈꾸는 세상을 만들어가겠습니다.</dd>
                    </dl>
                </div>

                <div class="scbx">
                    <span></span>
                </div>
            </article>
			
            <article class="se01">
                <div class="subwrap" max="1600">
                    <strong>ENTER <br/>THE NEW <br/>DIGITAL SPACE</strong>
                    <div class="tbx">
                        <p>
                            “멈추지 않겠습니다. 끊임없이 기술 혁신을 하고 고객과 함께 꿈꾸는 세상을 만들어가겠습니다.<br/>
                            <span>JBDISPLAY</span> 30여 년간의 축적된 전문적인 기술력과 KNOW-HOW를 기반으로 과학적이고 <br class="none"/>
                            체계화된 시스템을 통해 고객사에게 보다 최적의 방법으로 설계, 제안, 구축 등을 진행하여  <br class="none"/>
                            드리는 IT와 DISPLAY 전문 기업입니다. <br/>
                            당사는 삼성 PC와 가전 전 제품 공급과 21세기 정보화시대에 맞춰 DID 시장을 선도하고 있으며  <br class="none"/>
                            빌딩, 공공기관, 복합상가 등에 적용하는 DID SYSTEM, 빌딩 안내시스템(KIOSK), 상황관제용 대형 LCD,  <br class="none"/>
                            LED SIGNAGE MULTI SYSTEM 관련 SOLUTION 등을 개발, 설치하고 있습니다.<br/>
                            대형 프로젝트 수행 경험과 우수한 기술인력을 토대로 차별화된 기술 시스템과 독보적인 디자인,  <br class="none"/>
                            솔루션 그리고 고객사 환경에 맞는 최적의 방법으로 구축해 드리고 있습니다.<br/>
                            단순히 납품만이 목적이 아닌. 고객 여러분의 서비스를 만족을 위해 최선을 다하고 있습니다. <br/>
                            항상 처음과 같은 마음으로 최고의 품질을 창출해 나가는 저희 JBDISPLAY은 초심을 잃지 않고  <br class="none"/>
                            꾸준히 노력하는 기업이 될 것을 약속드립니다.
                        </p>
                        <em>
                            <b>대표</b> <img src="/asset/image/sub/company/ceo/sign.jpg"/>
                        </em>
                    </div>
                </div>
            </article>

            <article class="se02">
                <div class="pin_">
                    <div class="subwrap" max="1600">
                        <dl>
                            <dt>JBDISPLAY</dt>
                            <dd>
                                <p>대형 프로젝트 수행 경험과 우수한 기술인력을 토대로<b></b></p>
                                <p>차별화된 기술 시스템과 독보적인 디자인, 솔루션<b></b></p>
                                <p>그리고 고객사 환경에 맞는 최적의 방법으로 구축해 드리고 있습니다.<b></b></p>
                            </dd>
                        </dl>
                    </div>
                </div>

                <ul class="lists">
                    <li>
                        <div class="thumb">
                            <div class="_max" style="background-image: url(/asset/image/sub/company/ceo/img1.jpg);"></div>
                        </div>
                        <dl>
                            <dt>The best service</dt>
                            <dd>
                                단순히 납품만이 목적이 아닌, <br/>고객 여러분의 서비스를 만족을 위해 최선을 다하고 있습니다.
                            </dd>
                        </dl>
                    </li>
                    <li>
                        <div class="thumb">
                            <div class="_max" style="background-image: url(/asset/image/sub/company/ceo/img2.jpg);"></div>
                        </div>
                        <dl>
                            <dt>Promise</dt>
                            <dd>
                                항상 처음과 같은 마음으로 최고의 품질을 창출해 나가는 <br/>
                                저희 JBDISPLAY㈜은 초심을 잃지 않고 <br/>
                                꾸준히 노력하는 기업이 될 것을 약속드립니다.
                            </dd>
                        </dl>
                    </li>
                </ul>
            </article>

		</main>
		<?php
            include_once $_SERVER["DOCUMENT_ROOT"]."/components/layout/_footer.html";
        ?>
	</div>
</div>

<script type="module" src="/js/jyj/sub/common/sub_share.js"></script>
<script>
	let card = gsap.utils.toArray('.cardArea li');
	$(card).each(function(idx,item){
		gsap.from(item,{
			opacity:0,y:40,duration:0.7,
			scrollTrigger:{
				trigger:item,
				start:'top 80%',
				toggleActions:'play none none reverse',
			}
		})
	})
</script>

<?php
    include_once $_SERVER["DOCUMENT_ROOT"]."/_end.php"
?>