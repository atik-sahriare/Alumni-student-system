<?php
	ob_start();

	$timezone = date_default_timezone_set("Asia/Dhaka");
	try{
		$con=new PDO('mysql:host=localhost:3306;dbname=project_crud;','root','');
		$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        ?>
        <?php
	}
	catch (PDOException $ex){
		?>
			<script>location.assign('register.php')</script>
		<?php
	}
?>