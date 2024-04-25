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

                <div class="init"></div>

                <h1>Light up, your life</h1>

                <div class="up_scale">
                    
                    <div class="scrollDown">
                        <div class="text"></div>
                        <div class="icon">
                            <img src="/asset/image/main/down.png" alt="">
                        </div>
                    </div>

                </div>

            </section>

            <section class="section02"></section>

            <section class="section03"></section>

            <section class="section04">
                <div class="tbx">
                    <p>
                        꿈꾸는 세상을 구현하는 DISPLAY LEADER 기업<br/>
                        디스플레이의 새로운 차원을 경험하다.
                    </p>
                    <p>
                        꿈꾸는 세상을 구현하는 DISPLAY LEADER 기업<br/>
                        디스플레이의 새로운 차원을 경험하다.
                    </p>
                </div>
            </section>

            <section class="section05"></section>

            <section class="section06">

                <div class="tbx">
                    <dl>
                        <dt>DISPLAY 전문기업, JBDISPLAY 와 함께 해보세요!</dt>
                        <dd>Let’s get in touch</dd>
                    </dl>
                    <a href="">견적문의 <i class="xi-angle-down"></i></a>
                </div>

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