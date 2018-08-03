<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Page title -->
    <title>CREAS - <?php echo $__env->yieldContent('titulo_pagina'); ?></title>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" type="image/ico" href="<?php echo e(base_url('assets/img/logo.ico')); ?>"/>

    <!-- Vendor styles -->
    <link rel="stylesheet" href="<?php echo e(BASE_URL('assets/css/fontawesome/font-awesome.min.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(BASE_URL('assets/css/metisMenu.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(BASE_URL('assets/css/animate.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(BASE_URL('assets/css/bootstrap/bootstrap.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(BASE_URL('assets/css/dataTables/dataTables.bootstrap.min.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(BASE_URL('assets/css/dataTables/responsive.bootstrap.min.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(BASE_URL('assets/css/sweetalert.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(BASE_URL('assets/css/select2/select2.min.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(BASE_URL('assets/css/select2/select2-bootstrap.min.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(BASE_URL('assets/css/awesome-bootstrap-checkbox.css')); ?>"/>

    <!-- Date and Time styles -->
    <link rel="stylesheet" href="<?php echo e(BASE_URL('assets/css/datetime/bootstrap-datetimepicker.min.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(BASE_URL('assets/css/datetime/bootstrap-datepicker.min.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(BASE_URL('assets/css/datetime/bootstrap-clockpicker.min.css')); ?>"/>

    <!-- SummerNote styles -->
    <link rel="stylesheet" href="<?php echo e(BASE_URL('assets/css/summernote/summernote.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(BASE_URL('assets/css/summernote/databasic/summernote-ext-databasic.css')); ?>"/>

    <!-- App styles -->
    <link rel="stylesheet" href="<?php echo e(BASE_URL('assets/css/pe-icon/pe-icon-7-stroke.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(BASE_URL('assets/css/pe-icon/helper.css')); ?>"/>

	<!-- Homer Admin CSS styles -->
    <link rel="stylesheet" href="<?php echo e(BASE_URL('assets/css/style.css')); ?>">

</head>
<body class="light-skin sidebar-scroll fixed-footer fixed-navbar">

<!-- Header -->
<div id="header">
    <div class="color-line">
    </div>
    <div id="logo" class="light-version">
        <span>
           CREAS
        </span>
    </div>
    <nav role="navigation">
        <div class="header-link hide-menu"><i class="fa fa-bars"></i></div>
        <div class="small-logo">
            <span class="text-primary">CREAS APP</span>
        </div>
        <form role="search" class="navbar-form-custom" method="post" action="#">
            <div class="form-group">
                
            </div>
        </form>
        <div class="mobile-menu">
            <button type="button" class="navbar-toggle mobile-menu-toggle" data-toggle="collapse"
                    data-target="#mobile-collapse">
                <i class="fa fa-chevron-down"></i>
            </button>
            <div class="collapse mobile-navbar" id="mobile-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a class="" href="login.html">Login</a>
                    </li>
                    <li>
                        <a class="" href="login.html">Logout</a>
                    </li>
                    <li>
                        <a class="" href="profile.html">Profile</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="navbar-right">
            <ul class="nav navbar-nav no-borders">
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            <!--  <li class="dropdown">
                      <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                          <i class="pe-7s-keypad"></i>
                      </a>

                      <div class="dropdown-menu hdropdown bigmenu animated flipInX">
                          <table>
                              <tbody>
                              <tr>
                                  <td>
                                      <a href="projects.html">
                                          <i class="pe pe-7s-portfolio text-info"></i>
                                          <h5>Projects</h5>
                                      </a>
                                  </td>
                                  <td>
                                      <a href="mailbox.html">
                                          <i class="pe pe-7s-mail text-warning"></i>
                                          <h5>Email</h5>
                                      </a>
                                  </td>
                                  <td>
                                      <a href="contacts.html">
                                          <i class="pe pe-7s-users text-success"></i>
                                          <h5>Contacts</h5>
                                      </a>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <a href="forum.html">
                                          <i class="pe pe-7s-comment text-info"></i>
                                          <h5>Forum</h5>
                                      </a>
                                  </td>
                                  <td>
                                      <a href="analytics.html">
                                          <i class="pe pe-7s-graph1 text-danger"></i>
                                          <h5>Analytics</h5>
                                      </a>
                                  </td>
                                  <td>
                                      <a href="file_manager.html">
                                          <i class="pe pe-7s-box1 text-success"></i>
                                          <h5>Files</h5>
                                      </a>
                                  </td>
                              </tr>
                              </tbody>
                          </table>
                      </div>
                  </li>-->
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                <li class="dropdown">
                    <a href="<?php echo e(base_url('auth/logout')); ?>">
                        <i class="pe-7s-upload pe-rotate-90"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!-- Navigation -->
<aside id="menu">
    <div id="navigation">
        <ul class="nav" id="side-menu">
            <li>
                <a href="<?php echo e(base_url('principal')); ?>"> <span class="nav-label">Inicio</span></a>
            </li>
            <li>
                <a href="#"><span class="nav-label">Adolescentes</span><span class="fa arrow"></span> </a>
                <ul class="nav nav-second-level">
                    <li><a href="<?php echo e(base_url('adolescentes')); ?>">Cadastro</a></li>
                    <li><a href="<?php echo e(base_url('situacao_habitacional')); ?>">Situação Habitacional</a></li>
                    <li><a href="#">Composição Familiar</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><span class="nav-label">Cadastros</span><span class="fa arrow"></span> </a>
                <ul class="nav nav-second-level">
                    <li><a href="<?php echo e(base_url('entidades')); ?>">Entidades</a></li>
                    <li><a href="<?php echo e(base_url('cargos')); ?>">Cargos</a></li>
                    <li><a href="<?php echo e(base_url('usuarios')); ?>">Funcionários</a></li>
                </ul>
            </li>
            <li>
                <a href="https://goo.gl/forms/x9wcoIDNRsmlf1eH2" target="_blank"> <span class="nav-label">Suporte</span></a>
            </li>
            <li>
                <a href="<?php echo e(base_url('auth/logout')); ?>" target="_blank"> <span class="nav-label">Sair</span></a>
            </li>
        </ul>
    </div>
</aside>

<!-- Main Wrapper -->
<div id="wrapper">

    <div class="normalheader small-header">
        <div class="hpanel">
            <div class="panel-body">
                <a class="small-header-action" href="">
                    <div class="clip-header">
                        <i class="fa fa-arrow-up"></i>
                    </div>
                </a>

                <div id="hbreadcrumb" class="pull-right">
                    <ol class="hbreadcrumb breadcrumb">
                        <?php echo $__env->yieldContent('breadcrumb'); ?>
                    </ol>
                </div>
                <h2 class="font-light m-b-xs">
                    <?php echo $__env->yieldContent('titulo_pagina'); ?>
                </h2>
                
            </div>
        </div>
    </div>

    <div class="content">
        <div class="hpanel">
            
            
            
            
            
            
            
            <div class="panel-body">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
    </div>

    <!-- Footer-->
    <footer class="footer">
        <span class="pull-right">
            ETEC de Ibitinga
        </span>
    </footer>

</div>
<!-- Vendor scripts -->
<script src="<?php echo e(base_url('assets/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(base_url('assets/js/jquery-ui.min.js')); ?>"></script>
<script src="<?php echo e(base_url('assets/js/jquery.slimscroll.min.js')); ?>"></script>
<script src="<?php echo e(base_url('assets/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(base_url('assets/js/metisMenu.min.js')); ?>"></script>
<script src="<?php echo e(base_url('assets/js/icheck.min.js')); ?>"></script>
<script src="<?php echo e(base_url('assets/js/sparkline.index.js')); ?>"></script>
<script src="<?php echo e(base_url('assets/js/sweetalert.min.js')); ?>"></script>
<script src="<?php echo e(base_url('assets/js/jquery.mask.min.js')); ?>"></script>
<script src="<?php echo e(base_url('assets/js/jquery.maskMoney.min.js')); ?>"></script>

<!-- Date and Time scripts -->
<script src="<?php echo e(base_url('assets/js/datetime/moment-with-locales.js')); ?>"></script>
<script src="<?php echo e(base_url('assets/js/datetime/bootstrap-datetimepicker.min.js')); ?>"></script>
<script src="<?php echo e(base_url('assets/js/datetime/bootstrap-datepicker.min.js')); ?>"></script>
<script src="<?php echo e(base_url('assets/js/datetime/bootstrap-clockpicker.min.js')); ?>"></script>
<script src="<?php echo e(base_url('assets/js/datetime/locales/bootstrap-datepicker.pt-BR.min.js')); ?>"></script>

<!-- JQuery Validate -->
<script src="<?php echo e(base_url('assets/js/validation/jquery.validate.min.js')); ?>"></script>
<script src="<?php echo e(base_url('assets/js/validation/additional-methods.min.js')); ?>"></script>
<script src="<?php echo e(base_url('assets/js/validation/messages_pt_BR.min.js')); ?>"></script>

<!-- DataTables -->
<script src="<?php echo e(base_url('assets/js/dataTables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(base_url('assets/js/dataTables/dataTables.bootstrap.min.js')); ?>"></script>

<!-- DataTables responsive -->
<script src="<?php echo e(base_url('assets/js/dataTables/dataTables.responsive.min.js')); ?>"></script>
<script src="<?php echo e(base_url('assets/js/dataTables/responsive.bootstrap.min.js')); ?>"></script>

<!-- DataTables buttons scripts -->
<script src="<?php echo e(base_url('assets/js/pdfmake/pdfmake.min.js')); ?>"></script>
<script src="<?php echo e(base_url('assets/js/pdfmake/vfs_fonts.js')); ?>"></script>
<script src="<?php echo e(base_url('assets/js/dataTables/buttons.html5.min.js')); ?>"></script>
<script src="<?php echo e(base_url('assets/js/dataTables/buttons.print.min.js')); ?>"></script>
<script src="<?php echo e(base_url('assets/js/dataTables/dataTables.buttons.min.js')); ?>"></script>
<script src="<?php echo e(base_url('assets/js/dataTables/buttons.bootstrap.min.js')); ?>"></script>

<!-- DataTables utils -->
<script src="<?php echo e(base_url('assets/js/dataTables/date-eu.js')); ?>"></script>
<script src="<?php echo e(base_url('assets/js/dataTables/numeric-comma.js')); ?>"></script>

<!-- Select2 -->
<script src="<?php echo e(base_url('assets/js/select2/select2.full.js')); ?>"></script>
<script src="<?php echo e(base_url('assets/js/select2/i18n/pt-BR.js')); ?>"></script>

<!-- Summernote Scripts -->
<script src="<?php echo e(base_url('assets/js/summernote/summernote.min.js')); ?>"></script>
<script src="<?php echo e(base_url('assets/js/summernote/lang/summernote-pt-BR.js')); ?>"></script>
<script src="<?php echo e(base_url('assets/js/summernote/plugin/databasic/summernote-ext-databasic.js')); ?>"></script>
<script src="<?php echo e(base_url('assets/js/summernote/plugin/hello/summernote-ext-hello.js')); ?>"></script>
<script src="<?php echo e(base_url('assets/js/summernote/plugin/specialchars/summernote-ext-specialchars.js')); ?>"></script>
<script src="<?php echo e(base_url('assets/js/summernote/plugin/summernote-ext-print.js')); ?>"></script>

<script src="<?php echo e(base_url('assets/js/jquery.steps.min.js')); ?>"></script>
<script src="<?php echo e(base_url('assets/js/jquery.blockUI.js')); ?>"></script>

<!-- App scripts -->
<script src="<?php echo e(base_url('assets/js/homer.js')); ?>"></script>
<script src="<?php echo e(base_url('assets/js/creas.js')); ?>"></script>

<?php echo $__env->yieldContent('js'); ?>

<?php echo $__env->yieldContent("modal"); ?>

</body>
</html>
