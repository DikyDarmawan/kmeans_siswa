<?php 
$data=mysql_query("select * from nilai where id_nilai='$_GET[id]'");
$hasil=mysql_fetch_array($data);
 ?>

<div class="contadmin">
	<h3 class="title">Tambah Centroid</h3>
	<form class="cssform" action="hand.php?action=tambah_cnt" method="post" enctype="multipart/form-data">
		
		<label for="siswa" class="label">Siswa</label>
		<select required="required" name="siswa" class="select">
			<?php
			$root->tampil_siswa1();
			?>
		</select>
		<input required="required" type="text" name="n_papb" value="<?= $hasil['papb'] ?>">
		<input required="required" type="text" name="n_ppkn" value="<?= $hasil['ppkn'] ?>">
		<input required="required" type="text" name="n_bind" value="<?= $hasil['bind'] ?>">
		<input required="required" type="text" name="n_bing" value="<?= $hasil['bing'] ?>">
		<input required="required" type="text" name="n_mtk" value="<?= $hasil['mtk'] ?>">
		<input required="required" type="text" name="n_ipa" value="<?= $hasil['ipa'] ?>">
		<input required="required" type="text" name="n_ips" value="<?= $hasil['ips'] ?>">
		<input required="required" type="text" name="n_seni" value="<?= $hasil['seni'] ?>">
		<input required="required" type="text" name="n_penjaskes" value="<?= $hasil['penjaskes'] ?>">
		<input required="required" type="text" name="n_prakarya" value="<?= $hasil['prakarya'] ?>">
		<input required="required" type="text" name="n_bjawa" value="<?= $hasil['bjawa'] ?>">
		<br>
		
		<br>
		<input type="submit" value="Simpan">

	</form>
	
</div>
