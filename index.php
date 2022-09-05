<?php

require 'vendor/autoload.php';

$html='

<html>
<head>
<meta charset="utf-8">
<style>
</style>
</head>
<body>

<h1>PDF realizado con código puro</h1>
<p>
La bandera de Dominica tiene un fondo verde y tres líneas (una amarilla, una negra y la otra blanca) atravesando su centro de izquierda a derecha, y nuevamente de arriba abajo. En el centro, hay un círculo rojo con diez estrellas verdes en su borde y un loro sisserou en su centro
</p><br>
<p>
La bandera de Dominica tiene un fondo verde y tres líneas (una amarilla, una negra y la otra blanca) atravesando su centro de izquierda a derecha, y nuevamente de arriba abajo. En el centro, hay un círculo rojo con diez estrellas verdes en su borde y un loro sisserou en su centro.
</p></br>
<p>
La bandera de Dominica tiene un fondo verde y tres líneas (una amarilla, una negra y la otra blanca) atravesando su centro de izquierda a derecha, y nuevamente de 
</p>
</body>
</html>

';

use Dompdf\Dompdf;
$dompdf= new Dompdf();
$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream("documento.pdf", array('Attachment' =>'0'));

?>