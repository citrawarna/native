<div class="container">
	<br>
		<h2>Data barang : </h2>
		
		<a href="add_barang.php" class="btn btn-primary">Tambah barang</a>
		<br><br>
		<table class="table table-sm table-striped">
			<tr>
				<th>No</th>
				<th>Nama barang</th>
				<th>Kategori barang</th>
				<th>Nama Supplier</th>
				<th>Kemasan</th>
				<th>Harga Beli</th>
				<th>Harga Jual</th>
				<th>expired date</th>		
				<th>Action</th>
			</tr>
			<?php 
				//memanggil seluruh data pada tabel anggota dengan query 
				$no = 1;
				$sql = "SELECT * FROM barang 
				inner join kategori on kategori.id_kategori=barang.id_kategori 
				inner join supplier on supplier.id_supplier = barang.id_supplier"; 
				$data = mysqli_query($connect, $sql);

				while($row = mysqli_fetch_array($data)){
				//coding dibawah menampilkan record pada tabel anggota menjadikannya array
			?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?= $row['nama_barang'] ?></td>
				<td><?= $row['nama_kategori'] ?></td>
				<td><?= $row['nama_supplier'] ?></td>
				<td><?= $row['kemasan'] ?></td>
				<td><?= $row['harga_beli'] ?></td>
				<td><?= $row['harga_jual'] ?></td>
				<td><?= $row['expired_date'] ?></td>
				<td>
					<!-- coding dibawah untuk link hapus dan edit, kita seperti menggunakan method get agar mendapatkan data dari recod yg akan kita eksekusi -->
					<a href="update_barang.php?id_barang=<?= $row['id_barang'] ?>"><i class="btn btn-sm btn-warning fa fa-cog"></i></a> 
					<a href="proses/delete_barang.php?id_barang=<?= $row['id_barang'] ?>" onclick="return confirm('Yakin hapus data?');"><i class="btn btn-sm btn-danger fa fa-trash"></i></a>

				</td>
			</tr>
			<?php } ?>
		</table>
</div>