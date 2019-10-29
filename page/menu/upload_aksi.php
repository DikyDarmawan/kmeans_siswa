<!-- import excel ke mysql -->
<!-- www.malasngoding.com -->

<?php 
// menghubungkan dengan koneksi
include '../../root.php';
// menghubungkan dengan library excel reader
include "excel_reader2.php";
?>

<?php
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
		mysqli_query("INSERT into nilai values($id_nilai','$siswa','$papb','$ppkn','$bind','$bing','$mtk','$ipa','$ips','$seni','$penjaskes','$prakarya','$bjawa')");
		$berhasil++;
	}
}

// hapus kembali file .xls yang di upload tadi
unlink($_FILES['nilai']['name']);

// alihkan halaman ke index.php
header("location:?page=nilai?berhasil=$berhasil");
?>