<?php
require_once("inc/init.inc.php");
//--------------------------------- TRAITEMENTS PHP ---------------------------------//
if(isset($_GET['action']) && $_GET['action'] == "deconnexion") 
{
	session_destroy(); 
}
if(internauteEstConnecte()) 
{
	header("location:profil.php");
}
if($_POST)
{
    $resultat = executeRequete("SELECT * FROM membre WHERE pseudo='$_POST[pseudo]'");
    if($resultat->num_rows != 0)
    {
        $membre = $resultat->fetch_assoc();
        if($membre['mdp'] == $_POST['mdp'])
        {
            foreach($membre as $indice => $element)
            {
                if($indice != 'mdp')
                {
                    $_SESSION['membre'][$indice] = $element; 
                }
            }
            header("location:index.php"); 
        }
        else
        {
            $contenu .= '<div class="erreur">Erreur de MDP</div>';
        }       
    }
    else
    {
        $contenu .= '<div class="erreur">Erreur de pseudo</div>';
    }
}
//--------------------------------- AFFICHAGE HTML ---------------------------------//
?>
<?php require_once("inc/haut.inc.php"); ?>
<?php require_once('inc/nav.php');?>	
<?php echo $contenu; ?>
 
<form method="post" action="" class="w-50 mx-auto p-5 shadow">
    <h2 class="text-center text-primary">Se connecter</h2>
    <label for="pseudo" class="label-control">Pseudo</label><br />
    <input type="text" class="form-control" id="pseudo" name="pseudo" /><br /> <br />
         
    <label for="mdp" class="label-control">Mot de passe</label><br />
    <input type="text" class="form-control" id="mdp" name="mdp" /><br /><br />
 
     <input type="submit" class="btn btn-primary w-50 d-block mx-auto" value="Se connecter"/>
</form>
 
<?php require_once("inc/bas.inc.php"); ?>