<!-- Content Header (Page header) -->
<div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"><?= $subhead ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?= base_url('admin/customer') ?>">Customer</a></li>
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
                    <th>Level Customer</th>
                    <th>Nama Customer</th>
                    <th>Email</th>
                    <th>Kota</th>
                    <th>Kode Pos</th>
                    <th>Telepon</th>
                    <th>Alamat</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; foreach ($customer as $key) :?>
                        <tr>
                          <td><?= $no++ ?></td>
                          <td><?= $key->level_cust ?></td>
                          <td><?= $key->nama_customer ?></td>
                          <td><?= $key->email ?></td>
                          <td><?= $key->kota ?></td>
                          <td><?= $key->kode_pos ?></td>
                          <td><?= $key->telp ?></td>
                          <td><?= nl2br($key->alamat)?></td>
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