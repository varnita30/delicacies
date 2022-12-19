<?php
$servername="localhost";
$username="root";
$password="";
$dbname="reg";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
die("Connection failed".$conn->connect_error);
$name=$_POST['Name'];
$email=$_POST['Email'];
$password=$_POST['Password'];
$contact=$_POST['Contact'];
$address=$_POST['Address'];
$sql="INSERT INTO registration (Name,Email,Password,Contact,Address) VALUES('$name','$email','$password','$contact','$address')";
if($conn->multi_query($sql)===TRUE)
{
	 echo "<alert> Suucessfully submitted</alert>";
   header("Location: index.html");
}
else {
	echo "Error: " . $sql . "<br>" . $conn->error;
   }
   $conn->close();
?>