<!DOCTYPE html>
<html>
<head>
    <title>Productos</title>
</head>
<body>
    <h1>Listado de Productos</h1>
    <ul>
        <?php foreach ($productos as $producto): ?>
            <li>
                <a href="<?php echo site_url('productos/view/'.$producto['id']); ?>">
                    <?php echo $producto['nombre']; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
