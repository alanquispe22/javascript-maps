<?php
/*
Template Name: contacto
*/
?>
<?php get_header(); ?>
<!--script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&key=AIzaSyCtQP4hZLnZgviZ-4i1tf7_QzlAWM-Qqzo"></script-->
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
        <div id="mapa">
            <div id="map" class="height650"></div>

    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/mapav2.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtQP4hZLnZgviZ-4i1tf7_QzlAWM-Qqzo&callback=initMap">
    </script>
        </div>
<!--script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/mapas.js"></script-->  

    <div class="home1">
        <h2 class="tituloshome fnt_50">Dónde estamos</h2>
        <div id="btn-left" ></div>  
        <div id="btn-right" ></div> 
        <div class="home1scroll">  

            <div class="de-contenedor">
                <div>
                <img src="<?php bloginfo('stylesheet_directory'); ?>/imagenes/malvon-moncloa.jpg" alt="Malvon Moncloa">
                <h3 class="fnt_20"><span>Malvón</span> Moncloa</h3>
                <p>Calle Hilarión Eslava 38 <br> 28015 Moncloa.<br> 910 51 94 05<br> moncloa@malvon.es<br> <br>Lunes a Viernes: 10:00-22:00<br>Sábado: 11:00-22:00<br>Domingo: 11:00-15:00<br>Festivos: 11:00-15:00<br><br><a target="_blank" href="https://www.google.com/maps/place/Malv%C3%B3n+Empanadas+Argentinas/@40.436156,-3.718678,17z/data=!3m1!4b1!4m5!3m4!1s0xd422843bbcc6757:0x9ce1368d70df4698!8m2!3d40.436156!4d-3.716484" class="fnt_14">ver en Mapa ></a></p>
            </div><div>
                <img src="<?php bloginfo('stylesheet_directory'); ?>/imagenes/malvon-las-rozas.jpg" alt="Malvon Las Rozas">
                <h3 class="fnt_20"><span>Malvón</span> Las Rozas</h3>
                <p>Calle Monaco 40 <br>28230 Las Rozas.<br> 915 65 48 03<br> lasrozas@malvon.es<br><br> Lunes a Viernes: 10:00-22:00<br>Sábado: 11:00-22:00<br>Domingo: 11:00-15:00><br>Festivos: 11:00-15:00><br><br><a target="_blank" class="fnt_14" href="https://www.google.com/maps/place/Malv%C3%B3n+Empanadas+Argentinas/@40.5032855,-3.8949569,17z/data=!3m1!4b1!4m5!3m4!1s0xd4183469d7dc1a9:0x9da5a060a77f6903!8m2!3d40.5032855!4d-3.8927629">ver en Mapa ></a></p> 
            </div><div>
                <img src="<?php bloginfo('stylesheet_directory'); ?>/imagenes/malvon-bernabeu.jpg" alt="Malvon Bernabeu">
                <h3 class="fnt_20"><span>Malvón</span> Bernabéu</h3>
                <p>Paseo de la Habana 52<br>28003 Madrid<br> 911 995 409<br> bernabeu@malvon.es<br><br> Lunes a Viernes: 10:00-22:00<br>Sábado: 11:00-22:00<br>Domingo: 12:00-22:00<!--br>Festivos: 11:00-15:00--><br><br><a target="_blank" class="fnt_14" href="https://www.google.com/maps/place/Malv%C3%B3n+Empanadas+Argentinas/@40.4507832,-3.6889011,17z/data=!3m1!4b1!4m5!3m4!1s0xd422917cde1d8ad:0xeab5d764ac026e8!8m2!3d40.4507832!4d-3.6867071">ver en Mapa ></a></p> 
            </div><div class="proximamente">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/imagenes/malvon-arturosoria.jpg" alt="Malvon Arturo Soria">
                <h3 class="fnt_20"><span>Malvón</span> Arturo Soria</h3>
                 <p>Calle Santo Ángel 3<br>28003 Madrid<br> 918 780 650<br> arturosoria@malvon.es<br><br> Lunes a Jueves: 11:00-21:00<br>Viernes y Sábados: 11:00-22:00<br>Domingo y Festivos: 11:00-15:00<br><br><a target="_blank" class="fnt_14" href="https://www.google.com/maps/place/Calle+del+Santo+%C3%81ngel,+3,+28043+Madrid,+Espa%C3%B1a/@40.4582565,-3.6586643,18z/data=!4m5!3m4!1s0xd422ed43bffc22b:0x4196e99d355a9742!8m2!3d40.4586188!4d-3.6583235">ver en Mapa ></a></p>                
            </div><div>
                <img src="<?php bloginfo('stylesheet_directory'); ?>/imagenes/malvon-chamberi.jpg" alt="Malvon Chamberí">
                <h3 class="fnt_20"><span>Malvón</span> Chamberí</h3>
                <p>Calle José Abascal 23 <br> 28003 Madrid<br> 910 571 319<br> chamberi@malvon.es<br> <br>Lunes a Viernes: 10:00-22:00<br>Sábado: 11:00-22:00<br>Domingo: 11:00-15:00<br>Festivos: 11:00-15:00<br><br><a target="_blank" href="https://www.google.com/maps/place/Calle+de+Jos%C3%A9+Abascal,+23,+28003+Madrid,+Espa%C3%B1a/@40.4385894,-3.7017212,17z/data=!3m1!4b1!4m5!3m4!1s0xd4228f69dad5c67:0x8b406b35bf9fff01!8m2!3d40.4385894!4d-3.6995325" class="fnt_14">ver en Mapa ></a></p>
            </div><div class="proximamente">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/imagenes/malvon-retiro.jpg" alt="Malvon Retiro">
                <h3 class="fnt_20"><span>Malvón</span> Retiro</h3>
                 <p>Calle Narvaez 60<br>28009 Madrid<br> 915 044 089<br> retiro@malvon.es<br><br>Lunes a Domingo: 11:00-22:00<br><a target="_blank" href="https://goo.gl/maps/eipXZ8DHUbhd5hR2A" class="fnt_14">ver en Mapa ></a>     
                </p>
                <!-- <p class="de-aviso">
                    Apertura <br><span>JUNIO</span>
                </p> -->
            </div><div>
                <img src="<?php bloginfo('stylesheet_directory'); ?>/imagenes/malvon-lista.jpg" alt="Malvon Lista">
                <h3 class="fnt_20"><span>Malvón</span> Lista</h3>
                 <p>Calle Ortega y Gasset 94<br>28006 Madrid<br> 635-335-335<br> lista@malvon.es<br><br><br>Lunes a Viernes: 10:00-22:00<br>Sábado: 11:00-22:00<br>Domingo: 11:00-15:00<br><a target="_blank" href="https://goo.gl/maps/m8TNfNbmE9RjrnRE8" class="fnt_14">ver en Mapa ></a>    
                </p>
                <!--p class="de-aviso">
                    Apertura <br><span>AGOSTO/SEPTIEMBRE</span>
                </p-->
            </div><div class="proximamente">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/imagenes/proximamente.png" alt="Malvon Salamanca">
                <h3 class="fnt_20"><span>Malvón</span> Salamanca</h3>
                 <p>Calle Diego de León 60<br>28006 Madrid<br> 635-335-335<br> salamanca@malvon.es<br><br>    
                </p>
                <p class="de-aviso">
                    Apertura <br><span>AGOSTO/SEPTIEMBRE</span>
                </p>
            </div><div class="proximamente">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/imagenes/proximamente.png" alt="Malvon Valencia">
                <h3 class="fnt_20"><span>Malvón</span> Valencia</h3>
                 <p><!-- direccion --><br> 46002 Valencia<br> 635-335-335<br> valencia@malvon.es<br><br>    
                </p>
                <p class="de-aviso">
                    Apertura <br><span>SEPTIEMBRE/OCTUBRE</span>
                </p>
            </div><div class="proximamente">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/imagenes/proximamente.png" alt="Malvon Valladolid">
                <h3 class="fnt_20"><span>Malvón</span> Valladolid</h3>
                 <p><!-- direccion --><br> 47013 Valladolid<br> 635-335-335<br> valladolid@malvon.es<br><br>    
                </p>
                <p class="de-aviso">
                    Apertura <br><span>SEPTIEMBRE/OCTUBRE</span>
                </p>
            </div>
            </div>            
        </div>
        
        <div>
            <ul id="posicion-img"><li class="item seleccionado"></li><li class="item noseleccionado"></li><li class="item noseleccionado"></li></ul>
        </div>            
        

    </div>
<!-- #direcciones -->
    <div class="clr"></div>
    <div id="contactov2" class="form_contacto">
      <h1 class="fnt_50">Contacto</h1>
      <ul class="fnt_20">
        <li>
          <a href="tel:635335335"><i class="fas fa-phone icon-rota"></i>635 335 335 </a>  
        </li><li>
          <a href="mailto:info@malvon.es"><i class="fas fa-envelope"></i>info@malvon.es</a>
        </li><li>
          <a target="_blank" href="https://m.me/empanadasmalvon"><i class="fas fa-comment" ></i>chat online</a>
        </li><li>
          <a target="_blank" href="https://api.whatsapp.com/send?phone=34635335335" ><i class="fab fa-whatsapp icon-verde"></i>635 335 335</a>
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
    </div><!-- fin #contacto -->
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