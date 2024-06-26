<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>/mdb/assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>/mdb/assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title><?= $title; ?></title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/material-dashboard-pro" />
    <!--  Social tags      -->
    <meta name="keywords" content="material dashboard, bootstrap material admin, bootstrap material dashboard, material design admin, material design, creative tim, html dashboard, html css dashboard, web dashboard, freebie, free bootstrap dashboard, css3 dashboard, bootstrap admin, bootstrap dashboard, frontend, responsive bootstrap dashboard, premiu material design admin">
    <meta name="description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template">
    <meta itemprop="description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
    <meta itemprop="image" content="s3.amazonaws.com/creativetim_bucket/products/51/opt_mdp_thumbnail.jpg">
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template">
    <meta name="twitter:description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="s3.amazonaws.com/creativetim_bucket/products/51/opt_mdp_thumbnail.jpg">
    <!-- Open Graph data -->
    <meta property="fb:app_id" content="655968634437471">
    <meta property="og:title" content="Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://www.creative-tim.com/product/material-dashboard-pro" />
    <meta property="og:image" content="s3.amazonaws.com/creativetim_bucket/products/51/opt_mdp_thumbnail.jpg" />
    <meta property="og:description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design." />
    <meta property="og:site_name" content="Creative Tim" />
    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url(); ?>/mdb/assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="<?php echo base_url(); ?>/mdb/assets/css/material-dashboard.css" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url(); ?>/mdb/assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="<?php echo base_url(); ?>/mdb/assets/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>/mdb/assets/css/google-roboto-300-700.css" rel="stylesheet" />

</head>

<body>
    <?php
    $uri = service('uri');
    ?>
    <div class="wrapper">
        <div class="sidebar" data-active-color="rose" data-background-color="black" data-image="<?php echo base_url(); ?>/mdb/assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
        Tip 2: you can also add an image using data-image tag
        Tip 3: you can change the color of the sidebar with data-background-color="white | black"
    -->
            <div class="logo">
                <a href="" class="simple-text">
                    WARJAM
                </a>
            </div>
            <div class="logo logo-mini">
                <a href="" class="simple-text">
                    WJ
                </a>
            </div>
            <div class="sidebar-wrapper">
                <div class="user">
                    <div class="photo">
                        <img src="<?php echo base_url(); ?>/mdb/assets/img/faces/avatar.jpg" />
                    </div>
                    <div class="info">
                        <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                            <?= session()->get('nama_lengkap'); ?>
                            <b class="caret"></b>
                        </a>
                        <div class="collapse" id="collapseExample">
                            <ul class="nav">
                                <li class="<?= ($uri->getSegment(1) == 'admin' &&  $uri->getSegment(2) == 'user' ? 'active' : null) ?>">
                                    <a href="/admin/user/edit-profile">Edit Profile</a>
                                </li>
                                <li>
                                    <form action="/logout" method="POST">
                                        <button type="submit" hidden id="logoutButton"></button>
                                    </form>
                                    <a href="#" id="logoutAnchor">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="nav">
                    <li class="<?= ($uri->getSegment(1) == 'admin' &&  $uri->getSegment(2) == '' ? 'active' : null) ?>">
                        <a href="<?php echo base_url(); ?>/admin">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#pagesExamples">
                            <i class="material-icons">view_carousel</i>
                            <p>Tampilan
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="pagesExamples">
                            <ul class="nav">
                                <li>
                                    <a href="">Slider</a>
                                </li>
                                <li>
                                    <a href="">About</a>
                                </li>
                                <li class="<?= ($uri->getSegment(1) == 'admin' &&  $uri->getSegment(2) == 'contact' ? 'active' : null) ?>">
                                    <a href="/admin/contact">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="<?= ($uri->getSegment(1) == 'admin' &&  $uri->getSegment(2) == 'menu' ? 'active' : null) ?>">
                        <a href="<?php echo base_url(); ?>/admin/menu">
                            <i class="material-icons">local_cafe</i>
                            <p>Menu</p>
                        </a>
                    </li>
                    <li class="<?= ($uri->getSegment(1) == 'admin' &&  $uri->getSegment(2) == 'daerah' ? 'active' : null) ?>">
                        <a href="<?php echo base_url(); ?>/admin/daerah">
                            <i class="material-icons">map</i>
                            <p>Daerah</p>
                        </a>
                    </li>
                    <li class="">
                        <a href="<?php echo base_url(); ?>">
                            <i class="material-icons">shopping_cart</i>
                            <p>Pesanan</p>
                        </a>
                    </li>
                    <li class="">
                        <a href="<?php echo base_url(); ?>">
                            <i class="material-icons">money_off</i>
                            <p>Pengeluaran</p>
                        </a>
                    </li>
                    <li class="<?= ($uri->getSegment(1) == 'admin' &&  $uri->getSegment(2) == 'secret-menu' ? 'active' : null) ?>">
                        <a href="<?php echo base_url(); ?>/admin/secret-menu">
                            <i class="fa fa-user-secret" aria-hidden="true"></i>
                            <p>Secret Menu</p>
                        </a>
                    </li>
                    <li class="<?= ($uri->getSegment(1) == 'admin' &&  $uri->getSegment(2) == 'pegawai' ? 'active' : null) ?>">
                        <a href="<?php echo base_url(); ?>/admin/pegawai">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <p>Pegawai</p>
                        </a>
                    </li>
                    <li class="">
                        <a href="<?php echo base_url(); ?>">
                            <i class="fa fa-file-image-o" aria-hidden="true"></i>
                            <p>Gallery</p>
                        </a>
                    </li>
                    <li class="<?= ($uri->getSegment(1) == 'admin' &&  $uri->getSegment(2) == 'meja' ? 'active' : null) ?>">
                        <a href="<?php echo base_url(); ?>/admin/meja">
                            <i class="fa fa-bell-o" aria-hidden="true"></i>
                            <p>Meja</p>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-minimize">
                        <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                            <i class="material-icons visible-on-sidebar-regular">more_vert</i>
                            <i class="material-icons visible-on-sidebar-mini">view_list</i>
                        </button>
                    </div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"> Dashboard </a>
                    </div>

                </div>
            </nav>

            <?= $this->renderSection('content'); ?>


            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <p class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="http://www.creative-tim.com/">Creative Tim</a>, made with love for a better web
                    </p>
                </div>
            </footer>
        </div>
    </div>
    <div class="fixed-plugin">
        <div class="dropdown show-dropdown">
            <a href="#" data-toggle="dropdown">
                <i class="fa fa-cog fa-2x"> </i>
            </a>
            <ul class="dropdown-menu">
                <li class="header-title"> Sidebar Filters</li>
                <li class="adjustments-line">
                    <a href="javascript:void(0)" class="switch-trigger active-color">
                        <div class="badge-colors text-center">
                            <span class="badge filter badge-purple" data-color="purple"></span>
                            <span class="badge filter badge-blue" data-color="blue"></span>
                            <span class="badge filter badge-green" data-color="green"></span>
                            <span class="badge filter badge-orange" data-color="orange"></span>
                            <span class="badge filter badge-red" data-color="red"></span>
                            <span class="badge filter badge-rose active" data-color="rose"></span>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <li class="header-title">Sidebar Background</li>
                <li class="adjustments-line">
                    <a href="javascript:void(0)" class="switch-trigger background-color">
                        <div class="text-center">
                            <span class="badge filter badge-white" data-color="white"></span>
                            <span class="badge filter badge-black active" data-color="black"></span>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <li class="adjustments-line">
                    <a href="javascript:void(0)" class="switch-trigger">
                        <p>Sidebar Mini</p>
                        <div class="togglebutton switch-sidebar-mini">
                            <label>
                                <input type="checkbox" unchecked="">
                            </label>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <li class="adjustments-line">
                    <a href="javascript:void(0)" class="switch-trigger">
                        <p>Sidebar Image</p>
                        <div class="togglebutton switch-sidebar-image">
                            <label>
                                <input type="checkbox" checked="">
                            </label>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <li class="header-title">Images</li>
                <li class="active">
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="<?php echo base_url(); ?>/mdb/assets/img/sidebar-1.jpg" alt="" />
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="<?php echo base_url(); ?>/mdb/assets/img/sidebar-2.jpg" alt="" />
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="<?php echo base_url(); ?>/mdb/assets/img/sidebar-3.jpg" alt="" />
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="<?php echo base_url(); ?>/mdb/assets/img/sidebar-4.jpg" alt="" />
                    </a>
                </li>


            </ul>
        </div>
    </div>
</body>

<?= $this->renderSection('modals'); ?>

<!--   Core JS Files   -->
<script src="<?php echo base_url(); ?>/mdb/assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>/mdb/assets/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>/mdb/assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>/mdb/assets/js/material.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>/mdb/assets/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="<?php echo base_url(); ?>/mdb/assets/js/jquery.validate.min.js"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="<?php echo base_url(); ?>/mdb/assets/js/moment.min.js"></script>
<!--  Charts Plugin -->
<script src="<?php echo base_url(); ?>/mdb/assets/js/chartist.min.js"></script>
<!--  Plugin for the Wizard -->
<script src="<?php echo base_url(); ?>/mdb/assets/js/jquery.bootstrap-wizard.js"></script>
<!--  Notifications Plugin    -->
<script src="<?php echo base_url(); ?>/mdb/assets/js/bootstrap-notify.js"></script>
<!--   Sharrre Library    -->
<script src="<?php echo base_url(); ?>/mdb/assets/js/jquery.sharrre.js"></script>
<!-- DateTimePicker Plugin -->
<script src="<?php echo base_url(); ?>/mdb/assets/js/bootstrap-datetimepicker.js"></script>
<!-- Vector Map plugin -->
<script src="<?php echo base_url(); ?>/mdb/assets/js/jquery-jvectormap.js"></script>
<!-- Sliders Plugin -->
<script src="<?php echo base_url(); ?>/mdb/assets/js/nouislider.min.js"></script>
<!--  Google Maps Plugin    -->
<!--<script src="<?php echo base_url(); ?>/mdb/assets/js/jquery.select-bootstrap.js"></script>-->
<!-- Select Plugin -->
<script src="<?php echo base_url(); ?>/mdb/assets/js/jquery.select-bootstrap.js"></script>
<!--  DataTables.net Plugin    -->
<script src="<?php echo base_url(); ?>/mdb/assets/js/jquery.datatables.js"></script>
<!-- Sweet Alert 2 plugin -->
<script src="<?php echo base_url(); ?>/mdb/assets/js/sweetalert2.js"></script>
<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="<?php echo base_url(); ?>/mdb/assets/js/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin    -->
<script src="<?php echo base_url(); ?>/mdb/assets/js/fullcalendar.min.js"></script>
<!-- TagsInput Plugin -->
<script src="<?php echo base_url(); ?>/mdb/assets/js/jquery.tagsinput.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="<?php echo base_url(); ?>/mdb/assets/js/material-dashboard.js"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<!-- <script src="<?php echo base_url(); ?>/mdb/assets/js/demo.js"></script> -->
<?= $this->renderSection('script'); ?>
<script type="text/javascript">
    $(document).ready(function() {
        $("#logoutAnchor").on("click", logout);

        function logout() {
            $('#logoutButton').click();
        }
    });
</script>


<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 21:32:16 GMT -->

</html>