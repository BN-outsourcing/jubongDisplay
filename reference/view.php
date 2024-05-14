<?php
    include_once $_SERVER["DOCUMENT_ROOT"]."/_head.php";
    include_once $_SERVER["DOCUMENT_ROOT"]."/components/layout/_header.html";
?>
<link rel="stylesheet" href="/css/reference.css">
<script src="https://player.vimeo.com/api/player.js"></script>


<div class="ask">
	견적문의 <i class="xi-message-o"></i>
</div>

<div class="cursor-point"></div>

<div id="smooth-wrapper">
	<div id="smooth-content">
		<main class="_sub _reference _view">
			<section class="s1">
				<div class="topTitle">
					<strong>설치 사례 제목이 들어가는 자리</strong>
					<small>2021.09.15</small>
				</div>
				<div class="swiper mySwiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="imgBx"><img src=" https://source.unsplash.com/random/?space" alt=""></div>
						</div>
						<div class="swiper-slide">
							<div class="videoBx">
								<!-- 영상은 비메오로 들어갈 예정 -->
								<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/843759458?badge=0&amp;controls=1&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="1058985719-hd"></iframe></div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="imgBx"><img src="https://source.unsplash.com/random/?light" alt=""></div>
						</div>
						<div class="swiper-slide">
							<div class="imgBx"><img src="https://source.unsplash.com/random/?nature" alt=""></div>
						</div>
						<div class="swiper-slide">
							<div class="videoBx">
								<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/843759458?badge=0&amp;controls=1&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="1058985719-hd"></iframe></div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="imgBx"><img src="https://source.unsplash.com/random/?ocean" alt=""></div>
						</div>
					</div>
					<div class="pagination"></div>
				</div>
				<script>
					var swiper = new Swiper(".mySwiper", {
						loop:true,
						speed:700,
						pagination: {
							el: ".pagination",
							clickable : true,
						},
						on:{
							slideChangeTransitionEnd :()=>{
								$('iframe').each(function () {
									var player = new Vimeo.Player($(this));
									player.pause();
								});
								if($('.swiper-slide-active').find('iframe').length > 0){
									let activeSlideVideo = new Vimeo.Player($('.swiper-slide-active').find('iframe'));
									activeSlideVideo.play();
								}
							}
						},
						breakpoints:{
							1601: {
								spaceBetween:62,
								slidesPerView: "auto",
								centeredSlides: true,
							},
							1281 : {
								spaceBetween:40,
								slidesPerView: "auto",
								centeredSlides: true,
							},
							821 : {
								spaceBetween:30,
								slidesPerView:"1.2",
								centeredSlides: true,
							},
							501 : {
								spaceBetween:20,
								slidesPerView:"1.2",
								centeredSlides: true,
							},
							0 : {
								spaceBetween:10,
								slidesPerView:"1.05",
							},
						}
					});
				</script>

				<!-- 하단 정보 -->
				<div class="infoArea">
					<h4 class="motionFadeDown">설치 사례 정보</h4>
					<div class="box motionFadeDown">
						<div class="left">
							<div class="col">
								<em>업종</em><p>업종명</p>
							</div>
							<div class="col">
								<em>고객사</em><p>고객사명</p>
							</div>
						</div>
						<div class="right">
							<div class="col">
								<em>솔루션</em><p>솔루션명</p>
							</div>
							<div class="col">
								<em>준공일</em><p>준공일</p>
							</div>
						</div>
					</div>
					<div class="txt motionFadeDown">
						<p>
							내용이 들어갈 자리입니다. 내용이 들어갈 자리입니다. 내용이 들어갈 자리입니다. 내용이 들어갈 자리입니다.
							내용이 들어갈 자리입니다. 내용이 들어갈 자리입니다. 내용이 들어갈 자리입니다. 내용이 들어갈 자리입니다.
							내용이 들어갈 자리입니다. 내용이 들어갈 자리입니다. 내용이 들어갈 자리입니다. 내용이 들어갈 자리입니다.
							내용이 들어갈 자리입니다. 내용이 들어갈 자리입니다. 내용이 들어갈 자리입니다. 내용이 들어갈 자리입니다.
							내용이 들어갈 자리입니다. 내용이 들어갈 자리입니다. 내용이 들어갈 자리입니다. 내용이 들어갈 자리입니다.
							내용이 들어갈 자리입니다. 내용이 들어갈 자리입니다. 내용이 들어갈 자리입니다. 내용이 들어갈 자리입니다.
							내용이 들어갈 자리입니다. 내용이 들어갈 자리입니다. 내용이 들어갈 자리입니다. 내용이 들어갈 자리입니다.
						</p>
					</div>
					<div class="btnArea motionFadeDown">
						<div class="moreBtn">
							<a href=""><p>상세보기</p></a>
						</div>
						<div class="listBtn">
							<a href=""><p>목록으로 가기</p></a>
						</div>
					</div>
				</div>
			</section>

			<section class="s2">
				<div class="subwrap" max="1500">
					<div class="subTitle">
						<h1 class="motionFadeDown">Reference</h1>
						<ul class="subTab motionFadeDown">
							<li class="on"><a href="./index.php">설치사례</a></li>
						</ul>
					</div>
					<!-- 카드리스트 -->
					<ul class="cardArea">
						<li>
							<a href="" class="card">
								<div class="imgBx"><img src="https://source.unsplash.com/random/?led" alt=""></div>
								<div class="txtBx">
									<small>기업명자리</small>
									<h3>고정글 제목이 들어가는 자리입니다</h3>
									<div class="category">
										<p>스마트 LED</p>
										<p>상업시설</p>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a href="" class="card">
								<div class="imgBx"><img src="https://source.unsplash.com/random/?led" alt=""></div>
								<div class="txtBx">
									<small>기업명자리</small>
									<h3>고정글 제목이 들어가는 자리입니다</h3>
									<div class="category">
										<p>스마트 LED</p>
										<p>상업시설</p>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a href="" class="card">
								<div class="imgBx"><img src="https://source.unsplash.com/random/?led" alt=""></div>
								<div class="txtBx">
									<small>기업명자리</small>
									<h3>고정글 제목이 들어가는 자리입니다</h3>
									<div class="category">
										<p>스마트 LED</p>
										<p>상업시설</p>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a href="" class="card">
								<div class="imgBx"><img src="https://source.unsplash.com/random/?led" alt=""></div>
								<div class="txtBx">
									<small>기업명자리</small>
									<h3>고정글 제목이 들어가는 자리입니다</h3>
									<div class="category">
										<p>스마트 LED</p>
										<p>상업시설</p>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a href="" class="card">
								<div class="imgBx"><img src="https://source.unsplash.com/random/?led" alt=""></div>
								<div class="txtBx">
									<small>기업명자리</small>
									<h3>고정글 제목이 들어가는 자리입니다</h3>
									<div class="category">
										<p>스마트 LED</p>
										<p>상업시설</p>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a href="" class="card">
								<div class="imgBx"><img src="https://source.unsplash.com/random/?led" alt=""></div>
								<div class="txtBx">
									<small>기업명자리</small>
									<h3>고정글 제목이 들어가는 자리입니다</h3>
									<div class="category">
										<p>스마트 LED</p>
										<p>상업시설</p>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a href="" class="card">
								<div class="imgBx"><img src="https://source.unsplash.com/random/?led" alt=""></div>
								<div class="txtBx">
									<small>기업명자리</small>
									<h3>고정글 제목이 들어가는 자리입니다</h3>
									<div class="category">
										<p>스마트 LED</p>
										<p>상업시설</p>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a href="" class="card">
								<div class="imgBx"><img src="https://source.unsplash.com/random/?led" alt=""></div>
								<div class="txtBx">
									<small>기업명자리</small>
									<h3>고정글 제목이 들어가는 자리입니다</h3>
									<div class="category">
										<p>스마트 LED</p>
										<p>상업시설</p>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a href="" class="card">
								<div class="imgBx"><img src="https://source.unsplash.com/random/?led" alt=""></div>
								<div class="txtBx">
									<small>기업명자리</small>
									<h3>고정글 제목이 들어가는 자리입니다</h3>
									<div class="category">
										<p>스마트 LED</p>
										<p>상업시설</p>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a href="" class="card">
								<div class="imgBx"><img src="https://source.unsplash.com/random/?led" alt=""></div>
								<div class="txtBx">
									<small>기업명자리</small>
									<h3>고정글 제목이 들어가는 자리입니다</h3>
									<div class="category">
										<p>스마트 LED</p>
										<p>상업시설</p>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a href="" class="card">
								<div class="imgBx"><img src="https://source.unsplash.com/random/?led" alt=""></div>
								<div class="txtBx">
									<small>기업명자리</small>
									<h3>고정글 제목이 들어가는 자리입니다</h3>
									<div class="category">
										<p>스마트 LED</p>
										<p>상업시설</p>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a href="" class="card">
								<div class="imgBx"><img src="https://source.unsplash.com/random/?led" alt=""></div>
								<div class="txtBx">
									<small>기업명자리</small>
									<h3>고정글 제목이 들어가는 자리입니다</h3>
									<div class="category">
										<p>스마트 LED</p>
										<p>상업시설</p>
									</div>
								</div>
							</a>
						</li>
					</ul>

					<!-- 페이지네이션 -->
					<div class="_pagination motionFadeDown">
						<div class="arrow left"><i class="xi-angle-left-min"></i></div>
						<ul>
							<li class="on"><a href="">1</a></li>
							<li><a href="">2</a></li>
							<li><a href="">3</a></li>
							<li><a href="">4</a></li>
							<li><a href="">5</a></li>
						</ul>
						<div class="arrow right"><i class="xi-angle-right-min"></i></div>
					</div>

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
	gsap.timeline({
		scrollTrigger:{
			trigger:'.s1',
			start:'top 85%',
			toggleActions:'play none none reverse'
		}
	})
	.from('.s1 .topTitle strong',{opacity:0,y:-40})
	.from('.s1 .topTitle small',{opacity:0,y:-40},'-=70%')

	gsap.timeline({
		scrollTrigger:{
			trigger:'.s1 .swiper',
			start:'top 85%',
			toggleActions:'play none none reverse',
		}
	})
	.from('.swiper-slide-prev > div',{opacity:0,y:-40})
	.from('.swiper-slide-active > div',{opacity:0,y:-40},'-=50%')
	.from('.swiper-slide-next > div',{opacity:0,y:-40},'-=50%')

	$('.motionFadeDown').each(function(idx,item){
		gsap.from($(item),{
			opacity:0,y:-40,
			scrollTrigger:{
				trigger:item,
				start:'top 85%',
				toggleActions:'play none none reverse',
			}
		})
	})

	$('.s2 .cardArea .card').each(function(idx,item){
		gsap.from($(item),{
			opacity:0,y:-40,
			scrollTrigger:{
				trigger:item,
				start:'top 85%',
				toggleActions:'play none none reverse',
			}
		})
	})

</script>
<?php
    include_once $_SERVER["DOCUMENT_ROOT"]."/_end.php"
?>