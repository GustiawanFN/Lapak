<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Lucid Bootstrap 4.1.1 Admin Template">
    <meta name="author" content="WrapTheme, design by: ThemeMakker.com">

    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/main.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/color_skins.css">
</head>

<body class="theme-cyan">
    <!-- WRAPPER -->
    <div id="wrapper">
        <div class="vertical-align-wrap">
            <div class="vertical-align-middle auth-main">
                <div class="auth-box">
                    <div class="top">
                        <img src="<?php echo base_url(); ?>assets/images/bg/logo.png" alt="LAPAK">
                    </div>
                    <div class="card">
                        <div class="header">
                            <p class="lead">Silakan login</p>
                        </div>
                        <div class="body">
                            <form class="form-auth-small" action="<?php echo base_url();?>index.php/login/aksi_login" method="post">
                                <div class="form-group">
                                    <label for="signin-email" class="control-label sr-only">Email</label>
                                    <input  class="form-control"  name='email' id='email' value="admin" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <label for="signin-password" class="control-label sr-only">Password</label>
                                    <input type="password"  class="form-control" type='password' name='pass' id='pass' value="admin" placeholder="Password" required>
                                </div>
                                
                                <button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
                                <div class="bottom">
                                   
                                    <!-- <span>Don't have an account? <a href="page-register.html">Register</a></span> -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END WRAPPER -->
</body>

</html>