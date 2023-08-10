<?php
session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'loginregister1');

$name=$_POST['user'];
$pass=$_POST['password'];

$s="SELECT * FROM usertable WHERE name= '$name'";

$result=mysqli_query($con,$s);
$num=myaqli_num_rows($result);

if ($num ==1) {
	echo "user name is already Taken";

}
else{
	$reg="INSERT INTO usertable(name,password) VALUES('$name','$pass')";
	mysqli_query($con,$reg);

	echo "registration succsusfully";
}

?>


