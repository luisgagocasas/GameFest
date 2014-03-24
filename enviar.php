<?php
include "phpmailer/PHPMailerAutoload.php";
$tipo = $_POST["tipo"];
if($tipo=="cosplay"){
    $nombre = $_POST["nombre"];
    $apellido = $_POST['apellidos'];
    $email = $_POST["correo"];
    $problema = $_POST['codigo'];
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "ssl";
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465;
    $mail->Username = "micorreo@gmail.com";
    $mail->Password = "1234";
    $mail->SetFrom("micorreo@gmail.com", "Game Fest");
    $mail->Subject = "Bienvenido al UTP Game Fest";
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
                                <font size=3 color="#333333" face=Arial>
                                Hola <b>'.$nombre.' '.$apellido.'</b>,<br>
                                Prepárate para representar a tu personaje favorito.</font><br><br>
                                <font size=3 color="#333333" face=Arial>
                                Te esperamos el 21 de marzo desde las 12:00 AM en la UTP Arequipa.<br />
                                La Merced 209 - 215, Arequipa.
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
    $mail->AddAddress("plataforma@utpaqp.edu.pe", "GameFest - Plataforma Educativa");
    $mail->AddAddress($email, $nombre);
    $mail->Send();
}
else if($tipo=="gamefest"){
    $nombre = $_POST["nombre"];
    $apellido = $_POST['apellidos'];
    $email = $_POST["correo"];
    $problema = $_POST['codigo'];
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "ssl";
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465;
    $mail->Username = "micorreo@gmail.com";
    $mail->Password = "1234";
    $mail->SetFrom("micorreo@gmail.com", "Game Fest");
    $mail->Subject = "Bienvenido al UTP Game Fest";
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
                              <font size=3 color="#333333" face=Arial>
                              Hola <b>'.$nombre.' '.$apellido.'</b>,<br>
                              Los videojuegos pueden hacer un mundo mejor, demuéstralo y sé parte del gran desafío.</font><br>
                              <font size=3 color="#333333" face=Arial>
                              Ahora apersónate a tesorería de la UTP (La Merced 209) para pagar los derechos de participación.<br />
                              Te esperamos el 21 de marzo desde las 12:00 AM en la UTP Arequipa.<br>
                              La Merced 209 - 215, Arequipa.
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
    $mail->AddAddress("plataforma@utpaqp.edu.pe", "GameFest - Plataforma Educativa");
    $mail->AddAddress($email, $nombre);
    $mail->Send();
}
else if($tipo=="gamefestplanb"){
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
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "ssl";
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465;
    $mail->Username = "micorreo@gmail.com";
    $mail->Password = "1234";
    $mail->SetFrom("micorreo@gmail.com", "Game Fest");
    $mail->Subject = "Bienvenido al UTP Game Fest";
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
                                <font size=3 color="#333333" face=Arial>
                                Hola <b>'.$nombreequipo.'</b>,<br>
                                Los videojuegos pueden hacer un mundo mejor, demuéstralo.</font><br>
                                <font size=3 color="#333333" face=Arial>
                                Ahora apersónate a tesorería de la UTP (La Merced 209) para pagar los derechos de participación.<br />
                                Te esperamos el 21 de marzo desde las 12:00 AM en la UTP Arequipa.<br>
                                La Merced 209 - 215, Arequipa.
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
    $mail->AddAddress("plataforma@utpaqp.edu.pe", "GameFest - Plataforma Educativa");
    $mail->AddAddress($email1, $nombre1." ".$apellido1);
    $mail->AddAddress($email2, $nombre2." ".$apellido2);
    $mail->AddAddress($email3, $nombre3." ".$apellido3);
    $mail->AddAddress($email4, $nombre4." ".$apellido4);
    $mail->Send();
}
else if($tipo=="gamefestplanc"){
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
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "ssl";
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465;
    $mail->Username = "micorreo@gmail.com";
    $mail->Password = "1234";
    $mail->SetFrom("micorreo@gmail.com", "Game Fest");
    $mail->Subject = "Bienvenido al UTP Game Fest";
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
                              <font size=3 color="#333333" face=Arial>
                              Hola <b>'.$nombreequipo.'</b>,<br>
                              Los videojuegos pueden hacer un mundo mejor, demuéstralo.</font><br>
                              <font size=3 color="#333333" face=Arial>
                              Ahora apersónate a tesorería de la UTP (La Merced 209) para pagar los derechos de participación.<br />
                              Te esperamos el 21 de marzo desde las 12:00 AM en la UTP Arequipa.<br>
                              La Merced 209 - 215, Arequipa.
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
    $mail->AddAddress("plataforma@utpaqp.edu.pe", "GameFest - Plataforma Educativa");
    $mail->AddAddress($email1, $nombre1." ".$apellido1);
    $mail->AddAddress($email2, $nombre2." ".$apellido2);
    $mail->AddAddress($email3, $nombre3." ".$apellido3);
    $mail->AddAddress($email4, $nombre4." ".$apellido4);
    $mail->AddAddress($email5, $nombre5." ".$apellido5);
    $mail->Send();
}
?>