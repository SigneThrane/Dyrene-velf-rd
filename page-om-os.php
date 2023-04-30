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
<div class="om">
<main id="main" class="main">
        <h3>Om dyrenes velfærd</h3>
        <div class="row">
            <div class="col-md-6">
            <p>
            Dyrenes Velfærd er en non-profit organisation med base i Christiansfeld. <br> 
            Organisationen blev etableret i januar 2018 med det formål at håndhæve <br>
            lovgivningen og hjælpe alle de oversete og mishandlede dyr i hele Danmark.  <br><br>

            Vores informationsindsamling om misrøgt sker gennem vores kontaktpersoner, <br>
            anonyme anmeldelser og samarbejdspartnere spredt ud over landet. Herefter træder <br>
             vores pålidelige og kompetente team af frivillige i aktion, hvor vi nøje planlægger, <br>
             hvordan sagen skal håndteres. Vores primære fokus er altid dyrene, men vi <br>
            prioriterer også at støtte og vejlede ejere af mishandlede dyr, hvis de ikke længere har <br>
            evnen til at tage vare på deres kæledyr. <br><br>

            Vi har en bred interesse for alle dyreværnssager, uanset art, størrelse <br>
            eller betydning, og vi arbejder dedikeret på tværs af hele Danmark. <br><br>

            Hvis I ønsker at følge med i vores igangværende og tidligere dyreværnssager, er I <br>
            mere end velkomne til at følge os på Facebook, hvor vi løbende deler opdateringer om <br>
            vores arbejde.
            </p>
            </div>   
            <div class="col-md-6">
            <img  width="70%" src="<?php the_field('location'); ?>" alt="Logo" />
            </div>
        </div>
        <div class="wrapper">
                     <div style="width:100%; max-width:100%; margin:0px; bottom: 0px; transform: rotate(180deg);"><svg id="mymainsvgelm" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" class="" style="width: calc(124% + 1.3px); height: 64px;">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill: rgb(93, 126, 75);"></path>
                     </svg></div>
                     </div>
                     </div>
                                <div class="hvem">
                                   <h3>Hvem er vi?</h3>
                                         <p>
                                              Vi er en sammenslutning af frivillige med en fælles mission og vision. 
                                              Vores primære formål er at engagere os i kampen for dyrevelfærd og samtidig yde hjælp til mennesker, der kan have en bagvedliggende årsag til deres 
                                            handlinger. Vi er et team bestående af en mangfoldighed af faglige baggrunde, herunder socialrådgivere og 
                                             landmænd, som bringer unikke og værdifulde kompetencer til vores indsats.
                                         </p>  
                                         
                                              <h4>Bestyrelsen</h4>
                                                    <div class="row">
                                                            <div id="personale" class="col-md-4">
                                                            <img  width="60%" src="<?php the_field('bestyrelsen_1'); ?>" alt="Logo" />
                                                            <h5>Majken E. Jensen</h5>
                                                            <p>Funktion <br>
                                                            Kompetencer <br>
                                                            Beskrivelse <br>
                                                            </p>

                                                            </div>
                                                                  <div id="personale" class="col-md-4">
                                                                  <img  width="60%" src="<?php the_field('bestyrelsen_2'); ?>" alt="Logo" />
                                                                  </div>

                                                                          <div id="personale" class="col-md-4">
                                                                          <img  width="60%" src="<?php the_field('bestyrelsen_3'); ?>" alt="Logo" />
                                                                          </div>
                                                    </div>

                                                    <h4>Frivillige</h4>
                                                    <div class="row">
                                                            <div id="personale" class="col-md-4"></div>
                                                                  <div id="personale" class="col-md-4"></div>
                                                                          <div id="personale" class="col-md-4"></div>
                                                    </div>

                                                <div class="wrapper">
                                                <div style="width:100%; max-width:100%; margin:0px; bottom: 0px; transform: rotate(180deg);"><svg id="mymainsvgelm" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" class="" style="width: calc(130% + 1.3px); height: 97px;">
                                                 <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill: rgb(242, 232, 219);"></path>
                                                  </svg></div>
                                                </div>
                                                               <div class="anmeldelser">
                                                                  <h3>Anmeldelser</h3>
                                                                     <p>Anmeldelserne er taget fra vores facebook side</p> <br>
                                                                     <?php echo do_shortcode('[sp_testimonial id="90"]');?>
                                                            

                     <div class="wrapper">                                                
                    <div style="width:100%; max-width:100%; margin:0px; bottom: 0px; transform: rotate(180deg);"><svg id="mymainsvgelm" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" class="" style="width: calc(109% + 1.3px); height: 67px; transform: rotateY(180deg);">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill: rgb(241, 155, 56);"></path>
                      </svg></div>
                    </div>
                    
                <div class="dyrene">
			            <h3>Hjælp dyrene - støt en god sag</h3>
			                <button>DONÉR NU </button>
			                    <p>Har du spørgsmål til hvordan du kan støtte? Læs mere her</p> <br>
			    </div>
                   </div>
                      </div>
</body>

<?php
get_footer();