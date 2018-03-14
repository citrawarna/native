<?php 
	if(isset($_GET['id_stok'])){
		$id_stok = $_GET['id_stok'];
		$query = mysqli_query($connect, "SELECT * from stok WHERE id_stok='$id_stok'");

		$q_barang = mysqli_query($connect, "SELECT * FROM barang");

		while($data = mysqli_fetch_array($query)){
			$id_stok = $data['id_stok'];
			$id_barang = $data['id_barang'];
			$stok = $data['stok'];
			$keterangan = $data['keterangan'];
		}
 ?>

<div class="container">
	<br>
	<h2>Edit Data stok : </h2>
	<form action="proses/edit_stok.php" method="post">
		<table class="table">
			<input type="hidden" name="id_stok" value="<?= $id_stok ?>">
			<tr>
				<td>Nama barang</td>
				<td>:</td>
				<td>
					<select class="form-control" name="id_barang">
						<option value=""> - Pilih - </option>
					<?php while($s_bar = mysqli_fetch_array($q_barang)) { ?>
					  <option value="<?= $s_bar['id_barang']; ?>" 
					  <?php if($id_barang == $s_bar['id_barang']){ echo 'selected'; } ?>>
					  	<?= $s_bar['nama_barang'] ?>
					  </option>
					<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>stok</td>
				<td>:</td>
				<td><input type="text" class="form-control" placeholder="stok" name="stok" value="<?= $stok ?>"></td>
			</tr>
			<tr>
				<td>keterangan</td>
				<td>:</td>
				<td><textarea class="form-control" name="keterangan"><?= $keterangan ?></textarea></td>
			</tr>
			<tr>
				<td colspan="4" align="right"><a href="stok.php" class="btn btn-danger btn-lg"> Cancel </a> <input type="submit" value="Simpan" class="btn btn-primary btn-lg"></td>
			</tr>
		</table>		
	</form>
</div>
<?php } else { ?>

<?php 
$q_barang = mysqli_query($connect, "SELECT * FROM barang");

 ?>
<div class="container">
	<br>
	<h2>Add Data stok : </h2>
	<form action="proses/tambah_stok.php" method="post">
		<table class="table">
			<tr>
				<td>Nama barang</td>
				<td>:</td>
				<td>
					<select class="form-control" name="id_barang">
						<option value=""> - Pilih - </option>
					<?php while($s_bar = mysqli_fetch_array($q_barang)) { ?>
					  <option value="<?= $s_bar['id_barang']; ?>"><?= $s_bar['nama_barang'] ?></option>
					<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Stok</td>
				<td>:</td>
				<td><input type="text" class="form-control" placeholder="stok" name="stok"></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td>:</td>
				<td><textarea name="keterangan" class="form-control" placeholder="Keterangan"></textarea></td>
			</tr>
			
			<tr>
				<td colspan="4" align="right"><a href="stok.php" class="btn btn-danger btn-lg"> Cancel </a> <input type="submit" value="Simpan" class="btn btn-primary btn-lg"></td>
			</tr>
			
		</table>		
	</form>
</div>

<?php } ?>