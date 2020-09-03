<?php





//Redrecciona a la url que se especifica en el parámetro $url
function redireccionarPagina($url)
{
    header('Location: ' + $url);
}


//Obtiene la pagina que se ejecuta

function obtenerPaginaactual()
{
    $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace('.php', '', $archivo);
    return $pagina;
}




// Suscriptores 
require '../clases/suscriptores.php';

$email = 'danielperezvargas@hotmail.com';
$nombre = 'daniel perez';

$suscriptor = new suscriptor($email, $nombre);

echo $suscriptor->estatus;
