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

$id = $_POST['idusuario'];



if (!$conn) {
  die("Conexion fallida: " . mysqli_connect_error());
}

$sql = "DELETE FROM registro_usuario 
        WHERE idusuario=$id";

if (mysqli_query($conn, $sql)) {
  echo "<br><br><br><br><br> <h2>Usuario eliminado existosamente !!!</h2>";
} else {
  echo "<br><br><br><br><br> <h2>Error al eliminar Usuario !!!</h2> " . mysqli_error($conn);
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