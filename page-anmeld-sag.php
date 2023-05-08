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
<div id="heroanmeld">
    <div id="herorow" class="row">
    <div id="herotext" class="col-sm-12"><h1 id=herotext>Anmeld sag</h1></div></div></div>
</head>


<body>
        <div class="kontaktoplysninger" id="main">
        
                <h1 class="oplysninger">Anmeld en dyreværnssag her</h1>
        </div>       
        <div class="kontakt">
        <div id="kontakt">
        <div class="row gy-5 gx-5">
        <div class="col-sm-6">
        <p>Vær opmærksom på, at ved din detaljerede beskrivelse af anmeldelsen, kan vi være forberedt på vores besøg. 

Vi giver altid tilbagemelding til dig efterfølgende, så det er vigtigt, at du skriver dit telefonnummer. 

Husk at du altid vil stå som anonym i offentligheden. 

Hvis du har spørgsmål, kan du eventuelt kontakte os på mobil 61 69 85 48.</p>

        </div>

                <div class="col-sm-6">
                    <p>Har du set noget som giver dig ondt i hjertet? </p>
                <?php echo apply_shortcodes( '[contact-form-7 id="30" title="Contact form 1"]' ); ?>
</div>
</div>
    </div>
    <div class="wrapper">
    <div style="width:100%; max-width:100%; margin:0px; bottom: 0px; transform: rotate(180deg);"><svg id="mymainsvgelm" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" class="" style="width: calc(109% + 1.3px); height: 67px; transform: rotateY(180deg);">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill: rgb(241, 155, 56);"></path>
                </svg></div>
    </div>
        </div>
        </div>
                <div id="space" class="sager">
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
                   

                <div class="dyrene">
		
			<h1>Hjælp dyrene - støt en god sag</h1>
			<button id="hjaelp"><p><a id="hjlp" href="/doner/">DONÉR NU</a></p> </button>
            <p id="center"><a href="/doner">Har du spørgsmål til hvordan du kan støtte? Læs mere her </a></p>
	
		</div>
                
</body>


<?php
get_footer();