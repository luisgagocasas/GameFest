<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Game Fest - UTP AQP</title>
	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="stylesheet" href="css/estilos.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script>
    $(document).ready(function(){
        $("body").css({"overflow-y":"hidden"});
        var alto=$(window).height();
        $("body").append("<div id='pre-load-web'><div id='imagen-load'><img src='img/logofinal.png' width='250' alt='Game Fest' /><br><img src='img/loader.gif'  /><br />Cargando...</div>");
        $("#pre-load-web").css({height:alto+"px"});
        $("#imagen-load").css({"margin-top":(alto/2)-120+"px"});
    })
    $(window).load(function(){
        $("#pre-load-web").fadeOut(1000,function() {
            $(this).remove();
            $("body").css({"overflow-y":"auto"});
        });
    })
    </script>
    <?php
	$banners = array('paper_3.png','paper_4.png','paper_6.png','paper_5.png');
	$rand = mt_rand(0, count($banners)-1);
    ?>
</head>
<body>
	<?='<img src="img/'.$banners[$rand].'" id="bg" />'; ?>
	<header>
		<div class="cabecera">
			<nav class="menuprincipal">
				<figure class="logo">
					<a href="#inicio">
						<img src="img/logofinal.png" />
					</a>
				</figure>
				<ul>
					<li><a href="#registrate"><img src="img/registrate.png" />Registrate</a></li>
					<li><a href="#reglamento"><img src="img/reglamento.png" />Reglamento</a></li>
					<li><a href="#juegos"><img src="img/game.png" />Juegos</a></li>
					<li><a href="#comparte"><img src="img/multimedia.png" />Multimedia</a></li>
				</ul>
			</nav>
			<nav class="redes">
				<ul>
					<li><a href=""><img src="img/facebook.png" /></a></li>
					<li><a href=""><img src="img/twitter.png" /></a></li>
					<li><a href=""><img src="img/google.png" /></a></li>
				</ul>
			</nav>
		</div>
	</header>
	<div class="pagina">
		<div class="contenido">
			<section id="inicio">
				<div class="video">
					<iframe width="560" height="315" src="http://www.youtube.com/embed/ImQCPIwi4vI" frameborder="0" allowfullscreen></iframe>
				</div>
			</section>
			<section id="registrate">
				<div class="inscripcion">
					<img src="img/01.png" class="inscr one" />
					<img src="img/02.png" id="cosplay" class="inscr twu" />
				</div>
			</section>
			<section id="reglamento">
				<h2>Reglamento</h2>
			</section>
			<section id="juegos">
				<h2>Juegos</h2>
				<div class="listajuegos">
				</div>
			</section>
			<section id="comparte">
			</section>
		</div>
	</div>
	<div id="mensaje"></div>
	<script src="js/main.js"></script>
</body>
</html>