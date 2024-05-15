function subTab(option){

	// 뎁스별로 마크업
	let tabList;
	switch(option.depth){
		case 0: // Company
			tabList =`
			<li><a href="./about.php">회사소개</a></li>
			<li><a href="./ceo.php">CEO소개</a></li>
			<li><a href="./license.php">인증 및 면허</a></li>
			<li><a href="./news_letter.php">뉴스레터</a></li>
			`
		break;

		case 1: // Reference
			tabList =`
			<li><a href="./index.php">설치사례</a></li>
			`
		break;

		case 2: // Product 게이트페이지
			tabList =`
			<li><a href="./">제품</a></li>
			`
		break;

		case 3: // Product 상세페이지
			tabList =`
			<li><a href="./led.php">LED 사이니지</a></li>
			<li><a href="./lcd.php">LCD 사이니지</a></li>
			<li><a href="./kiosk.php">키오스크</a></li>
			`
		break;

		/*
		case 4:
			tabList =
			`
			<li><a href="">회사소개</a></li>
			<li><a href="">회사소개</a></li>
			<li><a href="">회사소개</a></li>
			<li><a href="">회사소개</a></li>
			`
		break;
		*/
	}

	let subTabMark =`
	<h1>${option.title}</h1>

	<ul class="subTab">${tabList}</ul>`

	$('.subTitle .subwrap').append(subTabMark);

	// 탭에 클래스 on 추가
	$(`._sub .subTitle .subTab li`).eq(option.act).addClass('on');

}

