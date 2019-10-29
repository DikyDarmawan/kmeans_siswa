<?php 
$data=mysql_query("select * from nilai where id_nilai='$_GET[id]'");
$hasil=mysql_fetch_array($data);
 ?>
<div class="contadmin">
	<h3 class="title">Edit Nilai</h3>
	<form class="cssform" action="hand.php?action=edit_nilai" method="post" enctype="multipart/form-data">
		<label for="siswa" class="label">Siswa</label>
		<select required="required" name="siswa" class="select">
			<?php
			$root->tampil_siswa2($hasil["siswa"]);
			?>
		</select><br>
		<input required="required" type="text" name="papb" placeholder="PAPB" value="<?= $hasil['papb'] ?>">
		<input required="required" type="text" name="ppkn" placeholder="PPKN" value="<?= $hasil['ppkn'] ?>">
		<input required="required" type="text" name="bind" placeholder="BAHASA INDONESIA" value="<?= $hasil['bind'] ?>">
		<input required="required" type="text" name="bing" placeholder="BAHASA INGGRIS" value="<?= $hasil['bing'] ?>">
		<input required="required" type="text" name="mtk" placeholder="MATEMATIKA" value="<?= $hasil['mtk'] ?>">
		<input required="required" type="text" name="ipa" placeholder="IPA" value="<?= $hasil['ipa'] ?>">
		<input required="required" type="text" name="ips" placeholder="IPS" value="<?= $hasil['ips'] ?>">
		<input required="required" type="text" name="seni" placeholder="SENIBUDAYA" value="<?= $hasil['seni'] ?>">
		<input required="required" type="text" name="penjaskes" placeholder="PENJASKES" value="<?= $hasil['penjaskes'] ?>">
		<input required="required" type="text" name="prakarya" placeholder="PRAKARYA" value="<?= $hasil['prakarya'] ?>">
		<input required="required" type="text" name="bjawa" placeholder="BAHASA JAWA" value="<?= $hasil['bjawa'] ?>"> 
		<br><br>
		<input type="hidden" name="id_nilai" value="<?=$hasil['id_nilai']?>">
		<input type="submit" value="Simpan">
	</form>
</div>