
<?php
$servername="localhost";
$username="root";
$password="";
$database="test";
$sql=new mysqli($servername,$username,$password,$database);
if($sql->connect_error)
{
	die("connection failed:".$conn->connect_error);
}/*
else
{
	echo "connected successfully";
}*/
/*
$db="CREATE DATABASE test";
if($sql->query($db)==TRUE)
{
	echo "Database created successfully";
}
else
{
	echo "Error creating database".$sql->error;
}*/

$table="CREATE TABLE reg(id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,name VARCHAR(20) NOT NULL,email VARCHAR(30) NOT NULL,address VARCHAR(30),phone_number INT(10) NOT NULL,reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
if($sql->query($table)==TRUE)
{
	echo "table created successfully";
}
else
{
	echo "error creating table".$conn->error;
}
?>