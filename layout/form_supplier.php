<?php 
	if(isset($_GET['id_supplier'])){
		$id_supplier = $_GET['id_supplier'];
		$query = mysqli_query($connect, "SELECT * from supplier WHERE id_supplier='$id_supplier'");

		while($data = mysqli_fetch_array($query)){
			$id_supplier = $data['id_supplier'];
			$nama_supplier = $data['nama_supplier'];
			$alamat = $data['alamat'];
		}
 ?>

<div class="container">
	<br>
	<h2>Edit Data supplier : </h2>
	<form action="proses/edit_supplier.php" method="post">
		<table class="table">
			<input type="hidden" name="id_supplier" value="<?= $id_supplier ?>">
			<tr>
				<td>Nama supplier</td>
				<td>:</td>
				<td><input type="text" class="form-control" placeholder="Nama supplier" name="nama_supplier" value="<?= $nama_supplier ?>"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><textarea class="form-control" placeholder="Alamat" name="alamat"><?= $alamat ?></textarea></td>
			</tr>
			<tr>
				<td colspan="4" align="right"><a href="supplier.php" class="btn btn-danger btn-lg"> Cancel </a> <input type="submit" value="Simpan" class="btn btn-primary btn-lg"></td>
			</tr>
		</table>		
	</form>
</div>
<?php } else { ?>
<div class="container">
	<br>
	<h2>Add Data supplier : </h2>
	<form action="proses/tambah_supplier.php" method="post">
		<table class="table">
			<tr>
				<td>Nama supplier</td>
				<td>:</td>
				<td><input type="text" class="form-control" placeholder="Nama supplier" name="nama_supplier" ></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><textarea class="form-control" placeholder="Alamat" name="alamat"></textarea></td>
			</tr>
				<td colspan="4" align="right"><a href="supplier.php" class="btn btn-danger btn-lg"> Cancel </a> <input type="submit" value="Simpan" class="btn btn-primary btn-lg"></td>
			</tr>
			
		</table>		
	</form>
</div>

<?php } ?>