
<!--ventana para Update--->
<div class="modal fade" id="eliminarproducto<?php echo $filas['ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="backdrop2"> <div class="modal-dialog">  
    <div class="modal-content">
      <div class="modal-header" style="background-color: #000000eb;"> 
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="cierram" aria-hidden="true">&times;</span>
        </button>
        <h6 class="title-modal" style="color: #fff; text-align: center;">   
            Eliminar producto: <?php echo $filas['nom_producto']; ?>
        </h6>

      </div>
      <form method="POST" action="acciones/eliminarproducto.php?ID=<?php echo $filas['ID']; ?>">

            <div class="modal-body">

           ¿Desea eliminar este producto?
               
                
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-primary">Estoy seguro!</button>
            </div>
       </form>

    </div>
  </div>
</div>  
<!---fin ventana Update --->
