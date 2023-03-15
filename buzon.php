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
    background: rgba(0, 0, 0, 0.4) url("https://cdn.pixabay.com/photo/2015/07/06/13/58/mountains-833326_960_720.jpg");
    background-repeat: no-repeat size 100px;
    background-size: cover;
    background-blend-mode: darken;
    }
table {
  font-family: cursive;, sans-serif;
  border-collapse: collapse;
  width: 100%;
  color: white;
}


td {
  border: 1px solid #FC4A08;
  text-align: left;
  padding: 8px;
  background-color: transparent;
}

th {
  border: 1px solid #FC4A08;
  text-align: left;
  padding: 8px;
  background-color: #FCB608;
  color: white;
}

tr:nth-child(even) {
  background-color: transparent;
}
</style>
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

$sql = "SELECT Id_Buzon, Mensaje, Fecha, Autor
          FROM buzon";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
    echo "<table border='0'>";
        echo "<th>ID</th>";
        echo "<th>MENSAJE</th>";     
        echo "<th>FECHA</th>";
        echo "<th>AUTOR</th></tr>";
  while($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>" . $row["Id_Buzon"] . "</td>";
      echo "<td>" . $row["Mensaje"] . "</td>";
      echo "<td>" . $row["Fecha"] . "</td>";
      echo "<td>" . $row["Autor"] . "</td>";
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
        <input type="submit" value="Regresar al login.">    
    </form>    
</body>
</html>