<?php 
    include_once $_SERVER["DOCUMENT_ROOT"]."/_head.php";
    include_once $_SERVER["DOCUMENT_ROOT"]."/components/layout/_header.html";
?>

<div class="ask">
    견적문의 <i class="xi-message-o"></i>
</div>

<div class="cursor-point"></div>

<div id="smooth-wrapper">
    <div id="smooth-content">
        <main class="_main">
        
            <?php
                include_once $_SERVER["DOCUMENT_ROOT"]."/components/main/section01.html";
                include_once $_SERVER["DOCUMENT_ROOT"]."/components/main/section02.html";
                include_once $_SERVER["DOCUMENT_ROOT"]."/components/main/section03.html";
                include_once $_SERVER["DOCUMENT_ROOT"]."/components/main/section04.html";
                include_once $_SERVER["DOCUMENT_ROOT"]."/components/main/section05.html";
                include_once $_SERVER["DOCUMENT_ROOT"]."/components/main/section06.html";
            ?>
            
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