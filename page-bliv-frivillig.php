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
<body>
<div class="soger">
    <h1>Bliv en del af fællesskabet</h1>
    <p>Vi er altid på udkig efter frivillige, da vi modtager en stor mængde henvendelser angående dyr i nød. <br>
        Ønsker du at bidrage til vores sag og besidder du den nødvendige robusthed til at håndtere de udfordrende situationer, <br>
        vi ofte står overfor som dyre reddere? <br><br>

En kærlighed til dyr er afgørende, da det er hjertet i vores arbejde. Du vil også skulle vise respekt og empati over for de mennesker, <br>
vi samarbejder med, da de kan have mange forskellige grunde til ikke at kunne tage sig af deres dyr. <br><br>

Hvis du ønsker at blive frivillig hos os, må du meget gerne sende os en beskrivelse af dig selv, via vores kontaktformular længere nede på siden. <br>
Beskrivelsen må meget gerne indeholde navn, adresse, beskrivelse af dig som person, samt en beskrivelse af hvad du vil opnå ved at være frivillig hos os. <br>
Derudover vil vi gerne bede om en kopi af din straffeattest, af sikkerhedsmæssige årsager. <br>
Efter modtagelse af din mail, vil vi kontakte dig hurtigst muligt. <br><br>

Hvis du har yderligere spørgsmål, er du velkommen til at kontakte os via kontaktformularen eller telefon.</p>

<button>Kontakt</button>

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
    <br><br><br><br>

    <div class="wrapper">
    <div style="width:100%; max-width:100%; margin:0px; bottom: 0px; transform: rotate(180deg);"><svg id="mymainsvgelm" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" class="" style="width: calc(117% + 1.3px); height: 73px;"><path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill: rgb(242, 232, 219);"></path></svg></div>
</div>

    <div class="rolle">
        <h1>Din rolle som frivillig</h1>
        <p>At være frivillig hos Dyrenes Velfærd indebærer at være en del af en organisation, der arbejder for at forbedre dyrevelfærden i samfundet. <br>

Som frivillig kan man blive involveret i en række forskellige opgaver, herunder at deltage i sager, hvor man tager billeder og hjælper med at træffe <br>
beslutninger omkring dyrenes trivsel. Man kan også være med til at pleje og passe på de dyr, der er blevet reddet, <br> og sørge for, at de får den nødvendige br behandling og omsorg. <br>

Derudover kan man også hjælpe med fundraising, arrangementer og oplysningsarbejde, der bidrager til at sprede kendskabet til organisationens arbejde. <br>

Som frivillig hos Dyrenes Velfærd er man en vigtig del af en indsats, der gør en positiv forskel for dyr i nød. Vi glæder os til at høre fra dig. </p>




                <div class="wrapper">
    <div style="width:100%; max-width:100%; margin:0px; bottom: 0px; transform: rotate(180deg);"><svg id="mymainsvgelm" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" class="" style="width: calc(124% + 1.3px); height: 69px;">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill: rgb(93, 126, 75);"></path>
                </svg></div>

    <div class="muligheder">
        <h1>Du kan også støtte på følgende måder</h1>
        <div class="row">
            <div class="col-md-3">
                   <button>Bliv medlem</button>
            </div>
            <div class="col-md-3">
            <button>Bliv frivillig</button>
            </div>
            <div class="col-md-3">
                     <button>Bliv sponsor</button>
            </div>
            <div class="col-md-3">
                 <button>Donér</button>
                 <br><br><br><br>
            </div>
        </div>
           
                    <div class="wrapper">
                    <div style="width:100%; max-width:100%; margin:0px; bottom: 0px; transform: rotate(180deg);"><svg id="mymainsvgelm" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" class="" style="width: calc(109% + 1.3px); height: 67px; transform: rotateY(180deg);">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill: rgb(241, 155, 56);"></path>
                </svg></div>
                    
                </div></div>

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