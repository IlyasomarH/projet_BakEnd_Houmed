			</div>
        </section>
        <footer>
			<div class="conteneur text-center mt-5 pt-5">    
				<?php echo date('Y'); ?> - Tous droits reservés.
			</div>
        </footer>


        <?php 
			if(internauteEstConnecteEtEstAdmin()) 
					{ 
						echo '<script type="text/javascript" src="../inc/js/bootstrap.bundle.js"></script>';
					}else{
						 echo '<script type="text/javascript" src="inc/js/bootstrap.bundle.js"></script>';
					} ?>

        
    </body>
</html>