<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title>TRAYOUT UJIAN</title>
		<link rel="stylesheet" href="./theme_mobile/themes/Bootstrap.css">
		<link rel="stylesheet" href="./theme_mobile/jquery.mobile.structure-1.4.0.min.css" />
		<link rel="stylesheet" href="./theme_mobile/themes/jquery.mobile.icons.min.css" />
		<script src="./theme_mobile/jquery-1.8.2.min.js"></script>
		<script src="./theme_mobile/jquery.mobile-1.4.0.min.js"></script>
		<style type="text/css">
		 .table {
         display:table;
         margin-right:auto;
         margin-left:auto;
         width:100%;         
    	text-align:center;
         }

         .tablecell {
        display:table-cell;
    	text-align:center;
         }

		tbody tr:nth-child(odd) {
		   background-color: #ccc;
		}
</style>
	</head>
	<body>
	<div data-role="page" data-theme="a">
		<div data-role="header" data-position="inline">
	 <h1><img src="./theme_mobile/img/logo.png" height="85" ></h1>
			<h1>UNIVERSITAS PGRI SEMARANG</h1>
			<div data-role="navbar">
				<ul>
					<li><a href="#" data-icon="star" class="ui-btn-active">MONITORING UJIAN MASUK UPGRI</a></li>
				</ul>
			</div>
		</div>
	<!-- M --> 
	<?php
	include "koneksi.php" ;
	$sql = "SELECT * FROM data";
	$result = $con->query($sql);
	$out ='';
	$jur='';$jkel='';$hasil='';
	if ($result->num_rows > 0) { 		
		$no=1;
		$out .='<table class="table" border=1px ><tr><th>NO</th><th>NAMA</th><th>JENIS KELAMIN</th><th>KELAS</th><th>JURUSAN</th><th>TGL LAHIR</th><th>MINAT</th></tr>';	
		foreach ($result as $row) { 
			$status="<td>".$row['minat']."</td>"; 
			if ($row["jkel"]=="L"){
				$jkel="LAKI-LAKI";
			}else{
				$jkel="PEREMPUAN";
			} 
			if($row["jurusan"]==1){
				$jur="IPA";
			}else if($row["jurusan"]==2){
				$jur="IPS";
			}else if($row["jurusan"]==3){
				$jur="IPC";
			}
		$out .='<tr><td>'.$no.'</td><td>'.$row["nama"].'</td><td>'.$jkel.'</td><td>'.$row["kelas"].'</td><td>'.$jur.'</td><td>'.toDmy($row["ttl"]).'</td>'.$status.'</tr>';	
				
			$no++;
		}
		$out .='</table>';
		} else {
		$out ='0 Data';
		}		
	?>
	 <div data-role="content" data-theme="a" id="isi_data_diri" style="display:1;">
		<!--<marquee width=100% height=50% direction=up scrolldelay="500"> <?php echo $out; ?></marquee></div>-->
		<?php echo $out; ?>
	</div>
 
	</body>
<script>

var limit="00:20"

if (document.images){
var parselimit=limit.split(":")
parselimit=parselimit[0]*60+parselimit[1]*1
}
function beginrefresh(){
if (!document.images)
return
if (parselimit==1)
window.location.reload()
else{ 
parselimit-=1
curmin=Math.floor(parselimit/60)
cursec=parselimit%60
if (curmin!=0)
curtime=curmin+" minutes and "+cursec+" seconds left until page refresh!"
else
curtime=cursec+" seconds left until page refresh!"
window.status=curtime
setTimeout("beginrefresh()",1000)
}
}
window.onload=beginrefresh
//-->
</script>
</html>