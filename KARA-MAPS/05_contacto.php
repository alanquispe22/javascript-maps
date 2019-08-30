<?php
/*
Template Name: contacto
*/

?>

<?php get_header(); ?>

	<!--div id="mapa">
    	<div id="map-canvas"></div>	    
	</div-->
	<style type="text/css">
    #map-canvas {
        height: 300px;
        width: 100%;
        margin: 0px 0 0 0;
        padding: 0px;
        /*opacity: 0.7;*/  /*instead of styledMap*/
        z-index: 1;
    }
    .google-maps-link-left {
        padding: 10px 12px 11px 30px;
        text-decoration: none;
        font-size: 34px;
        letter-spacing: 2px;
        position: relative;
        font-family: 'Arial';
        font-weight: bold;
        color:#ffb703;
        display: inline;
        vertical-align: middle;
        line-height: 20px;
        letter-spacing:-0.02em;
    }
    
    a.google-maps-link-left:hover  {
        color: #ffc713;
    }
    
    #over_map_left {
        max-width:1200px;
        margin:-267px auto 0 auto;
        z-index: 1;
        min-width:100%
    }
    #over_map_left h1{
        text-indent:0;
        max-width:1200px;
        margin:0 auto;
        text-indent:-4px
    }
    #over_map_left h1 a{
        font-family: "Helvetica NeueLTStd-Bd";
        font-size:70px;
        color:#FFF;
        line-height:82px;
        font-weight:normal;
        z-index:2;
        position:absolute;
    }
    /*.google-maps-link {
        padding: 8px 36px 9px 60px;
        background: #656565 url(<?php echo esc_url( get_template_directory_uri() ); ?>/imagenes/ampliar.png) no-repeat 17px 10px;
        -moz-border-radius: 8px;
        -webkit-border-radius: 8px;
        border-radius: 8px;
        text-decoration: none;
        font-size: 16px;
        letter-spacing: 0.02em;
        position: relative;
        font-family: 'Lato', sans-serif;
        font-weight: 700;
        color: #FFF;
        display: inline;
        vertical-align: middle;
        line-height: 20px;
        text-transform:uppercase
      }*/
      
      #over_map_right { 
          position: absolute;
          background-color: transparent; 
          top: 339px; 
          right: 10px; 
          z-index: 1; 
          background: white; 
      }

</style>
	<div id="mapa"></div>
            <!--div id="map" class="height650"></div-->

    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/mapa.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=key_here&callback=initMap">
    </script>    
        
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
