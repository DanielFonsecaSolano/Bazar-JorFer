
<?php
include_once 'public/header.php';
?>


<!-- slider Area Start-->
<div class="slider-area ">
    <!-- Mobile Menu -->
    <div class="single-slider slider-height2 d-flex align-items-center" data-background="./public/img/hero/category.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>Iniciar Sesion</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->

<!--================login_part Area =================-->
<section class="login_part section_padding ">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="login_part_text text-center">
                    <div class="login_part_text_iner">
                        <h2>¿Ya tienes una cuenta?</h2>
                        <p>Genial! Podrás recibir y dar un vistazo a las mejores confecciones que hemos realizado!</p>
                        <a href="#" class="btn_3">Inicia sesión -></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="login_part_form">
                    <div class="login_part_form_iner">
                        <h4><center>Iniciar sesion !</center>  </h4>

                        <form class="row contact_form" id="autenticacion_usuario" method="post" autocomplete="off" 
                              enctype="multipart/form-data"> 
                          
                            <div class="col-md-12 form-group p_star">
                                <span id="error2" name="error2" style="color:red"> </span>

                           
                                    </div>
                            <br>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="correo_usuario" name="correo_usuario" value=""
                                       placeholder="Correo">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="password" class="form-control" id="contrasenia_usuario" name="contrasenia_usuario" value=""
                                       placeholder="Contraseña">
                            </div>
                                <div class="col-md-12 form-group p_star">
                                 <input type="hidden" class="form-control" id="id_rol" name="id_rol" value="2"
                                       >
                            <div class="col-md-12 form-group">
                                <div class="creat_account d-flex align-items-center">
                                    <input type="checkbox" id="f-option" name="selector">
                                    <label for="f-option">Recordarme</label>
                                </div>
                                <button type="submit" value="submit" class="btn_3">
                                    Entrar
                                </button>
                                <a class="lost_pass" href="?controlador=Item&accion=login_Admin"><i class="fas fa-user"></i> Iniciar Como administrador</a>
                         
                                <a class="lost_pass" href="?controlador=Item&accion=nuevaContrasennia"><i class="fas fa-unlock"></i> Olvidé mi contraseña?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================login_part end =================-->

<?php
include_once 'public/footer.php';
?>

