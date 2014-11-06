<?php
	set_time_limit(0);
	error_reporting(1); 
	$con=mysqli_connect("localhost","root","","db_test");
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$ids = $_POST['ids'];
	$pilihan = $_POST['pilihan']; 
	$pil="BAHASA";
	if($pilihan=='1'){
	$pil="BAHASA INDONESIA";
	}else if ($pilihan=='2'){
	$pil="BAHASA INGGRIS";
	}else if ($pilihan=='3'){
	$pil="BAHASA JAWA";
	}

	$query="UPDATE  data set  minat='".$pil."' WHERE id='".$ids."'";
	mysqli_query($con,$query);
	mysqli_close($con);	
	$result=array('valid'=>true);
	echo json_encode($result);

?>