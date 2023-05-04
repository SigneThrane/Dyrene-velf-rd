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
				<div class="row gx-5">
					
                        <div class="col-md-4">
						<img src="img/Group 531.png" alt="Dyrnesvelfærds logo">
						<br> 
						<i  class="bi bi-telephone-fill"></i>Tlf. 61 69 85 48 <br>
						<i  class="bi bi-envelope-fill"></i>dyrenes.velfaerd@gmail.com
                        </div>

                        <div class="col-md-2">
						<a href="/anmeld-sag/">Anmeld sag</a>
							<br>
							<a href="//guides//">Guides</a>
								<br>
								<a href="/doner">Doner </a>
                        </div>

                        <div class="col-md-2">
						<a href="/bliv-frivillig/">Bliv frivillig</a>
						 <br>
						 <a href="/bliv-medlem/"> bliv medlem</a>
						 <br>
						 <a href="/bliv-sponsor/"> Bliv sponsor</a>
                        </div>

						<div class="col-md-2">
						<a href="/om-os/"> Om os</a>
						 <br>
						 <a href="/kontakt-os/"> Kontakt os</a>
						 <br>
						 <a href=" http://dyrene-velfrd-1.local/?page_id=3"> Privatlivspolitik</a>
                        </div>
                        
						<div class="col-md-1" id="some">
						<i class="bi bi-facebook fa-10x"></i>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<i class="bi bi-instagram fa-lg"></i>

					
                        
                        </div>

                  
				</div>
				</div>
				<br>
	<?php wp_footer(); ?>
</html>
