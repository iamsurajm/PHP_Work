<?php
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$mobile=$_POST['mobile'];
$gender=$_POST['a'];
mysql_connect('localhost','root','');
mysql_select_db("integral");
$query="insert into register(name,email,password,mobile,gender) values('$name','$email','$password','$mobile','$gender')";
mysql_query($query);
?>