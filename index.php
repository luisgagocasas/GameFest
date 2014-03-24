<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Game Fest UTP AQP</title>
	<link rel="shortcut icon" href="favicon.ico" />
	<meta property="fb:page_id" content="418576111622453" />
	<meta property="og:title" content="Game Fest UTP AQP" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://gamefest.plataforma.edu.pe/"/>
	<meta property="og:image" content="http://gamefest.plataforma.edu.pe/img/logofinal.png" />
	<meta property="og:site_name" content="Game Fest UTP AQP" />
	<meta property="fb:admins" content="100000476487163" />
	<link rel="stylesheet" href="css/estilos.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script>
	$(document).ready(function(){
	    $("body").css({"overflow-y":"hidden"});
	    var alto=$(window).height();
	    $("body").append("<div id='pre-load-web'><div id='imagen-load'><img src='img/logofinal.png' width='250' alt='Game Fest' /><br /><h3>Los videojuegos pueden hacer un mundo mejor...</h3><img src='img/loader.gif' /></div>");
	    $("#pre-load-web").css({height:alto+"px"});
	    $("#imagen-load").css({"margin-top":(alto/2)-140+"px"});
	})
	$(window).load(function(){
	    $("#pre-load-web").fadeOut(1000,function() {
	        $(this).remove();
	        $("body").css({"overflow-y":"auto"});
	        $("#docs")
				.attr('src','https://docs.google.com/document/d/1qgvqhfcIf-UJ3ZK6jtQv4cV8SCGsaIRHXWPVIGjFg6Y/pub')
	    });
	})
    </script>
    <?php
	$banners = array('paper_3.jpg','paper_4.jpg','paper_6.jpg','paper_5.jpg');
	$rand = mt_rand(0, count($banners)-1);
    ?>
</head>
<body>
	<?='<img src="img/'.$banners[$rand].'" id="bg" />'; ?>
	<?php echo "\n"; ?>
	<header>
		<div class="cabecera">
			<nav class="menuprincipal">
				<figure class="logo">
					<a href="#inicio" id="menu">
						<img src="img/logofinal.png" />
					</a>
				</figure>
				<ul>
					<li><a href="#registrate" id="menu"><img src="img/registrate.png" />Inscríbete</a></li>
					<li><a href="#reglamento" id="menu"><img src="img/reglamento.png" />Reglamento</a></li>
					<li><a href="#juegos" id="menu"><img src="img/game.png" />Juegos</a></li>
					<li><a href="#multimedia" id="menu"><img src="img/multimedia.png" />Multimedia</a></li>
				</ul>
			</nav>
			<nav class="redes">
				<ul>
					<li><a href="https://www.facebook.com/UTPGameFestival" target="_blank"><img src="img/facebook-azul.png" /></a></li>
					<li><a href="https://twitter.com/PlataformaJM" target="_blank"><img src="img/twitter-gris.png" /></a></li>
					<li><a href="https://plus.google.com/events/crinankrd84al959t7djvf6i9n0" target="_blank"><img src="img/google-rojo.png" /></a></li>
				</ul>
			</nav>
		</div>
	</header>
	<div class="pagina">
		<div class="contenido">
			<section id="inicio">
			<br />
				<center>
					<a id="pasos">
						<h3 style="color: #0068AA;text-shadow: -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0 #fff, 1px 1px 0 #fff;cursor: pointer;">
						PASOS A SEGUIR PARA PARTICIPAR EN EL FESTIVAL
						</h3>
					</a>
				</center>
				<br />
				<div class="video">
					<img src="img/bg3.jpg" alt="Play" class="imgvideo" />
					<iframe width="560" height="315" src="http://www.youtube.com/embed/w07i7o7V4ag" id="video" frameborder="0" allowfullscreen></iframe>
				</div>
			</section>
			<section id="registrate">
				<div class="inscripcion">
					<img src="img/01.png" id="gamereg" class="inscr one" />
					<img src="img/02.png" id="cosplay" class="inscr twu" />
				</div>
			</section>			
			<section id="reglamento">
				<h2>Reglamento</h2>
				<iframe id="docs" style="min-height: 430px;background: rgba(255, 255, 255, 0.53);border-radius: 5px;" src="" width="100%" frameborder="0"></iframe>
			</section>
			<section id="juegos">
				<h2>Juegos</h2>
				<div class="listajuegos">
					<article class="juego">
						<p class="textimg">
							<span class="titulo">DOTA</span>
							<span class="reglamento"><a href="https://docs.google.com/document/d/1chLuGoHpWPMh6BhDy75sgqMuAJuiS7-R6um7oOnGhIk/pub" onclick="window.open('https://docs.google.com/document/d/1chLuGoHpWPMh6BhDy75sgqMuAJuiS7-R6um7oOnGhIk/pub','gamefest','scrollbars=yes,width=500,height=500,left='+(screen.availWidth/2-250)+',top='+(screen.availHeight/2-200)+''); return false;">Reglamento</a></span>
							Participa con el mejor MOBA de la historia! y presencia la colosal lucha entre los héroes más épicos, usando toda tu capacidad para llevar a tu bando a la victoria.
						</p>
						<div class="video">
							<iframe width="560" height="315" src="http://www.youtube.com/embed/dH3dx1UTF7Q" frameborder="0" allowfullscreen></iframe>
						</div>
					</article>
					<article class="juego">
						<p class="textimg">
							<span class="titulo">StarCraft</span>
							<span class="reglamento"><a href="https://docs.google.com/document/d/1XZFaW6BEaxoxbkaexE8D0d-O7p51lnNT8r6h2YqqjEA/pub" onclick="window.open('https://docs.google.com/document/d/1XZFaW6BEaxoxbkaexE8D0d-O7p51lnNT8r6h2YqqjEA/pub','gamefest','scrollbars=yes,width=500,height=500,left='+(screen.availWidth/2-250)+',top='+(screen.availHeight/2-200)+''); return false;">Reglamento</a></span>
							¡Vive la verdadera emoción en el más intenso combate futurista y usa tus mejores estrategias para sobrevivir en un campo donde tu raza es lo más importante!
						</p>
						<div class="video">
							<iframe width="560" height="315" src="http://www.youtube.com/embed/s6Pzs2fTubE" frameborder="0" allowfullscreen></iframe>
						</div>
					</article>
					<article class="juego">
						<p class="textimg">
							<span class="titulo">Counter Strike</span>
							<span class="reglamento"><a href="https://docs.google.com/document/d/1MlTKtKJ4_bVUJKoaX9jptajmxZNdvcReHo1i3Czz5-g/pub" onclick="window.open('https://docs.google.com/document/d/1MlTKtKJ4_bVUJKoaX9jptajmxZNdvcReHo1i3Czz5-g/pub','gamefest','scrollbars=yes,width=500,height=500,left='+(screen.availWidth/2-250)+',top='+(screen.availHeight/2-200)+''); return false;">Reglamento</a></span>
							Sumérgete en el fragor de la guerra antiterrorista más realista con este archiconocido juego por equipos. Alíate con tus equipo para superar a todos tus contrincantes y obtener la gloria.
						</p>
						<div class="video">
							<iframe width="560" height="315" src="http://www.youtube.com/embed/-y788UPj7Uo" frameborder="0" allowfullscreen></iframe>
						</div>
					</article>
					<article class="juego">
						<p class="textimg">
							<span class="titulo">Tekken 3</span>
							<span class="reglamento"><a href="https://docs.google.com/document/d/1cxoSmCOjZ3TwTDAMGziP2dNbkUA6CwYb0cOC8qjZWWc/pub" onclick="window.open('https://docs.google.com/document/d/1cxoSmCOjZ3TwTDAMGziP2dNbkUA6CwYb0cOC8qjZWWc/pub','gamefest','scrollbars=yes,width=500,height=500,left='+(screen.availWidth/2-250)+',top='+(screen.availHeight/2-200)+''); return false;">Reglamento</a></span>
							Demuestra que mereces ser el campeón! ven y derrota a todos tus contrincantes limpiamente, y usa toda la brutalidad posible con Tekken 3 en una batalla sangrienta.
						</p>
						<div class="video">
							<iframe width="560" height="315" src="http://www.youtube.com/embed/8NUHXpYWl-8" frameborder="0" allowfullscreen></iframe>
						</div>
					</article>
					<article class="juego">
						<p class="textimg">
							<span class="titulo">Super Smash Bros</span>
							<span class="reglamento"><a href="https://docs.google.com/document/d/136k9ErinUFjqu1PFGiwtvWgvREtxkEUT66lfIGv58xc/pub" onclick="window.open('https://docs.google.com/document/d/136k9ErinUFjqu1PFGiwtvWgvREtxkEUT66lfIGv58xc/pub','gamefest','scrollbars=yes,width=500,height=500,left='+(screen.availWidth/2-250)+',top='+(screen.availHeight/2-200)+''); return false;">Reglamento</a></span>
							Porque todo tiempo pasado fue mejor, te traemos el clásico Super Smash bros 64, donde podrás competir con fabulosos personajes en el “crossover” más famoso de la historia! compite con difíciles rivales en el torneo que te garantiza emociones sin límites.
						</p>
						<div class="video">
							<iframe width="560" height="315" src="http://www.youtube.com/embed/u589Li2o-zA" frameborder="0" allowfullscreen></iframe>
						</div>
					</article>
					<article class="juego">
						<p class="textimg">
							<span class="titulo">PES 2013</span>
							<span class="reglamento"><a href="https://docs.google.com/document/d/1TVIGs-NEveqRHbHuGUh0VHKQlPS5Jn3i81uIJSvz-bQ/pub" onclick="window.open('https://docs.google.com/document/d/1TVIGs-NEveqRHbHuGUh0VHKQlPS5Jn3i81uIJSvz-bQ/pub','gamefest','scrollbars=yes,width=500,height=500,left='+(screen.availWidth/2-250)+',top='+(screen.availHeight/2-200)+''); return false;">Reglamento</a></span>
							¿te gusta el fútbol? ¿y quieres llevar a tu equipo a la victoria? ¡entonces tienes que participar de este super entretenido super torneo! muevete como los mejores jugadores del mundo, realiza las jugadas y coloca tu nombre en el salón de la fama, donde los mejores graban su nombre.
						</p>
						<div class="video">
							<iframe width="560" height="315" src="http://www.youtube.com/embed/BaR0M9rS-yQ" frameborder="0" allowfullscreen></iframe>
						</div>
					</article>
				</div>
			</section>
			<section id="multimedia" style="text-align: center;">
				<br><br>
				<div class="mundo">
					<h3>Los videojuegos pueden hacer un mundo mejor</h3>
					<article class="fondos">
						<figure>
							<a href="http://www.youtube.com/watch?v=TbTm1Lkm18o" onclick="window.open('http://www.youtube.com/embed/TbTm1Lkm18o?&amp;autoplay=1','gamefest','scrollbars=yes,width=700,height=500,left='+(screen.availWidth/2-250)+',top='+(screen.availHeight/2-200)+''); return false;"><img src="img/bg6.jpg" /></a>
						</figure>
					</article><article class="fondos">
						<figure>
							<a href="http://www.youtube.com/watch?v=2IrWRosfzoE" onclick="window.open('http://www.youtube.com/embed/2IrWRosfzoE?&amp;autoplay=1','gamefest','scrollbars=yes,width=700,height=500,left='+(screen.availWidth/2-250)+',top='+(screen.availHeight/2-200)+''); return false;"><img src="img/bg7.jpg" /></a>
						</figure>
					</article><article class="fondos">
						<figure>
							<a href="http://www.youtube.com/watch?v=Q4nFUFO_rXw" onclick="window.open('http://www.youtube.com/embed/Q4nFUFO_rXw?&amp;autoplay=1','gamefest','scrollbars=yes,width=700,height=500,left='+(screen.availWidth/2-250)+',top='+(screen.availHeight/2-200)+''); return false;"><img src="img/bg8.jpg" /></a>
						</figure>
					</article><article class="fondos">
						<figure>
							<a href="http://www.youtube.com/watch?v=EuMLQcYlK5Y" onclick="window.open('http://www.youtube.com/embed/EuMLQcYlK5Y?&amp;autoplay=1','gamefest','scrollbars=yes,width=700,height=500,left='+(screen.availWidth/2-250)+',top='+(screen.availHeight/2-200)+''); return false;"><img src="img/bg9.jpg" /></a>
						</figure>
					</article><article class="fondos">
						<figure>
							<a href="http://www.youtube.com/watch?v=yheJVKes3xg" onclick="window.open('http://www.youtube.com/embed/yheJVKes3xg?&amp;autoplay=1','gamefest','scrollbars=yes,width=700,height=500,left='+(screen.availWidth/2-250)+',top='+(screen.availHeight/2-200)+''); return false;"><img src="img/bg10.jpg" /></a>
						</figure>
					</article>
				</div>
				<div class="wallpaper">
					<h3>Wallpaper</h3>
					<article class="fondos">
						<figure>
							<img src="img/img1.jpg" />
						</figure>
						<button id="tweetLink1" class="downloadButton">Descargar</button>
					</article><article class="fondos" id="descarga2">
						<figure>
							<img src="img/img2.jpg" />
						</figure>
						<button id="tweetLink2" class="downloadButton">Descargar</button>
					</article><article class="fondos" id="descarga3">
						<figure>
							<img src="img/img3.jpg" />
						</figure>
						<button id="tweetLink3" class="downloadButton">Descargar</button>
					</article><article class="fondos" id="descarga4">
						<figure>
							<img src="img/img4.jpg" />
						</figure>
						<button id="tweetLink4" class="downloadButton">Descargar</button>
					</article><article class="fondos" id="descarga5">
						<figure>
							<img src="img/img5.jpg" />
						</figure>
						<button id="tweetLink5" class="downloadButton">Descargar</button>
					</article>
				</div>
				<div class="wallpaper">
					<h3>Themes‎ Windows</h3>
					<article class="fondos">
						<figure>
							<img src="img/img6.jpg" />
						</figure>
						<button id="tweetLink6" class="downloadButton">Descargar</button>
					</article>
				</div>
				<div class="videos">
					<h3>Videos</h3>
					<article class="fondos">
						<figure>
							<a href="http://www.youtube.com/embed/w07i7o7V4ag" onclick="window.open('http://www.youtube.com/embed/w07i7o7V4ag','gamefest','scrollbars=yes,width=700,height=500,left='+(screen.availWidth/2-250)+',top='+(screen.availHeight/2-200)+''); return false;"><img src="img/bg3.jpg" /></a>
						</figure>
					</article>
				</div>
			</section>
			<?php if($_GET['activar']==true){ $respcont = mysql_query("select * from comp_gamefest where correo='".$_GET['correo']."'"); $cont = mysql_fetch_array($respcont); ?>
			<section id="activar">
				<div class="mensaje animated bounceInDown">
				    <div class="cerrar">x</div>
				    <span class="texto">
				        <h2 style="margin: 0px auto; color: #FFF;">Activar correo</h2><br />
				        Hola, <?=$cont['nombre']; ?><br />
				        Guardaremos tu correo electronico<br />
						<center><h2><?php echo $_GET['correo']; ?></h2></center>
				    </span>
				</div>
				<div class="overlay"></div>
			</section>
			<?php } ?>
		</div>
	</div>
	<div id="mensaje"></div>
	<script src="js/main.js"></script>
	<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-41465403-12']);
	_gaq.push(['_trackPageview']);
	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; 
		ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
	</script>
</body>
</html>