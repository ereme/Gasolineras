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

$g = new Gasolinera ("Alburquerque", "Galp");

$c = new Cliente ("Jose", "48795135F");
$c1 = new Cliente ("María", "58798508F");
$c2 = new Cliente ("Olga", "31343231J");
$c3 = new Cliente ("Carlos", "31343298V");

$rc = new Repostaje (50, "20-03-2018");
$r1c = new Repostaje (40, "29-03-2018");
$rc1 = new Repostaje (25, "15-01-2018");
$r1c1 = new Repostaje (35, "20-02-2018");
$rc2 = new Repostaje (100, "18-03-2018");
$rc3 = new Repostaje (20, "24-02-2018");

$c->addRepostaje ($rc);
$c->addRepostaje ($r1c);
$c1->addRepostaje ($rc1);
$c1->addRepostaje ($r1c1);
$c2->addRepostaje ($rc2);

$c3->addRepostaje ($rc3);


$g->addCliente ($c);
$g->addCliente ($c1);
$g->addCliente ($c2);
$g->addCliente ($c3);

$e = new Empleado ("Juan", "8D8215EG12");
$e1 = new Empleado ("Antonio", "5D8F5U5I55");
$e2 = new Empleado ("Andrea", "9S425EG12");
$e3 = new Empleado ("Pepe", "42K52234D");
$e4 = new Empleado ("Sonia", "23469P4392");

$g->addEmpleado ($e);
$g->addEmpleado ($e1);
$g->addEmpleado ($e2);
$g->addEmpleado ($e3);
$g->addEmpleado ($e4);

$s = new SurtidorGasoil (1.04, false);
$s1 = new SurtidorGasolina (1.42, 95);

$g->addSurtidor ($s);
$g->addSurtidor ($s1);

$g->mostrarDatosGasolinera ();

if (isset($_POST['boton'])){
    $g->mostrarClientes ();
}

if (isset($_POST['boton1'])){
    $g->mostrarEmpleados ();
}

if (isset($_POST['boton2'])){
    $g->mostrarPrecios ();
}

?>

<right><form action="" method="post">
    <input type="submit" value="Mostrar Clientes" name="boton" id="boton" />
</form> </right>

<right><form action="" method="post">
    <input type="submit" value="Mostrar Empleados" name="boton1" id="boton1" />
</form> </right>

<right><form action="" method="post">
    <input type="submit" value="Mostrar Precios" name="boton2" id="boton2" />
</form> </right>

<br> 

</body>

</html>