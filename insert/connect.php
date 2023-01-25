<?php
session_start();
$name="";
$email="";
$address="";
$phone_number="";
$errors=array();
$db=mysqli_connect('localhost','root','','test');
if(isset($_POST['insert']))
{
$name=mysqli_real_escape_string($db,$_POST['name']);
$email=mysqli_real_escape_string($db,$_POST['email']);
$address=mysqli_real_escape_string($db,$_POST['address']);
$phone_number=mysqli_real_escape_string($db,$_POST['phone_number']);
if(empty($name))
{
	array_push($errors,"name is required");
}
if(empty($email))
{
	array_push($errors,"email is required");
}
if(empty($address))
{
	array_push($errors,"address city is required");
}
if(empty($phone_number))
{
	array_push($errors,"phone_number city is required");
}
$user_check_query="SELECT * FROM reg WHERE name='$name' OR email='$email' LIMIT 1";
$result=mysqli_query($db,$user_check_query);
$user=mysqli_fetch_assoc($result);
if($user)
{
	if($user['name']===$name)
	{
		array_push($errors,"name already exists");
	}
	if($user['email']===$email)
	{
		array_push($errors,"email already exists");
	}
}
}
if(isset($_POST["insert"])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO reg(name,email,address,phone_number)
VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["address"]."','".$_POST["phone_number"]."')";

if ($conn->query($sql) === TRUE) {
echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
}

$conn->close();
}

?>
