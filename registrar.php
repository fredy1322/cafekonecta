<?php

include("body.php");
include("footer.php");
include("conexion/conexion.php");
// cuenta productos
$productos = "SELECT * FROM inventario";
if ($result=mysqli_query($conexion,$productos)) {
    $totalproductos=mysqli_num_rows($result);

}


$masvendido2 = "SELECT  nom_producto
, SUM(unidadesvendidas) unidadesvendidas
FROM   VENTAS
GROUP  BY nom_producto
ORDER  BY unidadesvendidas DESC LIMIT 1;";
$resultado2 = $conexion->query($masvendido2) or die (mysqli_error($conexion));
    while ($filas2 = mysqli_fetch_array($resultado2)) {

        $masvendido = $filas2['nom_producto']; }
?>
     
<div class="contenedortitulo"  >
    <div class="titulotablas"  >
        <h5 class="tablas"> <b> Modulo de ventas<br>  <small id="fileHelp" class="text-muted">Seleccione el producto y las cantidades</small>  </div>   
            </b></h5> </b></h5> Actualmente el articulo mas vendido es: <b> <?php echo $masvendido; ?></b>  </div>
            
            <p style="margin-top:120px">  

<div >
 <form class="contenedortitulo"  method="POST" action="acciones/vender.php" style="width: auto !important; align-items: left !important;">


<?php
      $listaprod="SELECT * FROM inventario";
                $resultado = $conexion->query($listaprod) or die (mysqli_error($conexion));
                      while ($filas = mysqli_fetch_array($resultado)) {  
                      echo "<label for='recipient-name' class='labprd'>";
                      echo $filas['nom_producto'].'</label>';
                      echo "<input class='product' name='".$filas['ID']."' type='number' > <b class='fa fa-plus' id='boton'></b>";                      
                      }

                      
                      ?>  
      <br><button type="submit" class="btn btn-primary">VENDER</button>

</form>
                    </div>
                  

             
