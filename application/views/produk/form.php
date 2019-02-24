<form action="<?php echo site_url("produk/submit"); ?>" method="POST">
    <div class="form-group">
      <label >Nama Produk</label>
      <input type="text" name="namaproduk" class="form-control"  placeholder="Nama Produk">
    </div>

    <div class="form-group">
      <label >Harga</label>
      <input type="text" name="harga" class="form-control"  placeholder="harga">
    </div>

    <div class="form-group">
      <label >Satuan</label>
      <input type="text" name="satuan" class="form-control"  placeholder="satuan">
    </div>

    <div class="form-group">
      <label >Qty</label>
      <input type="number" name="qty" class="form-control"  placeholder="Qty">
    </div>

    <div class="form-group">
      <label >IMG</label>
      <input type="text" name="img" class="form-control"  placeholder="IMG">
    </div>

    <div class="form-group">
      <label>DISKRIPSI</label>
      <input type="text" name="diskipsi" class="form-control"  placeholder="diskipsi">
    </div>
    

    <button type="submit" class="btn btn-primary">Proses data</button>
</form>