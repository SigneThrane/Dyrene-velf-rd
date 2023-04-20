<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of #main and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package Bravada
 */

?>

<link rel="stylesheet" href=
"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
<div class="footer">
				<div class="container px-5">
					<br>
				<div class="row gx-5 gx-5">
					
                        <div class="col-md-3">
						<img  width="60%" src="<?php the_field('footer'); ?>" alt="logo" />
						<br> 
						Tlf. 61 69 85 48 │dyrenes.velfaerd@gmail.com
                        </div>

                        <div class="col-md-3">
                        Anmeld sag
							<br>
						Bliv frivillig
								<br>
						Guides
                        </div>

                        <div class="col-md-3">
						Kontakt os
						 <br>
						 Omkring os
						 <br>
						 Donere
						 <br>
						 Cookies og privatlivspolitik
                        
                        </div>
                        
						<div class="col-md-3">
						<i class="bi bi-facebook fa-10x"></i>
						<i class="bi bi-instagram fa-lg"></i>

					
                        
                        </div>

                    </div>
				</div>
				</div>
				<br>
	<?php wp_footer(); ?>
</html>
