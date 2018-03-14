<div class="container">
	<br>
		<h2>Data stok : </h2>
		
		<a href="add_stok.php" class="btn btn-primary">Tambah stok</a>
		<br><br>
		<table class="table table-sm table-striped">
			<tr>
				<th>No</th>
				<th>Nama Barang</th>
				<th>Stok</th>
				<th>Keterangan</th>
				<th>Action</th>
			</tr>
			<?php 
				//memanggil seluruh data pada tabel anggota dengan query 
				$no = 1;
				$sql = "SELECT * FROM stok inner join barang on barang.id_barang=stok.id_barang"; 
				$data = mysqli_query($connect, $sql);

				while($row = mysqli_fetch_array($data)){
				//coding dibawah menampilkan record pada tabel anggota menjadikannya array
			?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?= $row['nama_barang'] ?></td>
				<td><?= $row['stok'] ?></td>
				<td><?= $row['keterangan'] ?></td>
				
				<td>
					<!-- coding dibawah untuk link hapus dan edit, kita seperti menggunakan method get agar mendapatkan data dari recod yg akan kita eksekusi -->
					<a href="update_stok.php?id_stok=<?= $row['id_stok'] ?>"><i class="btn btn-sm btn-warning fa fa-cog"></i></a> 
					<a href="proses/delete_stok.php?id_stok=<?= $row['id_stok'] ?>" onclick="return confirm('Yakin hapus data?');"><i class="btn btn-sm btn-danger fa fa-trash"></i></a>

				</td>
			</tr>
			<?php } ?>
		</table>
</div>