
          <div id="content-wrapper">

           <div id="content-wrapper">

      <div class="container-fluid">
        <ol class="breadcrumb">
        
          <li class="breadcrumb-item">
            <a href="<?= base_url('index.php/admin/Overviews/index') ?>">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">daftar_barang</li>
      </ol>

 <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Daftar Barang</div>
          <div class="card-body">
     <div class="col-md-12 ">
          <a class="btn btn-primary btn-block" href="<?= base_url('index.php/admin/barang/form_tambah')  ?>"><i class="fa fa-plus"></i>Tambah Barang</a>

     </div>
     <br>
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Deskripsi Barang</th>
                    <th>Stok Barang</th>
                    <th>Harga</th>
                    <th>Setting</th>
                  </tr>
                </thead>
                <tbody>
                    <?php foreach ($barang as $ambildata) : ?>
                  <tr>
                    <td><?= $ambildata->kode_barang; ?></td>
                    <td><?= $ambildata->nama_barang; ?></td>
                    <td><?= $ambildata->deskripsi_barang; ?>  </td>
                    <td><?= $ambildata->stok_barang;  ?> </td>
                    <td><?= $ambildata->harga_barang;  ?></td>
                      <td> 
                     <?php echo anchor('admin/barang/edit/'.$ambildata->kode_barang,'Edit'); ?> |

                      <a href="<?= site_url('admin/barang/hapus/'.$ambildata->kode_barang) ?>" onclick="return confirm('yakin akan menghapus data ini?')" title="Hapus">Hapus</a>
                      </td>

                  </tr>
                      <?php endforeach; ?>

                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>


        </p>

      </div>
      <!-- /.container-fluid -->
