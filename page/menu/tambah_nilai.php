
<div class="contadmin">
	<h3 class="title">Tambah nilai</h3>
	<form class="cssform" action="hand.php?action=tambah_nilai" method="post" enctype="multipart/form-data">
		
		<label for="siswa" class="label">Siswa</label>
		<select required="required" name="siswa" class="select">
			<?php
			$root->tampil_siswa1();
			?>
		</select>
		<input required="required" type="text" name="papb" placeholder="PAPB">
		<input required="required" type="text" name="ppkn" placeholder="PPKN">
		<input required="required" type="text" name="bind" placeholder="BAHASA INDONESIA">
		<input required="required" type="text" name="bing" placeholder="BAHASA INGGRIS">
		<input required="required" type="text" name="mtk" placeholder="MATEMATIKA">
		<input required="required" type="text" name="ipa" placeholder="IPA">
		<input required="required" type="text" name="ips" placeholder="IPS">
		<input required="required" type="text" name="seni" placeholder="SENIBUDAYA">
		<input required="required" type="text" name="penjaskes" placeholder="PENJAKES">
		<input required="required" type="text" name="prakarya" placeholder="PRAKARYA">
		<input required="required" type="text" name="bjawa" placeholder="BAHASA JAWA">
		<br>
		
		<br>
		<input type="submit" value="Simpan">

	</form>
	
</div>
