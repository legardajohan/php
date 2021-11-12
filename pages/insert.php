        <h3>Registrate</h3><br>           
        
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
            <input style="width: 100%;" class="btn btn-primary" type="submit" name="registro" value="Registrarme" id="data">
    
        </form>

        <!-- code PHP -->
<?php

include("conect.php"); // archivo de conexion a la base de datos 

if (isset($_POST['registro'])) 
{
    if (strlen($_POST['email']) >= 1 && strlen($_POST['password']) >= 1 ) // validando que correo y clave tengan caracteres 
    {
        // datos del formulario asignados a una variable & con formato
        $name = trim($_POST['name']); 
        $lastname = trim($_POST['lastname']);
        $email = trim($_POST['email']);
        $password = $_POST['password'];
        $sexo = $_POST['sex'];

        // generar una consulta insert
        $consulta = "INSERT INTO usuarios (nombres, apellidos, correo, clave, sexo) VALUES ('$name', '$lastname', '$email', '$password', '$sexo') ";

        $resultado = mysqli_query($conexion, $consulta);

        if ($resultado) 
        {
            echo "<h2>¡Su registro fue exitoso!</h2>";
        } else {
            echo "<h2>¡Ups ha ocurrido un error!</h2>";
        }

    } else 
    {
        echo "<h2>¡No ha ingresado datos!</h2>";
    }
} 
?>
        <!-- fin code PHP -->
