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
<div id="hero">
    <div id="herorow" class="row">
	<div class="col-sm-4"></div>
    <div id="herodivforside" class="col-sm-8">	<div id="logo"><img id="logo1"  width="100%" src="<?php the_field('logo'); ?>" alt="Dyrenesvelfærdlogo" /></div> <h1 id=h1forside> Vi har hjerte for dyrene</h1></div></div></div>

</head>
<body>
<div class="video">
<h1><?php the_field('overskrift_video'); ?></h1>
<?php if(have_posts()): ?>
                    <?php while(have_posts()): the_post() ?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                <?php else: ?>
                    <p>No content found</p>
                <?php endif; ?>
                </section>



<div class="wrapper">
    <div style="width:100%; max-width:100%; margin:0px; bottom: 0px; transform: rotate(180deg);"><svg id="mymainsvgelm" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" class="" style="width: calc(130% + 1.3px); height: 97px;">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill: rgb(242, 232, 219);"></path>
                </svg></div>
    </div>
                <div class="map">
			<h1>Du kan støtte på følgende måde</h1>
			<div class="row justify-content-center"> 
                
				<div class="col-sm-3" id="op">
                <img  width="70%" src="<?php the_field('anmeld'); ?>" alt="Katte der spiser" />
           
					<h4>Anmeld en sag</h4>
					<p id="pattext">Vi besøger stedet for 
					at få forbedret dyrenes 
					forhold.</p>
				</div>

				<div class="col-sm-3" id="op">
                <img  width="70%" src="<?php the_field('meld'); ?>" alt="Katte der spiser" />
           
				<h4>Bliv frivillig</h4>
					<p id="pattext">Vi har altid brug for
                    frivillige hænder.</p>
				</div>

				<div class="col-sm-3" id="op">
                <img  width="70%" src="<?php the_field('sponsor'); ?>" alt="Katte der spiser" />
             
				<h4>Bliv sponsor</h4>
					<p id="pattext">
					Som sponsor kan du 
                    være med 
                    til at gøre en forskel.
					</p>
				</div>

				<div class="col-sm-3" id="op">
                <img  width="80%" src="<?php the_field('donere'); ?>" alt="Katte der spiser" />
       
				<h4>Giv et bidrag</h4>
					<p id="pattext">Beløbet går ubeskåret 
						til dyrene.</p>
				</div>
			</div>
		
		<div class="wrapper">
		<div style="width:100%; max-width:100%; margin:0px; bottom: 0px; transform: rotate(180deg);"><svg id="mymainsvgelm" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" class="" style="width: calc(128% + 1.3px); height: 123px;">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill: rgb(93, 126, 75);"></path>
                </svg></div> 
		</div>
		<div class="anmeldsag">
          
                    <div id="space" class="row">
                       
                        <div class="col-md-4">
                           
                      <img  width="80%" src="<?php the_field('sag_1'); ?>" alt="Dyre i nød" />
                        </div>

                        <div class="col-md-4">
                        <img  width="80%" src="<?php the_field('sag_2'); ?>" alt="Dyre i nød" />
                        </div>

                        <div class="col-md-4">
                        <img  width="80%" src="<?php the_field('sag_3'); ?>" alt="Dyre i nød" />

                        </div>
                    </div>
                   
                </div>

                <div class="anmeldsag">
			<h1>Har du set noget som giver dig ondt i hjertet? </h1>
			<button id="orange"><p><a href="/eksamen/anmeld-sag/">ANMELD SAG HER</a></p></button>
			
			
			<br>

		<div style="width:100%; max-width:100%; margin:0px; bottom: 0px; transform: rotate(180deg);"><svg id="mymainsvgelm" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" class="" style="width: calc(130% + 1.3px); height: 106px;"><path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill: rgb(242, 232, 219);"></path></svg></div>  
        </div>
					<div class="animation">
				 <h1><?php the_field('kampagne_overskrift'); ?></h1> 
				 <img  width="70%" src="<?php the_field('donation'); ?>" alt="Dyre i nød" />
						<h2><?php the_field('kampagne_brodtekst'); ?></h2>
						
						<p id="center"><a id="link" href="/eksamen/doner/">Klik på pilen, for at fortsætte med din heltegerning > </a></p>

						<div class="wrapper">
		<div style="width:100%; max-width:100%; margin:0px; bottom: 0px; transform: rotate(180deg);"><svg id="mymainsvgelm" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" class="" style="width: calc(128% + 1.3px); height: 123px;">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill: rgb(93, 126, 75);"></path>
                </svg></div> 
						<div class="instapost">
						<h1>Følg os på Instagram</h1>
						<?php echo apply_shortcodes( '[instagram-feed feed=1]' ); ?>
			
				
		
		<div style="width:100%; max-width:100%; margin:0px; bottom: 0px; transform: rotate(180deg);"><svg id="mymainsvgelm" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" class="" style="width: calc(109% + 1.3px); height: 67px; transform: rotateY(180deg);">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill: rgb(241, 155, 56);"></path>
                </svg></div>
                </div>
		
                <div class="dyrene">
		
			<h1>Hjælp dyrene - støt en god sag</h1>
			<button id="hjaelp"><p><a id="hjlp" href="/eksamen/doner/">DONÉR NU</a></p> </button>

			<p id="center"><a href="/eksamen/doner/">Har du spørgsmål til hvordan du kan støtte? Læs mere her </a></p>

		</div>
		</div>
		</div>
		</div>
		</div>
		</div>
		</div>
</body>

<?php
get_footer();
