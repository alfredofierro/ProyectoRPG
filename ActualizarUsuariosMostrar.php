<html>
  <body style="background-image: url(backgame.png); 
              background-repeat: no-repeat;
              background-size: cover;">
          
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "juegorpg";

    $idusuario = $_POST['idusuario'];

    $id=$_POST['idusuario'];
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "UPDATE registro_usuario SET idusuario=$id";
    $sql = "SELECT idusuario, usuario, contra, correo FROM registro_usuario WHERE idusuario=$id";
    $result = mysqli_query($conn, $sql);


    $usuario;
    $contra;
    $correo;


    if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
      
      
        
        $usuario = $row["usuario"];
        $contra = $row["contra"];
        $correo = $row["correo"];



      }
    } else {
      echo "0 Resultados.";
    }

    mysqli_close($conn);
    ?>       

    <form action="ActualizarUsuarios.php" method="POST">
      <div class="form">
        <link rel="stylesheet" href="./style-form.css">    
        <div class="title">Editar Usuario</div>
        <div class="subtitle">Complete el formulario.</div>

        <div class="input-container ic2">
          <input id="ausuario" name="ausuario" class="input" type="text" placeholder=" " value="<?=$usuario?>" />
          <div class="cut"></div>
          <label for="Usuario" class="placeholder">Usuario</label>
        </div>
        <div class="input-container ic2">
          <input id="acontra" name="acontra" class="input" type="text" placeholder=" " value="<?=$contra?>"/>
          <div class="cut"></div>
          <label for="Contra" class="placeholder">Contraseña</label>
        </div>
        <div class="input-container ic2">
          <input id="acorreo" name="acorreo"  class="input" type="text" placeholder=" " value="<?=$correo?>"/>
          <div class="cut cut-short"></div>
          <label for="Correo" class="placeholder">Correo</label>
        </div>
        

        
          
          <div style="text-align:center;">
          <form action="ActualizarProductos.php" method="POST">
            <button type="text" class="submit" value="<?=$idusuario?>" id="aidusuario" name="aidusuario">Actualizar</button>
          </form>

          <form action="PanelAdmin.html" method="POST">
            <button type="text" class="submit">No Actualizar</button>
          </form>
          </div>
      </div>
    </form>
  </body>
</html>