<?php
	include "/common/db.php";
	include "/user/password.php";

	$userid = $_POST['userid'];
	$userpw = password_hash($_POST['userpw'], PASSWORD_DEFAULT);
	$username = $_POST['name'];
	$adress = $_POST['adress'];
	$phone = $_POST['phone'];

$sql = mq("insert into membertbl (memberid,membername,memberaddr,memberphone) values('".$userid."','".$userpw."','".$username."','".$adress."')");

?>
<meta charset="utf-8" />
<script type="text/javascript">alert('회원가입이 완료되었습니다.');</script>
<meta http-equiv="refresh" content="0 url=/">