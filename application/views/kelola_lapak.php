<div id="wrapper">
  <div id="main-content">
    <div class="container-fluid">
      <div class="block-header">
        <div class="row">
          <div class="col-lg-5 col-md-8 col-sm-12">
            <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Kelola Data Lapak</h2>
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
              <li class="breadcrumb-item">Manage</li>
              <li class="breadcrumb-item active">Kelola Data Lapak</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="row clearfix">
        <div class="col-lg-12">
          <div class="card">
            <div class="header">
              <h2>Data Lapak</h2>
            </div>
            <div class="body">
              <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Kode Lapak</th>
                      <th>Lokasi Lapak</th>
                      <th>Harga Lapak</th>
                      <th>Status</th>
                      <th>Pedagang</th>
                      <th>QR Code</th>
                      <th>Aksi</th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach ($lapak as $key => $value) { ?>

                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $value->kode_lapak ?></td>
                      <td><?php echo $value->lokasi_lapak ?></td>
                      <td><?php echo $value->harga_lapak ?></td>
                      <td>
                          <?php 
                          $status = $value->tersedia;

                          if ($status == 0){
                            echo "<button class='btn btn-success'>TERSEDIA</button>";
                          } else if ($status == 1) {
                            echo "<button class='btn btn-warning'><i class='fa fa-warning'></i><span> Ditempati </span></button>";
                          }?>
                      </td>
                      <td>
                          <?php
                          $pedagang = $value->kode_pedagang;

                          if($pedagang == 0 ){
                              echo "-";
                          }else{
                              echo $pedagang;
                          }
                          ?>
                      </td>
                      <td><img style="width: 100px;" src="<?php echo base_url().'assets/images/'.$value->kode_lapak.'.png' ?>"></td>
                      <td>
                        <a href='#largeModal' data-toggle="modal" data-target="#largeModal<?php echo $value->kode_lapak ?>" class='btn btn-primary'>EDIT</a>
                        <a href='<?php echo base_url(); ?>index.php/page/hapus/<?php echo $value->kode_lapak ?>' class='btn btn-danger'>Hapus</a>
                        <a href='<?php echo base_url(); ?>index.php/page_transaksi/sewa_lapak/<?php echo $value->kode_lapak ?>' class='btn btn-primary'>Sewa</a>
                        
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
          foreach ($lapak as $key => $value) {
            $kode_lapak = $value->kode_lapak;
            $lokasi_lapak = $value->lokasi_lapak;
            $harga_lapak = $value->harga_lapak;
            $kode_pedagang = $value->kode_pedagang;

         
            ?>
           
          <div class="modal fade" id="largeModal<?php echo $value->kode_lapak ?>" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="title" id="largeModalLabel">Edit Data</h4>
                </div>
                <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/page/edit/<?php echo $value->kode_lapak ?>" method="post">
                  <div class="modal-body">
                    <div class="col-md-12">

                      <div class="form-group">
                        <label>Lokasi Lapak</label>
                        <input class="form-control" value="<?php echo $lokasi_lapak; ?>" required name="lokasi_lapak">
                      </div>

                      <div class="form-group">
                        <label>Harga Lapak</label>
                        <input class="form-control" value="<?php echo $harga_lapak; ?>" required name="harga_lapak">
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
        