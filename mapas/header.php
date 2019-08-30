<?php 
if (!isset($_SERVER['HTTPS'])) header('Location: '.get_home_url().$_SERVER["REQUEST_URI"]);
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?> <?php bloginfo('description'); ?></title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <!-- navegadores nuevas -->
    <!-- <meta http-equiv="Cache-control" content="no-cache, no-store, mustrevalidate" /> 
    <meta http-equiv="Pragma" content="0" />
    <meta http-equiv="Expires" content="-1" />
    <meta http-equiv="Last-Modified" content="0"> -->
    

	<link title="Estilo general" rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/general.css?v=<?php echo date('YmdHis'); ?>" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,700i,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:400,600" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/event.js?v=<?php echo date('YmdHis'); ?>"></script>  
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.11/css/all.css?v=<?php echo date('YmdHis'); ?>" integrity="sha384-p2jx59pefphTFIpeqCcISO9MdVfIm4pNnsL08A6v5vaQc4owkQqxMV8kg4Yvhaw/" crossorigin="anonymous">
    <link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.png" sizes="32x32">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
<?php
 
//header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
 
//header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado
 
?>
<script>
    //no cache jquery
/*$.ajaxSetup({
    cache: false
});*/

	posicionarMenu();
	
	$(window).scroll(function() {    
		posicionarMenu();
	});

	function posicionarMenu() {
		var altura_del_header = $('.headertopfixed').outerHeight(true);
		var altura_del_menu = $('.headertopfixed').outerHeight(true);
	
		if ($(window).scrollTop() >= altura_del_header){
			$('.headertopfixed').addClass('fixed');
            $('.headertopfixed').removeClass('headerv2');
		} else {
			$('.headertopfixed').removeClass('fixed');
		}
	}

</script>
    <meta name="google-site-verification" content="ADrupfu5VPfWffMG3gpRVFeso6jWG1MzfOBzlctE5Yg" />
    <?php if((is_page(43)|| is_page(2)|| is_page(9))):?>
    <script src='https://www.google.com/recaptcha/api.js?render=6LctRHoUAAAAAFY9oos6Ysvju--T9MDYW_RTfjeF'></script>
    <?php endif; ?>

    <?php wp_head(); ?>    
</head>
<body>
    <header class="headertopfixed">
        <div class="contenido">
        	<p class="logop"><a id="logo" class="logohome" href="<?php echo get_option('home'); ?>/">Logo</a></p>
            <nav id="menu"><a class="nav-mobile" id="nav-mobile" href="#"></a>
                <a class="nav-mobile" id="mobile-bag" href="<?php echo get_page_link('16'); ?>"></a>
                <ul class="fnt_18">
                <!-- <li><a href="<?php echo get_page_link('16'); ?>">Carta</a></li> -->
                <li><a href="<?php echo get_page_link('19'); ?>">Carta</a></li>
                <li><a href="<?php echo get_page_link('120'); ?>">Catering</a></li>
                <li><a href="<?php echo get_page_link('14'); ?>">Calentar en casa</a></li>
                <li class="li_responsive"><a href="<?php echo get_page_link('43'); ?>">Contacto</a></li>
                <li class="li_responsive"><a href="<?php echo get_page_link('9'); ?>">Empleo</a></li>
                <li><a href="<?php echo get_page_link('126'); ?>">Prensa</a></li>
                <li><a target="_blank" href="http://www.franquiciasmalvon.com/">Franquicias</a></li>
                <li><a href="<?php echo get_page_link('2'); ?>">Dónde Estamos</a></li>
                </ul>
            </nav>
        </div>
        <script>
            $(function() {
        
                var btn_movil = $('#nav-mobile'),
                    menu = $('#menu').find('ul');
        
                btn_movil.on('click', function (e) {
                    e.preventDefault();
        
                    var el = $(this);
        
                    el.toggleClass('nav-active');
                    menu.toggleClass('open-menu');
                })
        
            });
        </script>
    </header>