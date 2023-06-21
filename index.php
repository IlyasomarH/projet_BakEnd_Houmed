<?php 


?>

<!-- <h1 class="text-primary text-center">Bienvenu dans mon site </h1> -->



<section class="row container-fluide border   h-40" id="s1" >

<?php 

require_once("inc/init.inc.php");
require_once("inc/haut.inc.php"); 

include("inc/nav.php");


?>

  <div class="col-12 w-50 mx-auto  mt-5 text-center  d-flex justify-content-center align-items-center flex-column ">
   <p class=" text-white fs-3 ">
   Optez pour l'élégance et le confort inégalés de nos chemises et t-shirts professionnels, qui vous permettront de faire forte impression tout en vous sentant à l'aise et confiant dans votre environnement de travail.
   </p>

   <a class="btn text-white bg-primary fw-bold w-25" href="boutique.php">
      voir plus 
   </a>

  </div>
   <!-- <div class="col-8 " >
      <img src="photo/charlesdeluvio-_4K7BwaHUGc-unsplash.jpg" alt="" width="100%" height="700px">
   </div> -->
</section>







 
<?php 
// print_r($_SERVER['SCRIPT_NAME']);
require_once("inc/bas.inc.php"); ?>