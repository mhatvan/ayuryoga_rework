<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Kontakt</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="robots" content="index,follow">
<meta name="keywords" content="Yoga,Yogakurse,Meditation,Asanas,Sivananda,Pranayama,Ayurveda,Abhyanga, &Ouml;lmassage,Ayurveda-Kochkurse, Ayurveda-Seminare,Nuad,Thai-Massage,Passives-Yoga,Entspannung,Gesundheit,REIKI,Craniosacral,Cranio-Sacral-Therapie,Hormon-Yoga,Bachbl&uuml;ten,Inannah,Entspannungstechnik,Fu&szlig;-Polarity">
<meta name="description" content="Kontakt">
<meta http-equiv="language" content="de">
<meta http-equiv="content-language" content="de">
<meta name="organization" content="Ayuryoga">
<meta name="copyright" content="www.ayuryoga.at">
<meta name="author" content="Michlman, Sedlaczek">
<link rel="SHORTCUT ICON" href="../favicon.ico">
<link rel="StyleSheet" type="text/css" href="../index.css">
<SCRIPT type="text/javascript" SRC="../ema.js"></SCRIPT>
<?php
include "../emadr.php";
if ($state == "")
{
$title="Kontakt";
$header="Sende ein Email";
$announce="";
}
else
{
$title="Kontakt";
$header="Mail wurde erfolgreich gesendet!";
$announce="Mail erfolgreich an ".$eoffice2." gesendet!";
if ($ccText != "") $ccText="cc: $ccText <$ccText>\n";
if ($bccText != "") $bccText="Bcc: $bccText <$bccText>\n";
if ($mailformat == "Text") mail($toText, $subjectText, $msgText,     "To: $toText <$toText>\n" .     "From: $fromText <$fromText>\n" .$ccText.$bccText.   "X-Mailer: PHP 4.x");
if ($mailformat == "Html") mail($toText, $subjectText, $msgText,     "To: $toText <$toText>\n" .     "From: $fromText <$fromText>\n" .$ccText.$bccText.     "MIME-Version: 1.0\n" .     "Content-type: text/html; charset=iso-8859-1");
}

if(isset($_GET['emailform'])){
$eoffice = "PXNqSTBGbUxoZDJiNUpYZDVGR1FsTldhbVoyYmlvRE94b3pj";
$text3 = base64_decode($eoffice);
$textv3 = strrev($text3);
$eoffice2 = unserialize(base64_decode($textv3));
	$emailf = ("<b><font size=\"+1\"><?php echo($announce)?></font></b>
<form method=\"POST\" action=\"kontakt.php\">
<input type=\"hidden\" name=\"toText\" value=\"".$eoffice2."\">
<input type=\"hidden\" name=\"mailformat\" value=\"Text\">
<div align=center>
<table cellspacing=0 cellpadding=0 >
<tr>
 <td height=20 width=20 background=\"../tabelle/obli.jpg\">&nbsp;</td>
 <td height=20 background=\"../tabelle/obmi.jpg\">&nbsp;</td>
 <td height=20 width=20 background=\"../tabelle/obre.jpg\">&nbsp;</td>
</tr>
<tr>
 <td width=20 background=\"../tabelle/limi.jpg\">&nbsp;</td>
 <td valign=top align=center background=\"../tabelle/mimi.jpg\">
<!--Beginn Eingabe-->
<table bgcolor=\"#FEFA8C\" cellspacing=1 cellpadding=1 width=640px>
<tr>
 <td  align=right style=\"width: 183px\">Ihre Emailadresse:</td>
 <td align=center style=\"width: 600px\">
	<input type=text name=\"fromText\" size=80 style=\"width: 500px\"></td>
</tr>
<tr>
 <td align=right style=\"width: 183px\">Betreff:</td>
 <td align=center style=\"width: 600px;\" nowrap=\"nowrap\">
	<input type=\"text\" name=\"subjectText\" size=40 style=\"width: 300px\"><select name=\"subjectText\" style=\"width: 300px\" >
<option value=\"\"></option>
<option value=\"Ayurveda\">AYURVEDA</option>
<option value=\"Ayurvedische Ern&auml;rung\">Ayurvedische Ernährung</option>
<option value=\"Kochkurs\">Kochkurs</option>
<option value=\"Seminar\">Seminar</option>
<option value=\"Beratung\">Beratung</option>
<option value=\"Behandlungen\">Behandlungen</option>
<option value=\"Yoga\">YOGA</option>
<option value=\"Yoga als Therapie\">Yoga als Therapie</option>
<option value=\"Der Unterricht\">Der Unterricht</option>
<option value=\"Kurse\">Kurse</option>
<option value=\"Yoga fürSchwangere und Kinder\">Specials</option>
<option value=\"Preise\">Preise</option>
<option value=\"Stundenplan\">Stundenplan</option>
<option value=\"Yogische Ern&auml;rung\">Yogische Ernährung</option>
<option value=\"Nuad\">NUAD</option>
<option value=\"Cranio Sacral\">Cranio Sacrale Behandlung</option>
<option value=\"Reiki\">Reiki</option>
</select></td>
</tr>
<tr>
 <td valign=top align=right style=\"width: 183px\">Nachricht:</td>
 <td align=center style=\"width: 600px\">
	<textarea rows=15 name=msgText style=\"width: 600px\"></textarea><br><input type=submit value=Senden name=send>
<input type=hidden name=state value=1>
</td>
</tr>
</table>
<!--Ende Eingabe-->
 </td>
 <td width=20 background=\"../tabelle/remi.jpg\">&nbsp;</td>
</tr>
<tr>
 <td height=20 width=20 background=\"../tabelle/unli.jpg\">&nbsp;</td>
 <td height=20 background=\"../tabelle/unmi.jpg\">&nbsp;</td>
 <td height=20 width=20 background=\"../tabelle/unre.jpg\">&nbsp;</td>
</tr>
</table>
</form>");
}
?>

<script language="JavaScript">
<!--
function plan() {
window.open("p3.html","","resizable=1,menubar=1,left = 100,top = 100")
}
//-->
</script>
</head>
<body style="background-position: 5px 5px; background-attachment:fixed; background-repeat:no-repeat; background-image: url('../bilder/om.jpg');" >
<div align="center">
<table width="95%">
<tr>
 <td align="center">
	<h2>Studio AyurYoga</h2>
	<h3>Ihr Studio für <b>Yoga, Ayurveda, Shiatsu, Nuad und Meditation</b> in Floridsdorf<br></h3>
	<b>1210 Wien, Am Spitz 16/14,</b> Eingang links neben Betten Reiter<br>
<!--
	<h4>Für Anfragen benutze unser <A href="<?php print($PHP_SELF);?>?emailform">Emailformular</A>!</h4>
<?php print ($emailf); ?>
-->
	<h4>Anfragen per <script type="text/javascript">  emaoffice(); </script> </h4>
	<b>Tel: 0660 8362906 </b><br>&nbsp;<br>
	<br>Bankverbindung: IBAN: AT02 3200 0000 0258 0926,&nbsp; lautend auf Michaela 
	Kloosterman,&nbsp; bei Raiffeisen LB W/NÖ<br>
	<br>
	Wir sind öffentlich mit folgenden Linien erreichbar:<br>
    U6, Schnellbahn S1, 26, 31, 33, 33B, 29A<br><br>Das Studio ist eine halbe 
	Stunde vor den Stunden bzw. Kursen besetzt, danach mindestens 15 Min. <br>
	Während den Stunden ist die Glocke abgeschaltet.<br>
	<br>
    <b>Plan vom Zentrum Floridsdorf<br>
	<a href="https://www.google.at/maps/place/Studio+AyurYoga/@48.258464,16.397362,17z/data=!3m1!4b1!4m2!3m1!1s0x476d067ad8741ded:0x37026f70c04f9062?hl=de" target="_blank">
	Google-Map </a></b><br>
	<img alt="Plan yum AyurYoga Studio" src="../bilder/plan2.gif" width="640" height="480">
 </td>
</tr>
</table>
</div>
</body>
</html>