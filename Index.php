<html>
    <head>
        <title> Gasolineras </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
</html>
<body>

<?php

require_once ("Gasolinera.php");
include_once ("Style.css");

echo "<br><br><br>";


if (isset($_POST['Gasolinera Badajoz'])){
    $url = GasolineraBadajoz.php; 
}

if (isset($_POST['Gasolinera Alburquerque'])){
    $url = GasolineraAlburquerque.php; 
}


?>
<center>
<form  action="GasolineraAlburquerque.php" method="POST"> 
<input name="Gasolinera Alburquerque" type="submit" value="Gasolinera Alburquerque" id=boton6 /> <br>
</form>

<form  action="GasolineraBadajoz.php" method="POST"> 
<input name="Gasolinera Badajoz" type="submit" value="Gasolinera Badajoz" id=boton7 /> <br>
</form>
</center>

<br> 

<center> <font color=black> <h1>Identificación</h1>
<form class="miform" action="procesos/procesa_login.php" method="POST">
<br />Usuario:
<br />
<input type="text" name="login">
<br />Contraseña:
<br />
<input type="password" name="pass">
<br />
<br />
<input class="boton" type="submit" value="Entrar">
</form>
</center> </font>

</body>

</html>