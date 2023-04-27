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
        <div class="kontaktoplysninger">
                <h3 class="oplysninger">Vores kontaktoplysninger</h3>
                <h5 class="oplys">Du er mere end velkommen til at kontakte os vedrørende spørgsmål, forespørgsler, donationer, anmeldelser, medlemskab m.m.  <br>
                   Vi kan kontaktes via telefon fra mandag - fredag mellem 08:00 - 16:00 <br>

                    Vi kan kontaktes via mail alle ugens dage, og vil vende tilbage indenfor 48 timer</h5>
<br><br><br><br>

</div>    

        <div class="kontakt">
        <div class="row">
        <div class="col-sm-4">
            <p>
            Formand Jeanette Wulff Geerthsen  <br>

            Dyrenes.velfaerd@gmail.com <br>

            <p><i id="kontakticon" class="fas fa-phone me-3"></i> + 45 61 69 85 48</p>
          
            CVR-nr: 39052024 <br>
            </p>

            <img  width="50%" src="<?php the_field('logo'); ?>" alt="Logo" />

        </div>

                <div class="col-sm-8">
                <?php echo apply_shortcodes( '[contact-form-7 id="30" title="Contact form 1"]' ); ?>
                </div>
    </div>
    <div style="width:100%; max-width:100%; margin:0px; bottom: 0px; transform: rotate(180deg);"><svg id="mymainsvgelm" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" class="" style="width: calc(130% + 1.3px); height: 106px;"><path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill: rgb(242, 232, 219);"></path></svg></div>  
        </div>
   
                <div class="sponsor">
                    <br><br><br>
                   <h3>Hjælp dyrene - støt en god sag</h3>
                     <?php echo apply_shortcodes( '[sponsors style=slider arrows=0 image_size=50px slidestoscroll=3 slidestoshow=3 breakpoints=480;1;1|640;2;2]' ); ?>
                  
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
                
</body>


<?php
get_footer();