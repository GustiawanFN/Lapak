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
            <div><button href='#largeModal' data-toggle="modal" data-target="#largeModal" class='btn btn-primary' >laporan</button></div>
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
                    foreach ($laporan as $laporan) { ?>

                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $laporan['tanggal']; ?></td>
                      <td><?php echo $laporan['kode_lapak']; ?></td>
                      <td><?php echo $laporan['nama_pedagang']; ?></td>
                      <td>
                      <?php echo $laporan['jumlah']; ?>
                      </td>

                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

            <!-- MODAL EDIT DATA -->
          <div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="title" id="largeModalLabel">laporan</h4>
                </div>
                <form id="form" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url(); ?>index.php/page_laporan/laporan_pdf">
                        <table class="table table-striped" >
                           <thead>
                             <tr>
                             </tr>
                              <tr>
                             </tr>
                           </thead>
                           <tbody>
                             <tr>
                               <td><a>PILIH BULAN</a></td>
                               <td>
                               <div class="form-group">
                                 <div class="form-control col-md-6 col-sm-6 col-xs-12">
                                   <select class="form-control" name="bulan" required="required">
                                     <option value="" ></option>
                                     <option value="01"> JANUARI</option>
                                     <option value="02"> FEBRUARI</option>
                                     <option value="03"> MARET</option>
                                     <option value="04"> APRIL</option>
                                     <option value="05"> MEI</option>
                                     <option value="06"> JUNI</option>
                                     <option value="07"> JULI</option>
                                     <option value="08"> AGUSTUS</option>
                                     <option value="09"> SEPTEMBER</option>
                                     <option value="10"> OKTOBER</option>
                                     <option value="11"> NOVEMBER</option>
                                     <option value="12"> DESEMBER</option>
                                   </select>
                                 </div>
                               </div>
                               </td>
                             </tr>
                              <tr>
                               <td ><a>TAHUN</a></td>
                               <td><input  class="form-control col-md-6 col-sm-6 col-xs-12" name="tahun" required="required"/></td>
                             </tr> 
                             <tr>
                               <td><input type="submit" value="Laporan" class="btn btn-dark col-xs-12"/></td>
                             </tr>
                         </form>
                      </div>
                    </div>
                  </div>
                </div>
                
                </div>

      