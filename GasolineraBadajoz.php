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

$g1 = new Gasolinera ("Badajoz", "Galp");

$cg = new Cliente ("Rubén", "48795135F");
$cg1 = new Cliente ("María", "58798508F");
$cg2 = new Cliente ("Miriam", "31343231J");
$cg3 = new Cliente ("Alberto", "31343298V");

$rgc = new Repostaje (60, "20-02-2018");
$rg1c = new Repostaje (30, "29-03-2017");
$rgc1 = new Repostaje (45, "11-01-2018");
$rg1c1 = new Repostaje (35, "20-01-2018");
$rgc2 = new Repostaje (10, "01-04-2018");
$rgc3 = new Repostaje (20, "24-03-2018");

$cg->addRepostaje ($rgc);
$cg->addRepostaje ($rg1c);
$cg1->addRepostaje ($rgc1);
$cg1->addRepostaje ($rg1c1);
$cg2->addRepostaje ($rgc2);
$cg3->addRepostaje ($rgc3);


$g1->addCliente ($cg);
$g1->addCliente ($cg1);
$g1->addCliente ($cg2);
$g1->addCliente ($cg3);

$eg = new Empleado ("Juan", "8D8215EG12");
$eg1 = new Empleado ("Guillermo", "5D8F5U5I55");
$eg2 = new Empleado ("Andrea", "9S425EG12");
$eg3 = new Empleado ("Vicente", "42K52234D");
$eg4 = new Empleado ("Patricia", "23469P4392");

$g1->addEmpleado ($eg);
$g1->addEmpleado ($eg1);
$g1->addEmpleado ($eg2);
$g1->addEmpleado ($eg3);
$g1->addEmpleado ($eg4);

$sg = new SurtidorGasoil (1.06, true);
$sg1 = new SurtidorGasolina (1.42, 95);

$g1->addSurtidor ($sg);
$g1->addSurtidor ($sg1);

$g1->mostrarDatosGasolinera ();

if (isset($_POST['boton3'])){
    $g1->mostrarClientes ();
}

if (isset($_POST['boton4'])){
    $g1->mostrarEmpleados ();
}

if (isset($_POST['boton5'])){
    $g1->mostrarPrecios ();
}

?>

<right><form action="" method="post">
    <input type="submit" value="Mostrar Clientes" name="boton3" id="boton3" />
</form> </right>

<right><form action="" method="post">
    <input type="submit" value="Mostrar Empleados" name="boton4" id="boton4" />
</form> </right>

<right><form action="" method="post">
    <input type="submit" value="Mostrar Precios" name="boton5" id="boton5" />
</form> </right>

<br> 