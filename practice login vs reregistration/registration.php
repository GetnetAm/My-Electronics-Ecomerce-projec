
<?php
//session_start();
header('location:login.php');
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'loginregister1');

$name=$_POST['user'];
$pass=$_POST['password'];
$age=$_POST['age'];
$department=$_POST['department'];
$address=$_POST['address'];


$s="SELECT * from usertable2 WHERE name='$name'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if ($num==1) {
echo "User name is Already Taken";
}
else{
	$reg="INSERT INTO usertable2(name,password,age,department,address) VALUES('$name','$pass','$age','$department','$address')";
	mysqli_query($con,$reg);
	echo "Registration Successful";
}


?>