<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width , initial-scale=1 ,maximum-scale=1" />
	<title>Game Fest</title>
	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="stylesheet" href="css/estilos.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<!-- http://baijs.nl/tinycircleslider/ -->
	<!-- http://daneden.github.io/animate.css/ -->
	<!-- https://github.com/titoBouzout/SideBarEnhancements#f12-key -->
	<!-- http://arturadib.com/hello-backbonejs/ -->
	<!-- http://jallander.wordpress.com/2013/06/19/ejemplo-de-uso-de-backbone-js-localstorage-editor-de-tweets/ -->
	<script>
    $(document).ready(function(){
        $("#gamereg").click(function(){
            $.ajax({
                type: "POST",
                dataType: 'json',
                url: "guardar.php"
            }).done(function(respuesta){
                $("#mensaje").html(respuesta.mensaje).fadeIn();
            });
        });
    });
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
					<li><a href="#inicio" id="registrate"><img src="img/registrate.png" />Registrate</a></li>
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
				<!-- <h2>Inicio</h2> -->
				<div class="inscripcion">
					<img src="img/01.png" id="gamereg" class="inscr one" />
					<img src="img/02.png" id="cosplay" class="inscr twu" />
				</div>
			</section>
			<section id="reglamento">
				<h2>Reglamento</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, illo, aperiam porro adipisci illum hic possimus quia fuga velit distinctio!</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, ratione enim tempore aperiam consequatur labore dolorem quo nulla nobis minima facilis veritatis pariatur. Libero, totam, recusandae, tenetur obcaecati quas magnam possimus expedita laborum dolor ducimus facilis ratione commodi quaerat vitae.</p>
				<blockquote>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.<p></p></blockquote>
				<blockquote>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.<p></p></blockquote>
				<blockquote>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.<p></p></blockquote>
				<blockquote>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.<p></p></blockquote>
				<blockquote>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.<p></p></blockquote>
				<blockquote>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.<p></p></blockquote>
				<blockquote>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.<p></p></blockquote>
				<blockquote>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.<p></p></blockquote>
				<blockquote>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.<p></p></blockquote>
			</section>
			<section id="juegos">
				<h2>Juegos</h2>
				<div class="listajuegos">
					<article class="juego">
						<p class="textimg">
							<img src="img/logo.png" />
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod non quia accusamus vitae architecto cupiditate quibusdam. Autem assumenda sint explicabo.
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, velit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, velit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, velit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, velit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, velit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, velit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, velit.
						</p>
						<div class="video">
							<iframe width="560" height="315" src="http://www.youtube.com/embed/1E3jGwGcgg0" frameborder="0" allowfullscreen></iframe>
						</div>
					</article>
					<article class="juego">
						<p class="textimg">
							<img src="img/logo.png" />
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod non quia accusamus vitae architecto cupiditate quibusdam. Autem assumenda sint explicabo.
						</p>
						<div class="video">
							<iframe width="560" height="315" src="http://www.youtube.com/embed/1E3jGwGcgg0" frameborder="0" allowfullscreen></iframe>
						</div>
					</article>
					<article class="juego">
						<p class="textimg">
							<img src="img/logo.png" />
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod non quia accusamus vitae architecto cupiditate quibusdam. Autem assumenda sint explicabo.
						</p>
						<div class="video">
							<iframe width="560" height="315" src="http://www.youtube.com/embed/1E3jGwGcgg0" frameborder="0" allowfullscreen></iframe>
						</div>
					</article>
					<article class="juego">
						<p class="textimg">
							<img src="img/logo.png" />
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod non quia accusamus vitae architecto cupiditate quibusdam. Autem assumenda sint explicabo.
						</p>
						<div class="video">
							<iframe width="560" height="315" src="http://www.youtube.com/embed/1E3jGwGcgg0" frameborder="0" allowfullscreen></iframe>
						</div>
					</article>
					<article class="juego">
						<p class="textimg">
							<img src="img/logo.png" />
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod non quia accusamus vitae architecto cupiditate quibusdam. Autem assumenda sint explicabo.
						</p>
						<div class="video">
							<iframe width="560" height="315" src="http://www.youtube.com/embed/1E3jGwGcgg0" frameborder="0" allowfullscreen></iframe>
						</div>
					</article>
					<article class="juego">
						<p class="textimg">
							<img src="img/logo.png" />
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod non quia accusamus vitae architecto cupiditate quibusdam. Autem assumenda sint explicabo.
						</p>
						<div class="video">
							<iframe width="560" height="315" src="http://www.youtube.com/embed/1E3jGwGcgg0" frameborder="0" allowfullscreen></iframe>
						</div>
					</article>
				</div>
			</section>
			<section id="comparte">
				<h2>Comparte</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, illo, aperiam porro adipisci illum hic possimus quia fuga velit distinctio!</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, ratione enim tempore aperiam consequatur labore dolorem quo nulla nobis minima facilis veritatis pariatur. Libero, totam, recusandae, tenetur obcaecati quas magnam possimus expedita laborum dolor ducimus facilis ratione commodi quaerat vitae.</p>
				<blockquote>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.<p></p></blockquote>
			</section>
		</div>
	</div>
	<div id="mensaje"></div>
	<script src="js/main.js"></script>
	<!-- <div style="position: fixed; z-index: -99; width: 100%; height: 100%">
		<iframe frameborder="0" height="100%" width="100%"
		src="https://youtube.com/embed/EqI2rr9BarI?autoplay=1&controls=0&showinfo=0&autohide=1">
		</iframe>
	</div> -->
</body>
</html>