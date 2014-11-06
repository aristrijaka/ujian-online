<?php
	set_time_limit(0);
	error_reporting(1); 
	$con=mysqli_connect("localhost","root","","db_test");
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$datapost=array
	(
		'tgl_lahir'=>$_POST['tgl_lahir'],
		'nama'=>$_POST['nama'],
		'jurusan'=>$_POST['jurusan'],
		'jkel'=>$_POST['jkel'],
		'kelas'=>$_POST['kelas'],
		'data'=>$_POST['data'],
		'list'=>$_POST['list'],
	);
	$qry="SELECT * FROM `kombinasi` WHERE `kombinasi` = '".$datapost['data']."' LIMIT 1";
	$result = $con->query($qry);
	if ($result->num_rows > 0) { 
	foreach ($result as $row) {
		$test = $row['jurusan'];
	} 
	}else{
		$test = "FALSE";
	}
	$query="INSERT INTO `data` (`nama`, `kelas`, `jurusan`, `jkel`, `ttl`, `hasil`, `kombinasi`,minat) VALUES ('".$datapost['nama']."','".$datapost['kelas']."','".$datapost['jurusan']."','".$datapost['jkel']."','".$datapost['tgl_lahir']."','".json_encode($datapost['list'])."','".$datapost['data']."','".$test."')";
	//echo $query;exit();
	mysqli_query($con,$query);
	$id= $con->insert_id;
	mysqli_close($con);	
	$result=array(	'valid'=>true,
					'rslt'=>$test,
					'rcd'=>$id );
	echo json_encode($result);

?>