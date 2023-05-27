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
<div id="herodoner">
    <div id="herorow" class="row">
    <div id="herotext" class="col-sm-12"><h1 id=herotext>Donér</h1></div></div></div>
</head>

<body>
    <div class="hest">
        <h1><?php the_field('kampagne_overskrift'); ?></h1>
        <img  width="70%" src="<?php the_field('hestekraft'); ?>" alt="Donation oversigt" />
        <p id="center"><?php the_field('kampagne_brodtekst'); ?></p>
        
        <div class="row justify-content-center"> 
                
				<div class="col-sm-8" id="mpay">
                <img width="65%" src="<?php the_field('mobilepay'); ?>" alt="mobilepay logo" />
				</div>

				<div class="col-sm-4" id="mpay">
                <img  width="65%" src="<?php the_field('bank'); ?>" alt="bankkort" />
				</div>
			</div>



    <div class="wrapper">
    <div style="width:100%; max-width:100%; margin:0px; bottom: 0px; transform: rotate(180deg);"><svg id="mymainsvgelm" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" class="" style="width: calc(124% + 1.3px); height: 69px;">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill: rgb(93, 126, 75);"></path>
                </svg></div>
    </div>
    </div>
    <div id="space" class="stot">
    <p id="center"><b><?php the_field('overskrift1'); ?></b></p>

    <h1><?php the_field('overskrift2'); ?></h1>

    <p id="text"><?php the_field('tekst1'); ?></p>

  <p id="center"><b> <?php the_field('overskrift3'); ?></b></p>

<h1><?php the_field('overskrift4'); ?></h1>

<p id="text"><?php the_field('brodtekst2'); ?> </p>

<button id="lysorange"><p><a id="grøn" href="/kontakt-os/">Kontakt</a></p> </button>

<h1><?php the_field('overskrift5'); ?></h1>
<p id="center"><b><?php the_field('overskrift_b'); ?> </b></p>

<p id="text"><?php the_field('brodtekst3'); ?></p> 
   <img  width="25%" src="<?php the_field('kattemad'); ?>" alt="Donation af kattemad" />





    <div class="wrapper">
    <div style="width:100%; max-width:100%; margin:0px; bottom: 0px; transform: rotate(180deg);"><svg id="mymainsvgelm" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" class="" style="width: calc(130% + 1.3px); height: 97px;">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill: rgb(242, 232, 219);"></path>
                </svg></div>
    </div>
                <div class="map">
			<h1>Du kan støtte på følgende måde</h1>
	
			<div class="row justify-content-center"> 
                
				<div class="col-sm-3" id="op">
                <img  width="70%" src="<?php the_field('bliv_medlem'); ?>" alt="Katte der spiser" />
           
					<h4>Bliv medlem</h4>
					<p id="pattext">Det koster kun 100 
                    kroner om året.</p>
				</div>

				<div class="col-sm-3" id="op">
                <img  width="70%" src="<?php the_field('bliv_frivillig'); ?>" alt="Katte der spiser" />
           
				<h4>Bliv frivillig</h4>
					<p id="pattext">Vi har altid brug for
                    frivillige hænder.</p>
				</div>

				<div class="col-sm-3" id="op">
                <img  width="70%" src="<?php the_field('bliv_sponsor'); ?>" alt="Katte der spiser" />
             
				<h4>Bliv sponsor</h4>
					<p id="pattext">
					Som sponsor kan du 
                    være med 
                    til at gøre en forskel.
					</p>
				</div>

				<div class="col-sm-3" id="op">
                <img  width="80%" src="<?php the_field('giv_et_bidrag'); ?>" alt="Katte der spiser" />
       
				<h4>Giv et bidrag</h4>
					<p id="pattext">Beløbet går ubeskåret 
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
		
			<h1>Hjælp dyrene - støt en god sag</h1>
            <button id="hjaelp"><p><a id="hjlp" href="/doner/">DONÉR NU</a></p> </button>
            <p id="center"><a href="/doner">Har du spørgsmål til hvordan du kan støtte? Læs mere her </a></p>
	
		</div>
           </div>
           </div>
           </div>
           </div>
                        
</body>

<?php
get_footer();