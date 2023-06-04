<?php 

include('../conexion/conexion.php');
include('../conexion/alertas.php');

date_default_timezone_set("America/Bogota");
$fechaactual = date("Y-m-d");
$nom_producto=($_POST['nom_producto']);
$referencia=($_POST['referencia']);
$precio=($_POST['precio']);
$peso=($_POST['peso']);
$categoria=($_POST['categoria']);
$stock=($_POST['stock']);




$creaproducto = "INSERT INTO inventario (nom_producto,referencia,precio, peso , categoria, stock , fecha_creacion)
 VALUES ('$nom_producto','$referencia','$precio','$peso','$categoria','$stock','$fechaactual')";
$crea = mysqli_query($conexion,$creaproducto) or die(mysqli_error());


  echo  '<script>
       jQuery(function(){
           swal({type: "success",
                 icon: "success",
               title: "Correcto!",
               text: "Su producto ha sido creado correctamente",
 
           }).then(function() {
               window.location.href = "../inventario.php";
           });
       });
 
       </script>';

 


 
 



    