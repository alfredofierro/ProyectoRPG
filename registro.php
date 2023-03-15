<html>
    <body>
    <?php


    //Declarar variables de base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "juegorpg";



    //Declaración de variables de campos HTML
    $usuario = $_POST["usuario"];
    $contra = $_POST["contra"];
    $correo = $_POST["correo"];

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }

    //Se declaran los campos con los datos que se guardarán
    $sql = "INSERT INTO registro_usuario (usuario, contra, correo)
    VALUES ('$usuario', '$contra', '$correo')";

    //Se comprueba si la info se envió correctamente a la base de datos
    if (mysqli_query($conn, $sql)) {
    echo "<h1>Usuario registrado exitosamente.</h1>";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    //Se cierra la base de datos
    mysqli_close($conn);

    ?>

    <!--Este form redirecciona al inicio de la página-->
    <form action="index.html" method="post">
        <input type="submit" value="Ir al Inicio">
    </form>
    </body>
</html>