<div class="container">
	<br>
		<h2>Data Staff : </h2>
		
		<a href="add_staff.php" class="btn btn-primary">Tambah Staff</a>
		<br><br>
		<table class="table table-sm table-striped">
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Tanggal Masuk</th>
				<th>Jenis Karyawan</th>
				<th>Jabatan</th>
				<th>Action</th>
			</tr>
			<?php 
				//memanggil seluruh data pada tabel anggota dengan query 
				$no = 1;
				$sql = "SELECT * FROM staff"; 
				$data = mysqli_query($connect, $sql);

				while($row = mysqli_fetch_array($data)){
				//coding dibawah menampilkan record pada tabel anggota menjadikannya array
			?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?= $row['nama'] ?></td>
				<td><?= $row['tanggal'] ?></td>
				<td><?= $row['jenis'] ?></td>
				<td><?= $row['jabatan'] ?></td>
				
				<td>
					<!-- coding dibawah untuk link hapus dan edit, kita seperti menggunakan method get agar mendapatkan data dari recod yg akan kita eksekusi -->
					<a href="update_staff.php?id_staff=<?= $row['id_staff'] ?>"><i class="btn btn-sm btn-warning fa fa-cog"></i></a> 
					<a href="proses/delete_staff.php?id_staff=<?= $row['id_staff'] ?>" onclick="return confirm('Yakin hapus data?');"><i class="btn btn-sm btn-danger fa fa-trash"></i></a>

				</td>
			</tr>
			<?php } ?>
		</table>
</div>