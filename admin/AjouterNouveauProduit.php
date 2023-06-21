<?php 

require_once("../inc/init.inc.php");
require_once("../inc/haut.inc.php");
require_once('../inc/nav.php');	 
if(!internauteEstConnecteEtEstAdmin())
{
	header("location:../connexion.php");
	exit();
}
?>


<form action="" method="post" class="w-50 border mt-5 mx-auto p-5 shadow rounded">
    <h2 class="text-center text-primary">Ajouter un nouveau produit</h2>

    <input type="text" name="" id="" class="form-control my-3" placeholder="ajouter un references">
    <select name="" id="">
        <option value=""> T-shirt</option>
        <option value=""> chemise</option>
        <option value=""> chaussures</option>
    </select>
    <input type="text" name="" id="" class="form-control my-3" placeholder="ajouter un titre">
    
    <input type="text" name="" id="" class="form-control my-3" placeholder="choisir une couleur">
   
    <input type="text" name="" id="" class="form-control my-3" placeholder="choisir la taille">
    <label for=""> choisir votre sexe :</label>
    <input type="radio" name="sexe" id="">
    <label for="">M</label>
    <input type="radio" name="sexe" id="">
    <label for="">F</label>
    <br>
    <label for="">choisir une photo:</label>
    <input type="file" src="" alt="" class="my-3">
    <input type="text" name="" id="" class="form-control my-3" placeholder="ajouter un references">
    <input type="number" name="" id="" class="form-control my-3" placeholder="ajouter le prix">
    <textarea name="" id="" cols="30" rows="10" placeholder="Ajouter une description"></textarea>

    <br>
    <input type="submit" class="btn btn-primary my-3 w-25 mx-auto" value="Enregister">
    <input type="reset" value=" Annuler" class="btn btn-danger w-25">


</form>







 
<?php 

require_once("../inc/bas.inc.php"); 


?>