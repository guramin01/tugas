                     <div id="content-wrapper">

      <div class="container-fluid">
        <ol class="breadcrumb">
        
          <li class="breadcrumb-item">
            <a href="<?= base_url('index.php/admin/Overviews/index') ?>">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Edit Barang</li>
      </ol>
                  <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php endif ?>
            <form action="<?php echo base_url(). 'index.php/admin/barang/edit/'.$barang->kode_barang; ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="kode_barang" class="form-control" value="<?= $barang->kode_barang?>" required>
              <div class="modal-body">
                <div class="form-group">
                  <label class="control-label " for="nama_barang">Nama Barang</label>
                  <input type="text" name="nama_barang" class="form-control <?= form_error('nama_barang') ? 'is-invalid':'' ?>" value="<?= $barang->nama_barang ?>" id="nama_barang" required>
                </div>
                <div class="form-group">
                  <label class="control-label" for="harga">Harga Barang</label>
                  <input type="number" onkeydown="return event.keyCode !== 69"  name="harga_barang" class="form-control <?= form_error('harga_barang') ? 'is-invalid':'' ?>" id="harga" value="<?= $barang->harga_barang ?>" required>
                </div>
                <div class="form-group">
                  <label class="control-label" for="deskripsi_barang">Deskripsi Barang</label>
                  <input type="text" name="deskripsi_barang" class="form-control" id="deskripsi_barang" value="<?= $barang->deskripsi_barang ?>" required>
                </div>

                <div class="form-group">
                  <label class="control-label" for="stok">Stok Barang</label>
                  <input type="number" onkeydown="return event.keyCode !== 69" name="stok_barang" class="form-control" id="quantity" value="<?= $barang->stok_barang ?>" required>
                </div>

                  </select>
                </div>
<!--                 <div class="form-group">
                  <label class="control-label" for="gambar">Gambar Barang</label>
                  <input type="file" name="gambar" class="form-control" id="gambar" required>
                </div> -->
              </div>
              <div class="modal-footer">
              	<a href="<?= base_url('index.php/admin/barang') ?>" class="btn btn-danger">Back</a></a> 

                <input type="submit" class="btn btn-success" name="tambah" value="Simpan">
              </div>
            </form>