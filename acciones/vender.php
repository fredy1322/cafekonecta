<?php 

include('../conexion/conexion.php');
include('../conexion/alertas.php');

$sentencia="SELECT * FROM inventario";
$resultado = $conexion->query($sentencia);
 while ($filas = mysqli_fetch_array($resultado)) { 

 $variable = $filas['ID'];
 $stock = $filas['stock'];
 $nom_producto = $filas['nom_producto'];


$cantidadvendida = $_POST[$variable]; 

$resul = (int)$stock - (int)$cantidadvendida;
if($cantidadvendida >'0' AND $stock == '0') { 
    $resul = '0';
    
    $var = json_encode($resul);
    $product = $nom_producto;
    
    echo '
    <script>
        console.log("var",'.$var.');
        alert("No es posible vender: '.$product.' ya que no hay unidades en el inventario. Si seleccionó mas productos estos fueron vendidos correctamente.");
    </script> ';
    } {


$actualizastock = "UPDATE inventario SET 
stock =  '$resul'
WHERE ID = '$variable'";
 $inactivarp = mysqli_query($conexion,$actualizastock);

 if($cantidadvendida>'0') {
 $insertaventa = "INSERT into ventas  
 (nom_producto, unidadesvendidas) VALUES ('$nom_producto', '$cantidadvendida')";
$crea = mysqli_query($conexion,$insertaventa);

 }
 }  
}


echo  '<script>
jQuery(function(){
    swal({type: "success",
          icon: "success",
        title: "Venta gestionada!",
        text: "La venta fue gestionada con exito.",

    }).then(function() {
        window.location.href = "../registrar.php";
    });
});

</script>';









 



    