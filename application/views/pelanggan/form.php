<form action="<?php echo site_url("pelanggan/submit"); ?>" method="POST">
    <div class="form-group">
      <label >Nama Pelanggan</label>
      <input type="text" name="namaPelanggan" class="form-control"  placeholder="Nama Pelanggan">
    </div>

    <div class="form-group">
      <label >Email address</label>
      <input type="text" name="email" class="form-control"  placeholder="Email">
    </div>

    <div class="form-group">
      <label >Telpon</label>
      <input type="number" name="telpon" class="form-control"  placeholder="telpon">
    </div>

    <div class="form-group">
      <label >Alamat</label>
      <textarea name="alamat" class="form-control" ></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Proses data</button>
</form>