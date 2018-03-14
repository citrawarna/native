<div class="container">
	<br>
		<h2>Data penjualan : </h2>
		
		<a href="add_penjualan.php" class="btn btn-primary">Tambah penjualan</a>
		<br><br>
		<table class="table table-sm table-striped">
			<tr>
				<th>No</th>
				<th>Customer</th>
				<th>Nama Barang</th>
				<th>Jumlah Jual</th>
				<th>Harga Jual</th>
				<th>Total</th>
				<th>Profit</th>
				<th>Keterangan</th>
				<th>Action</th>
			</tr>
			<?php 
				//memanggil seluruh data pada tabel anggota dengan query 
				$no = 1;
				$sql = "SELECT * FROM penjualan 
						inner join barang on barang.id_barang = penjualan.id_barang
						inner join anggota on anggota.id_anggota = penjualan.id_anggota"; 
				$data = mysqli_query($connect, $sql);

				while($row = mysqli_fetch_array($data)){
					$total = $row['harga_jual'] * $row['jumlah'];
					$profit = $row['harga_jual'] - $row['harga_beli'];
				//coding dibawah menampilkan record pada tabel anggota menjadikannya array
			?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?= $row['nama'] ?></td>
				<td><?= $row['nama_barang'] ?></td>
				<td><?= $row['jumlah'] ?></td>
				<td><?= $row['harga_jual'] ?></td>
				<td><?= $total ?></td>
				<td><?= $profit * $row['jumlah'] ?></td>
				<td><?= $row['keterangan'] ?></td>
				
				<td>
					<!-- coding dibawah untuk link hapus dan edit, kita seperti menggunakan method get agar mendapatkan data dari recod yg akan kita eksekusi -->
					<a href="update_penjualan.php?id_penjualan=<?= $row['id_penjualan'] ?>"><i class="btn btn-sm btn-warning fa fa-cog"></i></a> 
					<a href="proses/delete_penjualan.php?id_penjualan=<?= $row['id_penjualan'] ?>" onclick="return confirm('Yakin hapus data?');"><i class="btn btn-sm btn-danger fa fa-trash"></i></a>

				</td>
			</tr>
			<?php } ?>
		</table>
</div>