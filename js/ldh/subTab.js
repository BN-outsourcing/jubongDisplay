function subTab(option){

	// 뎁스별로 마크업
	let tabList;
	switch(option.depth){
		case 0:
			tabList =`
			<li><a href="./about.php">회사소개</a></li>
			<li><a href="./ceo.php">CEO소개</a></li>
			<li><a href="./license.php">인증 및 면허</a></li>
			<li><a href="./news_letter.php">뉴스레터</a></li>
			`
		break;

		case 1:
			tabList =`
			<li><a href="">회사소개</a></li>
			<li><a href="">회사소개</a></li>
			<li><a href="">회사소개</a></li>
			<li><a href="">회사소개</a></li>
			`
		break;

		case 2:
			tabList =`
			<li><a href="">회사소개</a></li>
			<li><a href="">회사소개</a></li>
			<li><a href="">회사소개</a></li>
			<li><a href="">회사소개</a></li>
			`
		break;

		case 3:
			tabList =`
			<li><a href="">회사소개</a></li>
			<li><a href="">회사소개</a></li>
			<li><a href="">회사소개</a></li>
			<li><a href="">회사소개</a></li>
			`
		break;

		case 4:
			tabList =
			`
			<li><a href="">회사소개</a></li>
			<li><a href="">회사소개</a></li>
			<li><a href="">회사소개</a></li>
			<li><a href="">회사소개</a></li>
			`
		break;
	}

	let subTabMark =`
	<h1>${option.title}</h1>

	<ul class="subTab">${tabList}</ul>`

	$('.subTitle .subwrap').append(subTabMark);

	// 탭에 클래스 on 추가
	$(`._sub .subTitle .subTab li`).eq(option.act).addClass('on');

}

