<nav class="navbar navbar-expand-lg bg-body-tertiary shadow fixed-top ">

<div class="container-fluid">
  <?php

      if($_SERVER['SCRIPT_NAME']=="/projet/index.php"){
        if(internauteEstConnecteEtEstAdmin()) // admin
        {
          echo' <a class="navbar-brand text-white" href="' . RACINE_SITE . 'index.php">Mon Site</a>';
        }
          

      }else{
          echo' <a class="navbar-brand text-primary" href="' . RACINE_SITE . 'index.php">Mon Site</a>';
      }
  
  
  ?>
 
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end text-white" id="navbarSupportedContent">
    <ul class="navbar-nav  mb-2 mb-lg-0">

    <?php

    if($_SERVER['SCRIPT_NAME']=="/projet/index.php"){
      if(internauteEstConnecteEtEstAdmin()) // admin
      { // BackOffice
          echo '<li class="nav-item"><a class="nav-link text-white " href="' . RACINE_SITE . 'admin/gestion_membre.php">Gestion des membres</a>  </li>';
          echo '<li class="nav-item"><a class="nav-link text-white " href="' . RACINE_SITE . 'admin/gestion_commande.php">Gestion des commandes</a>  </li>';
          echo '<li class="nav-item"><a class="nav-link  text-white" href="' . RACINE_SITE . 'admin/gestion_boutique.php">Gestion de la boutique</a>  </li>';
          // echo '<li class="nav-item"><a class="nav-link " href="' . RACINE_SITE . 'admin/AjouterNouveauProduit.php">Ajouter un nouveau produit</a>  </li>';
      }
      if(internauteEstConnecte()) // membre et admin
      {
          echo '<li class="nav-item"><a class="nav-link text-white " href="' . RACINE_SITE . 'profil.php">Voir votre profil</a>  </li>';
          echo '<li class="nav-item"><a class="nav-link  text-white" href="' . RACINE_SITE . 'boutique.php">Accés à la boutique</a>  </li>';
          echo '<li class="nav-item"><a class="nav-link  text-white" href="' . RACINE_SITE . 'panier.php">Voir votre panier</a>  </li>';
          echo '<li class="nav-item"><a class="nav-link  text-white" href="' . RACINE_SITE . 'connexion.php?action=deconnexion">Se déconnecter</a>  </li>';
      }
      else // visiteur
      {
          echo '<li class="nav-item"><a class="nav-link text-white "  href="' . RACINE_SITE . 'inscription.php">Inscription</a>  </li>';
          echo '<li class="nav-item"><a class="nav-link  text-white" href="' . RACINE_SITE . 'connexion.php">Connexion</a>  </li>';
          echo '<li class="nav-item"><a class="nav-link  text-white" href="' . RACINE_SITE . 'boutique.php">Accés à la boutique</a>  </li>';
          echo '<li class="nav-item"><a class="nav-link text-white " href="' . RACINE_SITE . 'panier.php">Voir votre panier</a>  </li>';
      }

    }else{
      if(internauteEstConnecteEtEstAdmin()) // admin
  { // BackOffice
      echo '<li class="nav-item"><a class="nav-link  " href="' . RACINE_SITE . 'admin/gestion_membre.php">Gestion des membres</a>  </li>';
      echo '<li class="nav-item"><a class="nav-link  " href="' . RACINE_SITE . 'admin/gestion_commande.php">Gestion des commandes</a>  </li>';
      echo '<li class="nav-item"><a class="nav-link  " href="' . RACINE_SITE . 'admin/gestion_boutique.php">Gestion de la boutique</a>  </li>';
      // echo '<li class="nav-item"><a class="nav-link " href="' . RACINE_SITE . 'admin/AjouterNouveauProduit.php">Ajouter un nouveau produit</a>  </li>';
  }
  if(internauteEstConnecte()) // membre et admin
  {
      echo '<li class="nav-item"><a class="nav-link  " href="' . RACINE_SITE . 'profil.php">Voir votre profil</a>  </li>';
      echo '<li class="nav-item"><a class="nav-link  " href="' . RACINE_SITE . 'boutique.php">Accés à la boutique</a>  </li>';
      echo '<li class="nav-item"><a class="nav-link  " href="' . RACINE_SITE . 'panier.php">Voir votre panier</a>  </li>';
      echo '<li class="nav-item"><a class="nav-link  " href="' . RACINE_SITE . 'connexion.php?action=deconnexion">Se déconnecter</a>  </li>';
  }
  else // visiteur
  {
      echo '<li class="nav-item"><a class="nav-link  "  href="' . RACINE_SITE . 'inscription.php">Inscription</a>  </li>';
      echo '<li class="nav-item"><a class="nav-link " href="' . RACINE_SITE . 'connexion.php">Connexion</a>  </li>';
      echo '<li class="nav-item"><a class="nav-link  " href="' . RACINE_SITE . 'boutique.php">Accés à la boutique</a>  </li>';
      echo '<li class="nav-item"><a class="nav-link  " href="' . RACINE_SITE . 'panier.php">Voir votre panier</a>  </li>';
  }

    }

  ?>


        <?php
  
  // visiteur=4 liens - membre=4 liens - admin=7 liens
  ?>



    </ul>
  
  </div>
</div>
</nav>