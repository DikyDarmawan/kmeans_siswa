<?php

error_reporting(0);
class admin
{
	
	function __construct()
	{
		$a=mysql_connect("localhost","root","");
		$b=mysql_select_db("kmeans");
		if (!$a||!$b) {
			echo "error, reason : ".mysql_error();
		}
	}
	function login($username,$password){
		$check=mysql_query("select * from admin where username='$username' && password='$password'");
		$check1=mysql_num_rows($check);
		if ($check1==0) {
			
			?>
			<script>
				alert("login gagal, username atau password tidak benar");
				window.location.href="home.php?index.php";
			</script>
			<?php

		}
		else{
			$data=mysql_fetch_array($check);
			session_start();
			$_SESSION['id_admin']=$data['id_admin'];
			$_SESSION['username_admin']=$data['username'];
			$_SESSION['nama_admin']=$data['nama'];
			header("location:home.php");
		}
	}
	function tambah_siswa($siswa){
		$query=mysql_query("insert into siswa set nm_siswa='$siswa'");
		header("location:home.php?page=siswa");
	}
	function edit_siswa($siswa,$id){
		$query=mysql_query("update siswa set nm_siswa='$siswa' where id_siswa='$id'");
		header("location:home.php?page=siswa");
	}
	function tampil_siswa(){
		$query=mysql_query("select * from siswa");
		while ($r=mysql_fetch_array($query)) {
			$hasil[]=$r;
		}
		return $hasil;
	}
	function tampil_siswa1(){
		$query=mysql_query("select * from siswa");
		while ($s=mysql_fetch_array($query)) {
			echo "<option value='$s[id_siswa]'>$s[nm_siswa]</option>";
		}
	}
	function tampil_siswa2($id_siswa){
		$query=mysql_query("select * from siswa");
		while ($r=mysql_fetch_array($query)) { ?>
			<option <?php if($r["id_siswa"]==$id_siswa){ echo "selected"; } ?> value="<?= $r["id_siswa"] ?>" ><?= $r["nm_siswa"]?></option>
		<?php }
	}
	function tambah_kategori($kategori){
		$query=mysql_query("insert into kategori set nama_kategori='$kategori'");
		header("location:home.php?page=kategori");
	}
	function edit_kategori($kategori,$id){
		$query=mysql_query("update kategori set nama_kategori='$kategori' where id_kategori='$id'");
		header("location:home.php?page=kategori");
	}
	function tampil_kategori(){
		$query=mysql_query("select * from kategori");
		while ($r=mysql_fetch_array($query)) {
			$hasil[]=$r;
		}
		return $hasil;
	}
	function tampil_algoritma(){
		$query=mysql_query("select nilai.id_nilai,siswa.nm_siswa,nilai.papb,nilai.ppkn,nilai.bind,nilai.bing,nilai.mtk,nilai.ipa,nilai.ips,nilai.seni,nilai.penjaskes,nilai.prakarya,nilai.bjawa FROM siswa INNER JOIN nilai ON siswa.id_siswa=nilai.siswa order by siswa.id_siswa ASC");
		if (mysql_num_rows($query) > 0) {
	   	while ($row = mysql_fetch_array($query)) {
	   		$objek[] = $row;
	   	}
	 }
	}
	function tampil_nilai(){
		$query=mysql_query("select nilai.id_nilai,siswa.nm_siswa,nilai.papb,nilai.ppkn,nilai.bind,nilai.bing,nilai.mtk,nilai.ipa,nilai.ips,nilai.seni,nilai.penjaskes,nilai.prakarya,nilai.bjawa FROM siswa INNER JOIN nilai ON siswa.id_siswa=nilai.siswa order by siswa.id_siswa DESC");
		while ($r=mysql_fetch_array($query)) {
			$hasil[]=$r;
		}
		return $hasil;
	}
	function tambah_nilai($siswa,$papb,$ppkn,$bind,$bing,$mtk,$ipa,$ips,$seni,$penjaskes,$prakarya,$bjawa){
		
		$query=mysql_query("insert into nilai set siswa='$siswa',papb='$papb',ppkn='$ppkn',bind='$bind',bing='$bing',mtk='$mtk',ipa='$ipa',ips='$ips',seni='$seni',penjaskes='$penjaskes',prakarya='$prakarya',bjawa='$bjawa'");
		    if ($query) { ?>
		            <script type="text/javascript">
		            alert("Nilai Berhasil Ditambahkan");
		            window.location.href="home.php?page=nilai";
		            </script>
		            <?php
            }else{
            		echo mysql_error();
            }   
		}
		
	function edit_nilai($siswa,$papb,$ppkn,$bind,$bing,$mtk,$ipa,$ips,$seni,$penjaskes,$prakarya,$bjawa,$id_nilai){
		
		$query=mysql_query("UPDATE nilai set siswa='$siswa',papb='$papb',ppkn='$ppkn',bind='$bind',bing='$bing',mtk='$mtk',ipa='$ipa',ips='$ips',seni='$seni',penjaskes='$penjaskes',prakarya='$prakarya',bjawa='$bjawa' where id_nilai='$id_nilai'");
		    if ($query) { ?>
		            <script type="text/javascript">
		            alert("Nilai Berhasil Di Update");
		            window.location.href="home.php?page=nilai";
		            </script>
		            <?php
            }else{
            		echo mysql_error();
            }   
		}
		function tambah_cnt($siswa,$n_papb,$n_ppkn,$n_bind,$n_bing,$n_mtk,$n_ipa,$n_ips,$n_seni,$n_penjaskes,$n_prakarya,$n_bjawa){
		
		$query=mysql_query("insert into centroid set siswa='$siswa',papb='$n_papb',ppkn='$n_ppkn',bind='$n_bind',bing='$n_bing',mtk='$n_mtk',ipa='$n_ipa',ips='$n_ips',seni='$n_seni',penjaskes='$n_penjaskes',prakarya='$n_prakarya',bjawa='$n_bjawa'");
		    if ($query) { ?>
		            <script type="text/javascript">
		            alert("centroid Berhasil Ditambahkan");
		            window.location.href="home.php?page=centroid";
		            </script>
		            <?php
            }else{
            		echo mysql_error();
            }   
		}
		function import($nama_nilai,$tmp_nilai,$type_nilai){
		// upload file xls
$target = basename($_FILES['nilai']['name']) ;
move_uploaded_file($_FILES['nilai']['tmp_name'], $target);

// beri permisi agar file xls dapat di baca
chmod($_FILES['nilai']['name'],0777);

// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['nilai']['name'],false);
// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index=0);

// jumlah default data yang berhasil di import
$berhasil = 0;
for ($i=2; $i<=$jumlah_baris; $i++){

	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	$id_nilai     = $data->val($i, 1);
	$siswa   = $data->val($i, 2);
	$papb  = $data->val($i, 3);
	$ppkn     = $data->val($i, 4);
	$bind   = $data->val($i, 5);
	$bing  = $data->val($i, 6);
	$mtk     = $data->val($i, 7);
	$ipa   = $data->val($i, 8);
	$ips  = $data->val($i, 9);
	$seni     = $data->val($i, 10);
	$penjaskes   = $data->val($i, 11);
	$prakarya  = $data->val($i, 12);
	$bjawa  = $data->val($i, 13);

	if($id_nilai != "" && $siswa != "" && $papb != "" && $ppkn != "" && $bind != "" && $bing != "" && $mtk != "" && $ipa != "" && $ips != "" && $seni != "" && $penjaskes != "" && $prakarya != "" && $bjawa != ""){
		// input data ke database (table data_pegawai)
		$query=mysqli_query("INSERT into nilai values($id_nilai','$siswa','$papb','$ppkn','$bind','$bing','$mtk','$ipa','$ips','$seni','$penjaskes','$prakarya','$bjawa')");
		if ($query) { ?>
		            <script type="text/javascript">
		            alert("import Berhasil");
		            window.location.href="home.php?page=nilai";
		            </script>
		            <?php
            }else{
            		echo mysql_error();
            } 
	}

// hapus kembali file .xls yang di upload tadi
unlink($_FILES['nilai']['name']);      
		}
	}
	function tampil_centroid(){
		$query=mysql_query("select centroid.id_centroid,siswa.nm_siswa,centroid.papb,centroid.ppkn,centroid.bind,centroid.bing,centroid.mtk,centroid.ipa,centroid.ips,centroid.seni,centroid.penjaskes,centroid.prakarya,centroid.bjawa FROM siswa INNER JOIN centroid ON siswa.id_siswa=centroid.siswa order by centroid.id_centroid ASC");
		while ($r=mysql_fetch_array($query)) {
			$hasil[]=$r;
		}
		return $hasil;
	}
	

}
$root=new admin();
?>