<?php
/*
Template Name: contacto
*/

?>

<?php get_header(); ?>

	<div id="mapa">
    	<div id="map-canvas"></div>	    
	</div>
	<div id="contacto">		
		<section id="contenido_about">
			<div class="contenido">
				<div class="intro">
					<h2 class="fnt_60 fnt_semi-bold">Contacto</h2>
					<p class="fnt_24 fnt_semi-bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate. 
					</p>					
				</div>
			</div>
		</section>
		<div class="contenedor_form ">		
			<div class="formulario fnt_ligth">
            	<fieldset>
                    <ul>
                        <li><i class="fa fa-map-marker"></i> Calle de Rosario Pino, 18. 1º-3. 28020. Madrid. España.</li>
                        <li class="fonomail"><i class="fa fa-phone fono"></i> Tel: (34) 91 333 33 33</li><li class="fonomail"><i class="fa fa-envelope"></i> hola@karaolavarrieta.com</li>
					</ul>
                    <form  action="<?php echo get_page_link('69'); ?>" method="post">
                    <p><i class="fa fa-user"></i> <input title="Ingresa tu nombre por favor." required type="text" name="nombre" class="form-control" placeholder="Nombre"></p>
                    <p><i class="fa fa-envelope"></i><input title="Ingresa tu e-mail por favor." name="email" required type="text" class="form-control" placeholder="Email"></p>
                    <p><i class="fa fa-comment"></i><textarea required placeholder="Mensaje" name="mensaje"></textarea> </p>
                    <p><i class="fa fa-location-arrow send"></i><input type="submit" value="Enviar" name="contacto" class="enviar"></p>
                    </form>
                </fieldset>
            </div>
    		<div class="contacto-der"></div>	
		</div>
		
	</div>
<?php get_footer(); ?>