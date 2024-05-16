<?php
    include_once $_SERVER["DOCUMENT_ROOT"]."/_head.php";
    include_once $_SERVER["DOCUMENT_ROOT"]."/components/layout/_header.html";
?>
<link rel="stylesheet" href="/css/company.css">


<div class="ask">
	견적문의 <i class="xi-message-o"></i>
</div>

<div class="cursor-point"></div>

<!-- 왼쪽 퀵메뉴 -->
<div class="leftQuick">
	<div class="tabArea">
		<div class="line"><span></span></div>
		<div class="tabBx">
			<a class="on" href=""><p>회사소개</p></a>
			<a href=""><p>CL소개</p></a>
			<a href=""><p>주요 연혁 소개</p></a>
		</div>
	</div>
	<a href=""><i class="xi-diskette"></i> &nbsp; <p>회사소개 다운로드</p></a>
</div>

<div id="smooth-wrapper">
	<div id="smooth-content">
		<main class="_sub _company _index">

			<section class="subTitle">
				<div class="subwrap" max="1500"></div>
				<script src="/js/ldh/subTab.js"></script>
				<script>
					subTab({
						title: '회사소개',
						depth: 0,
						act: 0,
					});

					$('._sub .subTitle h1').css('font-weight', '700');
				</script>

			</section>

			<section class="s1">
				<div class="cont">
					<div class="bg"></div>
					<div class="txtBx">
						<div class="col n1">
							<small><p>Vision</p></small>
							<strong><p>Light up your life 빛으로 만나는 새로운 세상 JBDISPLAY가 함께 만들어갑니다.</p></strong>
						</div>
						<div class="col n2">
							<small><p>Goal</p></small>
							<strong><p>Global No.1</p></strong>
						</div>
					</div>
				</div>
			</section>

			<section class="s2">
				<div class="subwrap" max="1500">
					<div class="top">
						<small>Core Value</small>
						<div class="col n1"><b>우리를</b>&nbsp;빛나게</div>
						<div class="col n2"><b>공간을</b>&nbsp;빛나게</div>
						<div class="col n3"><b>세상을</b>&nbsp;빛나게</div>
					</div>
					<div class="bottom">
						<div class="col">
							<small><p>First</p></small>
							<strong><p>DID 시장선도 신기술 개발 및 혁신 미래기술 트랜드 주도</p></strong>
						</div>
						<div class="col">
							<small><p>Best</p></small>
							<strong><p>고객맞춤 솔루션 제공 전략적 시너지 창출</p></strong>
						</div>
						<div class="col">
							<small><p>Together</p></small>
							<strong><p>상생협력파트너십 부서간 소통과 협업 지역사회 공헌 활동</p></strong>
						</div>
					</div>
				</div>
			</section>

			<section class="s3">
				<div class="box">
					<div class="bg"><img src="/asset/image/sub/company/index_s3_bg.jpg" alt=""></div>
					<div class="cover left"></div>
					<div class="cover right"></div>
				</div>
				<div class="txt">
					<em>30여 년간 축척 된 <br/> 전문적인 기술력과 노하우</em>
					<p>
						JBDISPLAY는 30여 년간 축적된 전문적인 기술력과 노하우를 고객사에게 최적의 방법으로  <br/>
						기획/개발/제작/설치 등을 진행하여 드리는 DISPLAY 전문기업입니다. IT와 정보화시대에 맞춰 디지털 사이니지 시장을 선도하고 있으며,  <br/>
						다수의 우수한 기업들과 계약을 맺고 다년간 판매 및 기술 지원을 하고 있습니다.
					</p>
					<p>
						고객만족 최고의 전문 인력과 체계적인 지식/노하우를 바탕으로 <br/>
						고객 만족 서비스를 최우선 하여 실천하고 있습니다.정직과 신뢰 고객에게 <br/>
						정직한 가격의 신뢰 있는 제품을 판매할 것을 약속드립니다.
					</p>
				</div>
			</section>

		</main>
		<?php
            include_once $_SERVER["DOCUMENT_ROOT"]."/components/layout/_footer.html";
        ?>
	</div>
</div>

<script type="module" src="/js/jyj/sub/common/sub_share.js"></script>
<script>
	// 섹션1
	let s1tl01 = gsap.timeline()
	.to('.s1 .bg',{backgroundPosition:'0 100%'})

	ScrollTrigger.create({
		trigger:'.s1',
		start:'top top',
		end:'+=300%',
		pin:'.s1 .cont',
		pinSpacing: true,
		animation:s1tl01,
		scrub:2,
	})

	ScrollTrigger.create({
		trigger:'.s1',
		start:'top top',
		end:'top+=30% top',
		onEnter:()=>{
			$('.s1 .txtBx .col.n1').addClass('show');
		},
		onLeave:()=>{
			$('.s1 .txtBx .col.n1').removeClass('show');
		},
		onEnterBack:()=>{
			$('.s1 .txtBx .col.n1').addClass('show');
		},
		onLeaveBack:()=>{
			console.log('wowowow');
			$('.s1 .txtBx .col.n1').removeClass('show');
		},
	})

	ScrollTrigger.create({
		trigger:'.s1',
		start:'top+=40% top',
		end:'top+=70% top',
		onEnter:()=>{
			$('.s1 .txtBx .col.n2').addClass('show');
		},
		onLeave:()=>{
			$('.s1 .txtBx .col.n2').removeClass('show');
		},
		onEnterBack:()=>{
			$('.s1 .txtBx .col.n2').addClass('show');
		},
		onLeaveBack:()=>{
			$('.s1 .txtBx .col.n2').removeClass('show');
		},
	})



	// 섹션2
	let s2tl01 = gsap.timeline({
		scrollTrigger:{
			trigger:'.s2 .top',
			start:'top 80%',
			toggleActions:'play none none reverse',
		}
	})
	.from('.s2 .top small',{opacity:0,x:-40})
	.from('.s2 .top .col.n1',{opacity:0,x:-40},'-=50%')
	.from('.s2 .top .col.n2',{opacity:0,x:-40},'-=50%')
	.from('.s2 .top .col.n3',{opacity:0,x:-40},'-=50%')

	gsap.from('.s2 .bottom .col p',0.7,{
		y:'-110%',
		scrollTrigger:{
			trigger:'.s2 .bottom',
			start:'top 80%',
			toggleActions:'play none none reverse',
		}
	},'-=50%')

</script>

<?php
    include_once $_SERVER["DOCUMENT_ROOT"]."/_end.php"
?>
