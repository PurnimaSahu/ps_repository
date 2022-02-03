<html>
<body bgcolor=orange>
<font color=orange></font><h1>
<?php
session_start();
$course = $_POST['course'];
$branch = $_POST['branch'];
$semester = $_POST['semester'];
$enrollmentnumber = $_POST['enrollmentnumber'];
$birthdate = $_POST['birthdate'];

if($course && $branch && $semester && $enrollmentnumber && $birthdate)
{
	//$connect = mysql_connect("localhost","root","")or die("couldn't connect!");
	require ("connection.php");
	mysql_select_db("mydatabase")or die("myfirstdb database not selected");

	$query=mysql_query("select * from studentresult2 where enrollmentnumber='$enrollmentnumber' ");
	 $numrows = mysql_num_rows($query);

	if ($numrows!=0)
	{
	while ($row = mysql_fetch_assoc($query))
	{
		$dbcourse = $row['course'];
		$dbbranch = $row['branch'];
		$dbsemester = $row['semester'];
		$dbenrollmentnumber = $row['enrollmentnumber'];
		$dbbirthdate = $row['birthdate'];
	}
	
	if ($course==$dbcourse && $branch==$dbbranch && $semester==$dbsemester && $enrollmentnumber==$dbenrollmentnumber 
	&& $birthdate==$dbbirthdate)
	{
	    echo "You are in! <a href='resultlogin3.php'>
		Click</a> here to enter the resultlogin page.";
		echo "course branch enrollmentnumber and birthdate is correct";
		$_SESSION['enrollmentnumber']=$enrollmentnumber;
		
	}
	else
		echo "Incorrect enrollmentnumber!";
}
else
	 die ("that enrollmentnumber doesn't exist");
}

else 
	die("please enter your course branch enrollmentnumber and birthdate");

?></h1>
</font>
</body>
</html>
