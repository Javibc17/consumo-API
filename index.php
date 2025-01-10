<?php

$url = "https://api.escuelajs.co/api/v1/products";
$response =file_get_contents($url);

if ($response !== false) {
    $data = json_decode($response, true);
}else{
    echo "No se pudo obtener informacion";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API</title>
</head>
<body>
    <div class="container">
      <table>
        <thead> 
          <tr> 
            <th>ID</th> 
            <th>Titulo</th>
            <th>Precio</th>
            <th>Descripcion</th>
            <th>Categoria</th>
          </tr> 
        </thead>
        <tbody>
          <?php foreach ($data as $product) : ?>

						<tr>
							<td><?php echo $product["id"] ?></td>
							<td><?php echo $product["title"] ?></td>
							<td><?php echo $product["price"] ?></td>
							<td><?php echo $product["description"] ?></td>
							<td><?php echo $product["category"]["name"] ?></td>
						</tr>

          <?php endforeach; ?>
     
        </tbody>
      </table>
   </div> 
  </body>
</html>