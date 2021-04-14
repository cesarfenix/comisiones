<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<div class="container">
		<ul>
			<li>El valor de la venta fue : <?= $Comision->Venta() ?></li>
			<li>el porcentaje de comision fue : <?= $Comision->ValorComision() ?></li>
			<li>el valor a pagar es : <?= $Comision->PrecioComision() ?></li>
		</ul>
	</div>
</body>
</html>