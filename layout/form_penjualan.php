<?php 
	$q_barang = mysqli_query($connect, 'SELECT * FROM barang');
	$q_anggota = mysqli_query($connect, 'SELECT * FROM anggota');
 ?>
<div class="container">
	<br>
	<h2>Add Data penjualan : </h2>
	<form action="proses/tambah_penjualan.php" method="post">
		<table class="table">
			<tr>
				<td>Barang</td>
				<td>:</td>
				<td>
					<select class="form-control" name="id_barang">
						<option value=""> - Pilih - </option>
					<?php while($s_bar = mysqli_fetch_array($q_barang)) { ?>
					  <option value="<?= $s_bar['id_barang']; ?>"><?= $s_bar['nama_barang'] .' - '.$s_bar['harga_jual'] ?></option>
					<?php } ?>
					</select>
				</td>

			</tr>
			<tr>
				<td>Pembeli</td>
				<td>:</td>
				<td>
					<select class="form-control" name="id_anggota">
						<option value=""> - Pilih - </option>
					<?php while($s_ang = mysqli_fetch_array($q_anggota)) { ?>
					  <option value="<?= $s_ang['id_anggota']; ?>"><?= $s_ang['nama'] ?></option>
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
				<td>Keterangan</td>
				<td>:</td>
				<td><input type="text" class="form-control" placeholder="Keterangan" name="keterangan"></td>
			</tr>
			
			<tr>
				<td colspan="4" align="right"><a href="penjualan.php" class="btn btn-danger btn-lg"> Cancel </a> <input type="submit" value="Simpan" class="btn btn-primary btn-lg"></td>
			</tr>
			
		</table>		
	</form>
</div>