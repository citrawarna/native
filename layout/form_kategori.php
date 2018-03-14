<?php 
	if(isset($_GET['id_kategori'])){
		$id_kategori = $_GET['id_kategori'];
		$query = mysqli_query($connect, "SELECT * from kategori WHERE id_kategori='$id_kategori'");

		while($data = mysqli_fetch_array($query)){
			$id_kategori = $data['id_kategori'];
			$nama_kategori = $data['nama_kategori'];
		}
 ?>

<div class="container">
	<br>
	<h2>Edit Data kategori : </h2>
	<form action="proses/edit_kategori.php" method="post">
		<table class="table">
			<input type="hidden" name="id_kategori" value="<?= $id_kategori ?>">
			<tr>
				<td>Nama Kategori</td>
				<td>:</td>
				<td><input type="text" class="form-control" placeholder="Nama Kategori" name="nama_kategori" value="<?= $nama_kategori ?>"></td>
			</tr>
			<tr>
				<td colspan="4" align="right"><a href="kategori.php" class="btn btn-danger btn-lg"> Cancel </a> <input type="submit" value="Simpan" class="btn btn-primary btn-lg"></td>
			</tr>
		</table>		
	</form>
</div>
<?php } else { ?>
<div class="container">
	<br>
	<h2>Add Data kategori : </h2>
	<form action="proses/tambah_kategori.php" method="post">
		<table class="table">
			<tr>
				<td>Nama Kategori</td>
				<td>:</td>
				<td><input type="text" class="form-control" placeholder="Nama Kategori" name="nama_kategori" ></td>
			</tr>
			<tr>
			
			<tr>
				<td colspan="4" align="right"><a href="kategori.php" class="btn btn-danger btn-lg"> Cancel </a> <input type="submit" value="Simpan" class="btn btn-primary btn-lg"></td>
			</tr>
			
		</table>		
	</form>
</div>

<?php } ?>