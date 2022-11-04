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

<div>
<h1>Generador de PDF</h1>
<p></p>

</div>

<p>
Lorem ipsum dolor sit amet. Rem omnis sunt non dignissimos quam ex voluptates voluptatem vel galisum reiciendis. Quo harum nihil ut debitis doloribus et inventore dolores. Quo architecto blanditiis non velit quos sed animi mollitia eos odio voluptatem et omnis quod in illo consequatur quo quia cumque. 33 ratione suscipit ut officia mollitia cum totam voluptatem.

Ut dolor itaque non dolorem suscipit sed suscipit labore eos impedit corrupti aut necessitatibus consequatur sed sunt ipsam. Ut doloribus neque non similique tenetur et dolorum libero. 
</p><br>
<p>
Lorem ipsum dolor sit amet. Rem omnis sunt non dignissimos quam ex voluptates voluptatem vel galisum reiciendis. Quo harum nihil ut debitis doloribus et inventore dolores. Quo architecto blanditiis non velit quos sed animi mollitia eos odio voluptatem et omnis quod in illo consequatur quo quia cumque. 33 ratione suscipit ut officia mollitia cum totam voluptatem.

Ut dolor itaque non dolorem suscipit sed suscipit labore eos impedit corrupti aut necessitatibus consequatur sed sunt ipsam. Ut doloribus neque non similique tenetur et dolorum libero. 
</p></br>
<p>
Lorem ipsum dolor sit amet. Rem omnis sunt non dignissimos quam ex voluptates voluptatem vel galisum reiciendis. Quo harum nihil ut debitis doloribus et inventore dolores. Quo architecto blanditiis non velit quos sed animi mollitia eos odio voluptatem et omnis quod in illo consequatur quo quia cumque. 33 ratione suscipit ut officia mollitia cum totam voluptatem.

Ut dolor itaque non dolorem suscipit sed suscipit labore eos impedit corrupti aut necessitatibus consequatur sed sunt ipsam. Ut doloribus neque non similique tenetur et dolorum libero. 
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