<?php
	include  $_SERVER['DOCUMENT_ROOT']."/common/db.php";
?>
	<!-- <?php
	if(isset($_SESSION['id'])){
		echo "<h2>{$_SESSION['id']} 님 환영합니다.</h2>";
	?>
	<a href="/member/logout.php"><input type="button" value="로그아웃" /></a>
	<?php 
		}else{
		echo "<script>alert('잘못된 접근입니다.'); history.back();</script>";
	} 
	?> -->

<div class="topBtn">TOP</div>
	<div class="container">
		<!------ 헤더 ------>
		<header>
			<div class="top">
				<h1><a href="/index.php"><img src="common/images/logo.png" alt="logo"></a></h1>
					<span class="search">
						<input onkeyup="filter()" type="text" id="value" placeholder="검색어를 입력해주세요">
						<button class="searchBtn"></button>
					</span>
					<div class="customer">
					<a href="/user/user.php">
						<svg class="icon user-icon svg-user-icon-dims"><path d="M12 2c2.3 0 4.2 1.9 4.2 4.2s-1.9 4.2-4.2 4.2-4.2-1.9-4.2-4.2S9.7 2 12 2m0-2C8.6 0 5.8 2.8 5.8 6.2s2.8 6.2 6.2 6.2 6.2-2.8 6.2-6.2S15.4 0 12 0z"></path><path d="M1 24s.4-11 11.1-11S23 24 23 24" fill="none" stroke="#000" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10"></path></svg>
						<span>Account</span>
					</a>
					<a href="#">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 26.5" id="bag-desktop"><path d="M20.2 8.5l1.6 16H2.2l1.6-16h16.4m1.8-2H2l-2 20h24l-2-20z"></path><path d="M5.9 7.1S6.1 1 12 1s6 6.1 6 6.1" fill="none" stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></path></svg>
						<span>Bag</span>
					</a>
				</div>
			</div>
			<div class="hamBtn"></div>
			<nav>
				<ul class="gnb">
					<li><a href="/product/cpu/cpu.php">CPU</a></li>
					<li><a href="#">RAM</a></li>
					<li><a href="#">메인보드</a></li>
					<li><a href="#">그래픽카드</a></li>
					<li><a href="#">SSD</a></li>
					<li><a href="#">HDD</a></li>
					<li><a href="#">케이스</a></li>
					<li><a href="#">파워</a></li>
					<li><a href="#">쿨러/튜닝</a></li>
					<li><a href="#">모니터</a></li>
					<li><a href="#">컴퓨터 주변부품</a></li>
					<li class="close"></li>
				</ul>
			</nav>
		</header>