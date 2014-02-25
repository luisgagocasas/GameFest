<?php
    $respuesta = new stdClass();
    if($_GET['tipo']=="game"){
        $respuesta->mensaje = "
        <script>
        $(\".cerrar\").click(function(){
            $(\".overlay\").addClass('fadeOut');
            $(\".mensaje\").addClass('bounceOutUp');

            setTimeout(function () {
                $(\".overlay\").removeClass('fadeOut').removeClass('fadeIn');
                $(\".mensaje\").removeClass('bounceOutUp').removeClass('bounceInDown');
            }, 1010);
            setTimeout(function () {
                $(\".overlay\").remove();
                $(\".mensaje\").remove();
            }, 500);

            return false;
        });
        </script>
        <div class=\"mensaje animated bounceInDown\">
            <div class=\"cerrar\">x</div>
            <span class=\"texto\">
                <h2>Formulario para Game Fest</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, laboriosam.</p>
                <div class=\"tipos\">
                    <div class=\"tipo\">
                        <a href=\"\">Lorem ipsum dolor.</a>
                    </div>
                    <div class=\"tipo\">
                        <a href=\"\">Lorem ipsum dolor.</a>
                    </div>
                    <div class=\"tipo\">
                        <a href=\"\">Lorem ipsum dolor.</a>
                    </div>
                </div>
            </span>
        </div>
        <div class=\"overlay\"></div>";
    }
    else if($_GET['tipo']=="cosplay"){
        $respuesta->mensaje = '
        <script>
        $("#enviar").click(function(){
            var formulario = $("#frminformacion").serializeArray();
            $.ajax({
                type: "POST",
                dataType: "json",
                url: "hola.php",
                data: formulario
            }).done(function(respuesta){
                $("#mensaje").html(respuesta.mensaje).fadeIn();
                $("#frminformacion")[0].reset();
                $.ajax ({
                    type: "POST",
                    dataType: "php",
                    url: "enviar.php",
                    data: formulario
                });
            });
        });
        $(".cerrar").click(function(){
            $(".overlay").addClass("fadeOut");
            $(".error").addClass("bounceOutUp");

            setTimeout(function () {
                $(".overlay").removeClass("fadeOut").removeClass("fadeIn");
                $(".error").removeClass("bounceOutUp").removeClass("bounceInDown");
            }, 1010);
            setTimeout(function () {
                $(".overlay").remove();
                $(".error").remove();
            }, 500);

            return false;
        });
        </script>
        <div class="error animated bounceInDown">
            <div class="cerrar">x</div>
            <div class="texto">
                <h2>Formulario de incripción para Cosplay</h2>
                <form action="" class="frmcosplay" id="frminformacion">
                    <label for="nombre">Nombre <input type="text" id="nombre" required name="nombre"></label><br />
                    <label for="apellidos">Apellidos <input type="text" id="apellidos" required name="apellidos"></label><br>
                    <label for="correo">Correo <input type="text" id="correo" required name="correo"></label><br />
                    <label for="codigo">Código o DNI<input type="text" id="codigo" required name="codigo"></label><br />
                    <center><button type="button" id="enviar" class="boton-verde">Inscribete</button></center>
                </form>
                <div class="detalles">
                    <p>Ingrese sus datos personales.</p>
                </div>
            </div>
        </div>
        <div class="overlay"></div>';
    }
    echo json_encode($respuesta);
?>