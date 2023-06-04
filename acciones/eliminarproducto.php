<?php 

include('../conexion/conexion.php');
include('../conexion/alertas.php');
$ID=$_GET['ID'];

$inactivarperfil = "DELETE FROM inventario  
WHERE ID = '$ID'";
$inactivarp = mysqli_query($conexion,$inactivarperfil) or die(mysqli_error());




  echo  '<script>
       jQuery(function(){
           swal({type: "success",
                 icon: "success",
               title: "Correcto!",
               text: "Su producto ha sido eliminado correctamente",
 
           }).then(function() {
               window.location.href = "../inventario.php";
           });
       });
 
       </script>';

 


 
 



    