 <?php
  session_start();
  
  // db주고, 계정, 비밀번호, db 이름
  $db = new mysqli("211.183.3.101:3333","root","test123","daisy",3333);
  $db->set_charset("utf8"); //utf 8 인코딩

  function mq($sql){
    global $db;
    return $db->query($sql);
  }

  ?>