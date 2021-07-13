<?php

  session_start();
  require_once "../../clases/Gestor.php";
  $Gestor = new Gestor();
  $id_archivo = $_POST['id_archivo'];
  $nombre_archivo = $Gestor->obtenNombreArchivo($id_archivo);
  $NomUsuario = $_SESSION['usuario'];

  $rutaEliminar = "../../archivos/".$NomUsuario."/".$nombre_archivo;

  if(unlink($rutaEliminar)){
      echo $Gestor-> eliminarRegistroArchivo($id_archivo);
  }else{
    echo 0;
  }
?>