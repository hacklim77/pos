<!-- Content Header (Page header) -->
<div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"><?= $subhead ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?= base_url('admin/barang') ?>">Barang</a></li>
                <li class="breadcrumb-item active"><?= $subhead ?></li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
          <?= $this->session->flashdata('msg'); ?>
            <div class="card">
              <div class="card-header">
                <button class="btn btn-flat btn-sm btn-success" id="tambahBarang" onclick="location.href='<?= base_url('admin/barang/tambahBarang') ?>'"><i class="fa fa-plus-square"></i> Tambah Barang</button>
              </div>
              <div class="card-body">
                <table id="dataBarang" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Nama Barang</th>
                    <th>Jenis Barang</th>
                    <th>Keterangan</th>
                    <th>Stok</th>
                    <th>Harga jual</th>
                    <th>Harga beli</th>
                    <th>Harga normal</th>
                    <th>Harga reseller</th>
                    <th>Harga grosir</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; foreach ($barang as $key) :?>
                        <tr>
                          <td><?= $no++ ?></td>
                          <td><?= $key->nama_barang ?></td>
                          <td><?= $key->kategori_barang ?></td>
                          <td><?= $key->ket_barang ?></td>
                          <td><?= $key->stok ?></td>
                          <td><?= $key->hrg_jual ?></td>
                          <td><?= $key->hrg_beli ?></td>
                          <td><?= $key->hrg_normal ?></td>
                          <td><?= $key->hrg_reseller ?></td>
                          <td><?= $key->hrg_grosir ?></td>
                          <td><?= $key->tanggal ?></td>
                          <td><?= $key->status ?></td>
                          <td>
                              <a href=""><i class="fas fa-pencil-square-o"></i></a>
                              <a href=""><i class="fas fa-eraser"></i></a>
                          </td>
                        </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>  
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
          
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->