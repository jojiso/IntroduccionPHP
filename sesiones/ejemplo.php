<?php
session_start(); //inicia la sesión
if (!isset($_SESSION['count'])) { //comprueba si la variable de sesion count existe
  $_SESSION['count'] = 0; //crea una variable de sesión llamada count
} else {
  $_SESSION['count']++; //toma el valor de la variable de sesión y lo incrementa.
}
?>
<p>
Hola visitante, ha visto esta página <?php echo $_SESSION['count']; ?> veces.
</p>

<p>
Para continuar, <a href="nextpage.php?<?php echo htmlspecialchars(SID); ?>">haga clic
aquí</a>.
</p>