<?php 

include('../conexion/conexion.php');
include('../conexion/alertas.php');
$ID=$_GET['ID'];
$nom_producto=($_POST['nom_producto']);
$referencia=($_POST['referencia']);
$precio=($_POST['precio']);
$peso=($_POST['peso']);
$categoria=($_POST['categoria']);
$stock=($_POST['stock']);



$actualizarproducto = "UPDATE inventario SET 
nom_producto='$nom_producto' ,
referencia='$referencia' ,
precio='$precio' ,
peso='$peso' ,
categoria='$categoria' ,
stock='$stock' 
WHERE ID = '$ID'";
$inactivarp = mysqli_query($conexion,$actualizarproducto) or die(mysqli_error());




  echo  '<script>
       jQuery(function(){
           swal({type: "success",
                 icon: "success",
               title: "Correcto!",
               text: "Su producto ha sido modificado",
 
           }).then(function() {
               window.location.href = "../inventario.php";
           });
       });
 
       </script>';

 


 
 



    