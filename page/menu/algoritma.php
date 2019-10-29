<?php
	 include '../../root.php';
	 include "../head.php";
?>
<html>
<head>
	<style>
		body{
			font-size:16px;
			font-family:tahoma;
			font-weight:bold;
		}
		table{
			border : 1px solid #000;
			text-align : center;
			font-family:tahoma;
			font-size:12px;
			margin-left: 25px;
		}
		table tr th{
			border : 1px solid #000;
			background : #2e5cb8;
			color : #FFF;
			padding:7px;
		}
		table tr td{
			border : 1px solid #000;
			padding: 7px;
		}
	</style>
</head>
<body>
<?php
      
      include "objek.php";
	  include "ClusteringKMean.php";
	  $rsl = mysql_query("select papb,ppkn,bind,bing,mtk,ipa,ips,seni,penjaskes,prakarya,bjawa from nilai");
	  $objek = array();
	  if (mysql_num_rows($rsl) > 0) {
	  	while ($row = mysql_fetch_row($rsl)) {
	  		$objek[] = $row;
	  	}
	  }
	  $hsl = mysql_query("select papb,ppkn,bind,bing,mtk,ipa,ips,seni,penjaskes,prakarya,bjawa from centroid");
	  $centroid = array();
	  if (mysql_num_rows($hsl) > 0) {
	  	while ($row = mysql_fetch_row($hsl)) {
	  		$centroid[] = $row;
	  	}
	  }

	  foreach ($objek[$i] as $data ) {	
			for ($j=0;$j<count($data);$j++){
				$objek[$i][$j] = $data[$j];
	  }
	  }
	  foreach ($centroid[$i] as $data ) {
			for ($j=0;$j<count($data);$j++){
				$centroid[$i][$j] = $data[$j];
	  }
	  }	  
        						  
	  echo "<div style='width:500px;float:center;'>
			<div style='width:500px;text-align:center;padding-bottom:30px;'>K- MEAN </div>";

      $clustering = new ClusteringKMean($objek, $centroid);
      $clustering->setClusterObjek(1);
	  echo "</div>";
	  

?>	
</body>
</html>
