<?php
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$fMeses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
$fDias = array( 'Domingo', 'Lunes', 'Martes','Miercoles', 'Jueves', 'Viernes', 'Sabado');
$mi_array = array("Creo muchísimo en la suerte y descubro que cuanto más trabajo, más suerte tengo","No cambian las cosas: cambiamos nosotros","La mente es como un paracaídas, no sirve de nada si no se abre","No hay ninguna cosa seria que no pueda decirse con una sonrisa","Si pensamos tal y como lo hacemos ahora, crearemos el tipo de mundo que ya hemos creado. Si pensamos de otro modo, puede que creemos un mundo diferente y también gente diferente. Sólo pueden cambiar los dos a la vez","Sólo triunfa en el mundo quien se levanta y busca las circunstancias, y las crea si nos las encuentra");
$max = count($mi_array)-1;
$numaleatorio = rand(0,$max);
// institucion -> utp
if($_POST['institucion']=="UTP Arequipa"){
    $institucion = "<h3 style=\"font-size: 18px; font-family: Helvetica, Arial, sans-serif; color: #333 !important; margin:0px;\">» Institución</h3>
    <p style=\"font-size: 25px; font-family: Georgia, 'Times New Roman', Times, serif; color: #333; margin: 5px 0px 5px 30px;\">".$_POST['institucion']."</p>
    <h3 style=\"font-size: 18px; font-family: Helvetica, Arial, sans-serif; color: #333 !important; margin:0px;\">» Condición</h3>
    <p style=\"font-size: 25px; font-family: Georgia, 'Times New Roman', Times, serif; color: #333; margin: 5px 0px 5px 30px;\">".$_POST['condicion']."</p>
    <h3 style=\"font-size: 18px; font-family: Helvetica, Arial, sans-serif; color: #333 !important; margin:0px;\">» Curso</h3>
    <p style=\"font-size: 25px; font-family: Georgia, 'Times New Roman', Times, serif; color: #333; margin: 5px 0px 5px 30px;\">".$_POST['curso']."</p>
    <h3 style=\"font-size: 18px; font-family: Helvetica, Arial, sans-serif; color: #333 !important; margin:0px;\">» Ciclo</h3>
    <p style=\"font-size: 25px; font-family: Georgia, 'Times New Roman', Times, serif; color: #333; margin: 5px 0px 5px 30px;\">".$_POST['ciclo']."</p>";
}
// institucion -> Unitek
if($_POST['institucion']=="Unitek"){
    $institucion = "<h3 style=\"font-size: 18px; font-family: Helvetica, Arial, sans-serif; color: #333 !important; margin:0px;\">» Institución</h3>
    <p style=\"font-size: 25px; font-family: Georgia, 'Times New Roman', Times, serif; color: #333; margin: 5px 0px 5px 30px;\">".$_POST['institucion']."</p>
    <h3 style=\"font-size: 18px; font-family: Helvetica, Arial, sans-serif; color: #333 !important; margin:0px;\">» Condición</h3>
    <p style=\"font-size: 25px; font-family: Georgia, 'Times New Roman', Times, serif; color: #333; margin: 5px 0px 5px 30px;\">".$_POST['condicionunitek']."</p>
    <h3 style=\"font-size: 18px; font-family: Helvetica, Arial, sans-serif; color: #333 !important; margin:0px;\">» DNI</h3>
    <p style=\"font-size: 25px; font-family: Georgia, 'Times New Roman', Times, serif; color: #333; margin: 5px 0px 5px 30px;\">".$_POST['dni']."</p>
    <h3 style=\"font-size: 18px; font-family: Helvetica, Arial, sans-serif; color: #333 !important; margin:0px;\">» Carrera</h3>
    <p style=\"font-size: 25px; font-family: Georgia, 'Times New Roman', Times, serif; color: #333; margin: 5px 0px 5px 30px;\">".$_POST['carrera']."</p>
    <h3 style=\"font-size: 18px; font-family: Helvetica, Arial, sans-serif; color: #333 !important; margin:0px;\">» Curso</h3>
    <p style=\"font-size: 25px; font-family: Georgia, 'Times New Roman', Times, serif; color: #333; margin: 5px 0px 5px 30px;\">".$_POST['curso']."</p>
    <h3 style=\"font-size: 18px; font-family: Helvetica, Arial, sans-serif; color: #333 !important; margin:0px;\">» Ciclo</h3>
    <p style=\"font-size: 25px; font-family: Georgia, 'Times New Roman', Times, serif; color: #333; margin: 5px 0px 5px 30px;\">".$_POST['ciclo']."</p>";
}
//grado primaria o secundaria
if($_POST['nivel']=="Primaria"){
    $nivel = $_POST['gradop'];
}
if($_POST['nivel']=="Secundaria"){
    $nivel = $_POST['grados'];
}
// institucion -> Imagina
if($_POST['institucion']=="Imagina"){
    $institucion = "<h3 style=\"font-size: 18px; font-family: Helvetica, Arial, sans-serif; color: #333 !important; margin:0px;\">» Institución</h3>
    <p style=\"font-size: 25px; font-family: Georgia, 'Times New Roman', Times, serif; color: #333; margin: 5px 0px 5px 30px;\">".$_POST['institucion']."</p>
    <h3 style=\"font-size: 18px; font-family: Helvetica, Arial, sans-serif; color: #333 !important; margin:0px;\">» Condición</h3>
    <p style=\"font-size: 25px; font-family: Georgia, 'Times New Roman', Times, serif; color: #333; margin: 5px 0px 5px 30px;\">".$_POST['condicion']."</p>
    <h3 style=\"font-size: 18px; font-family: Helvetica, Arial, sans-serif; color: #333 !important; margin:0px;\">» Codigo</h3>
    <p style=\"font-size: 25px; font-family: Georgia, 'Times New Roman', Times, serif; color: #333; margin: 5px 0px 5px 30px;\">".$_POST['codigo']."</p>
    <h3 style=\"font-size: 18px; font-family: Helvetica, Arial, sans-serif; color: #333 !important; margin:0px;\">» Curso</h3>
    <p style=\"font-size: 25px; font-family: Georgia, 'Times New Roman', Times, serif; color: #333; margin: 5px 0px 5px 30px;\">".$_POST['curso']."</p>
    <h3 style=\"font-size: 18px; font-family: Helvetica, Arial, sans-serif; color: #333 !important; margin:0px;\">» Nivel</h3>
    <p style=\"font-size: 25px; font-family: Georgia, 'Times New Roman', Times, serif; color: #333; margin: 5px 0px 5px 30px;\">".$_POST['nivel']."</p>
    <h3 style=\"font-size: 18px; font-family: Helvetica, Arial, sans-serif; color: #333 !important; margin:0px;\">» Grado</h3>
    <p style=\"font-size: 25px; font-family: Georgia, 'Times New Roman', Times, serif; color: #333; margin: 5px 0px 5px 30px;\">".$nivel."</p>";
}
if(!empty($nombre)){
    include "phpmailer/PHPMailerAutoload.php";
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "ssl";
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465;
    $mail->Username = "plataforma@utpaqp.edu.pe";
    $mail->Password = "peducativa123";
    $mail->SetFrom("plataforma@utpaqp.edu.pe", "Plataforma Educativa");
    $mail->Subject = "Demo: Soporte: ".$_POST['nombre']." ".$_POST['apellido']." - ".$_POST['institucion'];
    $mail->MsgHTML("<!DOCTYPE>
<html>
<head>
<meta content=\"text/html; charset=utf-8\" http-equiv=\"Content-Type\" />
<title>Soporte: ".$_POST['nombre']." ".$_POST['apellido']."</title>
<style type=\"text/css\">
a:hover { color: #09F !important; text-decoration: underline !important; }
a:hover#vw { background-color: #CCC !important; text-decoration: none !important; color:#000 !important; }
a:hover.ff { background-color: #6CF !important; text-decoration: none !important; color:#FFF !important; }
</style>
</head>
<body marginheight=\"0\" topmargin=\"0\" marginwidth=\"0\" style=\"margin: 0px; background-color: #FFFFFF;\" bgcolor=\"#FFFFFF\" leftmargin=\"0\">
<table cellspacing=\"0\" border=\"0\" cellpadding=\"0\" width=\"100%\" bgcolor=\"#FFFFFF\">
    <tr>
        <td>
            <table cellspacing=\"0\" border=\"0\" align=\"center\" cellpadding=\"0\" width=\"624\">
                <tr>
                    <td>
                        <table cellspacing=\"0\" border=\"0\" cellpadding=\"0\" width=\"624\">
                            <tr>
                                <td valign=\"top\">
                                    <table cellspacing=\"0\" border=\"0\" cellpadding=\"0\" width=\"624\">
                                        <tr>
                                            <td>
                                                <h1 style=\"color: #333; margin: 0px; font-weight: normal; font-size: 60px; font-family: Helvetica, Arial, sans-serif; text-align: center;\">
                                                    SOPORTE
                                                </h1>
                                                <h2 style=\"color: #333; margin: 0px; font-weight: normal; font-size: 30px; font-family: Helvetica, Arial, sans-serif; text-align: center;\">
                                                 PLATAFORMA EDUCATIVA
                                                </h2>
                                            </td>
                                            <td id=\"issue\" valign=\"top\" style=\"width: 109px; height: 109px;\">
                                                <img src=\"http://soporte.plataforma.edu.pe/img/plataforma.png\" />
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <table cellspacing=\"0\" border=\"0\" id=\"email-content\" cellpadding=\"0\" width=\"624\">
                            <tr>
                                <td><br><br><br>
                                    <table cellspacing=\"0\" border=\"0\" cellpadding=\"0\" width=\"100%\">
                                        <tr>
                                            <td>
                                                <table cellspacing=\"0\" border=\"0\" cellpadding=\"0\" width=\"100%\">
                                                    <tr>
                                                        <td valign=\"top\" width=\"61%\" bgcolor=\"#f4f4f4\" style=\"background-color: #f4f4f4; border-radius: 4px; -moz-border-radius: 4px; -webkit-border-radius: 4px; -khtml-border-radius: 4px; padding: 5px 5px 5px 10px;\">
                                                        ".$institucion."
                                                        <h3 style=\"font-size: 18px; font-family: Helvetica, Arial, sans-serif; color: #333 !important; margin:0px;\">
                                                        » Problema</h3>
                                                        <p style=\"font-size: 25px; font-family: Georgia, 'Times New Roman', Times, serif; color: #333; margin: 5px 0px 5px 30px;\">".$_POST['problema']."</p>
                                                        </td>
                                                        <td valign=\"top\" width=\"39%\">
                                                            <table width=\"220\" border=\"0\" align=\"right\" cellpadding=\"0\" cellspacing=\"0\">
                                                                <tr>
                                                                    <td>
                                                                        <table align=\"right\" width=\"220\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                                                            <tr>
                                                                                <td bgcolor=\"#f4f4f4\" valign=\"top\" style=\"background-color: #f4f4f4; border-radius: 4px; -moz-border-radius: 4px; -webkit-border-radius: 4px; -khtml-border-radius: 4px;\">
                                                                                    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"20\">
                                                                                        <tr>
                                                                                            <td>
                                                                                                <h3 style=\"font-size: 18px; font-family: Helvetica, Arial, sans-serif; color: #333 !important; margin:0px;\">
                                                                                                    Mensaje enviado el
                                                                                                    </h3>
                                                                                                <p style=\"color: #000; margin: 0px; padding:0; font-size: 16px; font-family: Georgia, 'Times New Roman', Times, serif;\">
                                    ".$fDias[date('w')].", ".date('d')." de ".$fMeses[date('m')-1]." de ".date('Y')."
                                                                                                </p>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"20\">
                                                                                        <tr>
                                                                                            <td>
                                                                                                <h3 style=\"font-size: 18px; font-family: Helvetica, Arial, sans-serif; color: #333 !important; margin:0px;\">
                                                                                                    Datos Personales
                                                                                                    </h3>
                                                                                                <p style=\"color: #000; margin: 0px; padding:0; font-size: 16px; font-family: Georgia, 'Times New Roman', Times, serif;\">
                                                                            » Nombre: ".$_POST['nombre']."<br>
                                                                            » Apellido: ".$_POST['apellido']."<br>
                                                                            » Correo: ".$_POST['email']."
                                                                                                </p>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> </td>
                                                                </tr>
                                                                <tr>
                                                                    <td valign=\"top\"><br><br>
                                                                        <h3 style=\"font-size: 18px; font-family: Helvetica, Arial, sans-serif; color: #333 !important; margin:0px;\">
                                                                            Contáctenos
                                                                        </h3>
                                                                        <p style=\"font-size: 17px; line-height: 18px; font-family: Georgia, 'Times New Roman', Times, serif; color: #333; margin: 0px;\">
                                                                            »E-mail: plataforma@utpaqp.edu.pe<br><br>
                                                                            »Telefono: 054-219125 Anexo 16<br><br>
                                                                            »Facebook: <a href=\"facebook.com/plataformaeducativaUTA\" target=\"blank\">plataformaeducativaUTA</a>
                                                                            <br><br>
                                                                            »Youtube: <a href=\"youtube.com/user/PlataformaUTP\" target=\"blank\">PlataformaUTP</a>
                                                                            <br><br>
                                                                            »Google +: <a href=\"plus.google.com/109367046004834931951\" target=\"blank\">Plataforma Educativa</a>
                                                                        </p>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                    <br><br><br>
                                    <table cellspacing=\"0\" border=\"0\" cellpadding=\"0\" width=\"500\" align=\"center\">
                                        <tr>
                                            <td>
                                                <p style=\"font-size: 15px; font-family: Georgia, 'Times New Roman', Times, serif; color: #333; margin: 0px; text-align: center;\">
                                                    <span style=\"font-size: 30px; text-align: center;\">''</span>".$mi_array[$numaleatorio]."<span style=\"font-size: 30px; text-align: center;\">''</span></p>
                                                    <p style=\"font-size: 17px; line-height: 24px; font-family: Georgia, 'Times New Roman', Times, serif; margin: 0px; text-align: center;\">
                                                    <a href=\"plataforma.edu.pe\" target=\"_blank\">Plataforma Educativa</a>.
                                                    </p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>");
    //$mail->AddAttachment('images/spacer-top.jpg');
    if($_POST['institucion']=="UTP Arequipa"){
        $mail->AddAddress("plataforma@utpaqp.edu.pe", "Plataforma Educativa UTP AQP");
    }
    if($_POST['institucion']=="Unitek"){
        $mail->AddAddress("plataforma@unitek.edu.pe", "Plataforma Educativa Unitek");
    }
    if($_POST['institucion']=="Imagina"){
        $mail->AddAddress("plataforma@utpaqp.edu.pe", "Plataforma Educativa Imagena");
    }
    $mail->AddAddress($email, $nombre);
    $mail->Send();
}
?>