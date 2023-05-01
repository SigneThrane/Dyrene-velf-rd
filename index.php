<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @package Bravada
 */
get_header();
?>
<body>
		<div class="map">
			<br>
			<h1>Hvad kan du gøre?</h1>

			<section class="container-index">
			<?php if(have_posts()): ?>
                    <?php while(have_posts()): the_post() ?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                <?php else: ?>
                    <p>No content found</p>
                <?php endif; ?>
                </section>

				<img  width="80%" src="<?php the_field('testtest'); ?>" alt="test" />

	
			<div class="row">
				<div class="col-md-3" id="op">
					<h4>Anmeld en sag</h4>
					<p><a href="www.google.com">Vi besøger stedet for <br> 
						at få forbedret dyrenes <br>
						forhold.</a></p>
					
				</div>

				<div class="col-md-3" id="op">
				<h4>Meld dig ind</h4>
					<p>Det koster kun 100 <br>
					kroner om året.</p>
				</div>

				<div class="col-md-3" id="op">
				<h4>Bliv sponsor</h4>
					<p>
					Som sponsor kan du <br>
					være med <br>
 					til at gøre en forskel.
					</p>
				</div>

				<div class="col-md-3" id="op">
				<h4>Donere</h4>
					<p>Beløbet går ubeskåret <br> 
						til dyrene.</p>
				</div>
			</div>
		
		<div class="wrapper">
		<div style="width:100%; max-width:100%; margin:0px; bottom: 0px; transform: rotate(180deg);"><svg id="mymainsvgelm" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" class="" style="width: calc(128% + 1.3px); height: 123px;">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill: rgb(93, 126, 75);"></path>
                </svg></div> 
		</div>
		<div class="anmeldsag">
          
                    <div class="row">
                       
                        <div class="col-md-4">
                           
                      <img  width="80%" src="<?php the_field('sag_1'); ?>" alt="Dyre i nød" />
                        </div>

                        <div class="col-md-4">
                        <img  width="80%" src="<?php the_field('sag_2'); ?>" alt="Dyre i nød" />
                        </div>

                        <div class="col-md-4">
                        <img  width="80%" src="<?php the_field('sag_3'); ?>" alt="Dyre i nød" />

                        </div>
                    </div>
                   
                </div>

                <div class="anmeldsag">
			<br> <br>
			<h1>Har du set noget som giver dig ondt i hjertet? </h1>
			<button>ANMELD SAG HER</button>
			<br>

		<div style="width:100%; max-width:100%; margin:0px; bottom: 0px; transform: rotate(180deg);"><svg id="mymainsvgelm" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" class="" style="width: calc(130% + 1.3px); height: 106px;"><path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill: rgb(242, 232, 219);"></path></svg></div>  
        </div>
					<div class="animation">
						<br> <h1>Hjælp os med at samle hestekræfter</h1> 
						<p>Donér 20 kroner og gør en kæmpe forskel for alle Danmarks oversete dyr <br> <br>
							Sammen er vi stærkere, hjælp os med at samle kræfter</p>
				
		
		<div style="width:100%; max-width:100%; margin:0px; bottom: 0px; transform: rotate(180deg);"><svg id="mymainsvgelm" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" class="" style="width: calc(109% + 1.3px); height: 67px; transform: rotateY(180deg);">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill: rgb(241, 155, 56);"></path>
                </svg></div>
                </div>

                <div class="dyrene">
		
			<h1>Hjælp dyrene - støt en god sag</h1>
			<button>DONÉR NU </button>
			<p id="dyrene">Har du spørgsmål til hvordan du kan støtte? Læs mere her</p>
			<br>
		</div>
		</div>
		</div>
		</div>
</body>

<?php
get_footer();
