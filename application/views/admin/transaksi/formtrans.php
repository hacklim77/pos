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

    <!-- general form elements disabled -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col d-flex justify-content-center">
          <div class="col-md-8">
            <div class="card mx-auto card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Transaksi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="<?= base_url('admin/transaksi/tambah')?>" method="post">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama Toko</label>
                        <select name="nama_toko" id="nama_toko">
                            <option value="">Pilih Toko</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Level Customer</label>
                        <select class="form-control" name="level_cust" id="level_cust">
                            <option>--Pilih Level--</option>
                              <?php foreach ($level as $j): ?>	
                              <?php if($j == $customer['level_cust']): ?>
                              <option value="<?= $j; ?>" selected><?= $j ?></option>
                              <?php else: ?>	
                              <option value="<?= $j; ?>"><?= $j ?></option>
                              <?php endif; ?>	
                            <?php endforeach;?>
                        </select>
                        <small class="form-text text-danger"><?= form_error('level_cust'); ?></small>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Email Customer</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan Email Customer ...">
                        <small class="form-text text-danger"><?= form_error('email'); ?></small>        
                    </div> 
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Telephone <small class="text-danger">(Whatsapp)</small></label>
                        <input type="telepon" name="telp" id="telp" class="form-control" placeholder="Masukkan Nomor Telepon ...">
                        <small class="form-text text-danger"><?= form_error('telp'); ?></small>        
                    </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Kota</label>
                        <input type="text" name="kota" id="kota" class="form-control" placeholder="Masukkan Kota Customer ...">
                        <small class="form-text text-danger"><?= form_error('kota'); ?></small>        
                    </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Kode Pos</label>
                        <input type="text" name="kode_pos" id="kode_pos" class="form-control" placeholder="Masukkan Kode Pos ...">
                        <small class="form-text text-danger"><?= form_error('kode_pos'); ?></small>         
                    </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Alamat</label>
                        <textarea class="form-control" name="alamat" id="alamat" rows="3" placeholder="Masukkan Alamat Lengkap"></textarea>
                        <small class="form-text text-danger"><?= form_error('alamat'); ?></small>         
                    </div>
                    </div>
                  </div>
                  <div>
                    <center>
                    <button type="submit" class="btn btn-success">Simpan Data Customer</button>
                    <a class="btn btn-danger" href="<?= base_url('admin/customer') ?>"><i class="fa fa-undo"></i> Kembali </a>
                    </center>
                  </div>  
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
    </div>
      </div>
    </section>      