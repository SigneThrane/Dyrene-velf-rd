<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
  * @package Bravada
 */

get_header(); ?>

<body>
    <div class="stot">
    <h3>Donationer modtages med glæde</h3>
    <div class="row">
        <div class="col-md-6">
            <p>
            Økonomisk støtte til Dyrenes velfærd har stor <br> betydning for, hvor godt vi kan hjælpe dyr, som <br> er i nød.

            Vi håber, at du vil støtte op om vores arbejde <br> for de mange dyr der har brug for hjælp. <br> Kontakt os gerne for information på tlf 61 69 85 48
            </p>
            <p>MobilePay 87003 Dyrenes velfærd (foreningskonto)</p>
            <p>Danske Bank foreningskonto 9570 12519737</p>

        </div>

              <div class="col-md-6">
              <img  width="30%" src="<?php the_field('hest'); ?>" alt="hest" />
    </div>
    </div>

    <div style="width:100%; max-width:100%; margin:0px; bottom: 0px; transform: rotate(180deg);"><svg id="mymainsvgelm" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" class="" style="width: calc(130% + 1.3px); height: 97px;">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill: rgb(242, 232, 219);"></path>
                </svg></div>
                <div class="map">
			<br>
			<h3>Du kan støtte på følgende måde</h3>
			 <br><br><br><br><br>
			<div class="row"> 
				<div class="col-md-3" id="op">
                <img  width="70%" src="<?php the_field('bliv_medlem'); ?>" alt="Katte der spiser" />
                <br><br>
					<h4>Bliv medlem</h4>
					<p>Det koster kun 100 <br>
                    kroner om året.</p>
				</div>

				<div class="col-md-3" id="op">
                <img  width="70%" src="<?php the_field('bliv_frivillig'); ?>" alt="Katte der spiser" />
                <br><br>
				<h4>Bliv frivillig</h4>
					<p>Vi har altid brug for <br>
                    frivillige hænder.</p>
				</div>

				<div class="col-md-3" id="op">
                <img  width="70%" src="<?php the_field('bliv_sponsor'); ?>" alt="Katte der spiser" />
                <br><br>
				<h4>Bliv sponsor</h4>
					<p>
					Som sponsor kan du <br>
                    være med 
                    til at gøre en forskel.
					</p>
				</div>

				<div class="col-md-3" id="op">
                <img  width="70%" src="<?php the_field('giv_et_bidrag'); ?>" alt="Katte der spiser" />
                <br><br>
				<h4>Giv et bidrag</h4>
					<p>Beløbet går ubeskåret <br> 
						til dyrene.</p>
				</div>
			</div>
			<br><br><br><br><br><br>
             

<div style="width:100%; max-width:100%; margin:0px; bottom: 0px; transform: rotate(180deg);"><svg id="mymainsvgelm" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" class="" style="width: calc(124% + 1.3px); height: 64px;">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill: rgb(93, 126, 75);"></path>
                </svg></div>
                <div class="foder">
                    <div class="row">
                        <div class="col-md-6">
                       <br><br><br>
                        <h3>Donér foder / strøelse / legetøj </h3>
                        <h5>Kan din kat ikke lide det kattegrus du har købt? <br>
                            Eller vil din hund ikke spise dens tørfoder?  <br>
                            <br>
                            - Så kender vi nogle der vil blive glade for det! </h5>
                        </div>

                        <div class="col-md-6">
                            <br><br><br>
                        <img  width="30%" src="<?php the_field('kat'); ?>" alt="Katte der spiser" />
                   
                        </div>
                    </div>
                    <div style="width:100%; max-width:100%; margin:0px; bottom: 0px; transform: rotate(180deg);"><svg id="mymainsvgelm" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" class="" style="width: calc(109% + 1.3px); height: 67px; transform: rotateY(180deg);">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill: rgb(241, 155, 56);"></path>
                </svg></div>
                </div>

                <div class="dyrene">
			<br> <br>
			<h3>Hjælp dyrene - støt en god sag</h3>
			<button>DONÉR NU </button>
			<p>Har du spørgsmål til hvordan du kan støtte? Læs mere her</p>
			<br>
		</div>
           </div>
           </div>
                        
</body>

<?php
get_footer();