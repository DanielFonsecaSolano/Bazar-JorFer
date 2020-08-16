
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
                        <h2>¿Olvidé mi contraseña</h2>
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
                        <h2>¿Olvidate tu contraseña?</h2>
                        <p>Escribí tu correo electrónico, y te creamos una nueva clave!</p>
                        <a href="#" class="btn_3"> -></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="login_part_form">
                    <div class="login_part_form_iner">
                        <h3><center>Seguí los pasos para obtener una nueva contraseña!</center>  </h3>

                        <form class="row contact_form" action="?controlador=Item&accion=confirmar_correo" method="post" autocomplete="off" 
                              > 
                          
                            <div class="col-md-12 form-group p_star">
                                <span id="mensaje" name="mensaje"> </span>

                            <br>
                                    </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="correo_usuario" name="correo_usuario" value=""
                                       placeholder="Escribe tu correo electrónico">
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

