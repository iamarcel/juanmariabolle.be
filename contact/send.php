<html>
<head>
<meta name=keywords content="juan maria bollé, Belgium, Belgian, Flemish, Spanish,  art, artist,  contemporary art, pop art, oil painting, painting, painter, colour, black and white,  portrait, nude, landscape, drawing,  figure, figurative, abstract, realistic, rock, exhibitions, compositions, split screens, iconography, juan maria bollé, België, Belgisch, Vlaams, Spaans, kunst, kunstenaar, hedendaagse kunst, pop, olieverf schildering, schilderkunst, schilder, kleur, zwart wit,  portret, naakt,  landschap, tekenkunst, figuratief, abstract, realistisch, rock, tentoonstellingen, composities , iconografie, juan maria bollé, Belgique, Belge, Flamand, Espagnol, l&#8217;art, artiste, art contemporaine,  peinture, peinture a l&#8217;huile,  peintre, couleur, clair obscure, noir et blanc,  portrait, nu, paysage, dessin, figurative, abstrait, réaliste, rock, exhibitions, compositions, iconographie">
<meta name=description content="Juan Maria Bollé is a Belgian painter  with Spanish roots. As a contemporary Flemish artist, his paintings are characterised by bright full colours and black and white figurative elements completed with abstract colour fields. His medium is oil on canvas, the realistic fragments of nudes, portraits or landscapes are common, but the global context and interpretation is complex. The paintings consist of several figurative images and abstract elements, made by compositions of split screens. Therefore his art and exhibitions transcend the realistic iconography. His technique is related to pop art and colour field painting, but interpreted in a highly personal, contemporary vision.">
<title>Message sending</title>
<LINK REL=stylesheet TYPE="text/css" HREF="style.css" TITLE="style">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFA000">
<div align="center"> 
  <center>
    <table border="0" cellpadding="0" cellspacing="0" width="70%">
      <tr> 
        <td width="100%" class="main">
<?
include("config.php");

$name=$_POST['name'];
$email=$_POST['email'];
$object=$_POST['object'];
$request=$_POST['request'];

if (($name == "") | ($object=="") | ($request=="") | ($email==""))
{
echo "<center>One or more of one obligatory fields are empty</center><br>";
echo "<center><b><a href='javascript:history.back();'>GO BACK</a></b></center>";
}
elseif (($email!="") & !(ereg("([[:alnum:]\.\-]+)(\@[[:alnum:]\.\-]+\.+)", $email)))
{
echo "<center>Email address not valid</center><br>";
echo "<center><b><a href='javascript:history.back();'>GO BACK</a></b></center>";
}
else
{
$from="From: $email\r\nReply-to: $email\r\n";
$message=$words."\n";
$message.="-----------------------------------\n\n";
$message.="Name: ".$name."\n";
$message.="Email: ".$email."\n";
$message.="Request: ".$request."\n\n";
$message.="-----------------------------------\n";
$message.="You can simply click the reply button in your mail-software to send the author an answer\n\n";
$message=stripslashes($message);

mail($email_to,$object,$message,$from);
echo "<center>Your message has been sent<br><br><a href=\"$page_form\">Go back to mailform</a></center>";
}

?>
</td>
      </tr>
    </table>
</center>
</div>
</body>
</html>
