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
		<main class="_sub _news_letter_view">
			<div class="subwrap" max="1500">

                <!-- 상단 -->
                <div class="top">
                    <a class="list" href="./news_letter.php"><i class="xi-angle-left-min"></i> 리스트로가기</a>
                    <h2>서울특별시장 우수기업 표창장 수상</h2>
                    <div class="info">
                        <small class="date">2021.09.15</small>
                        <div class="fileBx">
                            <small>첨부파일</small>
                            <div class="file">
                                <a href="">표창장_액자.jpg<span>(78,840byte)</span></a>
                                <a href="">표창장_액자.jpg<span>(78,840byte)</span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 내용 -->
                <div class="cont">
                    <div>
                        작성한 내용이 들어갈 자리입니다.
                    </div>
                </div>

                <!-- 하단 -->
                <div class="bottom">
                    <a class="prev" href="">
                        <em>이전글 &nbsp;<i class="xi-angle-up"></i></em>
                        <p>이전글 제목이 위치합니다.</p>
                    </a>
                    <a class="next" href="">
                        <em>다음글 &nbsp;<i class="xi-angle-down"></i></em>
                        <p>다음글 제목이 위치합니다.</p>
                    </a>
                </div>

                <div class="listBtn">
                    <a href="./news_letter.php"><p>리스트가기</p></a>
                </div>
            </div>
		</main>
		<?php
            include_once $_SERVER["DOCUMENT_ROOT"]."/components/layout/_footer.html";
        ?>
	</div>
</div>

<script type="module" src="/js/jyj/sub/common/sub_share.js"></script>

<?php
    include_once $_SERVER["DOCUMENT_ROOT"]."/_end.php"
?>