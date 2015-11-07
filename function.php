<?php
//Formulaire envoi de mail
if(isset($_POST) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){
	if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])){
		$destinataire = $_POST['victim'];
		$sujet = $_POST['subject'];
		$message = $_POST['message'];

		$entete .= 'From: '.$_POST['name'].' <'.$_POST['email'].'>'."\r\n".
		'Reply-To: '.$_POST['email']."\r\n".
		'X-Mailer: PHP/'.phpversion();
		if (mail($destinataire,$sujet,$message,$entete)){
			?>
			<script>
			alert('Votre message a bien été envoyé.');
			location.reload();
			</script>
			<?php
		} else {
			echo "Une erreur est survenue lors de l'envoi du formulaire par email";
		}
	}
}

?>
