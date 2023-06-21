<?php
require_once("inc/init.inc.php");
if($_POST)
{
	debug($_POST);
	$verif_caractere = preg_match('#^[a-zA-Z0-9._-]+$#', $_POST['pseudo']); 
	if(!$verif_caractere || strlen($_POST['pseudo']) < 1 || strlen($_POST['pseudo']) > 20 )
	{
		$contenu .= "<div class='erreur'>Le pseudo doit contenir entre 1 et 20 caract�res. <br> Caract�re accept� : Lettre de A � Z et chiffre de 0 � 9</div>";
	}
	if(empty($contenu)) 
	{
		$membre = executeRequete("SELECT * FROM membre WHERE pseudo='$_POST[pseudo]'"); 
		if($membre->num_rows > 0)
		{
			$contenu .= "<div class='erreur'>Pseudo indisponible. Veuillez en choisir un autre svp.</div>";
		}
		else
		{
			foreach($_POST as $indice => $valeur)
			{
				$_POST[$indice] = htmlEntities(addSlashes($valeur));
			}
			executeRequete("INSERT INTO membre (pseudo, mdp, nom, prenom, email, civilite, ville, code_postal, adresse) VALUES ('$_POST[pseudo]', '$_POST[mdp]', '$_POST[nom]', '$_POST[prenom]', '$_POST[email]', '$_POST[civilite]', '$_POST[ville]', '$_POST[code_postal]', '$_POST[adresse]')");
			$contenu .= "<div class='validation'>Vous �tes inscrit � notre site web. <a href=\"connexion.php\"><u>Cliquez ici pour vous connecter</u></a></div>";
		}
	}
}
?>
<?php require_once("inc/haut.inc.php"); 

?>

<?php require_once('inc/nav.php');?>	
<?php echo $contenu; ?>

<form method="post" action="" class="shadow w-50 mx-auto p-5 rounded-3">
	<h2 class="text-center text-primary">formulaire d'inscription </h2>
    <label for="pseudo" class="label-control">Pseudo</label><br>
    <input  class="form-control" type="text" id="pseudo" name="pseudo" maxlength="20" placeholder="votre pseudo" pattern="[a-zA-Z0-9-_.]{1,20}" title="caract�res accept�s : a-zA-Z0-9-_." required="required"><br><br>
         
    <label for="mdp" class="label-control">Mot de passe</label><br>
    <input  class="form-control" type="password" id="mdp" name="mdp" required="required"><br><br>
         
    <label for="nom" class="label-control">Nom</label><br>
    <input class="form-control"  type="text" id="nom" name="nom" placeholder="votre nom"><br><br>
         
    <label for="prenom" class="label-control">Prénom</label><br>
    <input class="form-control"  type="text" id="prenom" name="prenom" placeholder="votre pr�nom"><br><br>
 
    <label for="email" class="label-control">Email</label><br>
    <input  class="form-control" type="email" id="email" name="email" placeholder="exemple@gmail.com"><br><br>
         
    <label for="civilite" class="label-control">Civilité</label><br>
    <input name="civilite" value="m" checked="" type="radio">Homme
    <input name="civilite" value="f" type="radio">Femme<br><br>
                 
    <label  for="ville" class="label-control">Ville</label><br>
    <input  class="form-control" type="text" id="ville" name="ville" placeholder="votre ville" pattern="[a-zA-Z0-9-_.]{5,15}" title="caract�res accept�s : a-zA-Z0-9-_."><br><br>
         
    <label for="cp" class="label-control">Code Postal</label><br>
    <input  class="form-control" type="text" id="code_postal" name="code_postal" placeholder="code postal" pattern="[0-9]{5}" title="5 chiffres requis : 0-9"><br><br>
         
    <label for="adresse" class="label-control">Adresse</label><br>
    <textarea  class="form-control" id="adresse" name="adresse" placeholder="votre dresse" pattern="[a-zA-Z0-9-_.]{5,15}" title="caract�res accept�s :  a-zA-Z0-9-_."></textarea><br><br>
 
    <input  class="btn btn-outline-primary w-25" name="inscription" value="S'inscrire" type="submit">
	<input  class="btn btn-outline-danger w-25" name="inscription" value="S'inscrire" type="submit">
</form>
 
<?php require_once("inc/bas.inc.php"); ?>