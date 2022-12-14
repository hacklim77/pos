<!-- Content Header (Page header) -->
<div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"><?= $subhead ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?= base_url('admin/transaksi') ?>">Transaksi</a></li>
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
                <button class="btn btn-flat btn-sm btn-success" id="tambahBarang" onclick="location.href='<?= base_url('admin/customer/tambah')?>'"><i class="fa fa-plus-square"></i> Tambah Customer</button>
              </div>
              <div class="card-body">
                <table id="d-customer" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Nama Toko</th>
                    <th>Nama Customer</th>
                    <th>Status Customer</th>
                    <th>Barang</th>
                    <th>Jumlah</th>
                    <th>Harga Satuan</th>
                    <th>Harga Total</th>
                    <th>Biaya Ongkir</th>
                    <th>Tanggal Order</th>
                    <th>Pembayaran</th>
                    <th>Ekspedisi</th>
                    <th>Status</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; foreach ($transaksi as $key) :?>
                        <tr>
                          <td><?= $no++ ?></td>
                          <td><?= $key->nama_toko ?></td>
                          <td><?= $key->nama_customer ?></td>
                          <td><?= $key->level_cust ?></td>
                          <td><?= $key->nama_barang ?></td>
                          <td><?= $key->qty ?></td>
                          <td><?= $key->hrg_jual ?></td>
                          <td><?= $key->subtotal ?></td>
                          <td><?= $key->ongkir ?></td>
                          <td><?= $key->tanggal ?></td>
                          <td><?= $key->nama_bank ?></td>
                          <td><?= $key->agen ?></td>
                          <td><?= $key->status ?></td>
                          <td align="center">
                              <a class="btn btn-primary btn-md" href="<?= base_url('admin/customer/edit/'.encrypt_url($key->id_customer) ) ?>"><i class="fas fa-edit"></i></a>
                              <a class="btn btn-danger btn-md" href=""><i class="fas fa-trash"></i></a>
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

    