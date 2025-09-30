<main>
    <h2>Maratón de películas</h2> <!-- El título de la sección -->
    <?php
    $horas_maraton = 6; // variable numerica
    $peliculas = 3; // variable numerica
    
    $pelicula1 = "Superfly"; //otra variable string
    $pelicula2 = "The Batman"; 
    $pelicula3 = "The Wolf of Wall Street";
    ?>

    <p> El maratón de peliculas de Vic de este viernes va a durar 
    <?php echo $horas_maraton; ?> horas y va a ver <?php echo $peliculas; ?> películas.</p>
    <p>Las películas que va a ver son: <?php echo $pelicula1; ?>, <?php echo $pelicula2; ?> y 
    <?php echo $pelicula3; ?>.</p>
    </main>

