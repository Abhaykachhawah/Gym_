<?php
	$Username = $_POST['Username'];
	$Password = $_POST['Password'];

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into sign(Username, Password) values(?, ?)");
		$stmt->bind_param("ss",$Username, $Password );
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>   