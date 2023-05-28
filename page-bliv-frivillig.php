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
 * @package storefront
 */

get_header(); ?>
<div id="herofrivillig">
    <div id="herorow" class="row">
    <div id="herotext" class="col-sm-12"><h1 id=herotext>Bliv frivillig</h1></div></div></div>
</head>

<body>
<div class="soger">
    <h1>Bliv en del af fællesskabet</h1>
    <p id="text"><?php the_field('tekst1'); ?></p>

<button id="lysorange"><p><a id="grøn" href="/eksamen/kontakt-os/">Kontakt</a></p> </button>

<div class="wrapper">
    <div style="width:100%; max-width:100%; margin:0px; bottom: 0px; transform: rotate(180deg);"><svg id="mymainsvgelm" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" class="" style="width: calc(124% + 1.3px); height: 69px;">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill: rgb(93, 126, 75);"></path>
                </svg></div>

<div class="hjertet">
    <h1>Kærlighed til dyrene, er hjertet i vores arbejde</h1>
    <div class="row">
        <div class="col-md-3">
        <img  width="67%" src="<?php the_field('billede_1'); ?>" alt="Dyre" />
        </div>
        <div class="col-md-6">
        <img  width="60%" src="<?php the_field('billede_2'); ?>" alt="Dyre" />
        </div>
        <div class="col-md-3">
        <img  width="67%" src="<?php the_field('billede_3'); ?>" alt="Dyre" />
        </div>
    </div>
  

    <div class="wrapper">
    <div style="width:100%; max-width:100%; margin:0px; bottom: 0px; transform: rotate(180deg);"><svg id="mymainsvgelm" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" class="" style="width: calc(117% + 1.3px); height: 73px;"><path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill: rgb(242, 232, 219);"></path></svg></div>
</div>

    <div class="rolle">
        <h1>Din rolle som frivillig</h1>
        <p id="text"><?php the_field('tekst2'); ?> </p>




                <div class="wrapper">
    <div style="width:100%; max-width:100%; margin:0px; bottom: 0px; transform: rotate(180deg);"><svg id="mymainsvgelm" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" class="" style="width: calc(124% + 1.3px); height: 69px;">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill: rgb(93, 126, 75);"></path>
                </svg></div>

    <div class="muligheder">
        <h1>Du kan også støtte på følgende måder</h1>
        <div class="row">
            <div class="col-md-3">
                   <button id="hjaelp"><p><a id="grøn" href="/eksamen/bliv-medlem/">Bliv medlem</a></p> </button>
            </div>
            <div class="col-md-3">
            <button id="hjaelp"><p><a id="grøn" href="/eksamen/bliv-frivillig/">Bliv frivillig</a></p> </button>
            </div>
            <div class="col-md-3">
                     <button id="hjaelp"><p><a id="grøn" href="/eksamen/bliv-sponsor/">Bliv sponsor</a></p> </button>
            </div>
            <div class="col-md-3">
                 <button id="hjaelp"><p><a id="grøn" href="/eksamen/doner/">Donér</a></p> </button>
               
            </div>
        </div>
           
                    <div class="wrapper">
                    <div style="width:100%; max-width:100%; margin:0px; bottom: 0px; transform: rotate(180deg);"><svg id="mymainsvgelm" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" class="" style="width: calc(109% + 1.3px); height: 67px; transform: rotateY(180deg);">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill: rgb(241, 155, 56);"></path>
                </svg></div>
                    
                </div></div>

                <div class="dyrene">
		
			<h1>Hjælp dyrene - støt en god sag</h1>
            <button id="hjaelp"><p><a id="hjlp" href="/eksamen/doner/">DONÉR NU</a></p> </button>
            <p id="center"><a href="/eksamen/doner">Har du spørgsmål til hvordan du kan støtte? Læs mere her </a></p>
		


        </div>
        </div>
        </div>
</div>

		</div>
</body>



<?php
get_footer();