<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Mahasiswa</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Modules</a></div>
              <div class="breadcrumb-item">DataTables</div>
            </div>
          </div>

          <div class="section-body">
            

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Edit Data Mahasiswa</h4>
                    </div>
                    <?php echo(form_open('mahasiswa/edit_save')); ?>
                    <input type="hidden" id="id" name="id" value="<?= $mahasiswa->id ?>">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama Mahasiswa</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $mahasiswa->nama ?>">
                        </div>
                        <div class="form-group">
                            <label>NIM</label>
                            <input type="text" class="form-control" id="nim" name="nim" value="<?= $mahasiswa->nim ?>">
                        </div>
                        <div class="form-group">
                            <label>No HP</label>
                            <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= $mahasiswa->no_hp ?>">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="<?= $mahasiswa->email ?>">
                        </div>
                        <div class="form-group">
                            <label>Jurusan</label>
                            <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?= $mahasiswa->jurusan ?>">
                        </div>

                        <div class="form-group">
                            <label>Foto Profil</label>
                            <tr><td><input type="file" value="upload gambar"/></tr></td>
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $mahasiswa->alamat ?>">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                    <?php echo(form_close()); ?>
                </div>
              </div>
            </div>
            
          </div>
        </section>
      </div>
<?php $this->load->view('dist/_partials/footer'); ?>