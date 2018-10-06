<?php
$Fullname=filter_input(INPUT_POST,'Fullname');
$Email=filter_input(INPUT_POST,'Email');
$Address=filter_input(INPUT_POST,'Address');
$city=filter_input(INPUT_POST,'city');
$State=filter_input(INPUT_POST,'State');
$MobileNumber=filter_input(INPUT_POST,'MobileNumber');

$host="localhost";
$dbusername= "root";
$dbpassword="appy17";
$dbname="mydb";

$conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_error()){
die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
}
else {
$sql="INSERT INTO user_details(Fullname,Email,Address,city,State,MobileNumber)values('$Fullname','$Email','$Address','$city','$State','$MobileNumber')"; 
	if($conn->query($sql)){
		header('location:user_details.php');
	}
	else{
		echo "Error:".$sql."<br>"."$conn->error";
	}
	$conn->close();
}
?>
