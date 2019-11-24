<div id="wrapper">
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Input Data Lapak</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item">Manage</li>
                            <li class="breadcrumb-item active">Input Data Lapak</li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">

                        </div>

                        <div class="body">
                            <form id="basic-form" action="<?php echo base_url(); ?>index.php/page/tambah_aksi" method="post">
                                <div class="col-md-18">
                                    <div class="form-group" >
                                        <label>Kode Lapak</label>
                                        <input class="form-control" required id="kode_lapak" name="kode_lapak">
                                    </div>
                            
                                    <div class="form-group">
                                        <label>Lokasi Lapak</label>
                                        <input class="form-control" required name="lokasi_lapak">
                                    </div>

                                    <div class="form-group">
                                        <label>Harga</label>
                                        <input class="form-control" required name="harga_lapak">
                                    </div>

                                    <!-- <div class="form-group" >

                                <label>Pedagang</label>
                                <select class="form-control" id="nama_pedagang" name="nama_pedagang" required>

                                    <?php 
                                     foreach ($pedagang as $key => $value) {
                                    $nama_pedagang = $value->nama_pedagang;
                                    $alamat_pedagang = $value->alamat_pedagang;?>
                                    
                                    <option value="<?=$nama_pedagang?>" > <?=$nama_pedagang?> </option>                                    <?php } ?> 

                                </select>
                                </div> -->
                                    <br>
                                    <button type="submit" class="btn btn-primary">Simpan</button>

                                   
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>