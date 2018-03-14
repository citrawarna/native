<div class="container">
	<br>
		<h2>Data Anggota : </h2>
		
		<a href="add_anggota.php" class="btn btn-primary">Tambah Anggota</a>
		<br><br>
		<table class="table table-sm table-striped">
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Tempat, Tanggal Lahir</th>
				<th>Jenis Kelamin</th>
				<th>Alamat</th>
				<th>No Telp</th>
				<th>Email</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
			<?php 
				//memanggil seluruh data pada tabel anggota dengan query 
				$no = 1;
				$sql = "SELECT * FROM anggota"; 
				$data = mysqli_query($connect, $sql);

				while($row = mysqli_fetch_array($data)){
				//coding dibawah menampilkan record pada tabel anggota menjadikannya array
			?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?= $row['nama'] ?></td>
				<td><?= $row['tempat_lahir'] .', '. $row['tanggal_lahir'] ?></td>
				<td>
					<?php 
					//if condition apabila recordnya L maka akan ditampilkan Laki laki dan sebaliknya
						if($row['jenis_kelamin'] == 'L')
							echo "Laki - Laki";
						else 
							echo "Perempuan";
					 ?>
				</td>
				<td><?= $row['alamat'] ?></td>
				<td><?= $row['no_telp'] ?></td>
				<td><?= $row['email'] ?></td>
				<td>
					<?php 
						if($row['status'] == 1)
							echo "Active";
						else 
							echo "Not Active";
					 ?>
				</td>
				<td>
					<!-- coding dibawah untuk link hapus dan edit, kita seperti menggunakan method get agar mendapatkan data dari recod yg akan kita eksekusi -->
					<a href="update_anggota.php?id_anggota=<?= $row['id_anggota'] ?>"><i class="btn btn-sm btn-warning fa fa-cog"></i></a> 
					<a href="proses/delete_anggota.php?id_anggota=<?= $row['id_anggota'] ?>" onclick="return confirm('Yakin hapus data?');"><i class="btn btn-sm btn-danger fa fa-trash"></i></a>

				</td>
			</tr>
			<?php } ?>
		</table>
</div>