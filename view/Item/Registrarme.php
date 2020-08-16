
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
                        <h2>Registrate, es gratis.</h2>
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
                              <h2>¿Sos nuevo en nuestra tienda?</h2>
                            <p>!Registrate! Y podrás hacer pedidos de cualquier producto de nuestra tienda, además podrás recibir ofertas & descuentos</p>
                          
                             <a href="#" class="btn_3">Creáte una cuenta -></a>
                     
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="login_part_form">
                    <div class="login_part_form_iner">
                      
                            <h3><center>
                            Registrate en nuestro BazarFer</center></h3>

                        <form  class="row contact_form" id="formularioUsuario" method="post" autocomplete="off" 
                               class="form" enctype="multipart/form-data">
                            
                               <div class="col-md-12 form-group p_star">
                                <span id="error" name="error"> </span>

                            <br>
                                    </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="cedula_usuario" name="cedula_usuario" value=""
                                       placeholder="Cédula" >
                                
                             
                            </div>
                            <br> <br>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="telefono_usuario" name="telefono_usuario" value=""
                                       placeholder="Telefono">
                                  
                            </div>
                               <br> <br>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario" value=""
                                       placeholder="Nombre">
                            </div>   <br> <br>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="apellido_usuario" name="apellido_usuario" value=""
                                       placeholder="Apellido">
                            </div>   <br> <br>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="direccion_usuario" name="direccion_usuario" value=""
                                       placeholder="Dirección">
                            </div>   <br> <br>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="correo_usuario" name="correo_usuario" value=""
                                       placeholder="Correo">
                            </div>   <br> <br>
                            <div class="col-md-12 form-group p_star">
                                <input type="password" class="form-control" id="contrasenia_usuario" name="contrasenia_usuario" value=""
                                       placeholder="Contraseña">
                            </div>   <br> <br>
                            <div class="col-md-12 form-group">
                                 <input type="hidden" class="form-control" id="id_rol" name="id_rol" value="2"
                                       
                                       
                                       
                                       
                                       placeholder="Rol">
                                <button type="submit" value="submit" class="btn_3">
                                    Registrarme
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

