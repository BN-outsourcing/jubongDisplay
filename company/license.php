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
		<main class="_sub _company _license">

			<section class="subTitle">
				<div class="subwrap" max="1500"></div>
				<script src="/js/ldh/subTab.js"></script>
				<script>
					subTab({
						title: '견적상담',
						depth: 0,
						act: 2,
					});
				</script>

			</section>

			<section class="contents">
				<div class="subwrap" max="1384">
					<ul class="cardArea">
						<li>
							<a href="">
								<div class="imgBx"><img src="/asset/image/sub/company/license.jpg" alt=""></div>
								<div class="txtBx">
									<small class="category">[특허증]</small>
									<p>
										FPGA 기반의 다 채널 <br />
										영상 조합 출력장치
									</p>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="imgBx"><img src="/asset/image/sub/company/license.jpg" alt=""></div>
								<div class="txtBx">
									<small class="category">[특허증]</small>
									<p>
										FPGA 기반의 다 채널 <br />
										영상 조합 출력장치
									</p>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="imgBx"><img src="/asset/image/sub/company/license.jpg" alt=""></div>
								<div class="txtBx">
									<small class="category">[특허증]</small>
									<p>
										FPGA 기반의 다 채널 <br />
										영상 조합 출력장치
									</p>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="imgBx"><img src="/asset/image/sub/company/license.jpg" alt=""></div>
								<div class="txtBx">
									<small class="category">[특허증]</small>
									<p>
										FPGA 기반의 다 채널 <br />
										영상 조합 출력장치
									</p>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="imgBx"><img src="/asset/image/sub/company/license.jpg" alt=""></div>
								<div class="txtBx">
									<small class="category">[특허증]</small>
									<p>
										FPGA 기반의 다 채널 <br />
										영상 조합 출력장치
									</p>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="imgBx"><img src="/asset/image/sub/company/license.jpg" alt=""></div>
								<div class="txtBx">
									<small class="category">[특허증]</small>
									<p>
										FPGA 기반의 다 채널 <br />
										영상 조합 출력장치
									</p>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="imgBx"><img src="/asset/image/sub/company/license.jpg" alt=""></div>
								<div class="txtBx">
									<small class="category">[특허증]</small>
									<p>
										FPGA 기반의 다 채널 <br />
										영상 조합 출력장치
									</p>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="imgBx"><img src="/asset/image/sub/company/license.jpg" alt=""></div>
								<div class="txtBx">
									<small class="category">[특허증]</small>
									<p>
										FPGA 기반의 다 채널 <br />
										영상 조합 출력장치
									</p>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="imgBx"><img src="/asset/image/sub/company/license.jpg" alt=""></div>
								<div class="txtBx">
									<small class="category">[특허증]</small>
									<p>
										FPGA 기반의 다 채널 <br />
										영상 조합 출력장치
									</p>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="imgBx"><img src="/asset/image/sub/company/license.jpg" alt=""></div>
								<div class="txtBx">
									<small class="category">[특허증]</small>
									<p>
										FPGA 기반의 다 채널 <br />
										영상 조합 출력장치
									</p>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="imgBx"><img src="/asset/image/sub/company/license.jpg" alt=""></div>
								<div class="txtBx">
									<small class="category">[특허증]</small>
									<p>
										FPGA 기반의 다 채널 <br />
										영상 조합 출력장치
									</p>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="imgBx"><img src="/asset/image/sub/company/license.jpg" alt=""></div>
								<div class="txtBx">
									<small class="category">[특허증]</small>
									<p>
										FPGA 기반의 다 채널 <br />
										영상 조합 출력장치
									</p>
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