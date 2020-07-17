

<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Bazar JorFer </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
        <link rel="shortcut icon" type="image/x-icon" href="./public/img/favicon.ico">

        <!-- CSS here -->
        <link rel="stylesheet" href="./public/css/bootstrap.min.css">
        <link rel="stylesheet" href="./public/css/owl.carousel.min.css">
        <link rel="stylesheet" href="./public/css/flaticon.css">
        <link rel="stylesheet" href="./public/css/slicknav.css">
        <link rel="stylesheet" href="./public/css/animate.min.css">
        <link rel="stylesheet" href="./public/css/magnific-popup.css">
        <link rel="stylesheet" href="./public/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="./public/css/themify-icons.css">
        <link rel="stylesheet" href="./public/css/slick.css">
        <link rel="stylesheet" href="./public/css/nice-select.css">
        <link rel="stylesheet" href="./public/css/style.css">

        <!-- script here -->
        <script src="./public/js/jquery-3.3.1.js" type="text/javascript"></script>
        <script src="./public/js/js_item/js_usuario.js" type="text/javascript"></script>

    </head>




    <body>
        <!---------Cliente--->
        <div class="row">
            <div class="col-md-4"></div>  
            <div class="col-md-4">
                <?php
                if (!isset($_SESSION)) {
                    session_start();
                    error_reporting(0);
                }

                if ($_SESSION['usuario'] == null || $_SESSION['usuario'] == "") {
                    echo '<div class="alert alert-danger" role="alert">
                          Usted no tiene PERMISOS!
                         <center>   <a href="?controlador=Item&accion=autenticacion_usuario">Iniciar Session como Cliente</a></center>
           
                           </div>';
                    //Sessions are not available
                    die();
                }
                ?>
            </div>  
            <div class="col-md-4"></div>  
        </div>


        <!-- Preloader Start -->
        <div id="preloader-active">
            <div class="preloader d-flex align-items-center justify-content-center">
                <div class="preloader-inner position-relative">
                    <div class="preloader-circle"></div>
                    <div class="preloader-img pere-text">

                        <img src="./public/img/logo/logo.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Preloader Start -->

        <header>
            <!-- Header Start -->
            <div class="header-area">
                <div class="main-header ">
                    <div class="header-top top-bg d-none d-lg-block">
                        <div class="container-fluid">
                            <div class="col-xl-12">
                                <div class="row d-flex justify-content-between align-items-center">
                                    <div class="header-info-left d-flex">
                                        <div class="flag">
                                            <img src="./public/img/icon/header_iconcr.ico" width="30" height="30" alt="">
                                        </div>
                                        <div class="select-this">
                                            <form action="#">
                                                <div class="select-itms">
                                                    <select name="select" id="select1">
                                                        <option value="">Colones</option>
                                                       
                                                    </select>
                                                </div>
                                            </form>
                                        </div>
                                        <ul class="contact-now">     
                                               <li><i class="fas fa-phone"></i>  +506 8765 3456</li>
                                        </ul>
                                    </div>



                                    <div class="header-info-right ">


                                        <span class="position-relative" style="color:white"> <i class="fas fa-user"></i>   Bienvenido </span>
                                        <div class="btn-group dropdown">
                                            <a  href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"  class="dropdown-toggle lightSpeedOut">
                                                <?php echo $_SESSION["usuario"] ?>
                                            </a>
                                            <div class="dropdown-menu" >
                                                <a class="dropdown-item" href="?controlador=Item&accion=cerrar_sesion"><img src="./public/img/enter.svg" width="30" height="30"> Cerrar mi sesión</a>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-bottom  header-sticky">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <!-- Logo -->
                                <div class="col-xl-1 col-lg-1 col-md-1 col-sm-3">
                                    <div class="logo">
                                        <a href="#"><img src="./public/img/logo/logo.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-8 col-md-7 col-sm-5">
                                    <!-- Main-menu -->
                                    <div class="main-menu f-right d-none d-lg-block">
                                        <nav>                                                
                                            <ul id="navigation">                                                                                                                                     
                                                <li><a href="#"><i class="fas fa-home"></i> Inicio</a></li>
                                                <li><a href="#"><i class="fas fa-angle-down"></i> Categoria</a></li>
                                                <li ><a href="#"><i class="fas fa-newspaper"></i> Reciente</a>
                                                    <ul class="submenu">
                                                        <li><a href="#"> Lista  Productos</a></li>
                                                        <li><a href="#"> Detalle  Productos</a></li>
                                                    </ul>
                                                </li>

                                                <li><a href="#"><i class="fas fa-list-alt"></i> Páginas</a>
                                                    <ul class="submenu">

                                                        <li><a href="#"><i class="fas fa-aws"></i> Sobre Nosotros</a></li>

                                                    </ul>
                                                </li>
                                                    <li><a href="?controlador=Cliente&accion=contactoView"><i class="fas fa-address-card"></i>  Contactos</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div> 
                                <div class="col-xl-5 col-lg-3 col-md-3 col-sm-3 fix-card">
                                    <ul class="header-right f-right d-none d-lg-block d-flex justify-content-between">
                                        <li class="d-none d-xl-block">
                                            <div class="form-box f-right ">
                                                <input type="text" name="Search" placeholder="Buscar productos">
                                                <div class="search-icon">
                                                    <i class="fas fa-search special-tag"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class=" d-none d-xl-block">
                                            <div class="favorit-items">
                                                <i class="far fa-heart"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="shopping-card">
                                                <a href="#"><i class="fas fa-shopping-cart"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Mobile Menu -->
                                <div class="col-12">
                                    <div class="mobile_menu d-block d-lg-none"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header End -->
        </header>