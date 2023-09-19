<div class="modal fade log-reg-modal-wrapper" id="registerModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </div>
                    <div class="log-reg-inner">
                        <h2 class="title">
                            Crear una cuenta
                        </h2>
                        <div class="main-content">
                            <form action="registroBD.php" method="POST">
                                <div class="form-group">
                                    <label>Su nombre </label>
                                    <input type="text" class="my-form-control" name="nombreusuario" id="nombreusuario" placeholder="Ingrese su nombre ">
                                </div>
                                <div class="form-group">
                                    <label>Su apellido</label>
                                    <input type="text" class="my-form-control" name="apellidousuario" id="apellidousuario" placeholder="Ingrese su apellido">
                                </div>
                                <div class="form-group">
                                    <label>Su teléfono</label>
                                    <input type="text" class="my-form-control" name="telusuario" id="telusuario" placeholder="Ingrese su teléfono">
                                </div>
                                <div class="form-group">
                                    <label>Su usuario</label>
                                    <input type="text" class="my-form-control" name="usuariologin" id="usuariologin" placeholder="Ingrese su usuario">
                                </div>
                                <div class="form-group">
                                    <label>Su correo electrónico</label>
                                    <input type="email" class="my-form-control" name="emailuser" id="emailuser" placeholder="Ingrese su correo electronico">
                                </div>
                                <div class="form-group">
                                    <label>Contraseña</label>
                                    <input type="text" class="my-form-control" name="usuariopass" id="usuariopass" placeholder="Ingrese su contraseña">
                                </div>
                                <!--<div class="form-group">
                                    <label>Ingrese su contraseña de confirmacion</label>
                                    <input type="text" class="my-form-control"
                                        placeholder="Enter Your Confirm Password">
                                </div>-->
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">
                                        Acepto los <a href="#">términos y condiciones</a>
                                    </label>
                                </div>
                                <div class="button-wrapper">
                                    <button type="submit" name="register" class="custom-button2">
                                        Registrese ahora
                                    </button>
                                    <p class="or-signup">
                                        ¿Ya tienes una cuenta?
                                        <a href="#" data-toggle="modal" data-target="#loginModal">
                                            Iniciar sesión 
                                        </a>
                                    </p>
                                </div>
                                 <!--<div class="or">
                                    <p>O</p>
                                </div>
                               <div class="socials">
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fab fa-google"></i>
                                    </a>
                                </div>-->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>