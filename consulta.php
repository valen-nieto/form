<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

echo '<pre>';
var_dump($_POST);
$nombre = trim($_POST['nombre']);
$apellido = trim($_POST['apellido']);

if(! empty ( trim ($_POST['nombre'] ) )
 && ! empty ( trim ($_POST['apellido'] ) ) 
 && ! empty ( trim ($_POST['email'] ) )
 && ! empty ( trim ($_POST['date_of_birth'] ))) {
    echo 'informacion recibida';} else {echo 'faltan datos';
}
echo'<pre>';
if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    echo 'email correcto<br><br>';}
    else{echo 'email No es correcto <br>';
    }
    ?>



