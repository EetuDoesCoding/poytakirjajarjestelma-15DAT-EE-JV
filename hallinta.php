<?php

  include("config.php");

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title><?php $_SERVER['PHP_SELF'] ?></title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  
</head>
<body>
<header>
<div class="row">
<div class="small-12 columns">
<h1>Kokkolan Kaupungin Tietokanta</h1>
</div>
</div>
</header>
<nav>
<div class="row">
<div class="small-12 columns">
<ul>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn"
    onclick="myFunction()">Kirjaudu</a>
    <div class="dropdown-content" id="myDropdown">
    <p>Kirjauduttu hallintapaneeliin
    <br><br>
    <button onclick="window.location.href='?kill=user'"><strong>Kirjaudu Ulos</strong></button>
    
    </div>
  </li>
</ul>
</div>
</div>

</nav>
<article>

<article>
  <div class="row">
  <div class="small-12 columns">
  <h4><strong>Lisää uutinen</strong></h4>
  </div>
  </div>
  <div class="row">
  <div class="small-12 columns">
  <form>
  <input type="text" name="uutinen" placeholder="Uutinen tähän" value="<?=$_GET['uutinen']?>">
  <input type="text" name="uutinen" placeholder="Uutinen tähän" value="<?=$_GET['uutinen']?>">
  <input type="text" name="uutinen" placeholder="Uutinen tähän" value="<?=$_GET['uutinen']?>">
  
  <button class="primary button" type="submit" name="send" value="true">Lisää uutinen</button>
  </form>
  <?php
  $uutinen = $_GET['uutinen'];
  $send = $_GET['send'];

  if($send=='true') {

  $my=mysqli_connect("localhost","data15","jNTKdg3NTbRBuVEn","data15");

  if($my->mysql_errno) {
  die("MySQL, virhe yhdeyden luonnissa:" . $my->connect_error);
  }
  $my->set_charset('utf8');
  $sql = 'INSERT INTO 6659_autopelti_uutiset (uutinen)
          VALUES("'.$uutinen.'")';

  if($tulos = $my->query($sql)) {
  echo '<p>Lisäys onnistui!</p>';
  } else {
  echo '<p>Tapahtui virhe!</p>';
  }
  $my->close();
  }
  ?>
  </div>
  </div>


</article>

<script>

/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}



</script>
</body>
</html>