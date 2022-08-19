<!-- Content Header (Page header) -->
<div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"><?= $subhead ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?= base_url('admin/kategori') ?>">Kategori</a></li>
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
                <button class="btn btn-flat btn-sm btn-success" data-toggle="modal" data-target="#tambahktgbrg" id="tambahKatBarang" ><i class="fa fa-plus-square"></i> Tambah Kategori Barang</button>
              </div>  
              <div class="card-body">
                <table class="table table-bordered table-hover" id="kategori-barang">
                  <thead>
                    <tr>
                      <th>Id Kategori</th>
                      <th>Kode Barang</th>
                      <th>Nama Kategori</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($kategori as $key):?>
                        <tr>
                          <td><?= $key['id_kategori']; ?></td>
                          <td><?= $key['kode_barang']; ?></td>
                          <td><?= $key['kategori_barang']; ?></td>
                          <td align="center">
                          <button class="btn btn-primary btn-md"  data-toggle="modal" data-target="#editktgbrg<?= $key['id_kategori']; ?>"><i class="fas fa-edit"></i></button>
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

    <div class="modal fade" id="tambahktgbrg">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Kategori Barang</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="<?= base_url('admin/kategori/tambah') ?>" method="post">
                <div class="form-group">
                  <label>Kode Barang</label>
                  <input type="text" class="form-control" name="kode_barang" id="kode_barang">
                </div>
                <div class="form-group">
                  <label>Kategori Barang</label>
                  <input type="text" class="form-control" name="kategori_barang" id="kategori_barang">
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
      
      <?php foreach ($kategori as $key) : ?>
      <div class="modal fade" id="editktgbrg<?= $key['id_kategori']?>">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Kategori Barang</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="<?= base_url('admin/kategori/edit/') ?>" method="post">
                <input type="hidden" name="id_kategori" id="id_kategori" value="<?= $key['id_kategori'] ?>">
                <div class="form-group">
                  <label>Kode Barang</label>
                  <input type="text" class="form-control" name="kode_barang" id="kode_barang" value="<?= $key['kode_barang'] ?>">
                </div>
                <div class="form-group">
                  <label>Kategori Barang</label>
                  <input type="text" class="form-control" name="kategori_barang" id="kategori_barang" value="<?= $key['kategori_barang'] ?>">
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

      
