<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Free FakeMailer</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>

<body>
	<div class="well bs-component">
		<h1 id="forms">Fake Mailer</h1>
		</br>
		<form class="form-horizontal" method="post" action="function.php">
			<fieldset>
				<legend>Sender : </legend>
				<div class="form-group">
					<label for="inputEmail" class="col-lg-2 control-label">Your Name : </label>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="name" id="name" placeholder="John Doe" required="required">
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail" class="col-lg-2 control-label">Your Email : </label>
					<div class="col-lg-10">
						<input type="email" class="form-control" name="email" id="email" placeholder="johndoe@mail.com" required="required">
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
	</div>
</body>

</html>
