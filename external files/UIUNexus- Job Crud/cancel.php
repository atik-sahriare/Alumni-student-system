<?php

	$job_id = $_GET["job_id"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "DELETE FROM apply WHERE job_id=$job_id" )

		or die("Can not execute query");



	echo "Application Cancelled<br>";



	echo "<p><a href=showallapp.php> All Application </a>";

?>