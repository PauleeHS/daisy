<?php
    include_once '../common/html_head.php'
?>
<link rel="stylesheet" href="user.css">
</head>
<body>
    <?php
        include_once '../common/header.php'
    ?>
    <div class="content">
    <section>
       <form action="login.php" method="post">
           <h2>LOGIN</h2>
           <input type="text" name="id" id="id" placeholder="ID">
           <input type="password" name="pw" id="pw" placeholder="Password">
           <button type="submit">로그인</button>
            <div class="cover">
                <a href="#">아이디 찾기</a><span> | </span><a href="#">패스워드 찾기</a><span> | </span><a href="join.php">회원가입</a>
            </div>
       </form> 
    </section>
    <img src="images/banner.jpg" alt="banner">
    </div>
</body>
</html>