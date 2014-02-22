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
                <h2>Formulario para Cosplay</h2>
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
    echo json_encode($respuesta);
?>