<html>
<body background="plogin.jpg">
<font color=orange></font><h1>
<?php
session_start();
$patient_id = $_POST['patient_id'];
$patient_name = $_POST['patient_name'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$username = $_POST['username'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];

if($patient_id && $patient_name && $address && $gender && $username && $password && $repassword)
{
	//$connect = mysql_connect("localhost","root","")or die("couldn't connect!");
	require ("nmc_connection.php");
	mysql_select_db("mydatabase")or die("myfirstdb database not selected");
	
     $query=mysql_query("select * from patientreg where password='$username' ");
	$query=mysql_query("select * from patientreg where password='$password' ");
	$query=mysql_query("select * from patientreg where password='$repassword' ");
	 $numrows = mysql_num_rows($query);

	if ($numrows!=0)
	{
	while ($row = mysql_fetch_assoc($query))
	{   $dbpatient_id = $row['patient_id'];
		$dbpatient_name = $row['patient_name'];
		$dbaddress= $row['address'];
		$dbgender = $row['gender'];
		$dbusername = $row['username'];
		$dbpassword = $row['password'];
		$dbrepassword = $row['repassword'];
	}
	
	if ($patient_id && $patient_name && $address==$dbaddress && $gender==$dbgender  && $username==$dbusername && $password==$dbpassword && $repassword==$dbrepassword)
	{
	    echo "You are in! <a href='patient.php'>
		Click</a> here to enter the patient page.";
		echo "all info is correct";
		$_SESSION['password']=$password;
		
	}
	else
		echo "Incorrect password!";
}
else
	 die ("that password doesn't exist");
}

else 
	die("please enter your complete details");

?></h1>
</font>
</body>
</html>
