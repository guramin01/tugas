          <div id="content-wrapper">

      <div class="container-fluid">
        <ol class="breadcrumb">
        
          <li class="breadcrumb-item">
            <a href="<?= base_url('index.php/admin/Overviews/index') ?>">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Tambah Barang</li>
      </ol>

            <form action="<?php echo base_url(). 'index.php/admin/barang/tambah_aksi'; ?>" method="post" >
              <div class="modal-body">
                <div class="form-group">
                  <label class="control-label" for="nama_barang">Nama Barang</label>
                  <input type="text" name="nama_barang" class="form-control" id="nama_barang" required>
                </div>
                <div class="form-group">
                  <label class="control-label" for="harga">Harga Barang</label>
                  <input type="number"  onkeydown="return event.keyCode !== 69" name="harga_barang" class="form-control" id="harga" required>
                </div>
                <div class="form-group">
                  <label class="control-label" for="deskripsi_barang">Deskripsi Barang</label>
                  <input type="text" name="deskripsi_barang" class="form-control" id="deskripsi_barang" required>
                </div>
<!--                 <div class="form-group">
                  <label class="control-label" for="kategori">Kategori Barang</label>
                  <select name="kategori_barang" id="kategori_barang" class="form-control " required="required" >
                    <option value="1">- Anjing (1) -</option>
                    <option value="2">- Kucing (2) -</option>
                    <option value="3">- Accessories dan Kandang (3) -</option>
                </div> -->
                <div class="form-group">
                  <label class="control-label"  for="stok">Stok Barang</label>
                  <input type="number" onkeydown="return event.keyCode !== 69" name="stok_barang" class="form-control" id="quantity" required>
                </div>

                  </select>
                </div>
<!--                 <div class="form-group">
                  <label class="control-label" for="gambar">Gambar Barang</label>
                  <input type="file" name="gambar" class="form-control" id="gambar" required>
                </div> -->
              </div>

              <div class="modal-footer">

              	<a href="<?= base_url('index.php/admin/barang') ?>" class="btn btn-danger">Kembali</a></a> 
                <button type="reset" class="btn btn-danger">Reset</button>
                <input type="submit" class="btn btn-success" name="tambah" value="Simpan">
              </div>
            </form>