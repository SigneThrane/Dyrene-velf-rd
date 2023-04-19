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
        <div class="kontaktoplysninger">
                <h3>Vores kontaktoplysninger</h3>
                <h5>Du er mere end velkommen til at kontakte os vedrørende spørgsmål, forespørgsler, donationer, anmeldelser, medlemskab m.m. 


Vi kan kontaktes via telefon fra mandag - fredag mellem 08:00 - 16:00 

Vi kan kontaktes via mail alle ugens dage, og vil vende tilbage indenfor 48 timer</h5>
            
<div class="custom-shape-divider-bottom-1681908059">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
    </svg>
    
</div>
        <div class="kontakt">
        <div class="row">
        <div class="col-md-6">
            <p>
            Formand Jeanette Wulff Geerthsen <br>

            Dyrenes.velfaerd@gmail.com <br>

            + 45 61 69 85 48 <br>

            CVR-nr: 39052024 <br>
            </p>
        </div>

                <div class="col-md-6">
                <?php echo apply_shortcodes( '[contact-form-7 id="30" title="Contact form 1"]' ); ?>
                </div>

    </div>
        </div>
   

                <div class="sponsor">
                   <h3>Hjælp dyrene - støt en god sag</h3>
                    <div class="row">
                        <div class="col-md-4">
                            <p>Billede</p>
                        </div>

                        <div class="col-md-4">
                            <p>Billede</p>
                        </div>

                        <div class="col-md-4">
                            <p>Billede</p>
                        </div>
                    </div>
                </div>
</body>