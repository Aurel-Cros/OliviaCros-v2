<?php
$email = ""; //output mail

if ($_POST['tel'] && $_POST['noms'])
{
	$tel = htmlspecialchars(strip_tags($_POST['tel']));
	$noms = htmlspecialchars(strip_tags($_POST['noms']));
	$message = wordwrap('Bonjour Olivia, '.$noms.' souhaiterait entrer en contact avec toi. Téléphone : '.$tel, 70, "\r\n"); 
	
	$sendmail = mail ($email, 'Demande de contact : '.$noms, $message, 'From: '.$noms);
	
	if ($sendmail) { ?>
	
<html>
	<head>
		<script language="javascript">
			alert('Votre demande a été envoyée avec succès.');
			document.location.href="http://olivia-cros.fr";
		</script>
	</head>
</html>
<?php }
	else {
		header('Location: http://olivia-cros.fr/contact-echec.php?err=mailfail');
		exit();
	}
}
elseif ($_POST['noms'] && $_POST['mail'] && $_POST['txt'])
{
	$noms = htmlspecialchars(strip_tags($_POST['noms']));
	$mail = htmlspecialchars(strip_tags($_POST['mail']));
	$txt = htmlspecialchars(strip_tags($_POST['txt']));
	$message = wordwrap('Bonjour Olivia, '.$noms." (".$mail.") t'as laissé le message suivant : \r\n".$txt, 70, "\r\n"); 
	
	$sendmail = mail ($email, 'Un nouveau mail de  : '.$noms, $message, 'From: '.$mail);
	
	if ($sendmail) { ?>
	
<html>
	<head>
		<script language="javascript">
			alert('Votre message a été envoyé avec succès.');
			document.location.href="http://olivia-cros.fr";
		</script>
	</head>
</html>
<?php }
	else {
		header('Location: http://olivia-cros.fr/contact-echec.php?err=mailfail');
		exit();
	}
}
else {
		header('Location: http://olivia-cros.fr/contact-echec.php?err=noinput');
		exit();
}
?>