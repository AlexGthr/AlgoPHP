<h1>Exercice 15</h1>

<p>En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une 
adresse e-mail a le bon format.
</p>

<h2>Résultat</h2>


<?php

    // Je crée la variable e-mail
  $email = "elan@elan-formation.fr";

    // Puis je teste la condition si : filter_var(email, avec le filtre validate email)
  if(filter_var($email, FILTER_VALIDATE_EMAIL)){

    echo "L'adresse e-mail est valide";
  }
  
  else{

    echo "L'adresse e-mail n'est pas valide";

  }

