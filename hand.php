<?php 
include "root.php";
$act=$_GET["action"];
if (isset($act)) {
	if ($act=="login_admin") {
		$root->login($_POST['username'],$_POST['password']);
	}
	if ($act=="tambah_kategori") {
		$root->tambah_kategori($_POST['kategori']);
	}
	if ($act=="edit_kategori") {
		$root->edit_kategori($_POST['kategori'],$_POST['id']);
	}
	if ($act=="tambah_siswa") {
		$root->tambah_siswa($_POST['siswa']);
	}
	if ($act=="edit_siswa") {
		$root->edit_siswa($_POST['siswa'],$_POST['id']);
	}
	if ($act=="edit_nilai"){
		$root->edit_nilai($_POST['siswa'],$_POST['papb'],$_POST['ppkn'],$_POST['bind'],$_POST['bing'],$_POST['mtk'],$_POST['ipa'],$_POST['ips'],$_POST['seni'],$_POST['penjaskes'],$_POST['prakarya'],$_POST['bjawa'],$_POST['id_nilai']);
	}
	if ($act=="tambah_nilai") {
		$root->tambah_nilai($_POST['siswa'],$_POST['papb'],$_POST['ppkn'],$_POST['bind'],$_POST['bing'],$_POST['mtk'],$_POST['ipa'],$_POST['ips'],$_POST['seni'],$_POST['penjaskes'],$_POST['prakarya'],$_POST['bjawa']);
	}
	if ($act=="tambah_cnt") {
		$root->tambah_cnt($_POST['siswa'],$_POST['n_papb'],$_POST['n_ppkn'],$_POST['n_bind'],$_POST['n_bing'],$_POST['n_mtk'],$_POST['n_ipa'],$_POST['n_ips'],$_POST['n_seni'],$_POST['n_penjaskes'],$_POST['n_prakarya'],$_POST['n_bjawa']);
	}
	if ($act=="import") {
		$root->import($_FILES['nilai']['name'],$_FILES['nilai']['tmp_name'],$_FILES['nilai']['type']);
	}
	if ($act=="hapus") {
		$query=mysql_query("delete from nilai where id_nilai='$_GET[id]'");
			if ($query) {
			?>
			<script>
				alert("Nilai Berhasil Dihapus");
				window.location.href="home.php?page=nilai";
			</script>
			<?php
		}
		else{
			?>
			<script>
				alert("Nilai Gagal Dihapus");
				window.location.href="home.php?page=nilai";
			</script>
			<?php
		}
	}

	if ($act=="hapus_cat") {
		$query=mysql_query("delete from kategori where id_kategori='$_GET[id]'");
			if ($query) {
			?>
			<script>
				alert("Kategori Berhasil Dihapus");
				window.location.href="home.php?page=kategori";
			</script>
			<?php
		}
		else{
			?>
			<script>
				alert("Kategori gagal Dihapus");
				window.location.href="home.php?page=kategori";
			</script>
			<?php
		}
	}

	if ($act=="hapus_siswa") {
		$query=mysql_query("delete from siswa where id_siswa='$_GET[id]'");
			if ($query) {
			?>
			<script>
				alert("Siswa Berhasil Dihapus");
				window.location.href="home.php?page=siswa";
			</script>
			<?php
		}
		else{
			?>
			<script>
				alert("Siswa gagal Dihapus");
				window.location.href="home.php?page=siswa";
			</script>
			<?php
		}
	}

	if ($act=="hapus_centroid") {
		$query=mysql_query("delete from centroid where id_centroid='$_GET[id]'");
			if ($query) {
			?>
			<script>
				alert("Centroid Berhasil Dihapus");
				window.location.href="home.php?page=centroid";
			</script>
			<?php
		}
		else{
			?>
			<script>
				alert("Centroid gagal Dihapus");
				window.location.href="home.php?page=centroid";
			</script>
			<?php
		}
	}
	if ($act=="logout") {
		session_start();
		session_destroy();
		header("location:index.php");
	}
	
}
