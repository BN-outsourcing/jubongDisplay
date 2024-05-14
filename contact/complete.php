<?php 
    include_once $_SERVER["DOCUMENT_ROOT"]."/_head.php";
    include_once $_SERVER["DOCUMENT_ROOT"]."/components/layout/_header.html";
?>
<link rel="stylesheet" href="/css/contact.css">


<div class="ask">
    견적문의 <i class="xi-message-o"></i>
</div>

<div class="cursor-point"></div>

<div id="smooth-wrapper">
    <div id="smooth-content">
        <main class="_sub _complete">
        
            <span class="icon"><i class="xi-check"></i></span>

            <dl>
                <dt>상담문의가 접수되었습니다.</dt>
                <dd>1~2일 빠른 시일내에 답변 드리겠습니다. 감사합니다.</dd>
            </dl>

        </main>  
        <?php
            include_once $_SERVER["DOCUMENT_ROOT"]."/components/layout/_footer.html";
        ?>
    </div>
</div>

<script type="module" src="/js/jyj/sub/common/sub_share.js"></script>
<script>
    gsap.timeline()
    .from('._sub._complete span.icon', { opacity: 0, y: 40, duration: .6 })
    .from('._sub._complete > dl dt', { opacity: 0, y: 40, duration: .6 }, '-=80%')
    .from('._sub._complete > dl dd', { opacity: 0, y: 40, duration: .6 }, '-=80%')
</script>

<?php 
    include_once $_SERVER["DOCUMENT_ROOT"]."/_end.php"
?>