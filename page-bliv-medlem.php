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
    <div class="medlem">
<h1>Vi håber du vil være med!</h1>
<p id="text">Som frivillig organisation er enhver form for støtte afgørende for vores arbejde, og derfor tilbyder vi medlemskab for et årligt beløb på kun 100 kroner. 
    Beløbet vil blive brugt til at hjælpe dyr i nød, og alle betalinger er ubeskåret. 

Til alle nye medlemmer tilbyder vi en "stolt medlem af dyrenes velfærd" nøglering, samt adgang til vores lukkede Facebook-gruppe. 
Facebook gruppen er dedikeret til at dele relevante nyheder og invitationer til bestyrelsesmøder, og giver vores 
medlemmer et unikt indblik i vores organisation og dens arbejde.</p>

<h1>Bliv medlem</h1>
<p id="text">For at blive medlem, skal du overføre 100,75 kroner til enten vores bankkonto eller via MobilePay. 
    De 100,75 kroner inkluderer et gebyr på 75 øre så vi nemmest kan registrere, at donationen er for et medlemskab. </p>

    <div class="qrkode"></div>
    <p id="text">Derudover beder vi dig venligst sende en mail til os via vores kontaktformular, med dit fulde navn, adresse, e-mail og mobilnummer for at bekræfte dit medlemskab. 

Vi takker dig for din støtte og ser frem til at have dig som en del af vores organisation.</p>

<button id="lysorange"><p><a id="grøn" href="/kontakt-os/">Kontakt</a></p> </button>

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
                    </div>
                </div>

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