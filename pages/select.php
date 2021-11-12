<h3>Consultar</h3><br>
<form method="post">
    <p>
        <input class="form-control" placeholder="Correo" type="email" name="email">
    </p>
    <input style="width: 100%;" class="btn btn-primary" type="submit" name="consultar" value="Consultar" id="data">  
</form>

<?php

require("conect.php");

if (isset($_POST['consultar']))
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
            echo $datos['nombres'] . '<br>';
            echo $datos['apellidos'] . '<br>';
            echo $datos['sexo'] . '<br>';
            echo $datos['correo'] . '<br>';
            $cantReg++; 
        }

        if ($cantReg == 0) 
        { 
            echo "<h3>Usuario no registrado</h3>";
        }
    }
}

?>