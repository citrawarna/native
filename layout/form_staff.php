<?php 
	if(isset($_GET['id_staff'])){
		$id_staff = $_GET['id_staff'];
		$query = mysqli_query($connect, "SELECT * from staff WHERE id_staff='$id_staff'");

		while($data = mysqli_fetch_array($query)){
			$id_staff = $data['id_staff'];
			$nama = $data['nama'];
			$tanggal = $data['tanggal'];
			$jenis = $data['jenis'];
			$jabatan = $data['jabatan'];
		}
 ?>

<div class="container">
	<br>
	<h2>Edit Data Staff : </h2>
	<form action="proses/edit_staff.php" method="post">
		<table class="table">
			<input type="hidden" name="id_staff" value="<?= $id_staff ?>">
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" value="<?= $nama ?>"></td>
			</tr>
			<tr>
				<td>Tanggal Masuk</td>
				<td>:</td>
				<td colspan="2"><input type="text" class="form-control" placeholder="Tanggal Masuk Bekerja" name="tanggal" value="<?= $tanggal ?>"></td>
			</tr>
			<tr>
				<td>Jenis Karyawan</td>
				<td>:</td>
				<td colspan="2">
					<select name="jenis" class="form-control">
						<option value=""> - Pilih - </option>
						<option value="Tetap" <?= ($jenis == 'Tetap')?'selected' : '' ?> > Tetap</option>
						<option value="Training" <?= ($jenis== 'Training')?'selected' : '' ?>> Training</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Jabatan</td>
				<td>:</td>
				<td colspan="2"><input type="text" class="form-control" placeholder="Jabatan" name="jabatan" value="<?= $jabatan ?>"></td>
			</tr>
			<tr>
				<td colspan="4" align="right"><a href="staff.php" class="btn btn-danger btn-lg"> Cancel </a> <input type="submit" value="Simpan" class="btn btn-primary btn-lg"></td>
			</tr>
			
		</table>		
	</form>
</div>
<?php } else { ?>
<div class="container">
	<br>
	<h2>Add Data Staff : </h2>
	<form action="proses/tambah_staff.php" method="post">
		<table class="table">
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" ></td>
			</tr>
			<tr>
				<td>Tanggal Masuk</td>
				<td>:</td>
				<td colspan="2"><input type="text" class="form-control" placeholder="Tanggal Masuk Bekerja" name="tanggal"></td>
			</tr>
			<tr>
				<td>Jenis Karyawan</td>
				<td>:</td>
				<td colspan="2">
					<select name="jenis" class="form-control">
						<option value=""> - Pilih - </option>
						<option value="Tetap"> Tetap</option>
						<option value="Training"> Training</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Jabatan</td>
				<td>:</td>
				<td colspan="2"><input type="text" class="form-control" placeholder="Jabatan" name="jabatan"></td>
			</tr>
			<tr>
				<td colspan="4" align="right"><a href="staff.php" class="btn btn-danger btn-lg"> Cancel </a> <input type="submit" value="Simpan" class="btn btn-primary btn-lg"></td>
			</tr>
			
		</table>		
	</form>
</div>

<?php } ?>