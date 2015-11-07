<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<div class="well bs-component">
	<h1 id="forms">Fake Mailer</h1></br>
              <form class="form-horizontal" method="post">
                <fieldset>

                <legend>Sender : </legend>
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Your Name : </label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" name="name" id="name" placeholder="Jean Martichoux" required="required">
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Your Email : </label>
                    <div class="col-lg-10">
                      <input type="email" class="form-control" name="email" id="email" placeholder="jeanmartichoux@mail.com" required="required">
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="inputPassword" class="col-lg-2 control-label">Subject : </label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" name="subject" id="subject" placeholder="Hello" required="required">
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="textArea" class="col-lg-2 control-label">Message : </label>
                    <div class="col-lg-10">
                      <textarea placeholder="Your message" class="form-control" rows="3" name="message" id="message" required="required"></textarea>
                    </div>
                  </div>
                  <legend>Receiver : </legend>
                  <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Victim : </label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" name="victim" id="victim" placeholder="myvictim@mail.com" required="required">
                    </div>
                  </div>


                  <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                      <button class="btn btn-default">Cancel</button>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </fieldset>
              </form>


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