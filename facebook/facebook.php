<?php
$host="localhost";
$username="root";
$password="";
$db="facebook";

$con=mysqli_connect($host,$username,$password,$db) or die("couldn't connect to database" .mysql_error());

if(!$con)
{
	die("couldn't connect to database".mysqli_connect_error());
}
else
{
	echo "Connected";
}


if(isset($_POST['sub']))
{
	$eop=$_POST['eop'];
	$pass=$_POST['pass'];
	$query="SELECT EoP,Password FROM members WHERE EoP='$eop' AND Password='$pass'";
	$result=mysqli_query($con,$query);
	$res=mysqli_num_rows($result);
	if($res==1)
	{
		header('location:E:\website\pages\Home.html');
	}
	else
		{
			header('location:E:\website\facbook\facebook2.html');
			echo "wrong Email or password";
		}
}

if (isset($_POST['submit'])) 
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$eop=$_POST['eop'];
	$pass=$_POST['pass'];
	$day=$_POST['day'];
	$mon=$_POST['mon'];
	$year=$_POST['year'];
	$date=$day.$mon.$year;
	$gen=$_POST['gender'];

	$query2="INSERT INTO members VALUES ('$fname','$lname','$eop','$pass','$date','$gender')";
	$result=mysqli_query($con,$query2);
	if($result)
	{
		header('location:E:\website\pages\Home.html');
	}
	else
	{
		header('location:E:\website\facbook\facebook2.html');
			echo "Query Unsuccesfull";
	}
}
?>