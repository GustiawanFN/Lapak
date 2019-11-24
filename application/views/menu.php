<!doctype html>
<html lang="en">

<head>
    <title>Lapak</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Lucid Bootstrap 4.1.1 Admin Template">
    <meta name="author" content="WrapTheme, design by: ThemeMakker.com">

    <!-- <link rel="icon" href="favicon.ico" type="image/x-icon"> -->

    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css">

    <!-- DATE PICKER -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css" />

    <!-- DATA TABLES -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/main.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/color_skins.css">
</head>

<body class="theme-cyan">
    <div id="wrapper">
        <nav class="navbar navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-btn">
                    <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
                </div>

                <div class="navbar-brand">
                    <a href="#"><img src="<?php echo base_url(); ?>assets/images/lumer.png" alt="Lapak-Ku" class="img-responsive logo"></a>
                </div>

                <div class="navbar-right">
                  
                    <div id="navbar-menu">
                        <ul class="nav navbar-nav">

                            <li>
                                <a href="<?php echo base_url(); ?>index.php/page/logout" class="icon-menu"><i class="icon-login"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <div id="left-sidebar" class="sidebar">
            <div class="sidebar-scroll">
                <div class="user-account">
                    <img src="<?php echo base_url(); ?>assets/images/users.png" class="rounded-circle user-photo" alt="User Profile Picture">
                    <div class="dropdown">
                        <span>Hallo,</span>
                        <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong> <?php echo $this->session->userdata("nama"); ?></strong></a>
                        <ul class="dropdown-menu dropdown-menu-right account">
                           
                            <li><a href="<?php echo base_url(); ?>index.php/page/logout"><i class="icon-power"></i>Logout</a></li>
                        </ul>
                    </div>
                    <hr>

                </div>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu">Menu</a></li>

                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-l-0 p-r-0">
                    <div class="tab-pane active" id="menu">
                        <nav id="left-sidebar-nav" class="sidebar-nav">
                            <ul id="main-menu" class="metismenu">
                                <li <?php
                                    if ($this->uri->segment(2) == 'index') {
                                        echo 'class="active"';
                                    }
                                    ?>>
                                    <a href="#Dashboard" class="has-arrow"><i class="icon-home"></i> <span>Dashboard</span></a>
                                    <ul>
                                        <li <?php
                                            if ($this->uri->segment(2) == 'index') {
                                                echo 'class="active"';
                                            }
                                            ?>><a href="<?php echo base_url(); ?>index.php/page/index">Home</a></li>

                                    </ul>
                                </li>


                                <li <?php
                                    if (($this->uri->segment(2) == 'kelola_data_pedagang') or ($this->uri->segment(2) == 'input_data_pedagang')) {
                                        echo 'class="active"';
                                    }
                                    ?>>
                                    <a href="#forms" class="has-arrow"><i class="icon-pencil"></i> <span>Data Pedagang</span></a>
                                    <ul>

                                    <li <?php
                                            if ($this->uri->segment(2) == 'input_data_pedagang')  {
                                                echo 'class="active"';
                                            }
                                            ?>><a href="<?php echo base_url(); ?>index.php/page_pedagang/input_data_pedagang">Input Data Pedagang</a>
                                        </li>
                                                
                                        <li <?php
                                            if ($this->uri->segment(2) == 'kelola_data_pedagang') {
                                                echo 'class="active"';
                                            }
                                            ?>><a href="<?php echo base_url(); ?>index.php/page_pedagang/kelola_data_pedagang">Kelola Data Pedagang</a>
                                        </li>
                                     

                                       

                                    </ul>
                                </li>

                                <li <?php
                                    if (($this->uri->segment(2) == 'kelola_data_lapak') or ($this->uri->segment(2) == 'inputdatalapak')or ($this->uri->segment(2) == 'transaksi_data_lapak')) {
                                        echo 'class="active"';
                                    }
                                    ?>>
                                    <a href="#forms" class="has-arrow"><i class="icon-pencil"></i> <span>Data Lapak</span></a>
                                    <ul>

                                    
                                    <li <?php
                                                if ($this->uri->segment(2) == 'inputdatalapak') {
                                                    echo 'class="active"';
                                                }
                                                ?>><a href="<?php echo base_url(); ?>index.php/page/inputdatalapak">Input Data Lapak</a>
                                        </li>
                                        <li <?php
                                                if ($this->uri->segment(2) == 'kelola_data_lapak') {
                                                    echo 'class="active"';
                                                }
                                                ?>><a href="<?php echo base_url(); ?>index.php/page/kelola_data_lapak">Edit Data Lapak</a>
                                        </li>

                                        <!-- <li <?php
                                                if ($this->uri->segment(2) == 'transaksi_data_lapak') {
                                                    echo 'class="active"';
                                                }
                                                ?>><a href="<?php echo base_url(); ?>index.php/page_transaksi/transaksi_data_lapak">Sewa Lapak</a>
                                        </li> -->

                                    </ul>
                                </li>

                                <li <?php
                                    if (($this->uri->segment(2) == 'data_laporan')) {
                                        echo 'class="active"';
                                    }
                                    ?>>
                                    <a href="#forms" class="has-arrow"><i class="icon-pencil"></i> <span>Laporan </span></a>
                                    <ul>

                                    
                                    <li <?php
                                                if ($this->uri->segment(2) == 'data_laporan') {
                                                    echo 'class="active"';
                                                }
                                                ?>><a href="<?php echo base_url(); ?>index.php/page_laporan/data_laporan">Iuran Sewa</a>
                                        </li>
                                        


                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <?php
    $page_name .= "";
    include $page_name;
    ?>
    </div>
    <!-- Javascript -->
    <script type="text/javascript" src="<?php echo base_url(); ?>asset/bundles/libscripts.bundle.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>asset/bundles/vendorscripts.bundle.js"></script>


    <script type="text/javascript" src="<?php echo base_url(); ?>asset/bundles/mainscripts.bundle.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>asset/js/pages/forms/advanced-form-elements.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery.dataTables.js' ?>"></script>

    <script type="text/javascript">
       
        <?php if ($this->session->flashdata('a')) {
            ?>
        toastr.success("<?php echo $this->session->flashdata('a'); ?>");

        <?php } else if ($this->session->flashdata('s')) {
            ?>
        toastr.error("<?php echo $this->session->flashdata('s'); ?>");
        <?php } ?>
    </script>


</body>

</html>