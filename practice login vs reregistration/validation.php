
<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'loginregister1');

$name=$_POST['user'];
$pass=$_POST['password'];
$age=$_POST['age'];
$department=$_POST['department'];
$address=$_POST['address'];

$s="SELECT * from usertable2 WHERE name='$name' && password='$pass'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if ($num==1) {

	$_SESSION['username']=$name;
	$_SESSION['age']=$age;
	$_SESSION['department']=$department;

header('location:home.php');
}
else{
header('location:login.php');
}


?>