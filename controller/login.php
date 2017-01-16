<?php
session_start();
include ("../models/user.php");

//xử lý đăng nhập
if(isset($_POST['login'])){
  if($_POST['username'] == ""){
  $is_error="Chưa điền tên người dùng";
  }
  else if($_POST['password'] == ""){
  $is_error="Chưa điền mật khẩu";
  }
  else{
  //xử lý đăng nhập
  $s="select * from user where username= '".$_POST['username']."'";
  $q=mysql_query($s);
  if($r=mysql_fetch_array($q)){
     //kiểm tra có đúng mật khẩu không
	 if($r['password']==$_POST['password'])
	 {
	 //đúng mật khẩu
	 $_SESSION['user']=$r['fullname'];
	 header("location:http://localhost/mvc");
	 }
	 else{
	    $is_error="Sai mật khẩu";
	 }
  }
  else{
  $is_error="Người dùng không đúng";
  }
  }
}
include ("../views/login.phtml");
?>