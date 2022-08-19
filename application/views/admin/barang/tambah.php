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
<!-- general form elements disabled -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col d-flex justify-content-center">
          <div class="col-md-8">
            <div class="card mx-auto card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Tambah Data Barang</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="<?= base_url('admin/barang/tambahBarang')?>" method="post">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" name="nama_barang" id="nama_barang" class="form-control" placeholder="Masukkan Nama Barang ..." required>
                        <small class="form-text text-danger"><?= form_error('nama_barang'); ?></small>
                      </div>
                      <div class="form-group">
                        <label>Kategori Barang</label>
                        <select class="form-control" name="kategori_barang" id="kategori_barang">
                            <option>--Pilih Kategori Barang--</option>
                            <?php foreach ($kategori as $key) :?>
                            <option value="<?= $key['id_kategori'] ?>"><?= $key['kategori_barang']; ?></option>  
                            <?php endforeach?>
                        </select>
                        <small class="form-text text-danger"><?= form_error('kategori_barang'); ?></small>
                      </div>
                      <div class="form-group">
                        <label>Keterangan Barang</label><br>
                        <textarea name="ket_barang" id="ket_barang" cols="60" rows="10"></textarea>
                        <small class="form-text text-danger"><?= form_error('ket_barang'); ?></small>        
                      </div> 
                      <div class="form-group">
                        <label>Stok</label>
                        <input type="number" name="stok" id="stok" class="form-control" placeholder="Masukkan Jumlah stok ...">
                        <small class="form-text text-danger"><?= form_error('stok'); ?></small>        
                      </div>
                    </div>
                    <div class="col-sm-6">
                      
                      <div class="form-group">
                        <label>Harga Jual</label>
                        <input type="number" name="hrg_jual" id="hrg_jual" class="form-control" placeholder="Masukkan Harga Jual ...">
                        <small class="form-text text-danger"><?= form_error('hrg_jual'); ?></small>        
                      </div>
                      <div class="form-group">
                        <label>Harga Beli</label>
                        <input type="number" name="hrg_beli" id="hrg_beli" class="form-control" placeholder="Masukkan Harga beli ...">
                        <small class="form-text text-danger"><?= form_error('hrg_beli'); ?></small>        
                      </div>
                      <div class="form-group">
                        <label>Harga Normal</label>
                        <input type="number" name="hrg_normal" id="hrg_normal" class="form-control" placeholder="Masukkan Harga normal ...">
                        <small class="form-text text-danger"><?= form_error('hrg_normal'); ?></small>        
                      </div>
                      <div class="form-group">
                        <label>Harga Reseller</label>
                        <input type="number" name="hrg_reseller" id="hrg_reseller" class="form-control" placeholder="Masukkan Harga reseller ...">
                        <small class="form-text text-danger"><?= form_error('hrg_reseller'); ?></small>        
                      </div>
                      <div class="form-group">
                        <label>Harga Grosir</label>
                        <input type="number" name="hrg_grosir" id="hrg_grosir" class="form-control" placeholder="Masukkan Harga grosir ...">
                        <small class="form-text text-danger"><?= form_error('hrg_grosir'); ?></small>        
                      </div>
                      <div class="form-group">
                        <label>Status Barang</label>
                        <select class="form-control" id="status" name="status">
                          <option>--Pilih Status Barang--</option>
                          <?php foreach ($status as $j): ?>	
                            <?php if($j == $barang['status']): ?>
                            <option value="<?= $j; ?>" selected><?= $j ?></option>
                            <?php else: ?>	
                            <option value="<?= $j; ?>"><?= $j ?></option>
                            <?php endif; ?>	
                          <?php endforeach;?>
                        </select>    
                      </div>
                    </div>
                    <div class="col-sm-6">
                      
                    </div>
                  </div>
                  <div>
                    <center>
                    <button type="submit" class="btn btn-success">Simpan Data Customer</button>
                    <a class="btn btn-danger" href="<?= base_url('admin/barang') ?>"><i class="fa fa-undo"></i> Kembali </a>
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