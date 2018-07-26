<?php
include 'function/function.php';
include 'layout/header.php';

#membuat object
$db = new Crud;
#memanggil data dari object
$data = $db ->lihatData();

?>
<a href="register.php" class="btn-tambah">Tambah Data</a>
<table class="tampil">
	<thead>
		<tr>
			<th>
				No.
			</th>
			<th>
				Nama
			</th>
			<th>
				Email
			</th>
			<th>
				Alamat
			</th>
			<th>
				Kota
			</th>
			<th>
				Provinsi
			</th>
			<th>
				Zip
			</th>
			<th>
				Kelamin
			</th>
			<th>
				Nomer Hp
			</th>
			<th>
				Aksi
			</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$no=1;
			foreach ($data as $row) {
		 ?>
		<tr>
			<td>
				<?php echo $no; ?>
			</td>
			<td>
				<?php echo $row['nama_depan']; ?>
			</td>
			<td>
				<?php echo $row['email']; ?>
			</td>
			<td>
				<?php echo $row['alamat']; ?>
			</td>
			<td>
				<?php echo $row['kota']; ?>
			</td>
			<td>
				<?php echo $row['provinsi']; ?>
			</td>
			<td>
				<?php echo $row['zip']; ?>
			</td>
			<td>
				<?php echo $row['kelamin']; ?>
			</td>
			<td>
				<?php echo $row['nomerhp']; ?>
			</td>
			<td>
				<a href="" class="edit">EDIT</a>
				<a href="" class="hapus">HAPUS</a>
			</td>
		</tr>
	<?php $no++; } ?>
	</tbody>

</table>