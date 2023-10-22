<?php
	$Name = $_POST['Name'];
	$NoHP = $_POST['NoHP'];
	$Email = $_POST['Email'];
	$Class = $_POST['Class'];
	$Gender = $_POST['Gender'];
	$quest = $_POST['quest'];
	$quest2 = $_POST['quest2'];
	$quest3 = $_POST['quest3'];
	$quest4 = $_POST['quest4'];
	$quest5 = $_POST['quest5'];
	$quest6 = $_POST['quest6'];
	$quest7 = $_POST['quest7'];
	$quest8 = $_POST['quest8'];
	$quest9 = $_POST['quest9'];
	$quest10 = $_POST['quest10'];
	$quest11 = $_POST['quest11'];
	$quest12 = $_POST['quest12'];
	$quest13 = $_POST['quest13'];
	$quest14 = $_POST['quest14'];
	$quest15 = $_POST['quest15'];
	// Database connection
	$conn = new mysqli('localhost','root','','dbkuisionerj');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die('Connection Failed : '. $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into kuisioner(Name,NoHP,Email,Class,Gender,quest,quest2,quest3,quest4,quest5,quest6,quest7,quest8,quest9,quest10,quest11,quest12,quest13,quest14,quest15) 
		values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sissssssssssssssssss", $Name, $NoHP, $Email, $Class, $Gender, $quest, $quest2, $quest3, $quest4, $quest5, $quest6, $quest7, $quest8, $quest9, $quest10, $quest11, $quest12, $quest13, $quest14, $quest15);
		$execval = $stmt->execute();
		echo $execval;
		echo  "successfull Terimakasih Sudah Mengisi...";
		$stmt->close();
		$conn->close();
	}
 ?>