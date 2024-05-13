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

<script type="module" src="/js/kjy/main/index.js"></script>

<?php 
    include_once $_SERVER["DOCUMENT_ROOT"]."/_end.php"
?>