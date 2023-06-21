<!Doctype html>
<html lang="fr">
    <head>
    	<meta charset="utf-8">
        <title>Mon Site</title>
        <link rel="stylesheet" href="<?php echo RACINE_SITE; ?>inc/css/style.css" />

		<?php 
			if(internauteEstConnecteEtEstAdmin()) 
					{ 
						echo '<link rel="stylesheet" type="text/css" href="../inc/css/bootstrap.min.css">';
						echo '<link rel="stylesheet" type="text/css" href="inc/css/bootstrap.min.css">';
					}else{
						 echo '<link rel="stylesheet" type="text/css" href="inc/css/bootstrap.min.css">';
					} ?>
        
    </head>
    <body>    
       
        <section>
			<div class="conteneur mt-5 pt-5">       