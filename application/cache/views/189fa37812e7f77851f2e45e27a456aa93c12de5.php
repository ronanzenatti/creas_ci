<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Page title -->
    <title>CREAS - <?php echo $__env->yieldContent('titulo_pagina'); ?></title>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" type="image/ico" href="favicon.ico"/>

    <!-- Vendor styles -->
    <link rel="stylesheet" href="<?php echo e(BASE_URL('assets/css/fontawesome/font-awesome.min.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(BASE_URL('assets/css/metisMenu.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(BASE_URL('assets/css/animate.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(BASE_URL('assets/css/bootstrap/bootstrap.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(BASE_URL('assets/css/dataTables/dataTables.bootstrap.min.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(BASE_URL('assets/css/dataTables/responsive.bootstrap.min.css')); ?>"/>

    <!-- App styles -->
    <link rel="stylesheet" href="<?php echo e(BASE_URL('assets/css/pe-icon/pe-icon-7-stroke.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(BASE_URL('assets/css/pe-icon/helper.css')); ?>"/>
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
                <li class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                        <i class="pe-7s-speaker"></i>
                    </a>
                    <ul class="dropdown-menu hdropdown notification animated flipInX">
                        <li>
                            <a>
                                <span class="label label-success">NEW</span> It is a long established.
                            </a>
                        </li>
                        <li>
                            <a>
                                <span class="label label-warning">WAR</span> There are many variations.
                            </a>
                        </li>
                        <li>
                            <a>
                                <span class="label label-danger">ERR</span> Contrary to popular belief.
                            </a>
                        </li>
                        <li class="summary"><a href="#">See all notifications</a></li>
                    </ul>
                </li>
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
                    <a class="dropdown-toggle label-menu-corner" href="#" data-toggle="dropdown">
                        <i class="pe-7s-mail"></i>
                        <span class="label label-success">4</span>
                    </a>
                    <ul class="dropdown-menu hdropdown animated flipInX">
                        <div class="title">
                            You have 4 new messages
                        </div>
                        <li>
                            <a>
                                It is a long established.
                            </a>
                        </li>
                        <li>
                            <a>
                                There are many variations.
                            </a>
                        </li>
                        <li>
                            <a>
                                Lorem Ipsum is simply dummy.
                            </a>
                        </li>
                        <li>
                            <a>
                                Contrary to popular belief.
                            </a>
                        </li>
                        <li class="summary"><a href="#">See All Messages</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#">
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
                <a href="#"> <span class="nav-label">Dashboard</span></a>
            </li>
            <li>
                <a href="#"><span class="nav-label">Cadastros</span><span class="fa arrow"></span> </a>
                <ul class="nav nav-second-level">
                    <li><a href="panels.html">Panels design</a></li>
                    <li><a href="typography.html">Typography</a></li>
                    <li><a href="buttons.html">Colors &amp; Buttons</a></li>
                    <li><a href="components.html">Components</a></li>
                </ul>
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
            <div class="panel-heading">
                <div class="panel-tools">
                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                    <a class="closebox"><i class="fa fa-times"></i></a>
                </div>
                <?php echo $__env->yieldContent('title_panel'); ?>
            </div>
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
<script src="http://webapplayers.com/homer_admin-v2.0/light-shadow/vendor/jquery/dist/jquery.min.js"></script>
<script src="http://webapplayers.com/homer_admin-v2.0/light-shadow/vendor/jquery-ui/jquery-ui.min.js"></script>
<script src="http://webapplayers.com/homer_admin-v2.0/light-shadow/vendor/slimScroll/jquery.slimscroll.min.js"></script>
<script src="http://webapplayers.com/homer_admin-v2.0/light-shadow/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="http://webapplayers.com/homer_admin-v2.0/light-shadow/vendor/metisMenu/dist/metisMenu.min.js"></script>
<script src="http://webapplayers.com/homer_admin-v2.0/light-shadow/vendor/iCheck/icheck.min.js"></script>
<script src="http://webapplayers.com/homer_admin-v2.0/light-shadow/vendor/sparkline/index.js"></script>

<!-- DataTables -->
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>

<script src="https://cdn.datatables.net/responsive/2.2.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.0/js/responsive.bootstrap.min.js"></script>

<!-- DataTables buttons scripts -->
<script src="http://webapplayers.com/homer_admin-v2.0/light-shadow/vendor/pdfmake/build/pdfmake.min.js"></script>
<script src="http://webapplayers.com/homer_admin-v2.0/light-shadow/vendor/pdfmake/build/vfs_fonts.js"></script>
<script src="http://webapplayers.com/homer_admin-v2.0/light-shadow/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="http://webapplayers.com/homer_admin-v2.0/light-shadow/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="http://webapplayers.com/homer_admin-v2.0/light-shadow/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="http://webapplayers.com/homer_admin-v2.0/light-shadow/vendor/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>


<!-- App scripts -->
<script src="http://webapplayers.com/homer_admin-v2.0/light-shadow/scripts/homer.js"></script>

<script>

    $(function () {
        $('#table1').dataTable({
            responsive: true,
            pagingType: "full_numbers",
            language: {
                "decimal": ",",
                "thousands": "."
            },
            "language": { //Altera o idioma do DataTable para o português do Brasil

                "sEmptyTable": "Nenhum registro encontrado",
                "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                "sInfoPostFix": "",
                "sInfoThousands": ".",
                "sLengthMenu": "_MENU_ resultados por página",
                "sLoadingRecords": "Carregando...",
                "sProcessing": "Processando...",
                "sZeroRecords": "Nenhum registro encontrado",
                "sSearch": "Pesquisar",
                "oPaginate": {
                    "sNext": "Próximo",
                    "sPrevious": "Anterior",
                    "sFirst": "Primeiro",
                    "sLast": "Último"
                },
                "oAria": {
                    "sSortAscending": ": Ordenar colunas de forma ascendente",
                    "sSortDescending": ": Ordenar colunas de forma descendente"
                }

            },
            dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp",
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Todos"]],
            buttons: [
                {extend: 'copy', className: 'btn-sm'},
                {extend: 'csv', title: 'ExampleFile', className: 'btn-sm'},
                {extend: 'pdf', title: 'ExampleFile', className: 'btn-sm'},
                {extend: 'print', className: 'btn-sm'}
            ]
        });
    });

</script>


</body>
</html>