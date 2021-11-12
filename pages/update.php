<h3>Actualizar</h3><br>           
    
    <!-- Elementos del formulario -->
    <form method="post">
        <!-- text -->
        <p> 
            <input class="form-control" placeholder="Nombre" type="text" name="name">
        </p>

        <p>
            <input class="form-control" placeholder="Apellidos" type="text" name="lastname">
        </p>

        <p>
            <input class="form-control" placeholder="Correo" type="email" name="email">
        </p>

        <!-- password -->
        <p>
            <input class="form-control" placeholder="Contraseña" type="password" name="password" id="pass">
        </p>

        <!-- radio 
        <p class="h6">Sexo</p>
        <p>
            <input class="form-check-input" type="radio" name="sex" value="men"> Hombre
            <input class="form-check-input" type="radio" name="sex" value="women"> Mujer
            <input class="form-check-input" type="radio" name="sex" value="other"> Otro
        </p> -->

        <p>
            <select class="form-select" name="sex" aria-placeholder="Sexo: ">
                <option selected>Genero</option>
                <option value="hombre">Hombre</option>
                <option value="mujer">Mujer</option>
                <option value="otro">Otro</option>
            </select>
        </p>

        <!-- boton -->
        <input style="width: 100%;" class="btn btn-primary" type="submit" name="actualizar" value="Actualizar" id="data">

    </form>

    <?php

include("conect.php");

if (isset($_POST['actualizar']))
{
    if (strlen($_POST['email']) >= 1 && strlen($_POST['password']) >= 1 ) // validando que correo y clave tengan caracteres 
    {
        // datos del formulario asignados a una variable & con formato
        $name = trim($_POST['name']); 
        $lastname = trim($_POST['lastname']);
        $email = trim($_POST['email']);
        $password = $_POST['password'];
        $sexo = $_POST['sex'];
        $cantReg = 0;

        // consulta
        $consulta = "SELECT * FROM usuarios WHERE correo = '$email'";
        $resultado = mysqli_query($conexion, $consulta);

        while ($datos = mysqli_fetch_array($resultado))
        {
            $cantReg++;
        }
        
        if ($cantReg == 0)
        {
            echo "<h3>Usuario no existe</h3>";
        } else 
        {
            // actualizar 
            $actualizar = "UPDATE usuarios Set 
            nombres = '$name',
            apellidos = '$lastname', 
            correo = '$email', 
            clave = '$password',
            sexo = '$sexo'
            WHERE correo = '$email'";

            $res = mysqli_query($conexion, $actualizar);
            echo "<h3>Usuario actualizado con éxito</h3>";
        }        

    } else 
    {
        echo "<h2>¡No ha ingresado datos!</h2>";
    }
}

?>

