<?php
    include_once '../../common/html_head.php'
?>
<link rel="stylesheet" href="cpu.css">
</head>
<body>
<?php
        include_once '../../common/header.php'
?>
    <div class="content">
            <table>
                <tr>
                    <th>제조사</th>
                    <td>
                        <ul>
                            <li>AMD</li>
                            <li>인텔</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th>CPU 종류</th>
                    <td>
                        <ul>
                            <li>코어 i9</li>
                            <li>코어 i7</li>
                            <li>코어 i5</li>
                            <li>코어 i3</li>
                            <li>펜티엄</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th>소켓구분</th>
                    <td>
                        <ul>
                            <li>소켓1200</li>
                            <li>소켓1151</li>
                            <li>소켓1151-v2</li>
                            <li>소켓2066</li>
                            <li>소켓2011-v3</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th>코어 수</th>
                    <td>
                        <ul>
                            <li>2코어</li>
                            <li>4코어</li>
                            <li>6코어</li>
                            <li>8코어</li>
                            <li>10코어</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th>스레드 수</th>
                    <td>
                        <ul>
                            <li>2쓰레드</li>
                            <li>4쓰레드</li>
                            <li>6쓰레드</li>
                            <li>8쓰레드</li>
                            <li>12쓰레드</li>
                        </ul>   
                    </td>
                </tr>
            </table>
            <ul class="result">
                <li>
                    <a href="#">
                        <img src="images/1.jpg" alt="cpu1">
                        <div class="txt">
                            <h4><span>[인텔]</span>  코어 i5-11600KF 로켓레이크S [벌크+쿨러]</h4>
                            <p class="spec">사법권은 법관으로 구성된 법원에 속한다. 대통령은 조국의 평화적 통일을 위한 성실한 의무를 진다. 모든 국민은 학문과 예술의 자유를 가진다. 나는 헌법을 준수하고 국가를 보위하며 조국의 평화적 통일과 국민의 자유와 복리의 증진 및 민족문화의 창달에 노력하여 대통령으로서의 직책을 성실히 수행할 것을 국민 앞에 엄숙히 선서합니다.</p>
                            <a href="bag.php" onclick="shop()">장바구니</a>
                            <a href="buy.php">구매하기</a>
                        </div>
                    </a>

                </li>
            </ul>
        </div>
    <?php
        include_once '../../common/footer.php'
?>
</body>
</html>