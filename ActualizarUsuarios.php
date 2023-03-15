<html>
<link rel="stylesheet" href="./style-button.css">
<link rel="stylesheet" href="./style-mostrar.css">
<body style="background-image: url(backgame.png); 
            background-repeat: no-repeat;
            background-size: cover;">

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "juegorpg";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$id= $_POST['aidusuario'];
$usuario= $_POST['ausuario'];
$contra= $_POST['acontra'];
$correo= $_POST['acorreo'];


if (!$conn) {
  die("Conexion fallida: " . mysqli_connect_error());
}

$sql = "UPDATE registro_usuario SET usuario= '$usuario', contra= '$contra', correo= '$correo' WHERE idusuario= $id";

if (mysqli_query($conn, $sql)) {
  echo "<br><br><br><br><br> <h2>Usuario Editado existosamente !!!</h2>";
} else {
  echo "<br><br><br><br><br> <h2>Error al Editar Usuario !!!</h2>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

  <br><br><br>    

    
  <div style="text-align:center;">
    <form action="PanelAdmin.html" method="POST">    
      <span><a href="PanelAdmin.html"></a></span>    
    </form>    
  </div> 

</body>
</html>