<?php
include "../static/portada/config.php";
include('lib/browser_class_inc.php');
$nombre = $_POST["nombre"];
$apellido = $_POST["apellidos"];
$email = $_POST["correo"];
$codigo = $_POST["codigo"];
$juego = $_POST["juegos"];
$cantidad = $_POST['cantidad'];
$tipo = $_POST["tipo"];
$nombreequipo = $_POST["nombreequipo"];
$nombre1 = $_POST["nombre1"];
$apellido1 = $_POST["apellidos1"];
$email1 = $_POST["correo1"];
$codigo1 = $_POST["codigo1"];
$nombre2 = $_POST["nombre2"];
$apellido2 = $_POST["apellidos2"];
$email2 = $_POST["correo2"];
$codigo2 = $_POST["codigo2"];
$nombre3 = $_POST["nombre3"];
$apellido3 = $_POST["apellidos3"];
$email3 = $_POST["correo3"];
$codigo3 = $_POST["codigo3"];
$nombre4 = $_POST["nombre4"];
$apellido4 = $_POST["apellidos4"];
$email4 = $_POST["correo4"];
$codigo4 = $_POST["codigo4"];
$nombre5 = $_POST["nombre5"];
$apellido5 = $_POST["apellidos5"];
$email5 = $_POST["correo5"];
$codigo5 = $_POST["codigo5"];
if($tipo=="gamefestplanb" or $tipo=="gamefestplanc") {
    $nombre = $_POST["nombreequipo"];
    $apellido = $_POST["apellidos1"];
    $email = $_POST["correo1"];
    $codigo = $_POST["codigo1"];
}
$respuesta = new stdClass();
if(!empty($nombre) and !empty($apellido) and !empty($email) and !empty($codigo)){
    /*optengo datos del usuario*/
    $ip=$_SERVER['REMOTE_ADDR'];
    $br = new browser();
    $br->whatBrowser();
    $version = $br->version;
    $navegador = $br->browsertype;
    $platform = $br->platform; /*fin*/
    $config = new LagcConfig(); //Conexion
    $con = mysql_connect($config->lagclocal,$config->lagcuser,$config->lagcpass);
    mysql_select_db($config->lagcbd,$con);
    if($tipo=="gamefest"){
        $sql = "INSERT INTO comp_gamefest (nombre, apellidos, correo, codigo, juego, cantidad, ip, navegador, plataforma, tipo, fecha) VALUES ('".$nombre."', '".$apellido."', '".$email."', '".$codigo."', '".$juego."', '".$cantidad."', '".$ip."', '".$navegador.$version."', '".$platform."', '1', '".time()."')";
    }
    else if($tipo=="cosplay") {
        $sql = "INSERT INTO comp_gamefest (nombre, apellidos, correo, codigo, ip, navegador, plataforma, tipo, fecha) VALUES ('".$nombre."', '".$apellido."', '".$email."', '".$codigo."', '".$ip."', '".$navegador.$version."', '".$platform."', '2', '".time()."')";
    }
    else if($tipo=="gamefestplanb") {
        $sql = "INSERT INTO comp_gamefest (nombreequipo, nombre, apellidos, correo, codigo, juego, ip, navegador, plataforma, tipo, fecha) VALUES ('".$nombreequipo."', '".$nombre1."', '".$apellido1."', '".$email1."', '".$codigo1."', '".$juego."', '".$ip."', '".$navegador." ".$version."', '".$platform."', '3', '".time()."'), ('".$nombreequipo."', '".$nombre2."', '".$apellido2."', '".$email2."', '".$codigo2."', '".$juego."', '".$ip."', '".$navegador." ".$version."', '".$platform."', '3', '".time()."'), ('".$nombreequipo."', '".$nombre3."', '".$apellido3."', '".$email3."', '".$codigo3."', '".$juego."', '".$ip."', '".$navegador." ".$version."', '".$platform."', '3', '".time()."'), ('".$nombreequipo."', '".$nombre4."', '".$apellido4."', '".$email4."', '".$codigo4."', '".$juego."', '".$ip."', '".$navegador." ".$version."', '".$platform."', '3', '".time()."')";
    }
    else if($tipo=="gamefestplanc") {
        $sql = "INSERT INTO comp_gamefest (nombreequipo, nombre, apellidos, correo, codigo, ip, navegador, plataforma, tipo, fecha) VALUES ('".$nombreequipo."', '".$nombre1."', '".$apellido1."', '".$email1."', '".$codigo1."', '".$ip."', '".$navegador.$version."', '".$platform."', '4', '".time()."'), ('".$nombreequipo."', '".$nombre2."', '".$apellido2."', '".$email2."', '".$codigo2."', '".$ip."', '".$navegador.$version."', '".$platform."', '4', '".time()."'), ('".$nombreequipo."', '".$nombre3."', '".$apellido3."', '".$email3."', '".$codigo3."', '".$ip."', '".$navegador.$version."', '".$platform."', '4', '".time()."'), ('".$nombreequipo."', '".$nombre4."', '".$apellido4."', '".$email4."', '".$codigo4."', '".$ip."', '".$navegador.$version."', '".$platform."', '4', '".time()."'), ('".$nombreequipo."', '".$nombre5."', '".$apellido5."', '".$email5."', '".$codigo5."', '".$ip."', '".$navegador.$version."', '".$platform."', '4', '".time()."')";
    }
    mysql_query($sql,$con);
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
        <span class=\"texto\"><br>
            <h2><u>".$nombre."</u> tu inscripción fue procesada correctamente.</h2>
            <center><p>Recibirás una copia del mensaje en tu correo.</p></center>
            <br>
        </span>
    </div>
    <div class=\"overlay\"></div>";
}
else {
    $respuesta->mensaje = "
    <script>
    $(\".cerrar\").click(function(){
        $(\".overlay\").addClass('fadeOut');
        $(\".error\").addClass('bounceOutUp');

        setTimeout(function () {
            $(\".overlay\").removeClass('fadeOut').removeClass('fadeIn');
            $(\".error\").removeClass('bounceOutUp').removeClass('bounceInDown');
        }, 1010);
        setTimeout(function () {
            $(\".overlay\").remove();
            $(\".error\").remove();
        }, 500);
        return false;
    });
    </script>
    <div class=\"error animated bounceInDown\">
        <div class=\"cerrar\">x</div>
        <span class=\"texto\">
            <h2 class=\"rojo\">Ocurrio un error</h2>
            <center><p class=\"rojo\">Rellene todos los campos.</p></center>
        </span>
    </div>
    <div class=\"overlay\"></div>";
}
echo json_encode($respuesta);
?>