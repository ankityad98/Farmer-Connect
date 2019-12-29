<html>
<body>
<?php
$conn=new mysqli('localhost','root','');
if($conn->connect_error)
{
die("connection failed:".$conn->connect_error);
}
echo "DB Connected Successfully";
mysqli_select_db($conn,"register");
echo "\n DB is selected as Test successfully";
$sql="INSERT INTO details (First Name, Last Name, Email, Password, Confirm Password) VALUES ('$_POST[First Name]','$_POST(Last Name)','$_POST[Email]','$_POST(Password)','$_POST(Password)'";
IF ($conn->query(sql)==TRUE)
{
	echo "New Record created successfully";
}
else
{
	echo "Error: " . $ql ."<br>" . $conn->error;
}
mysqli_close($conn);
?>
</body>
</html>