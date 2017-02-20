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
    <form autocomplete="off" method="POST" action="hallinta.php">
    Käyttäjätunnus:<br>
    <input type="input" name="login" value="" placeholder="Käyttäjätunnus">
    Salasana:<br>
    <input title="Salasana" type="password" name="passwd"
    value="">
    <button name="btn" value="1"><strong>Kirjaudu</strong></button>
    </form>

    </div>
  </li>
</ul>
</div>
</div>

</nav>
<article>

<div class="row">
<div class="small-12 columns">
<p align="center">Kokkola</p>
<h3>Toimielimet</h3>
<?php
  $my=mysqli_connect("localhost","data15","jNTKdg3NTbRBuVEn","data15");

  if($my->mysql_errno) {
  die("MySQL, virhe yhdeyden luonnissa:" . $my->connect_error);
  }

  $my->set_charset('utf8');
  $result = $my->query('SELECT toimielimet, date, tyyppi
                        FROM 6659_toimielimet');

  echo '<table>';
  echo '<tr><th>Toimielin</th><th>Päiväys</th><th>Dokumenttityyppi</th></tr>';

  while($t = $result->fetch_object()) {
  echo '<tr>';
  echo '<td>'.$t->toimielimet.'</td>';
  echo '<td>'.$t->date.'</td>';
  echo '<td>'.$t->tyyppi.'</td>';
  echo '</tr>';
  }
  echo '</table>';

  $my->close();
  ?>

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