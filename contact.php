<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$message = trim($_POST['message']);

	if($name == "" OR $email == "" OR $message == ""){
		header("Location: contact.php?status=invalid");
		exit;
	}

	$email_body = "";
	$email_body = $email_body . "Name: " . $name . "\n";
	$email_body = $email_body . "Email: " . $email . "\n";
	$email_body = $email_body . "Message: " . $message;

	header("Location: contact.php?status=thanks");
	exit;
}
?>

<?php
$pageTitle = 'Contact Mike';
$shirts = 'false';
include('includes/header.php');
?>

<div class="section page">
	<div class="wrapper">
		<h1>Contact</h1>

		<?php
			if(isset($_GET["status"]) and $_GET["status"] == "invalid"){
				echo "<p>You must have a valid name, email and a message body</p><br>";
				echo "<a href='contact.php'>Back to Contact page</a>";
			}

			elseif(isset($_GET["status"]) and $_GET["status"] == "thanks"){
				echo "<p>Thanks for the email! I will be in touch shortly.</p><br>";
				echo "<a href='index.php'>Back to Home page</a>";
			}

			else {
		?>

			<p>I would love to hear from you! Complete the form to send me an email.</p>

			<form method="post" action="contact.php">
				<table>
					<tr>
						<th>
							<label for="name">Name</label>
						</th>
						<td>
							<input type="text" name="name" id="name">
						</td>
					</tr>

					<tr>
						<th>
							<label for="email">Email</label>
						</th>
						<td>
							<input type="text" name="email" id="email">
						</td>
					</tr>

					<tr>
						<th>
							<label for="message">Message</label>
						</th>
						<td>
							<textarea name="message" id="message"></textarea>
						</td>
					</tr>

					<tr style="display:none">
						<th>
							<label for="spam">Spam</label>
						</th>
						<td>
							<textarea name="spam" id="spam"></textarea>
							<p>Humans leave this area blank!.</p>
						</td>
					</tr>
				</table>
				<input type="submit" value="send">
			</form>

			<?php } ?>
	</div>
</div>

<?php
include('includes/footer.php');
?>