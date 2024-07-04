<!DOCTYPE html>
<html>
<head>
    <title><?php echo $producto['nombre']; ?></title>
</head>
<body>
    <h1><?php echo $producto['nombre']; ?></h1>
    <p><strong>Precio:</strong> <?php echo $producto['precio']; ?></p>
    <p><strong>Stock:</strong> <?php echo $producto['stock']; ?></p>
    <p><strong>Código:</strong> <?php echo $producto['codigo']; ?></p>
    <a href="<?php echo site_url('productos'); ?>">Volver al listado</a>
</body>
</html>
