
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
                        <h2>Generar nueva contraseña</h2>
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
                        <h2>¿Olvidaste tu contraseña?</h2>
                        <p>Escribí tu correo electrónico, y te creamos una nueva clave!</p>
                        <a href="#" class="btn_3"> -></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="login_part_form">
                    <div class="login_part_form_iner">
                        <h3><center>Generando nueva contraseña !</center>  </h3>

                        <form class="row contact_form" id="confirmar_contrasennia" method="post" autocomplete="off" 
                               class="form" enctype="multipart/form-data">
                            <div class="col-md-12 form-group p_star">
                                <span id="mensaje" name="mensaje"> </span>

                            <br>
                                    </div>
                           

                            <div class="col-md-12 form-group p_star">
                                <input type="password" class="form-control" id="contrasenia_usuario" name="contrasenia_usuario" value=""
                                       placeholder="Escribe una contraseña">
                            </div>
                            <br><br>
                             <div class="col-md-12 form-group p_star">
                                <input type="password" class="form-control" id="confirmar_contrasenia_usuario" name="confirmar_contrasenia_usuario" value=""
                                       placeholder="Confirmar contraseña">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="hidden" class="form-control" id="correo_usuario" name="correo_usuario" value="<?php echo $_POST["correo_usuario"] ?>"
                                 >
                            </div>
                            <div class="col-md-12 form-group">
                                
                                <button type="submit" value="submit" class="btn_3">
                                    Confirmar
                                </button>
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

