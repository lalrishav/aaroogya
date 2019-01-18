<?php
$conn = mysqli_connect("localhost","root","","cymatic");
session_start();
echo  $email = $_POST["email"];
echo $password = $_POST["password"];
$result = mysqli_query($conn,"SELECT password FROM users where primaryemail='$email'");
$data=mysqli_fetch_assoc($result);
if($data["password"] == $password){
	echo "Succesfull Login!!Redirecting";
	$_SESSION['email'] = $email;
	header('Location: ./home.php');
}
else{
	echo "Wrong combination of password";
}
//print_r($result);

?>