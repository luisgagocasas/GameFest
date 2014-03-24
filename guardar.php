<?php
    $respuesta = new stdClass();
    if($_GET['tipo']=="game"){
        $respuesta->mensaje = '
        <script>
        $("#frminformacion").submit(function(){
            var formulario = $("#frminformacion").serializeArray();
            $.ajax({
                type: "POST",
                dataType: "json",
                url: "hola.php",
                data: formulario
            }).done(function(respuesta){
                $("#frminformacion")[0].reset();
                $.ajax ({
                    type: "POST",
                    dataType: "php",
                    url: "enviar.php",
                    data: formulario
                });
                $("#mensaje").html(respuesta.mensaje).fadeIn();
            });
            return false;
        });
        $("#frmplan4").submit(function(){
            var formulario = $("#frmplan4").serializeArray();
            $.ajax({
                type: "POST",
                dataType: "json",
                url: "hola.php",
                data: formulario
            }).done(function(respuesta){
                $("#frmplan4")[0].reset();
                $.ajax ({
                    type: "POST",
                    dataType: "php",
                    url: "enviar.php",
                    data: formulario
                });
                $("#mensaje").html(respuesta.mensaje).fadeIn();
            });
            return false;
        });
        $("#frmplan5").submit(function(){
            var formulario = $("#frmplan5").serializeArray();
            $.ajax({
                type: "POST",
                dataType: "json",
                url: "hola.php",
                data: formulario
            }).done(function(respuesta){
                $("#frmplan5")[0].reset();
                $.ajax ({
                    type: "POST",
                    dataType: "php",
                    url: "enviar.php",
                    data: formulario
                });
                $("#mensaje").html(respuesta.mensaje).fadeIn();
            });
            return false;
        });
        $(document).ready( function(){
            $("#categoria1").css("display","none");
            $("#categoria2").css("display","none");
            $("#categoria3").css("display","none");
        });
        $(".cerrar").click(function(){
            $(".overlay").addClass("fadeOut");
            $(".mensaje").addClass("bounceOutUp");

            setTimeout(function () {
                $(".overlay").removeClass("fadeOut").removeClass("fadeIn");
                $(".mensaje").removeClass("bounceOutUp").removeClass("bounceInDown");
            }, 1010);
            setTimeout(function () {
                $(".overlay").remove();
                $(".mensaje").remove();
            }, 500);

            return false;
        });
        $("#compra1").click(function(){
            $("#categoria1").css("display","block");
            $("#planes").css("display","none");
            $("#categoria2").css("display","none");
            $("#categoria3").css("display","none");
        });
        $("#compra2").click(function(){
            $("#categoria3").css("display","none");
            $("#categoria2").css("display","block");
            $("#categoria1").css("display","none");
            $("#planes").css("display","none");
        });
        $("#compra3").click(function(){
            $("#categoria3").css("display","block");
            $("#categoria2").css("display","none");
            $("#categoria1").css("display","none");
            $("#planes").css("display","none");
        });
        $(".atras").click(function(){
            $("#categoria3").css("display","none");
            $("#categoria2").css("display","none");
            $("#categoria1").css("display","none");
            $("#planes").css("display","block");
        });
        </script>
        <div class="mensaje animated bounceInDown">
            <div class="cerrar">x</div>
            <span class="texto">
                <h2 style="margin: 0px auto; color: #FFF;">UTP Game Festival</h2><br />
                <div class="planes" id="planes">
                    <div class="plan">
                        <div class="valor azul">
                            <span class="precio">
                                <span class="cantidad">&nbsp;1</span>
                                <span class="moneda">Coin</span>
                            </span>
                        </div>
                        <div class="caracteristicas">
                            <h3>Classic Game</h3>
                            <p>S/.2</p>
                            <p>Válido para 1 gamer</p>
                            <p>Tekken 3, Super Smash, </p>
                            <p>PES 2013 o Zombi</p>
                        </div>
                        <a id="compra1" class="comprar">Regístrate</a>
                    </div>
                    <div class="plan">
                        <div class="valor rojo">
                            <span class="precio">
                                <span class="simbolo">+4</span>
                                <span class="cantidad">20</span>
                                <span class="moneda">Coins</span>
                            </span>
                        </div>
                        <div class="caracteristicas">
                            <h3>Master Game</h3>
                            <p>S/. 48</p>
                            <p>Válido para 4 gamers</p>
                            <p>+ 4 Coins Zombi</p>
                            <p>Válido para 1 torneo</p>
                            <p>StarCraft o Counter Strike</p>
                        </div>
                        <a id="compra2" class="comprar">Regístrate</a>
                    </div>
                    <div class="plan">
                        <div class="valor verde">
                            <span class="precio">
                                <span class="simbolo">+5</span>
                                <span class="cantidad">25</span>
                                <span class="moneda">Coins</span>
                            </span>
                        </div>
                        <div class="caracteristicas">
                            <h3>Master Game</h3>
                            <p>S/. 60</p>
                            <p>Válido para 5 gamers</p>
                            <p>+ 5 Coins Zombi</p>
                            <p>Válido para 1 torneo</p>
                            <p>DOTA</p>
                            <p></p>
                        </div>
                        <a id="compra3" class="comprar">Regístrate</a>
                    </div>
                </div>
                <div id="categoria1">
                    <div class="planes" style="width: 230px;display: inline-block;">
                        <div class="btn atras">Planes</div><br />
                        <div class="plan">
                            <div class="valor azul">
                                <span class="precio">
                                    <span class="cantidad">&nbsp;1</span>
                                    <span class="moneda">Coin</span>
                                </span>
                            </div>
                            <div class="caracteristicas">
                                <h3>Classic Game</h3>
                                <p>S/.2</p>
                                <p>Válido para 1 gamer</p>
                                <p>Tekken 3, Super Smash, </p>
                                <p>PES 2013 o Zombi</p>
                            </div>
                        </div>
                    </div>
                    <form action="" class="frmcosplay" id="frminformacion">
                        <input type="hidden" name="tipo" value="gamefest" />
                        <span class="titulo">Nombre</span> <input type="text" required name="nombre"><br />
                        <span class="titulo">Apellidos</span> <input type="text" required name="apellidos"><br />
                        <span class="titulo">Correo</span> <input type="email" required name="correo"><br />
                        <span class="titulo">Código</span> <input type="text" required name="codigo" placeholder="1234567isi"><br />
                        <label for="juegos">
                            <span class="titulo">Juegos</span>
                            <select name="juegos" id="juegos">
                                <option value="Tekken 3">Tekken 3</option>
                                <option value="Super Smash">Super Smash</option>
                                <option value="PES 2013">PES 2013</option>
                            </select>
                        </label><br />
                        <label for="cantidad">
                            <span class="titulo">N° Coins</span>
                            <select name="cantidad" id="cantidad">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="10">10</option>
                            </select>
                        </label>
                        <center><button type="submit" class="boton-verde">Inscríbete</button></center>
                    </form>
                </div>
                <div id="categoria2">
                    <div class="planes" style="width: 230px;display: inline-block;">
                        <div class="btn atras">Planes</div><br />
                        <div class="plan">
                            <div class="valor rojo">
                                <span class="precio">
                                    <span class="simbolo">+4</span>
                                    <span class="cantidad">20</span>
                                    <span class="moneda">Coins</span>
                                </span>
                            </div>
                            <div class="caracteristicas">
                                <h3>Master Game</h3>
                                <p>S/. 48</p>
                                <p>Válido para 4 gamers</p>
                                <p>+4 Coins Zombi</p>
                                <p>Válido para 1 torneo</p>
                                <p>StarCraft o Counter Strike</p>
                            </div>
                        </div>
                    </div>
                    <form action="" class="frmcosplay" id="frmplan4">
                        <input type="hidden" name="tipo" value="gamefestplanb" />
                            <center><h4>Nombre del equipo</h4></center>
                        <input type="text" id="nombre" required name="nombreequipo"><br />
                        <center><h4>Juegos</h4></center>
                        <label for="juegos">
                            <select name="juegos" id="juegos" style="width: 89%;">
                                <option value="StarCraft">StarCraft</option>
                                <option value="Counter Strike">Counter Strike</option>
                            </select>
                        </label>
                        <br /><br />
                        <div class="scrolmg">
                            <center><h4>1 Gamer</h4></center>
                            <span class="titulo">Nombre</span> <input type="text" required name="nombre1"><br />
                            <span class="titulo">Apellidos</span> <input type="text" required name="apellidos1"><br>
                            <span class="titulo">Correo</span> <input type="email" required name="correo1"><br />
                            <span class="titulo">Código</span> <input type="text" required name="codigo1" placeholder="1234567isi"><br />
                            <hr>
                            <center><h4>2 Gamer</h4></center>
                            <span class="titulo">Nombre</span> <input type="text" required name="nombre2"><br />
                            <span class="titulo">Apellidos</span> <input type="text" required name="apellidos2"><br>
                            <span class="titulo">Correo</span> <input type="email" required name="correo2"><br />
                            <span class="titulo">Código</span> <input type="text" required name="codigo2" placeholder="1234567isi"><br />
                            <hr>
                            <center><h4>3 Gamer</h4></center>
                            <span class="titulo">Nombre</span> <input type="text" required name="nombre3"><br />
                            <span class="titulo">Apellidos</span> <input type="text" required name="apellidos3"><br>
                            <span class="titulo">Correo</span> <input type="email" required name="correo3"><br />
                            <span class="titulo">Código</span> <input type="text" required name="codigo3" placeholder="1234567isi"><br />
                            <hr>
                            <center><h4>4 Gamer</h4></center>
                            <span class="titulo">Nombre</span> <input type="text" id="nombre" required name="nombre4"><br />
                            <span class="titulo">Apellidos</span> <input type="text" id="apellidos" required name="apellidos4"><br>
                            <span class="titulo">Correo</span> <input type="email" id="correo" required name="correo4"><br />
                            <span class="titulo">Código</span> <input type="text" id="codigo" required name="codigo4" placeholder="1234567isi"><br />
                        </div>
                        <br />
                        <center><button type="submit" class="boton-verde">Inscríbete</button></center>
                    </form>
                </div>
                <div id="categoria3">
                    <div class="planes" style="width: 230px;display: inline-block;">
                        <div class="btn atras">Planes</div><br />
                        <div class="plan">
                            <div class="valor verde">
                                <span class="precio">
                                    <span class="simbolo">+5</span>
                                    <span class="cantidad">25</span>
                                    <span class="moneda">Coins</span>
                                </span>
                            </div>
                            <div class="caracteristicas">
                                <h3>Master Game</h3>
                                <p>S/. 60</p>
                                <p>Válido para 5 gamers</p>
                                <p>+ 5 Coins Zombi</p>
                                <p>Válido para 1 torneo</p>
                                <p>DOTA</p>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <form action="" class="frmcosplay" id="frmplan5">
                        <input type="hidden" name="tipo" value="gamefestplanc" />
                        <center><h4>Nombre del equipo</h4></center>
                            <input type="text" id="nombre" required name="nombreequipo">
                        <br /><br />
                        <div class="scrolmg">
                            <center><h4>1 Gamer</h4></center>
                            <span class="titulo">Nombre</span> <input type="text" required name="nombre1"><br />
                            <span class="titulo">Apellidos</span> <input type="text" required name="apellidos1"><br>
                            <span class="titulo">Correo</span> <input type="email" required name="correo1"><br />
                            <span class="titulo">Código</span> <input type="text" required name="codigo1" placeholder="1234567isi"><br />
                            <hr>
                            <center><h4>2 Gamer</h4></center>
                            <span class="titulo">Nombre</span> <input type="text" required name="nombre2"><br />
                            <span class="titulo">Apellidos</span> <input type="text" required name="apellidos2"><br>
                            <span class="titulo">Correo</span> <input type="email" required name="correo2"><br />
                            <span class="titulo">Código</span> <input type="text" required name="codigo2" placeholder="1234567isi"><br />
                            <hr>
                            <center><h4>3 Gamer</h4></center>
                            <span class="titulo">Nombre</span> <input type="text" required name="nombre3"><br />
                            <span class="titulo">Apellidos</span> <input type="text" required name="apellidos3"><br>
                            <span class="titulo">Correo</span> <input type="email" required name="correo3"><br />
                            <span class="titulo">Código</span> <input type="text" required name="codigo3" placeholder="1234567isi"><br />
                            <hr>
                            <center><h4>4 Gamer</h4></center>
                            <span class="titulo">Nombre</span> <input type="text" required name="nombre4"><br />
                            <span class="titulo">Apellidos</span> <input type="text" required name="apellidos4"><br>
                            <span class="titulo">Correo</span> <input type="email" required name="correo4"><br />
                            <span class="titulo">Código</span> <input type="text" required name="codigo4" placeholder="1234567isi"><br />
                            <hr>
                            <center><h4>5 Gamer</h4></center>
                            <span class="titulo">Nombre</span> <input type="text" required name="nombre5"><br />
                            <span class="titulo">Apellidos</span> <input type="text" required name="apellidos5"><br>
                            <span class="titulo">Correo</span> <input type="email" required name="correo5"><br />
                            <span class="titulo">Código</span> <input type="text" required name="codigo5" placeholder="1234567isi"><br />
                        </div>
                        <br />
                        <center><button type="submit" class="boton-verde">Inscríbete</button></center>
                    </form>
                </div>
            </span>
        </div>
        <div class="overlay"></div>';
    }
    else if($_GET['tipo']=="cosplay"){
        $respuesta->mensaje = '
        <script>
        $("#frminformacion").submit(function(){
            var formulario = $("#frminformacion").serializeArray();
            $.ajax({
                type: "POST",
                dataType: "json",
                url: "hola.php",
                data: formulario
            }).done(function(respuesta){
                $("#frminformacion")[0].reset();
                $.ajax ({
                    type: "POST",
                    dataType: "php",
                    url: "enviar.php",
                    data: formulario
                });
                $("#mensaje").html(respuesta.mensaje).fadeIn();
            });
            return false;
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
                <h2>Formulario de inscripción para Cosplay</h2>
                <form action="" class="frmcosplay" id="frminformacion">
                    <input type="hidden" name="tipo" value="cosplay" />
                    <span class="titulo">Nombre</span> <input type="text" required name="nombre"><br />
                    <span class="titulo">Apellidos</span> <input type="text" required name="apellidos"><br />
                    <span class="titulo">Correo</span> <input type="email" required name="correo"><br />
                    <span class="titulo">Código</span> <input type="text" required name="codigo" placeholder="1234567isi"><br />
                    <center><button type="submit" class="boton-verde">Inscríbete</button></center>
                </form>
                <div class="detalles">
                    <p>Ingrese sus datos personales.</p>
                </div>
            </div>
        </div>
        <div class="overlay"></div>';
    }
    else if($_GET['tipo']=="pasos"){
        $respuesta->mensaje = '
        <script>
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
        <div class="error animated bounceInDown" style="margin-left: -325px;">
            <div class="cerrar">x</div>
            <div class="texto">
                <img src="img/pasos.jpg" style="width: 670px;padding: 5px 5px 0px 5px;border-radius: 20px;" />
            </div>
        </div>
        <div class="overlay"></div>';
    }
    echo json_encode($respuesta);
?>