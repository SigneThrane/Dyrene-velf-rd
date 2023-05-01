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
    <div class="hest">
        <h1>Hjælp os med at samle hestekræfter</h1>
        <img  width="70%" src="<?php the_field('hestekraft'); ?>" alt="Donation oversigt" />
        <p id="grøn">"Vores hestekræfter stammer fra vores fælles engagement i at hjælpe dyr i nød. <br>
         Din donation er med til at øge vores styrke og vores evne til at redde flere dyreliv. <br>
          Støt vores mission og vær med til at gøre en forskel."</p>
        
            <div class="qrkode"></div>


    <div class="wrapper">
    <div style="width:100%; max-width:100%; margin:0px; bottom: 0px; transform: rotate(180deg);"><svg id="mymainsvgelm" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" class="" style="width: calc(124% + 1.3px); height: 69px;">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill: rgb(93, 126, 75);"></path>
                </svg></div>
    </div>
    </div>
    <div class="stot">
    <h1>Donationer modtages med glæde</h1>
    <b>Vi tager imod valgfrie engangs beløb, månedlige abbonenter <br> samt fysiske produkter. Læs mere om de enkelte muligheder, <br> herunder:</b>

    <h1>Valgfrit engangs-beløb</h1>

<p>Vi er dybt taknemmelige for alle donationer, da det gør det muligt for os at yde <br>
 den nødvendige hjælp, såsom dyrlægebehandlinger, medicin, og fødevarer til de dyr, der <br>
  har brug for det mest. Din donation kan gøre en væsentlig forskel i dyrenes liv og <br>
   hjælpe os med at fortsætte vores arbejde med at redde og tage vare på dyr i nød. <br>
<br><br>
Vi værdsætter din støtte dybt og takker dig for at hjælpe os med at sikre dyrenes velfærd. <br>
 Hvis du ønsker at holde dig opdateret med vores arbejde og resultater, kan du følge os på vores Facebook-side. <br>
  Tusind tak for din hjælp!</p>

<b> Hver donation, uanset størrelse, er af stor betydning og hjælper os med at opretholde <br> vores vigtige br arbejde for dyrenes velfærd.</b>

<h1>Månedlig abbonent</h1>

<p>Hvis du ønsker at blive en månedlig abonnent og støtte vores arbejde for at sikre <br>
 dyrenes velfærd, beder vi venligst om, at du udfylder vores kontaktformular <br>
  med dit fulde navn, adresse, postnummer, by og det ønskede månedlige donationbeløb. <br>

Vi er dybt taknemmelige for din støtte og værdsætter enhver donation, der hjælper os <br>
 med at fortsætte vores arbejde. Bemærk venligst, at du til enhver tid kan afmelde dig abonnementet, ved at kontakte os. </p>

<button>Kontakt</button>

<h1>Donation af fysiske genstande</h1>
<b>Har du lyst til at hjælpe de mishandlede dyr, men har du ikke mulighed for at donere penge? <br> Intet problem! </b> <br>

<p>Vi accepterer også donationer af fysiske genstande, såsom foder, tæpper, legetøj og <br>
 andre nødvendigheder, som kan hjælpe dyrene i deres hverdag. Hvis du har noget, du <br>
  gerne vil donere, er du velkommen til at kontakte os via mail eller telefon, og vi vi <br>
  l arrangere en afhentning af genstandene på et tidspunkt og sted, der passer dig. Enhver donation, <br>
   stor eller lille, betyder noget for de mishandlede dyr, og vi er taknemmelige for enhver hjælp, vi kan få."</p> <br>
   <img  width="25%" src="<?php the_field('kattemad'); ?>" alt="Donation af kattemad" />





    <div class="wrapper">
    <div style="width:100%; max-width:100%; margin:0px; bottom: 0px; transform: rotate(180deg);"><svg id="mymainsvgelm" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" class="" style="width: calc(130% + 1.3px); height: 97px;">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill: rgb(242, 232, 219);"></path>
                </svg></div>
    </div>
                <div class="map">
			<br>
			<h1>Du kan støtte på følgende måde</h1>
	
			<div class="row"> 
                
				<div class="col-sm-3" id="op">
                <img  width="80%" src="<?php the_field('bliv_medlem'); ?>" alt="Katte der spiser" />
           
					<h4>Bliv medlem</h4>
					<p>Det koster kun 100 <br>
                    kroner om året.</p>
				</div>

				<div class="col-sm-3" id="op">
                <img  width="80%" src="<?php the_field('bliv_frivillig'); ?>" alt="Katte der spiser" />
           
				<h4>Bliv frivillig</h4>
					<p>Vi har altid brug for <br>
                    frivillige hænder.</p>
				</div>

				<div class="col-sm-3" id="op">
                <img  width="80%" src="<?php the_field('bliv_sponsor'); ?>" alt="Katte der spiser" />
             
				<h4>Bliv sponsor</h4>
					<p>
					Som sponsor kan du <br>
                    være med 
                    til at gøre en forskel.
					</p>
				</div>

				<div class="col-sm-3" id="op">
                <img  width="80%" src="<?php the_field('giv_et_bidrag'); ?>" alt="Katte der spiser" />
       
				<h4>Giv et bidrag</h4>
					<p>Beløbet går ubeskåret <br> 
						til dyrene.</p>
				</div>
			</div>
             
              
                    <div class="wrapper">
                    <div style="width:100%; max-width:100%; margin:0px; bottom: 0px; transform: rotate(180deg);"><svg id="mymainsvgelm" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" class="" style="width: calc(109% + 1.3px); height: 67px; transform: rotateY(180deg);">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill: rgb(241, 155, 56);"></path>
                </svg></div>
                    </div>
                </div>

                <div class="dyrene">
			<br> <br>
			<h1>Hjælp dyrene - støt en god sag</h1>
			<button>DONÉR NU </button>
			<p>Har du spørgsmål til hvordan du kan støtte? Læs mere her</p>
			<br>
		</div>
           </div>
           </div>
           </div>
           </div>
                        
</body>

<?php
get_footer();