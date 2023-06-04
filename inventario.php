<?php

include("body.php");
include("footer.php");
include("conexion/conexion.php");
include('modales/crearproducto.php');


// cuenta productos
$productos = "SELECT * FROM inventario";
if ($result=mysqli_query($conexion,$productos)) {
    $totalproductos=mysqli_num_rows($result);

}


// max stock

$maxstock2 = "SELECT  nom_producto
, max(stock) stock
FROM   inventario
GROUP  BY nom_producto
ORDER  BY stock DESC LIMIT 1;";
$resultado2 = $conexion->query($maxstock2) or die (mysqli_error($conexion));
    while ($filas2 = mysqli_fetch_array($resultado2)) {

        $maxstock = $filas2['nom_producto']; }

?>

            <div class="contenedortitulo">
            <div class="titulotablas" >
            <h5 class="tablas"> <b> Lista de productos <br>  <small id="fileHelp" class="text-muted">Cantidad de productos  : <?php echo $totalproductos; ?></small>  </div>   
            </b></h5> Actualmente el articulo con mas stock es: <b> <?php echo $maxstock; ?></b>
            <div type="button" class="opciones" title="agregar" data-toggle="modal" data-target="#crearproducto"></div> 
             
            </div>
            
            <p style="margin-top:85px"> 
                <!-- tablas y consultas-->
            
                <div id="table-scroll" class="table-scroll"  > 
                    
            <table class="table table-hover" > 
            
            
            <caption>
        
            <thead>
                <tr>

                    <th colspan="2"> </th>
                    <th> Id</th>
                    <th> Producto</th>
                    <th> Referencia</th>
                    <th> Precio</th>
                    <th> Peso</th>
                    <th> Categoria</th>
                    <th> Stock</th> 
                    <th> Fecha creacion</th>       


        </thead>

        
    <tbody >
        <?php
    $sentencia="SELECT * FROM inventario";
$resultado = $conexion->query($sentencia) or die (mysqli_error($conexion));
    while ($filas = mysqli_fetch_array($resultado)) {  ?>

                    <tr class="change">
                    <td> 
                        <div type="button" class="editar" title="<?php echo $filas['ID']; ?>" data-toggle="modal" data-target="#editarproducto<?php echo $filas['ID']; ?>"> </div> <?php  include('modales/editarproducto.php'); ?>
                    </td> 
                    <td> 
                        <div type="button" class="eliminar" title="eliminar" data-toggle="modal" data-target="#eliminarproducto<?php echo $filas['ID']; ?>"> </div> <?php  include('modales/eliminarproducto.php'); ?>
                    </td> 
                    
                        <td class="centered fontSize-small1"><?php
                          $cod = $filas['ID'];
                          $consultas = "SELECT * FROM inventario WHERE ID = $cod";
                        if ($result=mysqli_query($conexion,$consultas)) {
                            $totalconsultas=mysqli_num_rows($result); }
                        
                        echo $filas['ID']."</td>";
                        echo "<td>".$filas['nom_producto']."</td>";
                        echo "<td>".$filas['referencia']."</td>";
                        echo "<td>".$filas['precio']."</td>";
                        echo "<td>".$filas['peso']."</td>";
                        echo "<td>".$filas['categoria']."</td>";
                        echo "<td>".$filas['stock']."</td>";
                        echo "<td>".$filas['fecha_creacion']."</td>";

 } ?>

                    </tbody>
                    </caption>  

        </table> 
        </div>