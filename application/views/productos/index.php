<h2><?php echo $title; ?></h2>

<?php foreach ($products as $product): ?>
    <h3><?php echo $product['name']; ?></h3>
    <div class="main">
        <?php echo $product['price']; ?> USD
    </div>
    <p><a href="<?php echo site_url('product/view/'.$product['id']); ?>">Ver Detalles</a></p>
<?php endforeach; ?>
