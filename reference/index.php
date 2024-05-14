<?php
    include_once $_SERVER["DOCUMENT_ROOT"]."/_head.php";
    include_once $_SERVER["DOCUMENT_ROOT"]."/components/layout/_header.html";
?>
<link rel="stylesheet" href="/css/reference.css">


<div class="ask">
	견적문의 <i class="xi-message-o"></i>
</div>

<div class="cursor-point"></div>

<div id="smooth-wrapper">
	<div id="smooth-content">
		<main class="_sub _reference _index">

			<section class="subTitle">
				<div class="subwrap" max="1500"></div>
				<script src="/js/ldh/subTab.js"></script>
				<script>
					subTab({
						title: 'Reference',
						depth: 1,
						act: 0,
					});
				</script>

			</section>

			<section class="s1">
				<div class="subwrap" max="1500">
					<div class="swiper mySwiper">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<a href="" class="card">
									<div class="imgBx"><img src="" alt=""></div>
									<div class="txtBx">
										<small>기업명자리</small>
										<h3>고정글 제목이 들어가는 자리입니다</h3>
										<div class="category">
											<p>스마트 LED</p>
											<p>상업시설</p>
										</div>
									</div>
								</a>
							</div>
							<div class="swiper-slide">
								<a href="" class="card">
									<div class="imgBx"><img src="" alt=""></div>
									<div class="txtBx">
										<small>기업명자리</small>
										<h3>고정글 제목이 들어가는 자리입니다</h3>
										<div class="category">
											<p>스마트 LED</p>
											<p>상업시설</p>
										</div>
									</div>
								</a>
							</div>
							<div class="swiper-slide">
								<a href="" class="card">
									<div class="imgBx"><img src="" alt=""></div>
									<div class="txtBx">
										<small>기업명자리</small>
										<h3>고정글 제목이 들어가는 자리입니다</h3>
										<div class="category">
											<p>스마트 LED</p>
											<p>상업시설</p>
										</div>
									</div>
								</a>
							</div>
							<div class="swiper-slide">
								<a href="" class="card">
									<div class="imgBx"><img src="" alt=""></div>
									<div class="txtBx">
										<small>기업명자리</small>
										<h3>고정글 제목이 들어가는 자리입니다</h3>
										<div class="category">
											<p>스마트 LED</p>
											<p>상업시설</p>
										</div>
									</div>
								</a>
							</div>
							<div class="swiper-slide">
								<a href="" class="card">
									<div class="imgBx"><img src="" alt=""></div>
									<div class="txtBx">
										<small>기업명자리</small>
										<h3>고정글 제목이 들어가는 자리입니다</h3>
										<div class="category">
											<p>스마트 LED</p>
											<p>상업시설</p>
										</div>
									</div>
								</a>
							</div>
							<div class="swiper-slide">
								<a href="" class="card">
									<div class="imgBx"><img src="" alt=""></div>
									<div class="txtBx">
										<small>기업명자리</small>
										<h3>고정글 제목이 들어가는 자리입니다</h3>
										<div class="category">
											<p>스마트 LED</p>
											<p>상업시설</p>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="control">
						<div class="box">
							<div class="button-prev"><i class="xi-angle-left-thin"></i></div>
							<div class="pagination"></div>
							<div class="button-next"><i class="xi-angle-right-thin"></i></div>
						</div>
					</div>
				</div>
			</section>

			<section class="s2">
				<div class="subwrap" max="1500">

					<div class="top">
						<div class="_selectOption">
							<div class="solution">
								<p>솔루션</p><i class="xi-caret-down-min"></i>
								<ul>
									<li>리스트1</li>
									<li>리스트2</li>
									<li>리스트3</li>
									<li>리스트4</li>
									<li>리스트5</li>
								</ul>
							</div>
							<div class="category">
								<p>업종</p><i class="xi-caret-down-min"></i>
								<ul>
									<li>리스트1</li>
									<li>리스트2</li>
									<li>리스트3</li>
									<li>리스트4</li>
									<li>리스트5</li>
								</ul>
							</div>
						</div>
						<script>
							$('._selectOption > div').click(function(){
								$(this).siblings('div').find('ul').slideUp(200);
								$(this).find('ul').slideToggle(200);
							})

							$('._selectOption > div ul li').click(function(){
								let clickTxt = $(this).text();
								$(this).parents('ul').siblings('p').text(clickTxt);
							})
						</script>
						<div class="_searchBar">
							<input type="text" placeholder="검색어를 입력하세요">
							<button><img src="/asset/image/sub/search_ico.png" alt=""></button>
						</div>
					</div>

					<!-- 카드리스트 -->
					<ul class="cardArea">
						<li>
							<a href="" class="card">
								<div class="imgBx"><img src="" alt=""></div>
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
								<div class="imgBx"><img src="" alt=""></div>
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
								<div class="imgBx"><img src="" alt=""></div>
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
								<div class="imgBx"><img src="" alt=""></div>
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
								<div class="imgBx"><img src="" alt=""></div>
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
								<div class="imgBx"><img src="" alt=""></div>
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
								<div class="imgBx"><img src="" alt=""></div>
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
								<div class="imgBx"><img src="" alt=""></div>
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
								<div class="imgBx"><img src="" alt=""></div>
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
								<div class="imgBx"><img src="" alt=""></div>
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
								<div class="imgBx"><img src="" alt=""></div>
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
								<div class="imgBx"><img src="" alt=""></div>
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
					<div class="_pagination">
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

	var swiper = new Swiper(".mySwiper", {
		speed:800,
		navigation: {
			nextEl: ".control .button-next",
			prevEl: ".control .button-prev",
		},
		pagination: {
			el: ".control .pagination",
			clickable : true,
		},
		breakpoints:{
			1601: {
				slidesPerView:'3',
				spaceBetween:57,
			},
			821 : {
				slidesPerView:'3',
				spaceBetween:20,
			},
			501 : {
				slidesPerView:'2',
				spaceBetween:10,
			},
			0 : {
				slidesPerView:'1.1',
				spaceBetween:10,
			},
		}
	});

	let s1tl = gsap.timeline()
	.from('.s1 .swiper-slide:nth-of-type(1)',{opacity:0,y:-40})
	.from('.s1 .swiper-slide:nth-of-type(2)',{opacity:0,y:-40},'-=50%')
	.from('.s1 .swiper-slide:nth-of-type(3)',{opacity:0,y:-40},'-=50%')
	.from('.s1 .control',{opacity:0})


	gsap.from('.s2 .top',{
		opacity:0,y:-40,
		scrollTrigger:{
			trigger:'._sub ._searchBar',
			start:'top 80%',
			toggleActions:'play none none reverse'
		}
	})

	let card = gsap.utils.toArray('.cardArea li');
	$(card).each(function (idx, item) {
		gsap.from(item, {
			opacity: 0, y: 40, duration: 0.7,
			scrollTrigger: {
				trigger: item,
				start: 'top 80%',
				toggleActions: 'play none none reverse',
			}
		})
	})
</script>

<?php
    include_once $_SERVER["DOCUMENT_ROOT"]."/_end.php"
?>