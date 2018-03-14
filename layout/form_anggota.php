<?php 
//apabila user ingin mengedit data akan menampilkan form pertama
//get adalah mendapatkan data dari url yang dipilih oleh user contoh update_anggota?id_anggota=2
//jadi data dengan id_anggota 2 yg akan diedit
if(isset($_GET['id_anggota'])){
	$id_anggota = $_GET['id_anggota'];
	$query = mysqli_query($connect, "SELECT * FROM anggota WHERE id_anggota = '$id_anggota'");
	//memanggil dan menyimpan data tersebut ke dalam variabel
	while($data = mysqli_fetch_array($query)){
		$id_anggota = $data['id_anggota'];
		$nama = $data['nama'];
		$alamat = $data['alamat'];
		$no_telp = $data['no_telp'];
		$tempat_lahir = $data['tempat_lahir'];
		$tanggal_lahir = $data['tanggal_lahir'];
		$jenis_kelamin = $data['jenis_kelamin'];
		$email = $data['email'];
		$status= $data['status'];
}

 ?>
<div class="container">
	<br>
	<h2>Edit Data Anggota : </h2>
	<form action="proses/edit_anggota.php" method="post">
		<table class="table">
			<input type="hidden" name="id_anggota" value="<?= $id_anggota ?>">
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td colspan="2"><input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" value="<?= $nama?>"></td>
			</tr>
			<tr>
				<td>Tempat, Tanggal Lahir</td>
				<td>:</td>
				<td><input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" value="<?= $tempat_lahir?>"></td>
				<td><input type="text" class="form-control" placeholder="Tanggal Lahir" name="tanggal_lahir" value="<?= $tanggal_lahir ?>"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td colspan="2">
					<input type="radio" value="L" name="jenis_kelamin" <?= ($jenis_kelamin == 'L')?'checked' : '' ?> > Laki - Laki &nbsp;
					<input type="radio" value="P" name="jenis_kelamin" <?= ($jenis_kelamin == 'P')?'checked' : '' ?> > Perempuan
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td colspan="2"><textarea class="form-control" placeholder="Alamat" name="alamat"><?= $alamat ?></textarea></td>
			</tr>
			<tr>
				<td>No Telp</td>
				<td>:</td>
				<td colspan="2"><input type="no_telp" class="form-control" placeholder="No HP" name="no_telp" value="<?= $no_telp ?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td colspan="2"><input type="email" class="form-control" placeholder="Email" name="email" value="<?= $email ?>"></td>
			</tr>
			<tr>
				<td>Status</td>
				<td>:</td>
				<td colspan="2">
					<select name="status" class="form-control">
						<option value=""> - Pilih - </option>
						<option value="1" <?= ($status == '1')?'selected' : '' ?> > Active</option>
						<option value="0" <?= ($status == '0')?'selected' : '' ?>>Not Active</option>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="4" align="right"><a href="anggota.php" class="btn btn-danger btn-lg"> Cancel </a> <input type="submit" value="Simpan" class="btn btn-primary btn-lg"></td>
			</tr>
			
		</table>		
	</form>
</div>
<?php } else {?>
<!-- ini adalah form apabila input, tidak terdapat nilai value dan perhatikan juga form actionnya, form action
berbeda dengan form action edit yang ada diatas -->

<div class="container">
	<br>
	<h2>Add Data Anggota : </h2>
	<form action="proses/tambah_anggota.php" method="post">
		<table class="table">
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td colspan="2"><input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" ></td>
				<td><?= $namaErr; ?></td>
			</tr>
			<tr>
				<td>Tempat, Tanggal Lahir</td>
				<td>:</td>
				<td><input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" ></td>
				<td><input type="text" class="form-control" placeholder="Tanggal Lahir" name="tanggal_lahir" ></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td colspan="2">
					<input type="radio" value="L" name="jenis_kelamin"> Laki - Laki &nbsp;
					<input type="radio" value="P" name="jenis_kelamin"> Perempuan
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td colspan="2"><textarea class="form-control" placeholder="Alamat" name="alamat"></textarea></td>
			</tr>
			<tr>
				<td>No Telp</td>
				<td>:</td>
				<td colspan="2"><input type="no_telp" class="form-control" placeholder="No HP" name="no_telp"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td colspan="2"><input type="email" class="form-control" placeholder="Email" name="email" ></td>
			</tr>
			<tr>
				<td>Status</td>
				<td>:</td>
				<td colspan="2">
					<select name="status" class="form-control">
						<option value=""> - Pilih - </option>
						<option value="1"> Active</option>
						<option value="0"> Not Active</option>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="4" align="right"><a href="anggota.php" class="btn btn-danger btn-lg"> Cancel </a> <input type="submit" value="Simpan" class="btn btn-primary btn-lg"></td>
			</tr>
			
		</table>		
	</form>
</div>
<?php } ?>