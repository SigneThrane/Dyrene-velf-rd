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
	<body>

				<div class="footer">
					<br>
				<div class="row">
					
                        <div class="col-md-3">
						<img  width="60%" src="<?php the_field('footer'); ?>" alt="logo" />
						<br> 
						Tlf. 61 69 85 48 │dyrenes.velfaerd@gmail.com
                        </div>

                        <div class="col-md-2">
                        Anmeld sag
							<br>
						Bliv frivillig
								<br>
						Guides
                        </div>

                        <div class="col-md-2">
						Kontakt os
						 <br>
						 Omkring os
						 <br>
						 Donere
                        
                        </div>

						<div class="col-md-2">
						Cookies og privatlivspolitik
                        
                        </div>
						<div class="col-md-1">
						Social
					
                        
                        </div>

                    </div>
				</div>
				<br>
	</body>
	<?php wp_footer(); ?>
</body>
</html>
