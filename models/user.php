<?php
// kết nối với database
   $connect =mysql_connect("localhost","root","") or die ("Loi ket noi co so du lieu");
   
 // Ket noi với database mvc
   $select_db = mysql_select_db("mvc",$connect) or die ("Loi ket noi database");
   
?>