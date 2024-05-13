<?php
    include_once $_SERVER["DOCUMENT_ROOT"]."/_head.php";
    include_once $_SERVER["DOCUMENT_ROOT"]."/components/layout/_header.html";
?>
<link rel="stylesheet" href="/css/company.css">


<div class="ask">
	견적문의 <i class="xi-message-o"></i>
</div>

<div class="cursor-point"></div>

<div id="smooth-wrapper">
	<div id="smooth-content">
		<main class="_sub _company _news_letter">

			<section class="subTitle">
				<div class="subwrap" max="1500"></div>
				<script src="/js/ldh/subTab.js"></script>
				<script>
					subTab({
						title: '뉴스레터',
						depth: 0,
						act: 3,
					});
				</script>

			</section>

			<section class="s1">
				<div class="subwrap" max="1500">
					<div class="swiper mySwiper">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<a href="">
									<div class="imgBx"><img src="/asset/image/sub/company/license.jpg" alt=""></div>
									<div class="txtBx">
										<small class="date">2021.02.08</small>
										<p class="tit">고정글 제목이 들어가는 자리 고정글 제목이 들어가는 자리 고정글 제목이 들어가는 자리 고정글 제목이 들어가는 자리</p>
									</div>
								</a>
							</div>
							<div class="swiper-slide">
								<a href="">
									<div class="imgBx"><img src="/asset/image/sub/company/license.jpg" alt=""></div>
									<div class="txtBx">
										<small class="date">2021.02.08</small>
										<p class="tit">고정글 제목이 들어가는 자리 고정글 제목이 들어가는 자리 고정글 제목이 들어가는 자리 고정글 제목이 들어가는 자리</p>
									</div>
								</a>
							</div>
							<div class="swiper-slide">
								<a href="">
									<div class="imgBx"><img src="/asset/image/sub/company/license.jpg" alt=""></div>
									<div class="txtBx">
										<small class="date">2021.02.08</small>
										<p class="tit">고정글 제목이 들어가는 자리 고정글 제목이 들어가는 자리 고정글 제목이 들어가는 자리 고정글 제목이 들어가는 자리</p>
									</div>
								</a>
							</div>
							<div class="swiper-slide">
								<a href="">
									<div class="imgBx"><img src="/asset/image/sub/company/license.jpg" alt=""></div>
									<div class="txtBx">
										<small class="date">2021.02.08</small>
										<p class="tit">고정글 제목이 들어가는 자리 고정글 제목이 들어가는 자리 고정글 제목이 들어가는 자리 고정글 제목이 들어가는 자리</p>
									</div>
								</a>
							</div>
							<div class="swiper-slide">
								<a href="">
									<div class="imgBx"><img src="/asset/image/sub/company/license.jpg" alt=""></div>
									<div class="txtBx">
										<small class="date">2021.02.08</small>
										<p class="tit">고정글 제목이 들어가는 자리 고정글 제목이 들어가는 자리 고정글 제목이 들어가는 자리 고정글 제목이 들어가는 자리</p>
									</div>
								</a>
							</div>
							<div class="swiper-slide">
								<a href="">
									<div class="imgBx"><img src="/asset/image/sub/company/license.jpg" alt=""></div>
									<div class="txtBx">
										<small class="date">2021.02.08</small>
										<p class="tit">고정글 제목이 들어가는 자리 고정글 제목이 들어가는 자리 고정글 제목이 들어가는 자리 고정글 제목이 들어가는 자리</p>
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
				<script>
					var swiper = new Swiper(".mySwiper", {
						speed:1000,
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
				</script>
			</section>
			<section class="s2">
				<div class="subwrap" max="1500">
					<div class="_searchBar">
						<input type="text" placeholder="검색어를 입력하세요">
						<button><img src="/asset/image/sub/search_ico.png" alt=""></button>
					</div>
					<ul class="cardArea">

						<li>
							<a href="">
								<div class="imgBx"><img src="/asset/image/sub/company/license.jpg" alt=""></div>
								<div class="txtBx">
									<small class="date">2021.02.08</small>
									<p class="tit">제목이 들어가는 자리</p>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="imgBx"><img src="/asset/image/sub/company/license.jpg" alt=""></div>
								<div class="txtBx">
									<small class="date">2021.02.08</small>
									<p class="tit">제목이 들어가는 자리</p>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="imgBx"><img src="/asset/image/sub/company/license.jpg" alt=""></div>
								<div class="txtBx">
									<small class="date">2021.02.08</small>
									<p class="tit">제목이 들어가는 자리</p>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="imgBx"><img src="/asset/image/sub/company/license.jpg" alt=""></div>
								<div class="txtBx">
									<small class="date">2021.02.08</small>
									<p class="tit">제목이 들어가는 자리</p>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="imgBx"><img src="/asset/image/sub/company/license.jpg" alt=""></div>
								<div class="txtBx">
									<small class="date">2021.02.08</small>
									<p class="tit">제목이 들어가는 자리</p>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="imgBx"><img src="/asset/image/sub/company/license.jpg" alt=""></div>
								<div class="txtBx">
									<small class="date">2021.02.08</small>
									<p class="tit">제목이 들어가는 자리</p>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="imgBx"><img src="/asset/image/sub/company/license.jpg" alt=""></div>
								<div class="txtBx">
									<small class="date">2021.02.08</small>
									<p class="tit">제목이 들어가는 자리</p>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="imgBx"><img src="/asset/image/sub/company/license.jpg" alt=""></div>
								<div class="txtBx">
									<small class="date">2021.02.08</small>
									<p class="tit">제목이 들어가는 자리</p>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="imgBx"><img src="/asset/image/sub/company/license.jpg" alt=""></div>
								<div class="txtBx">
									<small class="date">2021.02.08</small>
									<p class="tit">제목이 들어가는 자리</p>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="imgBx"><img src="/asset/image/sub/company/license.jpg" alt=""></div>
								<div class="txtBx">
									<small class="date">2021.02.08</small>
									<p class="tit">제목이 들어가는 자리</p>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="imgBx"><img src="/asset/image/sub/company/license.jpg" alt=""></div>
								<div class="txtBx">
									<small class="date">2021.02.08</small>
									<p class="tit">제목이 들어가는 자리</p>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="imgBx"><img src="/asset/image/sub/company/license.jpg" alt=""></div>
								<div class="txtBx">
									<small class="date">2021.02.08</small>
									<p class="tit">제목이 들어가는 자리</p>
								</div>
							</a>
						</li>

					</ul>
				</div>

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
			</section>

		</main>
		<?php
            include_once $_SERVER["DOCUMENT_ROOT"]."/components/layout/_footer.html";
        ?>
	</div>
</div>

<script type="module" src="/js/jyj/sub/common/sub_share.js"></script>
<script>

</script>

<?php
    include_once $_SERVER["DOCUMENT_ROOT"]."/_end.php"
?>