<main>
  <h2>Menú favorito</h2>
  <?php
    $plato = "Paella";
    $precio = 12.5; // precio sin formato
  ?>
  <p>Plato: <?php echo $plato; ?></p>
  <p>Precio: <?php echo number_format($precio, 3, ','); ?> €</p>
</main>