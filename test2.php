<?php
	$Name= $_POST['Name'];
	$Email= $_POST['Email'];
    $Age = $_POST['Age'];
    $Phone =$_POST['Phone'];
    $Gender =$_POST['Gender'];
	$price =$_POST['price'];
	$Locality =$_POST['Locality'];
	// Database connection
	$conn = new mysqli('localhost','root','','test2');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into sign1(Name,Email,Age,Phone,Locality) values(?, ? ,? ,?,?)");
		$stmt->bind_param("ssiis",$Name,$Email, $Age,$Phone,$Locality);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>   