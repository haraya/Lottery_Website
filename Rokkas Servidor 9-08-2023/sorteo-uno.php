<?php 
  
   require_once 'configBD.php';
   session_start();

 if (isset($_SESSION['emailuser'])) {?>

    <?php require "sorteo-uno-session.php"; ?>

<?php }else{ ?>

    <?php require "sorteo-sin-session.php"; ?>

<?php } ?>


 <!--Script para cuando se hace el pago de los numeros -->
    <script>
    $(document).ready(function() {
        <?php if(isset($_GET['succesCompra']) && $_GET['succesCompra'] === 'true'): ?>
            $('#succesModal').modal('show');
        <?php endif; ?>
    });
    </script>

    <!-- Modal Para compra de sorteos y numeros -->
    <div id="succesModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Compra exitósa</h4>
                </div>
                <div class="modal-body">
                    <p>Su compra ha sido exitosa</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>



     <!--Script para cuando se ocurre un error al seleccionar el numero -->
    <script>
    $(document).ready(function() {
        <?php if(isset($_GET['errorNumero']) && $_GET['errorNumero'] === 'true'): ?>
            $('#errorNumeroModal').modal('show');
        <?php endif; ?>
    });
    </script>

    <!-- Modal Login de error -->
    <div id="errorNumeroModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Error al Seleccionar un número</h4>
                </div>
                <div class="modal-body">
                    <p>Debe primero seleccionar el tipo de sorteo para poder comprar algún número</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>