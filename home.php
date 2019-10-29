<?php
session_start();
if (!$_SESSION["id_admin"]) {

	header("location:index.php");
}

?>
<style type="text/css">
	body{background: #fff !important;}
</style>
<?php 
include "page/head.php";
include "page/sidebar.php";
include "root.php";
include "excel_reader2.php";
?>
<div class="block">
<?php include "page/nav.php" ?>

<?php 
if (isset($_GET['page'])) {
	if ($_GET['page']=='kategori') {
		include "page/menu/kategori.php";
	}
	if ($_GET['page']=='tambah_kategori') {
		include "page/menu/tambah_kategori.php";
	}
	if ($_GET['page']=='edit_cat') {
		include "page/menu/edit_cat.php";
	}
	if ($_GET['page']=='siswa') {
		include "page/menu/siswa.php";
	}
	if ($_GET['page']=='tambah_siswa') {
		include "page/menu/tambah_siswa.php";
	}			
	if ($_GET['page']=='edit_siswa') {
		include "page/menu/edit_siswa.php";
	}
	if ($_GET['page']=='nilai') {
		include "page/menu/nilai.php";
	}
	if ($_GET['page']=='tambah_nilai') {
		include "page/menu/tambah_nilai.php";
	}			
	if ($_GET['page']=='edit_nilai') {
		include "page/menu/edit_nilai.php";
	}
	if ($_GET['page']=='centroid') {
		include "page/menu/centroid.php";
	}
	if ($_GET['page']=='tambah_centroid') {
		include "page/menu/tambah_centroid.php";
	}
	if ($_GET['page']=='algoritma') {
		include "page/menu/algoritma.php";
	}
	if ($_GET['page']=='upload') {
		include "page/menu/upload.php";
	}
	if ($_GET['page']=='upload_aksi') {
		include "page/menu/upload_aksi.php";
	}
	
}
else{
	include "page/menu/index.php";
}
?>

</div>
<div class="both"></div>