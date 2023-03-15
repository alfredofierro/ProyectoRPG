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

    $usuario=$_POST['usuario'];
    $contra=$_POST['contra'];
    $correo=$_POST['correo'];


    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO registro_usuario (usuario, contra, correo)
        VALUES('$usuario', '$contra', '$correo')";
        //use exec() because no results are returned
        $conn->exec($sql);
        echo "<br><br><br><br><br> <h2>Usuario Creado existosamente !!!</h2>";
    } catch(PDOException $e) {
        echo /*$sql . */"<br>    Usuario o Correo ya registrados!!! <br>" /*. $e->getMessage()*/;
    }

    $conn = null;
?>

<br><br><br>    

    
    <div style="text-align:center;">
        <form action="PanelAdmin.html" method="POST">    
            <span><a href="PanelAdmin.html"></a></span>    
        </form>    
    </div>  
    
    
    
    
</body>    
</html>    