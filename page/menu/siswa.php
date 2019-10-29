<div class="contadmin">
	<a href="?page=tambah_siswa" class="tkategori"><i class="fa fa-plus"></i> Tambah Siswa</a>
	<table class="tb_kat">
	<tr>
		<th>No</th><th>Nama Siswa</th><th>Aksi</th>
	</tr>
		<?php $kategori=$root->tampil_siswa(); 
		$no=1;
		foreach($kategori as $r){ 
			echo "<tr>
				<td>$no</td><td>$r[nm_siswa]</td>
				<td>
					<a href='home.php?page=edit_siswa&id=$r[id_siswa]' class='btn'>Edit</a>
					<a href='hand.php?action=hapus_siswa&id=$r[id_siswa]' class='btn red'>Hapus</a>
				</td>
			</tr>";
			$no++;
		}
		?>
		

	</table>
</div>