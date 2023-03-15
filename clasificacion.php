  <!DOCTYPE html>
    <body>

<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- <title>Responsive Sidebar Menu</title> -->
    <link rel="stylesheet" href="style2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" type="text/css" href="fuentes.css">
  </head>
  <body>

  <style>
    body{
    background: rgba(0, 0, 0, 0.4) url("https://cdn.pixabay.com/photo/2018/08/23/07/35/thunderstorm-3625405_960_720.jpg");
    background-repeat: no-repeat size 100px;
    background-size: cover;
    background-blend-mode: darken;
    }
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 90%;
}


td {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  background-color: #f2d0b6;
}

th {
  border: 1px solid #ff6e77;
  text-align: left;
  padding: 8px;
  background-color: tomato;
  color: white;
}

tr:nth-child(even) {
  background-color: #f2d0b6;
}
</style>

</body>
</html>
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "juegorpg";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT usuario, puntos FROM registro_usuario WHERE puntos>5 ORDER BY puntos DESC";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
    echo "<table border='0'>";
        //echo "<th>ID</th>";
        echo "<th>USUARIO</th>";     
        echo "<th>PUNTOS</th>";
        //echo "<th>FECHA</th></tr>";
  while($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      //echo "<td>" . $row["idpuntos"] . "</td>";
      echo "<td>" . $row["usuario"] . "</td>";
      echo "<td>" . $row["puntos"] . "</td>";
      //echo "<td>" . $row["fecha"] . "</td>";
      echo "</tr>";
  }
    echo "</table>";
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
    
<br><br><br>    

    
    <form action="index.html" method="POST">    
        <input type="submit" value="Regresar al LOGIN">    
    </form>    
</body>
</html>