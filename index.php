<?php 
    include_once $_SERVER["DOCUMENT_ROOT"]."/_head.php";
    # include_once $_SERVER["DOCUMENT_ROOT"]."/components/layout/_header.html";
?>

<div class="ask">
    견적문의 <i class="xi-message-o"></i>
</div>

<div id="smooth-wrapper">
    <div id="smooth-content">
        <main class="_main">
        
            <section class="section01">

                <div class="init">

                </div>

                <h1>Light up, your life </h1>

            </section>

            <?php
                include_once $_SERVER["DOCUMENT_ROOT"]."/components/layout/_footer.html";
            ?>

        </main>  
    </div>
</div>

<script>
    gsap.registerPlugin(ScrollTrigger,ScrollSmoother);
    ScrollSmoother.create({
        smooth: 1,
        effects: true,
    });
</script>

<?php 
    include_once $_SERVER["DOCUMENT_ROOT"]."/_end.php"
?>