<h3>Eliminar</h3><br>
<form method="post">
    <p>
        <input class="form-control" placeholder="Correo" type="email" name="email">
    </p>
    <input style="width: 100%;" class="btn btn-primary" type="submit" name="eliminar" value="Eliminar" id="data">  
</form>

<?php

require("conect.php");

if (isset($_POST['eliminar']))
{
    $email = $_POST['email'];
    $cantReg = 0;

    if ($email == '') 
    {
        echo "<h3>No ha ingresado ningun correo</h3>";
    } else 
    {
        // consulta
        $consulta = "SELECT * FROM usuarios WHERE correo = '$email'";
        $resultado = mysqli_query($conexion, $consulta);

        while ($datos = mysqli_fetch_array($resultado))
        {
            $cantReg++;
        }
        
        if ($cantReg == 0)
        {
            echo "<h3>Usuario no registrado</h3>";
        } else {

            // eliminar
            $eliminar = "DELETE FROM usuarios WHERE correo = '$email'";
            $res = mysqli_query($conexion, $eliminar);
            echo "<h3>Usuario eliminado con éxito</h3>";
        }
    }
}

?>