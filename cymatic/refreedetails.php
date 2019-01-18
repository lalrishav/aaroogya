<?php 
	mysqli_connect("localhost","root","","cymatic");
	$applicantname = $_POST['applicantemail'];
	$essay1 = $_POST['essay1'];
	$essay2 = $_POST['essay2'];
	$essay3 = $_POST['essay3'];
	$essay4 = $_POST['essay4'];
	$academic = $_POST['academic'];
	$motivation = $_POST['motivation'];
	$intell = $_POST['intell'];
	$research = $_POST['research'];
	$ability = $_POST['ability'];
	$recommend = $_POST['recommend'];
	$fp = $_POST['fp'];
	

?>