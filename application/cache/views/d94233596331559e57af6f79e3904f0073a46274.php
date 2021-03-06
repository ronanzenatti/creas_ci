<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Page title -->
    <title>CREAS</title>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" type="image/ico" href="favicon.ico"/>

    <!-- Vendor styles -->
    <link rel="stylesheet" href="<?php echo e(BASE_URL('assets/css/fontawesome/font-awesome.min.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(BASE_URL('assets/css/metisMenu.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(BASE_URL('assets/css/animate.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(BASE_URL('assets/css/bootstrap/bootstrap.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(BASE_URL('assets/css/bootstrap/dataTables.bootstrap.min.css')); ?>"/>

    <!-- App styles -->
    <link rel="stylesheet" href="<?php echo e(BASE_URL('assets/css/pe-icon/pe-icon-7-stroke.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(BASE_URL('assets/css/pe-icon/helper.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(BASE_URL('assets/css/style.css')); ?>">

</head>
<body class="light-skin blank">
<div class="login-container">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center m-b-md">
                <h3>CREAS</h3>
                <small>Centro de Referência Especializado de Assistência Social</small>
            </div>
            <div class="hpanel">
                <div class="panel-body">
                    <form action="<?php echo e(site_url('auth/login')); ?>" id="loginForm" method="post" accept-charset="utf-8">
                        <div class="form-group">
                            <label class="control-label" for="username">E-mail</label>
                            <input type="text" placeholder="digite seu e-mail" title="Please enter you username"
                                   required name="identity" value="" id="identity" class="form-control">
                        </div>
                        <?php if(isset($message)): ?>
                            <div id="infoMessage" class="alert alert-danger"><?php echo e($message); ?></div>
                        <?php endif; ?>
                        <div class="form-group">
                            <label class="control-label" for="password">Senha</label>
                            <input type="password" title="digite sua senha" placeholder="******" required
                                   name="password" value="" id="password" class="form-control">
                        </div>
                        
                        
                        
                        
                        
                        <button id="login-button" type="submit" class="btn btn-success btn-block">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            Desenvolvido por <br/> <strong>ETEC de Ibitinga</strong>
        </div>
    </div>
</div>

<!-- Vendor scripts -->
<script src="http://webapplayers.com/homer_admin-v2.0/light-shadow/vendor/jquery/dist/jquery.min.js"></script>
<script src="http://webapplayers.com/homer_admin-v2.0/light-shadow/vendor/jquery-ui/jquery-ui.min.js"></script>
<script src="http://webapplayers.com/homer_admin-v2.0/light-shadow/vendor/slimScroll/jquery.slimscroll.min.js"></script>
<script src="http://webapplayers.com/homer_admin-v2.0/light-shadow/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="http://webapplayers.com/homer_admin-v2.0/light-shadow/vendor/metisMenu/dist/metisMenu.min.js"></script>
<script src="http://webapplayers.com/homer_admin-v2.0/light-shadow/vendor/iCheck/icheck.min.js"></script>
<script src="http://webapplayers.com/homer_admin-v2.0/light-shadow/vendor/sparkline/index.js"></script>

<!-- DataTables -->
<script src="http://webapplayers.com/homer_admin-v2.0/light-shadow/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="http://webapplayers.com/homer_admin-v2.0/light-shadow/vendor/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<!-- DataTables buttons scripts -->
<script src="http://webapplayers.com/homer_admin-v2.0/light-shadow/vendor/pdfmake/build/pdfmake.min.js"></script>
<script src="http://webapplayers.com/homer_admin-v2.0/light-shadow/vendor/pdfmake/build/vfs_fonts.js"></script>
<script src="http://webapplayers.com/homer_admin-v2.0/light-shadow/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="http://webapplayers.com/homer_admin-v2.0/light-shadow/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="http://webapplayers.com/homer_admin-v2.0/light-shadow/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="http://webapplayers.com/homer_admin-v2.0/light-shadow/vendor/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>

<!-- App scripts -->
<script src="http://webapplayers.com/homer_admin-v2.0/light-shadow/scripts/homer.js"></script>

</body>
</html>