<html>
<head>
  <meta charset="UTF-8">
  <title>TODOS LOS PRODUCTOS</title>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="./style-mostrar.css">
  <link rel="stylesheet" href="./style-button.css">
</head>
<body style="background-image: url(backgame.png); 
            background-repeat: no-repeat;
            background-size: cover;">

<div class="container">
  <h2>Registro de Usuario <small>por busqueda</small></h2>
        
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "juegorpg";

  $idusuario=$_POST['idusuario'];
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "SELECT idusuario, usuario, contra, correo , puntos FROM registro_usuario WHERE idusuario=$idusuario";
  $result = mysqli_query($conn, $sql);


  echo "<div class=\"container\">" ;

  echo "<ul class=\"responsive-table\">";

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
      echo "<li class=\"table-header\">";
          echo "<div class=\"col col-1\" >ID</div>";
          echo "<div class=\"col col-2\" >USERNAME</div>";     
          echo "<div class=\"col col-2\" >CONTRASEÑA</div>";
          echo "<div class=\"col col-3\" >CORREO</div>";
          echo "<div class=\"col col-2\" >PUNTOS</div>";
          echo "</li>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<li class=\"table-row\">";
        echo "<div class=\"col col-1\" data-label=\"ID\">" . $row["idusuario"] . "</div>";
        echo "<div class=\"col col-2\" data-label=\"NOMBRE\">" . $row["usuario"] . "</div>";
        echo "<div class=\"col col-2\" data-label=\"NOMBRE\">" . $row["contra"] . "</div>";
        echo "<div class=\"col col-3\" data-label=\"PRECIO\">" . $row["correo"] . "</div>";
        echo "<div class=\"col col-2\" data-label=\"NOMBRE\">" . $row["puntos"] . "</div>";
        echo "</li>";
    }
    echo "</ul>"; 

  } else {
    echo "<br><h2>Usuario NO existente.</h2><br>";
  }

  mysqli_close($conn);



  
 echo "</div>";  


  ?>       
</div>


<div style="text-align:center;">
    <form action="PanelAdmin.html" method="POST">    
      <span><a href="PanelAdmin.html"></a></span>    
    </form>    
  </div>
<br>       
</body>
</html>