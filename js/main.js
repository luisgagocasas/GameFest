jQuery(function() {
    jQuery(window).scroll(function(){
        var scrollTop = jQuery(window).scrollTop();
        if(scrollTop >= 40){
            jQuery('header').addClass("flotante");
        }
        else{
            jQuery('header').removeClass("flotante");
        }
    });
    /*Descargar con twitter*/
    var win = null;
	$.fn.tweetAction = function(options,callback){
		options = $.extend({
			url:window.location.href
		}, options);
		return this.click(function(e){
			if(win){
				e.preventDefault();
				return;
			}
			var width	= 550,
				height	= 350,
				top		= (window.screen.height - height)/2,
				left	= (window.screen.width - width)/2;
			var config = [
				'scrollbars=yes','resizable=yes','toolbar=no','location=yes',
				'width='+width,'height='+height,'left='+left, 'top='+top
			].join(',');
			win = window.open('http://twitter.com/intent/tweet?'+$.param(options),'TweetWindow',config);
			(function checkWindow(){
				try{
					if(!win || win.closed){
						throw "Closed!";
					}
					else {
						setTimeout(checkWindow,100);
					}
				}
				catch(e){
					win = null;
					callback();
				}
			})();
			e.preventDefault();
		});
	};
	$('#tweetLink1').tweetAction({
		text:		'Los videojuegos pueden hacer un mundo mejor, demuéstralo y sé parte del gran desafío. #utpgamefest',
		url:		'http://gamefest.plataforma.edu.pe/',
		via:		'PlataformaJM',
		related:	'plataforma.edu.pe'
	},function(){
    	window.location.href = 'https://docs.google.com/a/utpaqp.edu.pe/uc?authuser=0&id=0B14BIs9ObRndakliMVFJdWpPZlk&export=download';
	});
	$('#tweetLink2').tweetAction({
		text:		'Los videojuegos pueden hacer un mundo mejor, demuéstralo y sé parte del gran desafío. #utpgamefest',
		url:		'http://gamefest.plataforma.edu.pe/',
		via:		'PlataformaJM',
		related:	'plataforma.edu.pe'
	},function(){
		window.location.href = 'https://docs.google.com/a/utpaqp.edu.pe/uc?authuser=0&id=0B14BIs9ObRndQy0zcVpaTjR2M1E&export=download';
	});
	$('#tweetLink3').tweetAction({
		text:		'Los videojuegos pueden hacer un mundo mejor, demuéstralo y sé parte del gran desafío. #utpgamefest',
		url:		'http://gamefest.plataforma.edu.pe/',
		via:		'PlataformaJM',
		related:	'plataforma.edu.pe'
	},function(){
		window.location.href = 'https://docs.google.com/a/utpaqp.edu.pe/uc?authuser=0&id=0B14BIs9ObRndR0dUbE5jRWVMRWM&export=download';
	});
	$('#tweetLink4').tweetAction({
		text:		'Los videojuegos pueden hacer un mundo mejor, demuéstralo y sé parte del gran desafío. #utpgamefest',
		url:		'http://gamefest.plataforma.edu.pe/',
		via:		'PlataformaJM',
		related:	'plataforma.edu.pe'
	},function(){
		window.location.href = 'https://docs.google.com/a/utpaqp.edu.pe/uc?authuser=0&id=0B14BIs9ObRndYXo1Y1VEZTM5RUU&export=download';
	});
	$('#tweetLink5').tweetAction({
		text:		'Los videojuegos pueden hacer un mundo mejor, demuéstralo y sé parte del gran desafío. #utpgamefest',
		url:		'http://gamefest.plataforma.edu.pe/',
		via:		'PlataformaJM',
		related:	'plataforma.edu.pe'
	},function(){
		window.location.href = 'https://docs.google.com/a/utpaqp.edu.pe/uc?authuser=0&id=0B14BIs9ObRndQXQ0QXpVSWFfRDg&export=download';
	});
	$('#tweetLink6').tweetAction({
		text:		'Los videojuegos pueden hacer un mundo mejor, demuéstralo y sé parte del gran desafío. #utpgamefest',
		url:		'http://gamefest.plataforma.edu.pe/',
		via:		'PlataformaJM',
		related:	'plataforma.edu.pe'
	},function(){
		window.location.href = 'https://docs.google.com/uc?id=0B_SqwHAgKbDidkZ1eGJSTmZvOHc&export=download';
	});
	/*video inicio*/
	$(".imgvideo").click(function(){
		$(".imgvideo").css("display","none");
		$("#video")
			.attr('src','http://www.youtube.com/embed/w07i7o7V4ag?&amp;autoplay=1')
    });
	/*fin de descarga con twitter*/
});
/*Fin Flotante*/
$(document).ready( function(){
	$("#gamereg").click(function(){
        $.ajax({
            dataType: 'json',
            url: "guardar.php?tipo=game"
        }).done(function(respuesta){
            $("#mensaje").html(respuesta.mensaje).fadeIn();
        });
    });
    $("#cosplay").click(function(){
        $.ajax({
            dataType: 'json',
            url: "guardar.php?tipo=cosplay"
        }).done(function(respuesta){
            $("#mensaje").html(respuesta.mensaje).fadeIn();
        });
    });
    $("#pasos").click(function(){
        $.ajax({
            dataType: 'json',
            url: "guardar.php?tipo=pasos"
        }).done(function(respuesta){
            $("#mensaje").html(respuesta.mensaje).fadeIn();
        });
    });
	$("#inicio").css("display","block");
	$("#registrate").css("display","none");
	$("#reglamento").css("display","none");
	$("#juegos").css("display","none");
	$("#multimedia").css("display","none");
	$("#activar").css("display","block");
	$('a#menu').on('click',function(e){
		e.preventDefault();
		var strAncla=$(this).attr('href');
		if(strAncla=="#inicio"){
			$("#inicio").css("display","block");
			$("#inicio").addClass("efectoone");
			$("title").html("Game Fest UTP AQP");
			$("#registrate").css("display","none");
			$("#reglamento").css("display","none");
			$("#juegos").css("display","none");
			$("#multimedia").css("display","none");
		}
		if(strAncla=="#registrate"){
			$("#inicio").css("display","none");
			$("#registrate").css("display","block");
			$("#registrate").addClass("efectoone");
			$("title").html("Game Fest UTP AQP : Inscríbete");
			$("#reglamento").css("display","none");
			$("#juegos").css("display","none");
			$("#multimedia").css("display","none");
		}
		else if(strAncla=="#reglamento"){
			$("#inicio").css("display","none");
			$("#registrate").css("display","none");
			$("#reglamento").css("display","block");
			$("#reglamento").addClass("efectoone");
			$("title").html("Game Fest UTP AQP : Reglamento");
			$("#juegos").css("display","none");
			$("#multimedia").css("display","none");
		}
		else if(strAncla=="#juegos"){
			$("#inicio").css("display","none");
			$("#registrate").css("display","none");
			$("#reglamento").css("display","none");
			$("#juegos").css("display","block");
			$("#juegos").addClass("efectoone");
			$("title").html("Game Fest UTP AQP : Juegos");
			$("#multimedia").css("display","none");
		}
		else if(strAncla=="#multimedia"){
			$("#inicio").css("display","none");
			$("#registrate").css("display","none");
			$("#reglamento").css("display","none");
			$("#juegos").css("display","none");
			$("#multimedia").css("display","block");
			$("#multimedia").addClass("efectoone");
			$("title").html("Game Fest UTP AQP : Multimedia");
		}
	});
});