<?php
$servername="localhost";
$username="root";
$password="";
$dbname="resv";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
die("Connection failed".$conn->connect_error);

$date=$_POST['Date'];
$time=$_POST['Time'];
$guest=$_POST['No_of_guest'];
$contact=$_POST['Contact'];
$sug=$_POST['Any_suggestion'];

$sql="INSERT INTO booking (Date,Time,No_of_guest,Contact,Any_suggestion) VALUES('$date','$time','$guest','$contact','$sug')";
if($conn->multi_query($sql)===TRUE)
{
	echo "<alert> Your Booking Done..!!</alert>";
    header("Location: index.html");
}
else {
	echo "Error: " . $sql . "<br>" . $conn->error;
   }
   $conn->close();
?>


