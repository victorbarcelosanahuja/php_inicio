<main>
  <h2>Coste total de un evento</h2>
  <?php
    $inscripcion = 50;       // precio de la inscripción
    $taller = 20;            // precio del taller adicional
    $total = $inscripcion + $taller; // suma total
  ?>
  <p>Precio inscripción: <?php echo number_format($inscripcion, 2, ','); ?> €</p>
  <p>Precio taller adicional: <?php echo number_format($taller, 2, ','); ?> €</p>
  <p>Total a pagar: <?php echo number_format($total, 2, ','); ?> €</p>
</main>