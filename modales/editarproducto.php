
<!--ventana para Update--->
<div class="modal fade" id="editarproducto<?php echo $filas['ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="backdrop2"> <div class="modal-dialog">  
    <div class="modal-content">
      <div class="modal-header" style="background-color: #000000eb;"> 
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="cierram" aria-hidden="true">&times;</span>
        </button>
        <h6 class="title-modal" style="color: #fff; text-align: center;">   
            Editar producto: <?php echo $filas['nom_producto']; ?>
        </h6>

      </div>
      <form method="POST" action="acciones/editarproducto.php?ID=<?php echo $filas['ID']; ?>">

            <div class="modal-body">

            <div class="form-group">
                  <label for="recipient-name" class="title-input">Nombre producto:</label>
                  <input type="text" name="nom_producto" class="form-control" value="<?php echo $filas['nom_producto']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="title-input">Referencia:</label>
                  <input type="text" name="referencia" class="form-control" value="<?php echo $filas['referencia']; ?>"  required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="title-input">Precio:</label>
                  <input type="text" name="precio" class="form-control" value="<?php echo $filas['precio']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="title-input">Peso:</label>
                  <input type="number" name="peso" class="form-control" value="<?php echo $filas['peso']; ?>"  required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="title-input">Categoria:</label>
                  <input type="text" name="categoria" class="form-control" value="<?php echo $filas['categoria']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="title-input">Stock:</label>
                  <input type="number" name="stock" class="form-control" value="<?php echo $filas['stock']; ?>" required="true">
                </div>
               
                
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </div>
       </form>

    </div>
  </div>
</div>
<!---fin ventana Update --->
