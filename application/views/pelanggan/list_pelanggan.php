<!DOCTYPE html>
<html>
<head>
	<title>list</title>
</head>
<body>
<table class="table">
	<tr>
		<th>No</th>
		<th>Nama Pelanggan</th>
		<th>Email</th>
		<th>Telpon</th>
		<th>Alamat</th>
		<th>Action</th>
	</tr>
	<tr>
	</tr>
		<?php
		$no=1;
		foreach ($pelanggan as $value) {
		?>
	<tr>
		<td><?php echo $no++;?></td>
		<td><?php echo $value->namaPelanggan;?></td>
		<td><?php echo $value->email;?></td>
		<td><?php echo $value->telpon;?></td>
		<td><?php echo $value->alamat;?></td>
		<td>
			<a class="btn btn-warning btn-link" href="<?php echo site_url('pelanggan/hapus_pelanggan/').$value->pelangganId;?>" onclick="return confirm('Are You Sure?')">Hapus</a>
			<a class="btn btn-info btn-link" href="<?php echo site_url('pelanggan/edit_pelanggan/').$value->pelangganId;?>">Edit</a>
		</td>
	</tr>
	<?php } ?>
</table>

</body>
</html>