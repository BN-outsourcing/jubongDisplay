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

            <section class="section02">

                <div class="tbx">
                    <h1>Reference</h1>
                    <a href="">view more <i class="xi-angle-down"></i></a>
                </div>

                <div class="flex">
                    <div class="grid left">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                    <div class="grid right">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
                
            </section>

            <section class="section03">
                
                <div class="box">
                    <div class="tbx">
                        <h1>Product</h1>
                        <p>
                            빛으로 만나는 새로운 세상<br/>화려한 세계, 디스플레이로 만나다.
                            <span>
                                빛으로 만나는 새로운 세상<br/>화려한 세계, 디스플레이로 만나다.
                            </span>
                        </p>
                    </div>
                    <div class="flex">
                        <div class="img"></div>
                        <div class="box">
                            <h1>LED Signage</h1>
                            <ul>
                                <li>
                                    <div>실외형</div>
                                </li>
                                <li>
                                    <div>실내형</div>
                                </li>
                                <li>
                                    <div>특수형</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="box left">
                    <div class="tbx">
                        <h1>Product</h1>
                    </div>
                    <div class="flex">
                        <div class="img"></div>
                        <div class="box">
                            <h1>LED Signage</h1>
                            <ul>
                                <li>
                                    <div>실외형</div>
                                </li>
                                <li>
                                    <div>실내형</div>
                                </li>
                                <li>
                                    <div>특수형</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="tbx">
                        <h1>Product</h1>
                    </div>
                    <div class="flex">
                        <div class="img"></div>
                        <div class="box">
                            <h1>LED Signage</h1>
                            <ul>
                                <li>
                                    <div>실외형</div>
                                </li>
                                <li>
                                    <div>실내형</div>
                                </li>
                                <li>
                                    <div>특수형</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

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

            <section class="section05">
                <dl class="tbx">
                    <dt>Partners</dt>
                    <dd>
                        당신이 꿈꾸는 새로운 빛의 세상,<br/>
                        JBDISPLAY와 함께
                        <span>
                            당신이 꿈꾸는 새로운 빛의 세상,<br/>
                            JBDISPLAY와 함께
                        </span>
                    </dd>
                </dl>
            </section>

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