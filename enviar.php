<?php
$nombre = $_POST["nombre"];
$apellido = $_POST['apellidos'];
$email = $_POST["correo"];
$problema = $_POST['codigo'];
$fMeses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
$fDias = array( 'Domingo', 'Lunes', 'Martes','Miercoles', 'Jueves', 'Viernes', 'Sabado');
$mi_array = array("Creo muchísimo en la suerte y descubro que cuanto más trabajo, más suerte tengo","No cambian las cosas: cambiamos nosotros","La mente es como un paracaídas, no sirve de nada si no se abre","No hay ninguna cosa seria que no pueda decirse con una sonrisa","Si pensamos tal y como lo hacemos ahora, crearemos el tipo de mundo que ya hemos creado. Si pensamos de otro modo, puede que creemos un mundo diferente y también gente diferente. Sólo pueden cambiar los dos a la vez","Sólo triunfa en el mundo quien se levanta y busca las circunstancias, y las crea si nos las encuentra");
$max = count($mi_array)-1;
$numaleatorio = rand(0,$max);
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
    $mail->Subject = "Bienvenido al Game Fest ".$nombre." ".$apellido;
    $mail->MsgHTML('<HTML xmlns="http://www.w3.org/1999/xhtml"><HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<STYLE type=text/css>
    tr {font-family:Gill Sans MT, Arial}
 td {border-collapse:collapse}
 p { padding: 0; margin: 0}
 ul, ol {margin: 0; padding: 0}
 background { none !important}
 .ReadMsgBody { width: 100%}
 .ExternalClass {width: 100%}
 div, p, a, li, td {-webkit-text-size-adjust:none;-ms-text-size-adjust:none}
    </STYLE>
</HEAD>
<BODY style="padding:0; margin:0">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td bgcolor="#DBDBDD">
        <table align="center" width="629" border="0" cellspacing="0" cellpadding="0">
          <tr>           
            <td width="629" valign="top">
              
              <table width="629" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td><img style="display:block" border="0" src="img/image_02.jpg" width="421" height="120"></td>
                  <td><img style="display:block" border="0" src="img/image_03.jpg" width="153" height="120"></td>
                  <td><img style="display:block" border="0" src="img/image_04.jpg" width="55" height="120"></td>
                </tr>
              </table>
              <table width="629" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="19" bgcolor="#DBDBDD"></td>
                  <td width="35" bgcolor="#DEEAF6">&nbsp;</td>
                  <td width="521">
                    <table width="521" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td bgcolor="#DEEAF6">
                          <center><img style="display:block" border="0" src="img/image_07.jpg" height="75"></center>
                        </td>
                      </tr>
                    </table>
                    <table width="521" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="43" bgcolor="#DEEAF6">&nbsp;</td>
                        <td bgcolor="#DEEAF6">
                          <font size=5 color="#5b6e53" face=georgia>
                          Hola <b>'.$nombre.' '.$apellido.'</b> Ya eres parte del Cosplay, preparate para algo único.
                          </font><br><br>
                          <font size=3 color="#333333" face=Arial>
                          Te esperamos el 21 de Marzo<br>
                          a las 12:00pm en el campus de La Merced 209 - 215, Arequipa.
                          </font>
                        </td>
                        <td width="43" bgcolor="#DEEAF6">&nbsp;</td>
                      </tr>
                    </table>

                  </td>
                  <td width="35" bgcolor="#DEEAF6">&nbsp;</td>
                  <td width="19" bgcolor="#DBDBDD">&nbsp;</td>
                </tr>
              </table>
              <table width="629" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td><img style="display:block" border="0" src="img/image_10.jpg" width="629" height="37"></td>
                </tr>
              </table>
              <table width="629" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td><img style="display:block" border="0" src="img/image_11.jpg" width="629" height="290"></td>
                </tr>
              </table>
              <table width="629" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td style="padding-bottom:15px">
                  <div align="center">
                  <font size=2 color="#999999" face=Arial>
                  Todos los derechos reservados
                  <a href="http://plataforma.edu.pe/" style="color:#000">
                  Plataforma Educativa
                  </a>
                  </font>
                  </div>
                  </td>
                </tr>
              </table>          
            </td>           
          </tr>
        </table>
      </td>
    </tr>
  </table>
</BODY>
</HTML>');
    //$mail->AddAttachment('images/spacer-top.jpg');
    //$mail->AddAddress("luisgago@jm.edu.pe", "Game Fest - Plataforma Educativa");
    $mail->AddAddress($email, $nombre);
    $mail->Send();
}
?>