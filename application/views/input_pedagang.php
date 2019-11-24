<div id="wrapper">
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Input Data Pedagang</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item">Data Pedagang</li>
                            <li class="breadcrumb-item active">Input Data Pedagang</li>
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
                            <form id="basic-form" action="<?php echo base_url(); ?>index.php/page_pedagang/tambah_aksi" method="post">
                                <div class="col-md-18">
                                    <!-- <div class="form-group" >
                                        <label>Kode Pedagang</label>
                                        <input class="form-control" required id="kode_pedagang" name="kode_pedagang">
                                    </div> -->
                            
                                    <div class="form-group">
                                        <label>Nama Pedagang</label>
                                        <input class="form-control" required name="nama_pedagang">
                                    </div>

                                    <div class="form-group">
                                        <label>Alamat </label>
                                        <input class="form-control" required name="alamat_pedagang">
                                    </div>

                                    

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