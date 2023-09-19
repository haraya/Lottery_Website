<!--MODAL DE LOGIN-->
<div class="modal fade log-reg-modal-wrapper log" id="loginModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </div>
                <div class="log-reg-inner">
                    <h2 class="title">
                        Bienvenido a ROKAS
                    </h2>
                    <div class="main-content">
                        <form  method="POST" action="login.php">
                            <div class="form-group">
                                <label>Su correo electrónico</label>
                                <input type="email" name="emailuser" id="emailuser" class="my-form-control" placeholder="Ingrese su correo electronico">
                            </div>
                            <div class="form-group">
                                <label>Contraseña</label>
                                <input type="text" name="password" id="password" class="my-form-control" placeholder="Ingrese su Contraseña">
                            </div>
                            <p class="f-pass">
                                ¿Olvidó su contraseña? <a href="#" data-toggle="modal" data-target="#recoveryModal">Recuperar contraseña</a>
                            </p>
                            <div class="button-wrapper">
                                <button type="submit"  name="login" class="custom-button2">
                                    Inicia secion
                                </button>
                            </div>
                            <!--<div class="or log">
                                <p>O</p>
                            </div>-->
                            <div class="or-content">
                                <!--<p>Regístrate con tu correo electrónico</p>
                                            <a href="#" class="or-btn"><img src="assets/images/google.png" alt=""> Sign Up with
                                                Google</a>-->
                                <p class="or-signup">
                                    ¿No tienes una cuenta? 
                                    <a href="#" data-toggle="modal" data-target="#registerModal">
                                        Regístrate aquí
                                    </a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<!--MODAL RECUPERACIÓN DE CONTRASEÑA-->

<div class="modal fade " id="recoveryModal" role="dialog" tabindex="-1"aria-labelledby="modal2Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!--<span class="close" onclick="closeModal('login')">&times;</span>-->
            <div class="modal-body">
                <div class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </div>
                <div class="log-reg-inner">
                    <h2 class="title">
                        Cambio de Contraseña
                    </h2>
                    <div class="main-content">
                        <form method="POST" action="recovery-password.php">
                            <div class="form-group">
                                <label for="correo">Su correo electrónico</label>
                                <input type="email" name="emailRecovery" id="emailRecovery" class="my-form-control" placeholder="Ingrese su correo electronico">
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input type="text" name="passwordRecovery" id="passwordRecovery" class="my-form-control" placeholder="Ingrese su nueva contraseña">
                            </div>
                            
                            <div class="button-wrapper">
                                <button type="submit"  name="recovery" class="custom-button2">
                                    Cambiar contraseña
                                </button>
                            </div>
                         </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>