  <div class="contadmin">
	<a href="?page=tambah_nilai" class="tkategori"><i class="fa fa-plus"></i> Tambah nilai</a>
	
	<table class="tb_kat" width="100%">
	<tr>
		<th>No</th>
		<th>Nama Siswa</th>
		<?php $kategori=$root->tampil_kategori(); 
		$no=1;
		foreach($kategori as $r){ 
			echo "
				<th>$r[nama_kategori]</th>";
			$no++;
		}
		?>
		<th width="100px">Aksi</th>
	</tr>
	<?php $kategori=$root->tampil_nilai(); 
		$no=1;
		foreach($kategori as $r){ 
			echo "<tr>
				<td>$no</td>
				<td>$r[nm_siswa]</td>
				<td>".@number_format($r['papb'],2,',','.')."</td>
				<td>".@number_format($r['ppkn'],2,',','.')."</td>
				<td>".@number_format($r['bind'],2,',','.')."</td>
				<td>".@number_format($r['bing'],2,',','.')."</td>
				<td>".@number_format($r['mtk'],2,',','.')."</td>
				<td>".@number_format($r['ipa'],2,',','.')."</td>
				<td>".@number_format($r['ips'],2,',','.')."</td>
				<td>".@number_format($r['seni'],2,',','.')."</td>
				<td>".@number_format($r['penjaskes'],2,',','.')."</td>
				<td>".@number_format($r['prakarya'],2,',','.')."</td>
				<td>".@number_format($r['bjawa'],2,',','.')."</td>
				<td>
					<a href='home.php?page=edit_nilai&id=$r[id_nilai]' class='btn'>Edit</a>
					<a href='hand.php?action=hapus&id=$r[id_nilai]' class='btn red'>Hapus</a>
					<a href='home.php?page=tambah_centroid&id=$r[id_nilai]' class='btn'>centroid</a>
				</td>

			</tr>";
			$no++;
		}
		?>	

	

	</table>
</div>
