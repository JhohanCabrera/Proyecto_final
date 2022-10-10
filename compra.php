<?php
    
    include 'estilos.php';
    $camiseta = $_POST['camiseta'];
    $blusa = $_POST['blusa'];
    $conjunto = $_POST['conjunto'];
    $vestido = $_POST['vestido'];
    $buso = $_POST['buso'];
    $blusa = $_POST['blusa'];
    $zapatos = $_POST['zapatos'];
    $zapatosdama = $_POST['zapatosdama'];
    $abrigo = $_POST['abrigo'];
    $conjuntod = $_POST['conjuntod'];
    $conjuntoe = $_POST['conjuntoe'];
    $chaqueta = $_POST['chaqueta'];
?>
<div class="container" align="center">
    <div class="card" style="width: 35rem;">
      
      <div class="card-body">
        <h5 class="card-title">Resumen de su pedido</h5>
            <p class="card-text">
                <strong>Camiseta elegante hombre de color: </strong> <?php echo $camiseta ?> <br> <!-- MOSTRAR EN TARJETAS LA INFORMACIÓN DE ARRIBA  -->
                <strong>Blusa elegante dama de color: </strong> <?php echo  $blusa ?> <br> <!-- MOSTRAR EN TARJETAS LA INFORMACIÓN DE ARRIBA  -->
                <strong>Conjunto elegante dama de color: </strong><?php echo $conjunto ?> <br> <!-- MOSTRAR EN TARJETAS LA INFORMACIÓN DE ARRIBA  -->
                <strong>Vestido dama de color:</strong><?php echo $vestido ?> <br> <!-- MOSTRAR EN TARJETAS LA INFORMACIÓN DE ARRIBA  -->
                <strong>Buso deportivo dama de color:</strong><?php  echo $buso ?>  <br> <!-- MOSTRAR EN TARJETAS LA INFORMACIÓN DE ARRIBA  -->
                <strong>Blusa floreada dama de color: </strong><?php  echo $blusa ?>  <br> <!-- MOSTRAR EN TARJETAS LA INFORMACIÓN DE ARRIBA  -->
                <strong>Zapatos hombre de color: </strong><?php  echo $zapatos?>  <br> <!-- MOSTRAR EN TARJETAS LA INFORMACIÓN DE ARRIBA  -->
                <strong>Zapatos dama de color: </strong><?php  echo $zapatosdama ?>  <br> <!-- MOSTRAR EN TARJETAS LA INFORMACIÓN DE ARRIBA  -->
                <strong>Abrigo dama de color: </strong><?php  echo $abrigo ?>  <br> <!-- MOSTRAR EN TARJETAS LA INFORMACIÓN DE ARRIBA  -->
                <strong>Conjunto deportivo hombre de color: </strong><?php  echo $conjuntod ?>  <br> <!-- MOSTRAR EN TARJETAS LA INFORMACIÓN DE ARRIBA  -->
                <strong>Conjunto elegante dama de color: </strong><?php  echo $conjuntoe ?>  <br> <!-- MOSTRAR EN TARJETAS LA INFORMACIÓN DE ARRIBA  -->
                <strong>Chaqueta hombre de color: </strong><?php  echo $chaqueta ?>  <br> <!-- MOSTRAR EN TARJETAS LA INFORMACIÓN DE ARRIBA  -->
                
            </p>
            <!-- Button trigger modal --> <!-- EJEMPLO BOTON QUE ESTA ASOCIADO CON MODAL  -->
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Pagar
            </button>

            <!-- Modal --> <!-- ejemplo de reemplazo de alert sacado de bootstrap -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Estado de Pago</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    Pago exitoso
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                  </div>
                </div>
              </div>
            </div>
      </div>
    </div>
</div>