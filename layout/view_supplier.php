<div class="container">
	<br>
		<h2>Data kategori : </h2>
		
		<a href="add_supplier.php" class="btn btn-primary">Tambah supplier</a>
		<br><br>
		<table class="table table-sm table-striped">
			<tr>
				<th>No</th>
				<th>Nama supplier</th>	
				<th>Alamat</th>	
				<th>Action</th>
			</tr>
			<?php 
				//memanggil seluruh data pada tabel anggota dengan query 
				$no = 1;
				$sql = "SELECT * FROM supplier"; 
				$data = mysqli_query($connect, $sql);

				while($row = mysqli_fetch_array($data)){
				//coding dibawah menampilkan record pada tabel anggota menjadikannya array
			?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?= $row['nama_supplier'] ?></td>
				<td><?= $row['alamat'] ?></td>
				<td>
					<!-- coding dibawah untuk link hapus dan edit, kita seperti menggunakan method get agar mendapatkan data dari recod yg akan kita eksekusi -->
					<a href="update_supplier.php?id_supplier=<?= $row['id_supplier'] ?>"><i class="btn btn-sm btn-warning fa fa-cog"></i></a> 
					<a href="proses/delete_supplier.php?id_supplier=<?= $row['id_supplier'] ?>" onclick="return confirm('Yakin hapus data?');"><i class="btn btn-sm btn-danger fa fa-trash"></i></a>

				</td>
			</tr>
			<?php } ?>
		</table>
</div>