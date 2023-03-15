<!DOCTYPE html>
<!-- Created By Dragon perrones -->
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

  <?php
  $usuario = $_GET["usuario"];

  echo "<h2 style='text-align:center;'><span style='color:#FFFFFF';>Esta jugando: <span style='color:#35FFFC';>$usuario </h2>";

  //Declarar variables de base de datos
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

  //$query = mysqli_query($conn, "UPDATE registro_usuario SET puntos = puntos + 10 WHERE usuario = '$usuario'");
  //$sql = "UPDATE registro_usuario SET puntos = puntos + 10 WHERE usuario = '$usuario'"
  ?>


  
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
      <a href="buzon.php">
        <i class="fas fa-stream"></i>
        <span>Anuncios</span>
      </a>
      <a href="clasificacion.php">
         <i class="fas fa-file"></i>
        <span>clasificación</span>
      </a>
      <a href="contacto.html">
        <i class="fas fa-dice"></i>
        <span>Contacto</span>
      </a>
      </a>
    </div>

    <link rel="stylesheet" href="tabla2.css">
    <div id="main-container" >
    <table class='table'>
    <tr>
        <td id='hp1'></td>
        <td id='hp2'></td>
    </tr>
    <tr>
        <td id='pk1'></td>
        <td id='pk2'></td>
    </tr>
    <tr>
        <td colspan='2' id='comment'></td>
    </tr>
    <tr>
        <td>
            <input type='button' class='btn' id='m0'>
            <input type='button' class='btn' id='m1'>
            <input type='button' class='btn' id='m2'>
            <input type='button' class='btn' id='m3'>

</div>


<td>
    <button onclick="location.href='index.html'"><img src="Icon/escape.png" height="50" width="50"></button>
    <button onclick="enableAutoplay()"><img src="Icon/play.png" height ="50" width="30" /></button> 
     <button onclick="pauseAudio()" ><img src="Icon/pause.png" height ="50" width="30" /></button> 
</td>




        </td>
    </tr>
      
</table>
</div>



<div class="btn2">
<audio id="myAudio" >
  <source src="Audio/weekends.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio><br>
</div>




<!--
<div>
 <audio id="intro" src="" autoplay></audio>
  <center> <audio src="Audio/weekends.mp3" controls="controls" type="audio/mp3" autoplay="autoplay">
</audio></center>    
</div>
-->





</body>
</html>
<script>
var x = document.getElementById("myAudio");

function enableAutoplay() { 
  x.autoplay = true;
  x.load();
}
function pauseAudio() {
    x.autoplay = true;
    x.pause();
}
 
</script>





<style>
    th, td{
        margin: center;
         background-image: url('https://cdn.pixabay.com/photo/2015/09/24/12/33/background-955454__340.jpg');
        display: table-cell;
        vertical-align: inherit;
    }
    .button{
        width: 100%;
        display: block;
        place-content: center;
        left: 0px;
        background-color: white;

    }
    
    table.table{
        margin-left: center;
        font-size: 30px;
        padding: center;
        margin-right: 400px;
    }
</style>

<script>
    class Pokemon{
        constructor(name, sprite, hp, moves){
            this.name = name;
            this.sprite = sprite;
            this.hp = hp;
            this.fullhp = hp;
            this.moves = moves;
        }
    }

    let pkmList = [
    ['Yasuo', 'https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/f76d9910-0432-4cfe-9876-5e56c6d5334f/da5vmuh-27d5aa71-55c5-45aa-affb-334cc8c840f8.gif?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2Y3NmQ5OTEwLTA0MzItNGNmZS05ODc2LTVlNTZjNmQ1MzM0ZlwvZGE1dm11aC0yN2Q1YWE3MS01NWM1LTQ1YWEtYWZmYi0zMzRjYzhjODQwZjguZ2lmIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.3uX6U_iPR4KfXhBy2dKjLfYyWWk3TvjjxMLvUWEoPdQ' , 500,[
    ['Tempestad de Acero', 'fly', 85, 0.95],
        ['Muro de Viento', 'normal', 65, 0.95],
        ['Hoja Cortante', 'fly', 80, 0.85],
        ['Ultimo Aliento', 'fly', 100, ]
    ]],
    ['Teemonio', 'https://thumbs.gfycat.com/FluidWhisperedKestrel-size_restricted.gif', 500, [
        ['Dardo Cegador', 'distance', 90, 0.95],
        ['Movimiento Rapido', 'normal', 80, 0.95],
        ['Tiro Toxico', 'poison', 75, 0.95],
        ['Trampa Ponzoñosa', 'explo', 80, 0.95]
    ]],
    ['Soraka', 'https://4.bp.blogspot.com/-6-BthhL4q38/WBSLcXUUggI/AAAAAAAAXDA/rcy7oPBgnA8jirSofGJ3iGLdFe-Si31QQCLcB/s1600/3.gif', 500, [
        ['Invocacion Estelar', 'distance', 90, 0.95],
        ['Inyeccion Astral', 'explo', 90, 0.95],
        ['Equinox', 'explo', 100, 0.95],
        ['Plegaria', 'distance', 85, 0.95]
    ]],
    ['Annie', 'https://2.bp.blogspot.com/-qhE78ViVUqM/WBSLc45dX9I/AAAAAAAAXDk/h0Y5q6xeyHodUiQKjw33qyBGcSJMH8a8QCLcB/s1600/5.gif', 500, [
        ['Desintegracion', 'distance', 90, 0.95],
        ['Incineracion', 'explo', 90, 0.95],
        ['Golpe Fundido', 'rock', 100, 0.95],
        ['Tibbers', 'rock', 85, 0.95]
    ]]
    ];

    let typeMatch = {
        'Yasuo': [[''],['poison', 'rock'],['distance', 'explo']],
        'Teemonio': [[''],['fly', 'explo'],['water']],
        'Tristana': [[''],['fly', 'poison'],['explo', 'distance']],
        'Annie': [['explo'],['distance'],['normal', 'fly', 'poison', 'explo', 'rock']]
    }

function spawn(bool){
    let p = pkmList[Math.floor(Math.random()*pkmList.length)];
    let pkm = new Pokemon(p[0], p[1], p[2], p[3]);

    if(bool){
        for(i=0; i<4; i++){
            document.getElementById('m'+i).value = pkm.moves[i][0];
        }
    }
    return pkm;

}

let pk1 = spawn(true);

s1 = document.createElement('img');
s1.src = pk1.sprite;
document.getElementById('pk1').appendChild(s1);
document.getElementById('hp1').innerHTML = '<p>HP: ' + pk1.hp + '/' + pk1.fullhp + '</p>';


let pk2 = spawn(false);
s2 = document.createElement('img');
s2.src = pk2.sprite;
document.getElementById('pk2').appendChild(s2);
document.getElementById('hp2').innerHTML = '<p>HP: ' + pk2.hp + '/' + pk2.fullhp + '</p>';

for(i=0; i<4; i++){
    let btn = document.getElementById('m'+i);
    let move = pk1.moves[i];
    function addHandler(btn, move, pk1, pk2){
        btn.addEventListener('click', function(e){
            attack(move, pk1, pk2, 'hp2', '');
            setTimeout(attack,2000, pk2.moves[Math.floor(Math.random()*3)], pk2, pk1, 'hp1', ' ');
        });

    }
    addHandler(btn, move, pk1, pk2);
}



function attack(move, attacker, receiver, hp, owner){
    document.getElementById('comment').innerHTML = '<p>' + owner + attacker.name + ' usó '  + move[0] + '!</p>';
    if(Math.random() < move[3]){
        let power = move[2] += Math.floor(Math.random()*10);
        let rtype = typeMatch[receiver.name];
        let mtype = move[1];
        let scale = 1;

        for(i=0; i<rtype.length; i++){
            if(rtype[i].includes(mtype)){
                switch(i){
                    case 0: 
                        scale = 0;
                        setTimeout(function(){
                            document.getElementById('comment').innerHTML = '<p>No tuvo efecto :(</p>';
                        },1500);
                        break;
                    case 1: 
                        scale = 2;
                        setTimeout(function(){
                            document.getElementById('comment').innerHTML = '<p>Es muy efectivo!</p>';
                        },1500);
                        break;
                    case 2: 
                    scale = 0.5;
                        setTimeout(function(){
                            document.getElementById('comment').innerHTML = '<p>No es muy efectivo!</p>';
                        },1500);
                        break;
                }
                break;
            }
        }
        power *= scale;
        receiver.hp -= Math.floor(power);
        document.getElementById(hp).innerHTML = '<p>HP: ' + receiver.hp + '/' + receiver.fullhp + '</p>';
    }
    else{
        setTimeout(function(){
            document.getElementById('comment').innerHTML = '<p>Oh no! Fallo el ataque!</p>';
        })
    }
    checkWinner(hp);


}


function checkWinner(hp){
    let f = (pk1.hp <=0) ? pk1 : (pk2.hp<=0) ? pk2 : false;
    if(f!=false){
        alert('Fin: ' + f.name +' se murio :( , sumas 10 puntos de XP C:');

        <?php $query = mysqli_query($conn, "UPDATE registro_usuario SET puntos = puntos + 10 WHERE usuario = '$usuario'");   ?>



        document.getElementById(hp).innerHTML = '<p>HP: 0/' + f.fullhp + '</p>';
        setTimeout(function(){
            location.reload();
        },1500)
    }

}
</script>