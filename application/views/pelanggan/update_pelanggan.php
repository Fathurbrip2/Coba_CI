<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
</head>
<body>
	<center>Edit Data Pelanggan</center>

	<?php foreach ($pelanggan as $value) { ?>
	<form action="<?php echo site_url("pelanggan/update"); ?>" method="POST">
    <div class="form-group">
      <label >Nama Pelanggan</label>
      <input type="hidden" name="pelangganId"  value="<?php echo $value->pelangganId ?>">
      <input type="text" name="namaPelanggan" class="form-control"  value="<?php echo $value->namaPelanggan ?>">
    </div>

    <div class="form-group">
      <label >Email address</label>
      <input type="text" name="email" class="form-control"  value="<?php echo $value->email ?>">
    </div>

    <div class="form-group">
      <label >Telpon</label>
      <input type="number" name="telpon" class="form-control"  value="<?php echo $value->telpon ?>">
    </div>

    <div class="form-group">
      <label >Alamat</label>
      <textarea name="alamat" class="form-control" value="<?php echo $value->alamat ?>"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Proses data</button>
</form>
<?php } ?>
</body>
</html>