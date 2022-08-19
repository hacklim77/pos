<!-- Content Header (Page header) -->
<div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"><?= $subhead ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?= base_url('admin/ekspedisi') ?>">Ekspedisi</a></li>
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
                <button class="btn btn-flat btn-sm btn-success" data-toggle="modal" data-target="#tambahekspedisi" id="tambah" ><i class="fa fa-plus-square"></i> Tambah ekspedisi</button>
              </div>  
              <div class="card-body">
                <table class="table table-bordered table-hover" id="ekspedisi">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nama ekspedisi</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $no = 1; foreach ($ekspedisi as $key):?>
                        <tr>
                          <td><?= $no++ ?></td>
                          <td><?= $key['agen']; ?></td>
                          <td align="center">
                          <button class="btn btn-primary btn-md"  data-toggle="modal" data-target="#editekspedisi<?= $key['id_kurir']; ?>"><i class="fas fa-edit"></i></button>
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

    <div class="modal fade" id="tambahekspedisi">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah ekspedisi</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="<?= base_url('admin/ekspedisi/tambah') ?>" method="post">
                <div class="form-group">
                  <label>Nama ekspedisi</label>
                  <input type="text" class="form-control" name="agen" id="agen">
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
      
      <?php foreach ($ekspedisi as $key) : ?>
      <div class="modal fade" id="editekspedisi<?= $key['id_kurir']?>">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit ekspedisi</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="<?= base_url('admin/ekspedisi/edit/') ?>" method="post">
                <input type="hidden" name="id_kurir" id="id_kurir" value="<?= $key['id_kurir'] ?>">
                <div class="form-group">
                  <label>Nama ekspedisi</label>
                  <input type="text" class="form-control" name="agen" id="agen" value="<?= $key['agen'] ?>">
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