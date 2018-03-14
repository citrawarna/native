<?php 
	if(isset($_GET['id_barang'])){
		$id_barang = $_GET['id_barang'];
		$query = mysqli_query($connect, "SELECT * from barang WHERE id_barang='$id_barang'");

		$q_kategori = mysqli_query($connect, "SELECT * from kategori");
		$q_supplier = mysqli_query($connect, "SELECT * FROM supplier");

		while($data = mysqli_fetch_array($query)){
			$id_barang = $data['id_barang'];
			$nama_barang = $data['nama_barang'];
			$id_kategori = $data['id_kategori'];
			$id_supplier = $data['id_supplier'];
			$kemasan = $data['kemasan'];
			$harga_beli = $data['harga_beli'];
			$harga_jual = $data['harga_jual'];
			$expired_date = $data['expired_date'];
		}
		
 ?>

<div class="container">
	<br>
	<h2>Edit Data barang : </h2>
	<form action="proses/edit_barang.php" method="post">
		<table class="table">
			<input type="hidden" name="id_barang" value="<?= $id_barang ?>">
			<tr>
				<td>Nama barang</td>
				<td>:</td>
				<td><input type="text" class="form-control" placeholder="Nama barang" name="nama_barang" value="<?= $nama_barang ?>"></td>
			</tr>
			<tr>
				<td>Nama Kategori</td>
				<td>:</td>
				<td>
					<select class="form-control" name="id_kategori">
						<option value=""> - Pilih - </option>
					<?php while($s_kat = mysqli_fetch_array($q_kategori)) { ?>
					  <option value="<?= $s_kat['id_kategori']; ?>" 
					  <?php if($id_kategori == $s_kat['id_kategori']){ echo 'selected'; } ?>>
					  	<?= $s_kat['nama_kategori'] ?>
					  </option>
					<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Nama Supplier</td>
				<td>:</td>
				<td>
					<select class="form-control" name="id_supplier">
						<option value=""> - Pilih - </option>
					<?php while($s_sup = mysqli_fetch_array($q_supplier)) { ?>
					  <option value="<?= $s_sup['id_supplier']; ?>" 
					  <?php if($id_supplier == $s_sup['id_supplier']){ echo 'selected'; } ?>>
					  	<?= $s_sup['nama_supplier'] ?>
					  </option>
					<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Kemasan</td>
				<td>:</td>
				<td><input type="text" class="form-control" placeholder="Kemasan" name="kemasan" value="<?= $kemasan ?>"></td>
			</tr>
			<tr>
				<td>Harga Beli</td>
				<td>:</td>
				<td><input type="text" class="form-control" placeholder="harga_beli" name="harga_beli" value="<?= $harga_beli ?>"></td>
			</tr>
			<tr>
				<td>Harga Jual</td>
				<td>:</td>
				<td><input type="text" class="form-control" placeholder="harga_jual" name="harga_jual" value="<?= $harga_jual ?>"></td>
			</tr>
			<tr>
				<td>Expired Date</td>
				<td>:</td>
				<td><input type="text" class="form-control" placeholder="expired_date" name="expired_date" value="<?= $expired_date ?>"></td>
			</tr>
			<tr>
				<td colspan="4" align="right"><a href="barang.php" class="btn btn-danger btn-lg"> Cancel </a> <input type="submit" value="Simpan" class="btn btn-primary btn-lg"></td>
			</tr>
		</table>		
	</form>
</div>
<?php } else { ?>

<?php 
		//untuk option 
		$q_kategori = mysqli_query($connect, "SELECT * from kategori");
		$q_supplier = mysqli_query($connect, "SELECT * FROM supplier");
 ?>

<div class="container">
	<br>
	<h2>Add Data barang : </h2>
	<form action="proses/tambah_barang.php" method="post">
		<table class="table">
			<tr>
				<td>Nama barang</td>
				<td>:</td>
				<td><input type="text" class="form-control" placeholder="Nama barang" name="nama_barang" ></td>
			</tr>
			<tr>
				<td>Nama Kategori</td>
				<td>:</td>
				<td>
					<select class="form-control" name="id_kategori">
						<option value=""> - Pilih - </option>
					<?php while($s_kat = mysqli_fetch_array($q_kategori)) { ?>
					  <option value="<?= $s_kat['id_kategori']; ?>"><?= $s_kat['nama_kategori'] ?></option>
					<?php } ?>
					</select>
				</td>

			</tr>
			<tr>
				<td>Nama supplier</td>
				<td>:</td>
				<td>
					<select class="form-control" name="id_supplier">
						<option value=""> - Pilih - </option>
					<?php while($s_sup = mysqli_fetch_array($q_supplier)) { ?>
					  	<option value="<?= $s_sup['id_supplier']; ?>"><?= $s_sup['nama_supplier'] ?></option>
					<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Kemasan</td>
				<td>:</td>
				<td><input type="text" class="form-control" placeholder="Kemasan" name="kemasan"></td>
			</tr>
			<tr>
				<td>Harga Beli</td>
				<td>:</td>
				<td><input type="text" class="form-control" placeholder="Harga Beli" name="harga_beli"></td>
			</tr>
			<tr>
				<td>Harga Jual</td>
				<td>:</td>
				<td><input type="text" class="form-control" placeholder="Harga Jual" name="harga_jual"></td>
			</tr>
			<tr>
				<td>Expired Date</td>
				<td>:</td>
				<td><input type="text" class="form-control" placeholder="Expired Date" name="expired_date"></td>
			</tr>
			<tr>
				<td colspan="4" align="right"><a href="barang.php" class="btn btn-danger btn-lg"> Cancel </a> <input type="submit" value="Simpan" class="btn btn-primary btn-lg"></td>
			</tr>
			
		</table>		
	</form>
</div>

<?php } ?>