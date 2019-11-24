<div id="wrapper">
  <div id="main-content">
    <div class="container-fluid">
      <div class="block-header">
        <div class="row">
          <div class="col-lg-5 col-md-8 col-sm-12">
            <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Kelola Data Pedagang</h2>
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
              <li class="breadcrumb-item">Data Pedagang</li>
              <li class="breadcrumb-item active">Kelola Data Pedagang</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="row clearfix">
        <div class="col-lg-12">
          <div class="card">
            <div class="header">
              <h2>Data Pedagang</h2>
            </div>
            <div class="body">
              <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Kode Pedagang</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Aksi</th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach ($pedagang as $key => $value) { ?>

                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $value->kode_pedagang ?></td>
                      <td><?php echo $value->nama_pedagang ?></td>
                      <td><?php echo $value->alamat_pedagang ?></td>
                      <td>
                        <a href='#largeModal' data-toggle="modal" data-target="#largeModal<?php echo $value->kode_pedagang ?>" class='btn btn-primary'>EDIT</a>
                        <a href='<?php echo base_url(); ?>index.php/page_pedagang/hapus/<?php echo $value->kode_pedagang ?>' class='btn btn-danger'>Hapus</a>
                        
                      </td>

                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <!-- MODAL EDIT DATA -->
          <?php
          foreach ($pedagang as $key => $value) {
            $nama_pedagang = $value->nama_pedagang;
            $alamat_pedagang = $value->alamat_pedagang;?>

          <div class="modal fade" id="largeModal<?php echo $value->kode_pedagang ?>" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="title" id="largeModalLabel">Edit Data</h4>
                </div>
                <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/page_pedagang/edit/<?php echo $value->kode_pedagang ?>" method="post">
                  <div class="modal-body">
                    <div class="col-md-12">

                      <div class="form-group">
                        <label>Nama Pedagang</label>
                        <input class="form-control" value="<?php echo $nama_pedagang; ?>" required name="nama_pedagang">
                      </div>

                      <div class="form-group" >
                            <label>Alamat Pedagang</label>
                            <textarea  class="form-control" rows="5" cols="30" id="alamat_pedagang" name="alamat_pedagang" require><?php echo $alamat_pedagang; ?></textarea>
                      </div>

                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
                <button type="button" class="btn btn-danger" data-dismiss="modal">CLOSE</button>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>