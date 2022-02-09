<!-- BASE DE DONNEES -->

<?php

require 'Modele.php';

$tickets = getTickets();
try {
    $billets = getTickets();
    require 'vueAccueil.php';
  }
  catch (Exception $e) {
    echo '<html><body>Erreur ! ' . $e->getMessage() . '</body></html>';
  }

