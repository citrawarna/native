<div class="container">
	<br>
		<h2>Data pembelian : </h2>
		
		<a href="add_pembelian.php" class="btn btn-primary">Tambah pembelian</a>
		<br><br>
		<table class="table table-sm table-striped">
			<tr>
				<th>No</th>
				<th>Nama Barang</th>
				<th>Nama Supplier</th>
				<th>Jumlah Beli</th>
				<th>Total</th>
				<th>Jatuh Tempo</th>
				<th>Action</th>
			</tr>
			<?php 
				//memanggil seluruh data pada tabel anggota dengan query 
				$no = 1;
				$sql = "SELECT * FROM pembelian 
						inner join barang on barang.id_barang = pembelian.id_barang
						inner join supplier on supplier.id_supplier = pembelian.id_supplier"; 
				$data = mysqli_query($connect, $sql);

				while($row = mysqli_fetch_array($data)){
				//coding dibawah menampilkan record pada tabel anggota menjadikannya array
			?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?= $row['nama_barang'] ?></td>
				<td><?= $row['nama_supplier'] ?></td>
				<td><?= $row['jumlah'] ?></td>
				<td><?= $row['total'] ?></td>
				<td><?= $row['jatuh_tempo'] ?></td>
				<td>
					<!-- coding dibawah untuk link hapus dan edit, kita seperti menggunakan method get agar mendapatkan data dari recod yg akan kita eksekusi -->
					<a href="update_pembelian.php?id_pembelian=<?= $row['id_pembelian'] ?>"><i class="btn btn-sm btn-warning fa fa-cog"></i></a> 
					<a href="proses/delete_pembelian.php?id_pembelian=<?= $row['id_pembelian'] ?>" onclick="return confirm('Yakin hapus data?');"><i class="btn btn-sm btn-danger fa fa-trash"></i></a>

				</td>
			</tr>
			<?php } ?>
		</table>
</div>