<?php
$nombre = $_POST["nombre"];
$apellido = $_POST['apellido'];
$email = $_POST["email"];
$problema = $_POST['problema'];
if(isset($_POST["nombre"])){
    $respuesta = new stdClass();
    if(!empty($nombre) and !empty($apellido) and !empty($email) and !empty($problema)){
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
                <h2>Su mensaje se guardó correctamente</h2>
                <p>Reciviras una copia del mensaje en tu correo.</p>
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
                <h2>Ocurrio un error</h2>
                <p>Rellene todos los campos.</p>
            </span>
        </div>
        <div class=\"overlay\"></div>";
    }
    echo json_encode($respuesta);
}
?>