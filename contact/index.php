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
        <main class="_sub _contact">
        
            <section class="subTitle">
                <div class="subwrap" max="1500">
                    <h1>견적상담</h1>
                    <p><span>DISPLAY</span> 전문기업, <span>JBDISPLAY</span> 와 함께 해보세요!</p>
                </div>
            </section>

            <section class="_Form">
                <div class="subwrap" max="1500">
                    <div class="formwrap">
                        <h2>기본정보 입력</h2>
                        <ul class="basiclist">
                            <li>
                                <p>어떤 종류의 솔루션 설치를 원하시나요?</p>
                                <ol>
                                    <li>
                                        <input type="radio" name="s_type" id="s_type1"/>
                                        <label for="s_type1">LED 사이니지</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="s_type" id="s_type2"/>
                                        <label for="s_type2">LCD사이니지</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="s_type" id="s_type3"/>
                                        <label for="s_type3">키오스크</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="s_type" id="s_type4"/>
                                        <label for="s_type4">기타</label>
                                    </li>
                                </ol>
                            </li>
                            <li>
                                <p>어떤 업종에 설치를 원하시나요?</p>
                                <ol>
                                    <li>
                                        <input type="radio" name="i_type" id="i_type1"/>
                                        <label for="i_type1">기업</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="i_type" id="i_type2"/>
                                        <label for="i_type2">상업시설</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="i_type" id="i_type3"/>
                                        <label for="i_type3">문화,공공</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="i_type" id="i_type4"/>
                                        <label for="i_type4">병원</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="i_type" id="i_type5"/>
                                        <label for="i_type5">기타</label>
                                    </li>
                                </ol>
                            </li>
                            <li>
                                <p>설치 지역은 어디신가요?</p>
                                <ol>
                                    <li>
                                        <input type="radio" name="region" id="region1"/>
                                        <label for="region1">서울,경기,인천(수도권)</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="region" id="region2"/>
                                        <label for="region2">충청권</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="region" id="region3"/>
                                        <label for="region3">전라권</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="region" id="region4"/>
                                        <label for="region4">강원권</label>
                                    </li>
                                    <li class="margin">
                                        <input type="radio" name="region" id="region5"/>
                                        <label for="region5">경상권</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="region" id="region6"/>
                                        <label for="region6">제주</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="region" id="region7"/>
                                        <label for="region7">기타</label>
                                    </li>
                                </ol>
                            </li>
                            <li>
                                <p>설치 예산은 어떻게 되시나요?</p>
                                <ol>
                                    <li>
                                        <input type="radio" name="cost" id="cost1"/>
                                        <label for="cost1">500만원 이하</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="cost" id="cost2"/>
                                        <label for="cost2">2000만원 이하</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="cost" id="cost3"/>
                                        <label for="cost3">5000만원 이하</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="cost" id="cost4"/>
                                        <label for="cost4">1억 이상</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="cost" id="cost5"/>
                                        <label for="cost5">기타</label>
                                    </li>
                                </ol>
                            </li>
                            <li>
                                <p>예상 설치 일정이 있으신가요?</p>
                                <ol>
                                    <li>
                                        <input type="radio" name="date" id="date1"/>
                                        <label for="date1">1개월 이내</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="date" id="date2"/>
                                        <label for="date2">3개월 이내</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="date" id="date3"/>
                                        <label for="date3">6개월 이내</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="date" id="date4"/>
                                        <label for="date4">1년 이내</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="date" id="date5"/>
                                        <label for="date5">기타</label>
                                    </li>
                                </ol>
                            </li>

                            <li>
                                <p>어떻게 알고 방문하셨나요?</p>
                                <ol>
                                    <li>
                                        <input type="radio" name="route" id="route1"/>
                                        <label for="route1">블로그</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="route" id="route2"/>
                                        <label for="route2">카페</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="route" id="route3"/>
                                        <label for="route3">검색</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="route" id="route4"/>
                                        <label for="route4">소개</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="route" id="route5"/>
                                        <label for="route5">기타</label>
                                    </li>
                                </ol>
                            </li>
                        </ul>
                    </div>

                    <div class="formwrap">
                        <h2>상세정보 입력</h2>
                        <ul class="infolist">
                            <li class="half">
                                <label for="name">이름</label>
                                <input type="text" placeholder="이름을 입력해 주세요." id="name"/>
                            </li>
                            <li class="half">
                                <label for="tel">휴대폰 번호</label>
                                <input type="tel" placeholder="휴대폰 번호를  입력해 주세요." id="tel"/>
                            </li>
                            <li class="half">
                                <label for="email">이메일</label>
                                <input type="email" placeholder="이메일을 입력해 주세요." id="email"/>
                            </li>
                            <li class="half">
                                <label for="corp">기업명</label>
                                <input type="text" placeholder="이름을 입력해 주세요." id="corp"/>
                            </li>
                            <li>
                                <label for="cont">문의내용</label>
                                <textarea id="cont" placeholder="문의내용을 입력해 주세요."></textarea>
                            </li>
                            <li>
                                <label>첨부파일</label>
                                <p>
                                    설치 예정 장소의 사진 또는 예시 자료를 첨부해 주시면 더욱 빠르고 정확한 상담이 가능합니다. <br/>
                                    10MB 이하/ 최대 10개 까지 업로드 가능합니다. <br/>
                                    <em>(첨부가능 : jpg, jpeg,gif,png,svg,zip,pdf,ppt,pptx,doc,docx,xls,xlsx,hwp,stp,7z,heif,heic)</em>
                                </p>
                                <div class="fileWrap">
                                    <input type="file" id="attach"/>
                                    <label for="attach">파일 업로드</label>
                                    <b>filename.jpg</b>
                                    <a href="">삭제</a>
                                </div>
                            </li>
                            <li>
                                <input type="checkbox" id="priv"/>
                                <label for="priv"><b>(필수)</b> 개인정보 수집 및 이용에 동의*</label>
                            </li>
                        </ul>
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

<?php 
    include_once $_SERVER["DOCUMENT_ROOT"]."/_end.php"
?>