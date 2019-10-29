<div class="contadmin">
	
	<table class="tb_kat">
	<tr>
		<th>No</th><th>Nama Kategori</th><th>Aksi</th>
	</tr>
		<?php $kategori=$root->tampil_kategori(); 
		$no=1;
		foreach($kategori as $r){ 
			echo "<tr>
				<td>$no</td><td>$r[nama_kategori]</td>
				<td>
					<a href='home.php?page=edit_cat&id=$r[id_kategori]' class='btn'>Edit</a>
					
				</td>
			</tr>";
			$no++;
		}
		?>
		

	</table>
</div>