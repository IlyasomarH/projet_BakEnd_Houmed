		      	<?php  
							if(internauteEstConnecteEtEstAdmin()) // admin
							{   
						?>

						        <li class="nav-item">
						         	<?php echo' <a class="nav-link active" aria-current="page" href="' . RACINE_SITE . 'admin/gestion_membre.php">Gestion des membres</a>' ;?>
						        </li>
						        <li class="nav-item">
						           <?php echo' <a class="nav-link" href="' . RACINE_SITE . 'admin/gestion_commande.php">Gestion des commandes</a>'; ?>
						        </li>
						     
						        <li class="nav-item">
						          <?php echo' <a class="nav-link " href="' . RACINE_SITE . 'admin/gestion_boutique.php"></a>'; ?>
						        </li>
				         <?php }?>


				         	<?php  
							 if(internauteEstConnecte()) // admin
							{   
						    ?>

						        <li class="nav-item">
						         	<?php echo' <a class="nav-link active" aria-current="page" href="' . RACINE_SITE . 'profil.php">Voir votre profil</a>' ;?>
						        </li>
						        <li class="nav-item">
						           <?php echo' <a class="nav-link" href="' . RACINE_SITE . 'boutique.php">Accès à la boutique</a>'; ?>
						        </li>
						   
						        <li class="nav-item">
						          <?php echo' <a class="nav-link " href="' . RACINE_SITE . 'panier.php">Voir votre panier</a>'; ?>
						        </li>

						         <li class="nav-item">
						          <?php echo' <a class="nav-link " href="' . RACINE_SITE . 'connexion.php?action=deconnexion">Se déconnecter</a>'; ?>
						        </li>
				         <?php   }?>



				       <?php  
						else{


			


						?>

					        <li class="nav-item">
					         <?php echo' <a class="nav-link active" aria-current="page" href="' . RACINE_SITE . 'inscription.php">Inscription</a>' ;?>
					        </li>
					        <li class="nav-item">
					           <?php echo' <a class="nav-link" href="' . RACINE_SITE . 'connexion.php">Connexion</a>'; ?>
					        </li>
					   
					        <li class="nav-item">
					          <?php echo' <a class="nav-link " href="' . RACINE_SITE . 'boutique.php">Accès à la boutique</a>'; ?>
					        </li>
					         <li class="nav-item">
					          <?php echo' <a class="nav-link " href="' . RACINE_SITE . 'panier.php">Voir votre panier</a>'; ?>
					        </li>
				         <?php
				           }
				          ?>