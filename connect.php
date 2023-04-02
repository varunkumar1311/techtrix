<?php
	$Name = $_POST['Name'];
	$RollNo = $_POST['RollNo'];
	$Event = $_POST['Event'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$dob = $_POST['dob'];
	$number = $_POST['number'];

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);

	} else {
		$stmt = $conn->prepare("insert into registration(Name, RollNo, Event, gender, email, dob, number) values(?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssssi", $Name, $RollNo, $Event, $gender, $email, $dob, $number);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfull...";
		$stmt->close();
		$conn->close();
	}
?>