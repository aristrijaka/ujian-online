<?php
	set_time_limit(0);
	error_reporting(1); 
		$con=mysqli_connect("localhost","root","","pemalang");
		// Check connection
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
	);
 
	//print_r($datapost);exit();
	//	$query= "INSERT INTO `data` (`nama`, `kelas`, `jurusan`, `jkel`, `ttl`, `hasil`) VALUES ('aris', '2A', '1', 'l', '2014/09/09', 'lll')";
	$query="INSERT INTO `data` (`nama`, `kelas`, `jurusan`, `jkel`, `ttl`, `hasil`) VALUES ('".$datapost['nama']."','".$datapost['kelas']."','".$datapost['jurusan']."','".$datapost['jkel']."','".$datapost['tgl_lahir']."','".json_encode($datapost['data'])."')";
	mysqli_query($con,$query);
	mysqli_close($con);	
	$result=array('valid'=>true);
	echo json_encode($result);

?>