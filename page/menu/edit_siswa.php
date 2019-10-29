<?php 
$id=$_GET[id];
$query=mysql_query("select * from siswa where id_siswa='$id'");
$data=mysql_fetch_array($query);
?>
<div class="contadmin">
	<h3 class="title">Edit Siswa</h3>
	<form class="cssform" action="hand.php?action=edit_siswa" method="post">
		<input type="text" name="siswa" placeholder="siswa" value="<?= $data['nm_siswa'] ?>">
		<input type="hidden" name="id" value="<?= $data['id_siswa'] ?>">
		<input type="submit" value="Simpan">
	</form>
</div>