<?php
    include_once $_SERVER["DOCUMENT_ROOT"]."/_head.php";
    include_once $_SERVER["DOCUMENT_ROOT"]."/components/layout/_header.html";
?>
<link rel="stylesheet" href="/css/product.css">


<div class="ask">
	견적문의 <i class="xi-message-o"></i>
</div>

<div class="cursor-point"></div>

<div id="smooth-wrapper">
	<div id="smooth-content">
		<main class="_sub _product">

			<section class="subTitle">
				<div class="subwrap" max="1500"></div>
				<script src="/js/ldh/subTab.js"></script>
				<script>
					subTab({
						title: 'Product',
						depth: 2,
						act: 0,
					});
				</script>

			</section>

            <article class="listWrap">
                <ul class="gate">
                    <li>
                        <a href="" class="card">
                            <div class="bg" style="background-image: url(/asset/image/sub/product/gate1.jpg);"></div>
                            <div class="circle">
                                <div class="light" style="background-image: url(/asset/image/sub/product/gate1.jpg);"></div>
                                <dl>
                                    <dt>01 Product</dt>
                                    <dd>LED사이니지</dd>
                                </dl>
                                <div class="morebtn"><span>view more</span><i class="xi-angle-down"></i></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="" class="card">
                            <div class="bg" style="background-image: url(/asset/image/sub/product/gate2.jpg);"></div>
                            <div class="circle">
                                <div class="light" style="background-image: url(/asset/image/sub/product/gate2.jpg);"></div>
                                <dl>
                                    <dt>02 Product</dt>
                                    <dd>LCD사이니지</dd>
                                </dl>
                                <div class="morebtn"><span>view more</span><i class="xi-angle-down"></i></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="" class="card">
                            <div class="bg" style="background-image: url(/asset/image/sub/product/gate3.jpg);"></div>
                            <div class="circle">
                                <div class="light" style="background-image: url(/asset/image/sub/product/gate3.jpg);"></div>
                                <dl>
                                    <dt>03 Product</dt>
                                    <dd>키오스크</dd>
                                </dl>
                                <div class="morebtn"><span>view more</span><i class="xi-angle-down"></i></div>
                            </div>
                        </a>
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
    
    // motion
    function responsive() {
        let wp = $(window).innerWidth();



        if(wp <= 820){
            $('._sub._product .listWrap .gate li').eq(0).find('.bg').css('background-image', 'url(/asset/image/sub/product/gate1_mo.jpg)');
            $('._sub._product .listWrap .gate li').eq(1).find('.bg').css('background-image', 'url(/asset/image/sub/product/gate2_mo.jpg)');
            $('._sub._product .listWrap .gate li').eq(2).find('.bg').css('background-image', 'url(/asset/image/sub/product/gate3_mo.jpg)');
            
        }else{
            $('._sub._product .listWrap .gate li').eq(0).find('.bg').css('background-image', 'url(/asset/image/sub/product/gate1.jpg)');
            $('._sub._product .listWrap .gate li').eq(1).find('.bg').css('background-image', 'url(/asset/image/sub/product/gate2.jpg)');
            $('._sub._product .listWrap .gate li').eq(2).find('.bg').css('background-image', 'url(/asset/image/sub/product/gate3.jpg)');
        }
    }

    responsive();

    $(window).resize(function () {
        responsive();
    });

</script>

<?php
    include_once $_SERVER["DOCUMENT_ROOT"]."/_end.php"
?>