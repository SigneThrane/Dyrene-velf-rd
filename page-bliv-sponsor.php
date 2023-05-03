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
    <div class="blivsponsor">
        <h1>At blive sponsor</h1>
        <p id="text">At blive sponsor for Dyrenes Velfærd indebærer en unik mulighed for at bidrage til arbejdet med at hjælpe og beskytte dyr i nød. 
            Som sponsor vil du blive repræsenteret på vores hjemmeside og på vores sociale medier, og din støtte vil blive anerkendt og 
            værdsat af vores organisation og vores følgere. 

Som sponsor har du mulighed for at støtte os med faste og månedlige donationer, og du kan også donere fysiske produkter, som vil blive brugt 
til at hjælpe de dyr, vi tager os af. Dette kan inkludere alt fra mad, tæpper og legetøj til bure, medicin og andre nødvendige forsyninger. 
Vi tager imod overskudsvarer fra forretninger og andre fysiske donationer. 

Vi er altid glade for at indgå i specialaftaler med vores sponsorer, og vi opfordrer dig til at kontakte os for at diskutere dine muligheder for 
at støtte os. Du kan kontakte os via vores kontaktformular, eller via telefon. 

Vi værdsætter alle vores sponsorer, og vi er taknemmelige for den vigtige rolle, de spiller i at støtte vores arbejde for at hjælpe og beskytte dyr i nød.</p>

<button id="lysorange"><p><a id="grøn" href="/kontakt-os/">Kontakt</a></p> </button>

<h1>Stort tak til vores sponsorer</h1>
<div class="wrapper">
    <div style="width:100%; max-width:100%; margin:0px; bottom: 0px; transform: rotate(180deg);"><svg id="mymainsvgelm" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" class="" style="width: calc(124% + 1.3px); height: 69px;">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill: rgb(93, 126, 75);"></path>
                </svg></div>

                <div class="muligheder">
        <h1>Du kan også støtte på følgende måder</h1>
        <div class="row">
            <div class="col-md-3">
                   <button id="hjaelp"><p><a id="grøn" href="/bliv-medlem/">Bliv medlem</a></p> </button>
            </div>
            <div class="col-md-3">
            <button id="hjaelp"><p><a id="grøn" href="/bliv-frivillig/">Bliv frivillig</a></p> </button>
            </div>
            <div class="col-md-3">
                     <button id="hjaelp"><p><a id="grøn" href="/bliv-sponsor/">Bliv sponsor</a></p> </button>
            </div>
            <div class="col-md-3">
                 <button id="hjaelp"><p><a id="grøn" href="/doner/">Donér</a></p> </button>
               
            </div>
        </div>
           
                    <div class="wrapper">
                    <div style="width:100%; max-width:100%; margin:0px; bottom: 0px; transform: rotate(180deg);"><svg id="mymainsvgelm" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" class="" style="width: calc(109% + 1.3px); height: 67px; transform: rotateY(180deg);">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill: rgb(241, 155, 56);"></path>
                </svg></div>
                    
                </div></div>

                <div class="dyrene">
		
			<h1>Hjælp dyrene - støt en god sag</h1>
            <button id="hjaelp"><p><a id="hjlp" href="/doner/">DONÉR NU</a></p> </button>
            <p id="center"><a href="/doner">Har du spørgsmål til hvordan du kan støtte? Læs mere her </a></p>
		
		</div>
        </div>
    </div>
</body>

<?php
get_footer();