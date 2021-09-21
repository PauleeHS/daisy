<?php
    include_once 'common/html_head.php'
?>
<link rel="stylesheet" href="index.css">
</head>
<body>
    <?php
        include_once 'common/header.php'
    ?>
		<!---- 컨텐츠 ---->
		<div class="content">
			<div class="swiper mySwiper">
      			<div class="swiper-wrapper">
        			<div class="swiper-slide"><img src="images/slide_1.jpg" alt="슬라이드1"></div>
        			<div class="swiper-slide"><img src="images/slide_2.jpg" alt="슬라이드2"></div>
        			<div class="swiper-slide"><img src="images/slide_3.jpg" alt="슬라이드3"></div>
        			<div class="swiper-slide"><img src="images/slide_4.jpg" alt="슬라이드4"></div>
        			<div class="swiper-slide"><img src="images/slide_5.jpg" alt="슬라이드5"></div>
        			<div class="swiper-slide"><img src="images/slide_6.jpg" alt="슬라이드6"></div>
			    </div>
      			<div class="swiper-button-next"></div>
      			<div class="swiper-button-prev"></div>
      			<div class="swiper-pagination"></div>
    		</div>
		</div>
		<div class="best">
			<div class="half">
				<h2>인기상품</h2>
			</div>
			<ul class="snb">
				<li class="focus">CPU</li>
				<li>그래픽카드</li>
				<li>RAM</li>
				<li>메인보드</li>
			</ul>
			<ul class="subSnb">
				<li class="focus">
					<ul>
						<li>
							<a href="#">
								<img src="images/cpu1.jpg" alt="cpu1">
								<span>[INTEL] 제온 스케일러블 골드 6142 정품(스카이레이크/2.6GHz/22MB/쿨러미포함)</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/cpu2.jpg" alt="cpu2">
								<span>[AMD] 라이젠 7 마티스 3700X (8코어/16스레드/3.6GHz/쿨러포함/대리점정품/멀티팩)</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/cpu3.jpg" alt="cpu3">
								<span>[AMD] 라이젠9 버미어 5900X (12코어/24스레드/3.7GHz/쿨러미포함/대리점정품)</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/cpu4.jpg" alt="cpu4">
								<span>[INTEL] 코어10세대 i5-10400 정품 (코멧레이크 /2.90GHz/12MB/쿨러 포함)</span>
							</a>
						</li>
					</ul>
				</li>
				<li>
					<ul>
						<li>
							<a href="#">
								<img src="images/gc1.jpg" alt="gc1">
								<span>[ASUS] GeForce RTX 3080 Ti TUF Gaming O12G OC D6X 12GB</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/gc2.jpg" alt="gc2">
								<span>[Galaxy] GeForce RTX 3080 Ti SG OC D6X 12GB</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/gc3.jpg" alt="gc3">
								<span>[emTek] GeForce RTX 3080 Ti BLACK EDITION D6X 12GB</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/gc4.jpg" alt="gc4">
								<span>[GIGABYTE] Radeon™ RX 6800 XT AORUS Master D6 16GB 제이씨현</span>
							</a>
						</li>
					</ul>
				</li>
				<li>
					<ul>
						<li>
							<a href="#">
								<img src="images/ram1.jpg" alt="ram1">
								<span>[G.SKILL] 지스킬 DDR4 32G PC4-28800 CL16 TRIDENT Z NEO C (16Gx2)</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/ram2.jpg" alt="ram2">
								<span>[G.SKILL] 지스킬 DDR4 16GB PC4-25600 [8GB x 2] CL14 Flare X (8Gx2) -AMD전용-</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/ram3.jpg" alt="ram3">
								<span>[Team Group] 팀그룹 T-Force DDR4 32G PC4-25600 CL16 Delta RGB 화이트 (16Gx2)</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/ram4.jpg" alt="ram4">
								<span>[G.SKILL] 지스킬 DDR4 32G PC4-28800 CL16 TRIDENT Z ROYAL 실버 (8Gx4)</span>
							</a>
						</li>
					</ul>
				</li>
				<li>
					<ul>
						<li>
							<a href="#">
								<img src="images/mb1.jpg" alt="mb1">
								<span>[ASUS] WS X299 SAGE 코잇 (인텔X299/CEB)</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/mb2.jpg" alt="mb2">
								<span>[GIGABYTE] B450 AORUS ELITE 제이씨현 (AMD B450/ATX)</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/mb3.jpg" alt="mb3">
								<span>[ASUS] P9D-MH/10G DUAL STCOM (인텔C224/M-ATX)</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/mb4.jpg" alt="mb4">
								<span>[MSI] MAG B550M 박격포 (AMD B550/M-ATX)</span>
							</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!------ 푸터 ------>
	<?php
        include_once 'common/footer.php'
    ?>
	<script>
	$('.snb > li').mouseenter(function () { 
		$('.snb > li').removeClass('focus');
		$(this).addClass('focus');
		$('.subSnb > li').removeClass('focus');
		var index = $(this).index();
		$('.subSnb > li').eq(index).addClass('focus')
	});
	</script>
</body>
</html>