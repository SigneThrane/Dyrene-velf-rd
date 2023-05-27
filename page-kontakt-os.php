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
<div id="herokontakt">
    <div id="herorow" class="row">
    <div id="herotext" class="col-sm-12"><h1 id=herotext>Kontakt os</h1></div></div></div>
</head>

<body>
        <div class="kontaktoplysninger">
            <div class="container py-5 px-5">
                <h1 class="oplysninger">Vores kontaktoplysninger</h1>
                <p id="text"><?php the_field('tekst'); ?></p>

</div>
   
<div class="kontakt">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <p id="text"><i id="icons" class="bi bi-person-fill"></i>Formand Jeanette Wulff Geerthsen</p>
            <p id="text"><i id="icons" class="bi bi-envelope-fill"></i> Dyrenes.velfaerd@gmail.com </p>
            <p id="text"><i id="icons" class="bi bi-telephone-fill"></i>+ 45 61 69 85 48</p>
            <p id="text"><i  id="icons" class="bi bi-key-fill"></i>CVR-nr: 39052024 </p>
            <img style="justify-content: left; " width="45%" src="<?php the_field('logo'); ?>" alt="Logo" />
        </div>

        <div class="col-md-6">  <?php echo apply_shortcodes( '[contact-form-7 id="30" title="Contact form 1"]' ); ?></div>
    </div>
</div>

    <div class="wrapper">
    <div style="width:100%; max-width:100%; margin:0px; bottom: 0px; transform: rotate(180deg);"><svg id="mymainsvgelm" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" class="" style="width: calc(130% + 1.3px); height: 106px;"><path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill: rgb(242, 232, 219);"></path></svg></div>  
        </div></div>
   
                <div class="sponsor">
                  
                   <h1>Stort tak til vores sponsorer</h1>
                   <?php echo do_shortcode('[slick_logo_carousel id="230"]'); ?>
                     
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
                
</body>


<?php
get_footer();