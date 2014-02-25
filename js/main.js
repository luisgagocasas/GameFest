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
	$("#inicio").css("display","block");
	$("#registrate").css("display","none");
	$("#reglamento").css("display","none");
	$("#juegos").css("display","none");
	$("#comparte").css("display","none");
	$('a').on('click',function(e){
		e.preventDefault();
		var strAncla=$(this).attr('href');
		if(strAncla=="#inicio"){
			$("#inicio").css("display","block");
			$("#inicio").addClass("efectoone");
			$("#registrate").css("display","none");
			$("#reglamento").css("display","none");
			$("#juegos").css("display","none");
			$("#comparte").css("display","none");
		}
		if(strAncla=="#registrate"){
			$("#inicio").css("display","none");
			$("#registrate").css("display","block");
			$("#registrate").addClass("efectoone");
			$("#reglamento").css("display","none");
			$("#juegos").css("display","none");
			$("#comparte").css("display","none");
		}
		else if(strAncla=="#reglamento"){
			$("#inicio").css("display","none");
			$("#registrate").css("display","none");
			$("#reglamento").css("display","block");
			$("#reglamento").addClass("efectoone");
			$("#juegos").css("display","none");
			$("#comparte").css("display","none");
		}
		else if(strAncla=="#juegos"){
			$("#inicio").css("display","none");
			$("#registrate").css("display","none");
			$("#reglamento").css("display","none");
			$("#juegos").css("display","block");
			$("#juegos").addClass("efectoone");
			$("#comparte").css("display","none");
		}
		else if(strAncla=="#comparte"){
			$("#inicio").css("display","none");
			$("#registrate").css("display","none");
			$("#reglamento").css("display","none");
			$("#juegos").css("display","none");
			$("#comparte").css("display","block");
			$("#comparte").addClass("efectoone");
		}
	});
});