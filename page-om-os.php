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
<div id="heroos">
    <div id="herorow" class="row">
    <div id="herotext" class="col-sm-12"><h1 id=herotext>Om os</h1></div></div></div>
</head>

<body>
<div class="om">
<main id="main" class="main">
        <h1>Om dyrenes velfærd</h1>
        <div class="row">
            <div class="col-lg-6">
            <p id="text">
            <?php the_field('tekst1'); ?>
            </p>
            </div>   
            <div class="col-lg-6">
            <img  width="80%" src="<?php the_field('location'); ?>" alt="Logo" />
            </div>
        </div>
        <div class="wrapper">
                     <div style="width:100%; max-width:100%; margin:0px; bottom: 0px; transform: rotate(180deg);"><svg id="mymainsvgelm" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" class="" style="width: calc(124% + 1.3px); height: 64px;">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill: rgb(93, 126, 75);"></path>
                     </svg></div>
                     </div>
                     </div>
                                <div class="hvem">
                                   <h1>Hvem er vi?</h1>
                                   <p id="text">
                                   <?php the_field('hvem'); ?>
                                         </p>  
                                         
                                              <h2>Bestyrelsen</h2>
                                                    <div class="row">
                                                            <div id="personale" class="col-md-4">
                                                                <div id="personalecontainer">
                                                            <img  width="100%" src="<?php the_field('bestyrelsen_1'); ?>" alt="Logo" />
                                                            <h3><?php the_field('personale_navn1'); ?></h3>
                                                            <b id="ptekst"><?php the_field('funktion1'); ?> </b>
                                                            <p id="ptekst"><?php the_field('funktion_tekst1'); ?> </p>
                                                            <b id="ptekst"><?php the_field('kompetencer1'); ?> </b>
                                                            <p id="ptekst"><?php the_field('kompetencer_tekst1'); ?></p>
                                                            <b id="ptekst"><?php the_field('beskrivelse1'); ?> </b>
                                                            <p id="ptekst"><?php the_field('beskrivelse_tekst1'); ?> </p>
                     </div>
                                                            </div>
                                                                  <div id="personale" class="col-md-4">
                                                                  <div id="personalecontainer">
                                                                  <img  width="100%" src="<?php the_field('bestyrelsen_2'); ?>" alt="Logo" />
                                                                  <h3><?php the_field('personale_navn2'); ?></h3>
                                                            <b id="ptekst"><?php the_field('funktion2'); ?>  </b>
                                                            <p id="ptekst"><?php the_field('funktion_tekst2'); ?></p>
                                                            <b id="ptekst"><?php the_field('kompetencer2'); ?> </b>
                                                            <p id="ptekst"><?php the_field('kompetencer_tekst2'); ?></p>
                                                            <b id="ptekst"><?php the_field('beskrivelse2'); ?> </b>
                                                            <p id="ptekst"><?php the_field('beskrivelse_tekst2'); ?></p>
                                                                  </div>
                     </div>

                                                                          <div id="personale" class="col-md-4">
                                                                          <div id="personalecontainer">
                                                                          <img  width="1000%" src="<?php the_field('bestyrelsen_3'); ?>" alt="Logo" />
                                                                          <h3><?php the_field('personale_navn3'); ?></h3>
                                                            <b id="ptekst"><?php the_field('funktion3'); ?>  </b>
                                                            <p id="ptekst"><?php the_field('funktion_tekst3'); ?></p>
                                                            <b id="ptekst"><?php the_field('kompetencer3'); ?> </b>
                                                            <p id="ptekst"><?php the_field('kompetencer_tekst3'); ?></p>
                                                            <b id="ptekst"><?php the_field('beskrivelse3'); ?> </b>
                                                            <p id="ptekst"><?php the_field('beskrivelse_tekst3'); ?> </p>
                                                                          </div>
                     </div>
                                                    </div>

                                                    <h2>Frivillige</h2>
                                                    <div class="row">
                                                            <div id="personale" class="col-md-4">
                                                                <div id="personalecontainer">
                                                            <img  width="1000%" src="<?php the_field('bestyrelsen_1'); ?>" alt="Logo" />
                                                            <h3><?php the_field('personale_navn4'); ?></h3>
                                                            <b id="ptekst"><?php the_field('funktion4'); ?> </b>
                                                            <p id="ptekst"><?php the_field('funktion_tekst4'); ?></p>
                                                            <b id="ptekst"><?php the_field('kompetencer4'); ?> </b>
                                                            <p id="ptekst"><?php the_field('kompetencer_tekst4'); ?></p>
                                                            <b id="ptekst"><?php the_field('beskrivelse4'); ?></b>
                                                            <p id="ptekst"><?php the_field('beskrivelse_tekst4'); ?> </p>
                                                         
                     </div>
                                                            </div>
                                                                  <div id="personale" class="col-md-4">
                                                                  <div id="personalecontainer">
                                                                  <img  width="100%" src="<?php the_field('bestyrelsen_2'); ?>" alt="Logo" />
                                                                  <h3><?php the_field('personale_navn5'); ?></h3>
                                                            <b id="ptekst"><?php the_field('funktion5'); ?>  </b>
                                                            <p id="ptekst"><?php the_field('funktion_tekst5'); ?></p>
                                                            <b id="ptekst"><?php the_field('kompetencer5'); ?> </b>
                                                            <p id="ptekst"><?php the_field('kompetencer_tekst5'); ?></p>
                                                            <b id="ptekst"><?php the_field('beskrivelse5'); ?> </b>
                                                            <p id="ptekst"><?php the_field('beskrivelse_tekst5'); ?> </p>
                                                                  </div>
                     </div>

                                                                          <div id="personale" class="col-md-4">
                                                                          <div id="personalecontainer">
                                                                          <img  width="100%" src="<?php the_field('bestyrelsen_3'); ?>" alt="Logo" />
                                                                          <h3><?php the_field('personale_navn6'); ?></h3>
                                                            <b id="ptekst"><?php the_field('funktion6'); ?>  </b>
                                                            <p id="ptekst"><?php the_field('funktion_tekst6'); ?></p>
                                                            <b id="ptekst"><?php the_field('kompetencer6'); ?> </b>
                                                            <p id="ptekst"><?php the_field('kompetencer_tekst6'); ?></p>
                                                            <b id="ptekst"><?php the_field('beskrivelse6'); ?> </b>
                                                            <p id="ptekst"><?php the_field('beskrivelse_tekst6'); ?> </p>
                                                                          </div>
                     </div>
                                                    </div>

                                                <div class="wrapper">
                                                <div style="width:100%; max-width:100%; margin:0px; bottom: 0px; transform: rotate(180deg);"><svg id="mymainsvgelm" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" class="" style="width: calc(130% + 1.3px); height: 97px;">
                                                 <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill: rgb(242, 232, 219);"></path>
                                                  </svg></div>
                                                </div>
                                                               <div class="anmeldelser">
                                                                  <h1>Anmeldelser</h1>
                                                                     <p id="center">Anmeldelserne er taget fra vores facebook side</p> 
                                                                     <div class=anm-container> <?php echo do_shortcode('[sp_testimonial id="90"]');?></div>
                                                            

                     <div class="wrapper">                                                
                    <div style="width:100%; max-width:100%; margin:0px; bottom: 0px; transform: rotate(180deg);"><svg id="mymainsvgelm" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" class="" style="width: calc(109% + 1.3px); height: 67px; transform: rotateY(180deg);">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill: rgb(241, 155, 56);"></path>
                      </svg></div>
                    </div>
                    
                    <div class="dyrene">
		
        <h1>Hjælp dyrene - støt en god sag</h1>
        <button id="hjaelp"><p><a id="hjlp" href="/eksamen/doner/">DONÉR NU</a></p> </button>
        <p id="center"><a href="/eksamen/doner">Har du spørgsmål til hvordan du kan støtte? Læs mere her </a></p>
    </div>
                   </div>
                      </div>
</body>

<?php
get_footer();