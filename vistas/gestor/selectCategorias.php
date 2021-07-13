<?php
    session_start();
    require_once "../../clases/Conexion.php";

    $conexion = new Conectar();
    $conexion = $conexion->conexion();

    $idUsuario = $_SESSION['idUsuario'];
    $sql = "SELECT id_categoria, nombre_categoria FROM t_categoria WHERE id_usuario = '$idUsuario'";
    $result = mysqli_query($conexion,$sql);

?>
<!-- Creacion del selec para que el usuario pueda escoger en que ctaegoria quiere guardar
el archivo -->

<select name="categoriasArchivos" id="categoriasArchivos" class="form-control">
    <?php
        while ($mostrar = mysqli_fetch_array($result)){
        $id_categoria = $mostrar['id_categoria'];
    ?>
        <option value="<?php echo $id_categoria?>"><?php echo $mostrar['nombre_categoria']; ?></option>
    <?php
        }
    ?>
</select>
