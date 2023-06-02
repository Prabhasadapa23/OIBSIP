<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="portfolio";
$conn=mysqli_connect($server_name,$username,$password,$database_name);
if(!$conn)
{
    die("Connection Failed: ".mysqli_connect_error());
}
if(isset($_POST['mailsave']))
{
    $email=$_POST['email'];



    $sql_query = "INSERT INTO entry_details (email) VALUES ('$email')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "New Details Entry inserted successfully !";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
if(isset($_POST['save']))
{
    $f_name=$_POST['f_name'];
    $phonenumber=$_POST['phonenumber'];
	$f_message=$_POST['f_message'];


    $sql_query = "INSERT INTO entry_details (f_name,phonenumber,f_message) VALUES ('$f_name','$phonenumber','$f_message')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "New Details Entry inserted successfully !";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>