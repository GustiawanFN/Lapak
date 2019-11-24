<div id="wrapper">
  <div id="main-content">
    <div class="container-fluid">
      <div class="block-header">
        <div class="row">
          <div class="col-lg-5 col-md-8 col-sm-12">
            <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Laporan Iuran</h2>
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
              <li class="breadcrumb-item">Laporan</li>
              <li class="breadcrumb-item active">Iuran Sewa</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="row clearfix">
        <div class="col-lg-12">
          <div class="card">
            <div class="header">
              
            </div>
            <div class="body">
              <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Tanggal</th>
                      <th>Lapak</th>
                      <th>Pedagang</th>
                      <th>Jumlah</th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach ($laporan as $key => $value) { ?>

                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $value->tanggal ?></td>
                      <td><?php echo $value->kode_lapak ?></td>
                      <td></td>
                      <td>
                      <?php echo $value->jumlah ?>
                      </td>

                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <!-- MODAL EDIT DATA -->
         
        </div>
      