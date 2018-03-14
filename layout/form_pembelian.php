<?php 
	$q_barang = mysqli_query($connect, 'SELECT * FROM barang');
	$q_anggota = mysqli_query($connect, 'SELECT * FROM supplier');
 ?>
<div class="container">
	<br>
	<h2>Add Data pembelian : </h2>
	<form action="proses/tambah_pembelian.php" method="post">
		<table class="table">
			<tr>
				<td>Barang</td>
				<td>:</td>
				<td>
					<select class="form-control" name="id_barang">
						<option value=""> - Pilih - </option>
					<?php while($s_bar = mysqli_fetch_array($q_barang)) { ?>
					  <option value="<?= $s_bar['id_barang']; ?>"><?= $s_bar['nama_barang'] .' - '.$s_bar['harga_beli'] ?></option>
					<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Supplier</td>
				<td>:</td>
				<td>
					<select class="form-control" name="id_supplier">
						<option value=""> - Pilih - </option>
					<?php while($s_ang = mysqli_fetch_array($q_anggota)) { ?>
					  <option value="<?= $s_ang['id_supplier']; ?>"><?= $s_ang['nama_supplier'] ?></option>
					<?php } ?>
					</select>
				</td>

			</tr>
			<tr>
				<td>Jumlah</td>
				<td>:</td>
				<td><input type="text" class="form-control" placeholder="Jumlah" name="jumlah">
				</td>
			</tr>
			<tr>
				<td>Jatuh Tempo</td>
				<td>:</td>
				<td><input type="text" class="form-control" placeholder="Jatuh tempo" name="jatuh_tempo"></td>
			</tr>
			
			<tr>
				<td colspan="4" align="right"><a href="pembelian.php" class="btn btn-danger btn-lg"> Cancel </a> <input type="submit" value="Simpan" class="btn btn-primary btn-lg"></td>
			</tr>
			
		</table>		
	</form>
</div>