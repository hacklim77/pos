<!-- Content Header (Page header) -->
<div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"><?= $subhead ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?= base_url('admin/bank') ?>">Bank</a></li>
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
                <button class="btn btn-flat btn-sm btn-success" data-toggle="modal" data-target="#tambahBank" id="tambah" ><i class="fa fa-plus-square"></i> Tambah Bank</button>
              </div>  
              <div class="card-body">
                <table class="table table-bordered table-hover" id="bank">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nama Bank</th>
                      <th>Nomor Rekening</th>
                      <th>Atas Nama</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $no = 1; foreach ($bank as $key):?>
                        <tr>
                          <td><?= $no++ ?></td>
                          <td><?= $key['nama_bank']; ?></td>
                          <td><?= $key['norek']; ?></td>
                          <td><?= $key['nama']; ?></td>
                          <td align="center">
                          <button class="btn btn-primary btn-md"  data-toggle="modal" data-target="#editbank<?= $key['id_bank']; ?>"><i class="fas fa-edit"></i></button>
                          <button class="btn btn-danger btn-md"  data-toggle="modal" data-target=""><i class="fas fa-trash"></i></button>
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

    <div class="modal fade" id="tambahBank">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Bank</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="<?= base_url('admin/bank/tambah') ?>" method="post">
                <div class="form-group">
                  <label>Nama Bank</label>
                  <input type="text" class="form-control" name="nama_bank" id="nama_bank">
                </div>
                <div class="form-group">
                  <label>Nomor Rekening</label>
                  <input type="text" class="form-control" name="norek" id="norek">
                </div>
                <div class="form-group">
                  <label>Atas Nama</label>
                  <input type="text" class="form-control" name="nama" id="nama">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      
      <?php foreach ($bank as $key) : ?>
      <div class="modal fade" id="editbank<?= $key['id_bank']?>">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Bank</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="<?= base_url('admin/bank/edit/') ?>" method="post">
                <input type="hidden" name="id_bank" id="id_bank" value="<?= $key['id_bank'] ?>">
                <div class="form-group">
                  <label>Nama Bank</label>
                  <input type="text" class="form-control" name="nama_bank" id="nama_bank" value="<?= $key['nama_bank'] ?>">
                </div>
                <div class="form-group">
                  <label>Nomor Rekening</label>
                  <input type="text" class="form-control" name="norek" id="norek" value="<?= $key['norek'] ?>">
                </div>
                <div class="form-group">
                  <label>Atas Nama</label>
                  <input type="text" class="form-control" name="nama" id="nama" value="<?= $key['nama'] ?>">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
              </form>
            </div>
          </div>
         
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->                
      <?php endforeach; ?>