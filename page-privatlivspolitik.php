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
<div id="herooss">
    <div id="herorow" class="row">
    <div id="herotext" class="col-sm-12"><h1 id=herotext>Privatlivspolitik</h1></div></div></div>
</head>

<body>
    <div  class="privat">
    <h1>Cookies og privatlivspolitik</h1>
    <div class="row">
            <div class="col-lg-6">
                <p id="text">!!!!DETTE ER ET EKSAMENS PROJEKT IKKE DERES ORIGINALE HJEMME!!!!</p>
            <p id="text">
            Dyrenes velfærd bruger cookies. Formålet er at indsamle statistik om trafikken på hjemmesiden. Du er anonym i statistikken.

            Du kender cookies, som automatisk udfylder diverse formularer med oplysninger som navn, adresse og telefonnummer.

            Du kan til hver en tid blokere og slette cookies i de browsere, du bruger.

            Erhvervstyrelsen har udarbejdet en guide, som fortæller, hvordan du bærer dig ad.
            </p>
            </div>   
            <div class="col-lg-6">
            <p id="text"><i id="icons" class="bi bi-person-fill"></i>Formand Jeanette Wulff Geerthsen</p>
            <p id="text"><i id="icons" class="bi bi-envelope-fill"></i> Dyrenes.velfaerd@gmail.com </p>
            <p id="text"><i id="icons" class="bi bi-telephone-fill"></i>+ 45 61 69 85 48</p>
            </div>
        </div>
    </div>
</body>

<?php
get_footer();