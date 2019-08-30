<?php
/*
Template Name: contacto v2
*/
?>
<?php get_header(); ?>    <div class="contenido">
    <div id="contactov2">
      <h1 class="fnt_50">Contacto</h1>
      <ul class="fnt_20">
        <li>
          <a href="tel:648 888 888"><i class="fas fa-phone icon-rota"></i>648 888 888 </a>	
        </li><li>
          <a href="mailto:info@malvon.es"><i class="fas fa-envelope"></i>info@malvon.es</a>
        </li><li>
          <a target="_blank" href="https://m.me/empanadasmalvon"><i class="fas fa-comment" ></i>chat online</a>
        </li><li>
          <a target="_blank" href="https://api.whatsapp.com/send?phone=34648888888" ><i class="fab fa-whatsapp icon-verde"></i>648 888 888</a>
        </li>
      </ul>
      <form class="fnt_16" action="<?php echo get_page_link('5'); ?>" method="post">
        <p class="fnt_14">¿Quieres saber más sobre nosotros? ¿Tienes alguna pregunta? 
Cuéntanos en qué podemos ayudarte :)</p>
		<div class="triangulo"></div>
        <p><input type=" text" name="nombre" placeholder="Tu nombre y apellidos*" required></p>
        <p><input type="email" name="email" placeholder="Tu email*" required><input type="tel" name="telefono" placeholder="Teléfono"></p>
        <p><textarea name="mensaje" placeholder="Introduce tu consulta*" required></textarea>
        </p>
        <p><input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response"></p>
        <p><input type="checkbox" name="aceptar" required> Acepto la <a href="<?php echo get_page_link('93'); ?>">Política de Privacidad</a>
        </p>
        <button name="contacto" class="fnt_20"><i class="fa fa-location-arrow send fnt_18"></i>ENVIAR</button>
        <p>Los campos marcados con <span>*</span> son obligatorios</p>
      </form>
    </div>
    
    </div>
    <div id="map" class="height480"></div>
    

    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/mapav2.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtQP4hZLnZgviZ-4i1tf7_QzlAWM-Qqzo&callback=initMap">
    </script>
    <script>
        grecaptcha.ready(function() {
        grecaptcha.execute('6LctRHoUAAAAAFY9oos6Ysvju--T9MDYW_RTfjeF', {action: 'homepage'})
        .then(function(token) {
        // Verify the token on the server.
        	console.log(token)
    		document.getElementById('g-recaptcha-response').value =    token;
        });
        });
    </script>
<?php get_footer(); ?>