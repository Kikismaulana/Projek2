      <!-- Breadcrumb-->
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('Admin') ?>">Home</a></li>
            <li class="breadcrumb-item active">Data Kelas       </li>
          </ul>
        </div>
      </div>

      <!--Content-->
      <section class="forms" style="padding-top: 50px">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <!-- Conten Header-->
                <div class="card-header d-flex align-items-center">
                  <h4>Data kelas</h4>
                </div>

                <!-- Conten value-->
                <div class="card-body container-fluid">
                  <div class="form-group">

                    <!--Pilih jurusan-->
                    <div class="form-group row">

                      <div class="col-sm-12 form-group container-fluid" style="padding-bottom: 20px">
                        <a class="btn btn-success text-white" data-toggle="modal" data-target="#modal_add_new"> Tambah data</a>
                      </div>

                      <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Kelas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                            $a = 1;
                            foreach ($data as $row) {
                          ?>
                            <tr>
                                <td align="center"><?php echo $a++; ?>.</td>
                                <td><?php echo $row['nama_kelas']; ?></td>
                                <td align="center">
                                  <button class="btn btn-sm btn-success">Update</button>
                                  <button class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                          <?php } ?>
                        </tbody>
                      </table>

                    </div>
                  </div>
                </div>
                <!-- /Conten Header-->

              </div>
            </div>
          </div>
        </div>
      </section>
      
    <!-- ============ MODAL ADD KELAS =============== -->
        <div class="modal fade" id="modal_add_new" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel">Tambah kelas</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'Datakelas/create'?>">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Tingkat</label>
                        <div class="col-xs-8">
                             <select name="tingkat" class="form-control" required>
                                <option class="active">-PILIH-</option>
                                <option>X</option>
                                <option>XI</option>
                                <option>XII</option>
                             </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jurusan</label>
                        <div class="col-xs-8">
                             <select name="jurusan" class="form-control" required>
                                <option class="active">-PILIH-</option>
                                <?php foreach ($datajurusan as $row) { ?>
                                <option> <?php echo $row['nama_jurusan']; ?></option>
                                <?php } ?>
                             </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Kategori</label>
                        <div class="col-xs-8">
                             <select name="kategori" class="form-control" required>
                                <option class="active">-PILIH-</option>
                                <option>I</option>
                                <option>II</option>
                                <option>III</option>
                                <option>VI</option>
                             </select>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info">Simpan</button>
                </div>
            </form>
            </div>
            </div>
        </div>
    <!--END MODAL ADD BARANG-->