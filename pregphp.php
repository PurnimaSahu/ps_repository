<?php
	//connect include
	require("nmc_connection.php");

	//write some data
	
	$write = mysql_query("INSERT INTO admin_reg VALUES ('101','Alex','Garatt','4545454545','M','username','pass','repass')");


	?>
