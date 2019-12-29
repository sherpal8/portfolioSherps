<div>
	<?php 

		$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

		if (strpos($fullUrl, "contact=empty") == true) {
			echo "<p class='email-form__error'>Please fill in all fields.</p>";
		}

		elseif (strpos($fullUrl, "contact=check-name") == true) {
			echo "<p class='email-form__error'>First name: Alphabets only. Avoid spaces.</p>";
		}

		elseif (strpos($fullUrl, "contact=check-surname") == true) {
			echo "<p class='email-form__error'>Surname: Alphabets only. <br> Avoid spaces.</p>";
		}

		elseif (strpos($fullUrl, "contact=check-email") == true) {
			echo "<p class='email-form__error'>Please insert valid email address.</p>";
		}

		elseif (strpos($fullUrl, "contact=success") == true) {
			echo "<p class='email-form__success'>Successful contact. We shall get back <br> to you soon.</p>";
		}
	?>


	<form class="contact-email__form" action="/includes/mail_handler.inc.php" method="POST">
		<h3>Contact Form</h3>
		<p class="email-form__p">Gentle request: All fields mandatory.</p>
	    <div>
			<label title="Enter first name">
				<p>First name</p>
				<?php
					if (isset($_GET['name'])) {
						$name = $_GET['name'];
						echo '<input type="text" name="name" value="'.$name.'">';
						} else {
						echo '<input type="text" name="name">';
					}
				?>
		    </label>
		</div>

		<br>
	    
	    <div>
			<label title="Enter family name">
			<p>Family name</p>
				<?php
					if (isset($_GET['surname'])) {
						$surname = $_GET['surname'];
						echo '<input type="text" name="surname" value="'.$surname.'">';
						} else {
						echo '<input type="text" name="surname">';
					}
				?>
		    </label>
	    </div>

		<br>

	    <div>
			<label title="Enter email">
				<p>E-mail</p>
				<?php
					if (isset($_GET['email'])) {
						$email = $_GET['email'];
						echo '<input type="text" name="email" value="'.$email.'">';
						} else {
						echo '<input type="text" name="email">';
					}
				?>
		    </label>
	    </div>

		<br>

	    <div>
			<label title="Enter subject matter">
				<p>Subject matter</p>
				<?php
					if (isset($_GET['subject'])) {
						$subject = $_GET['subject'];
						echo '<input type="text" name="subject" value="'.$subject.'">';
						} else {
						echo '<input type="text" name="subject">';
					}
				?>
		    </label>
		</div>

		<br>

	    <div>
			<label title="Enter message">
				<p>Message</p>
				<textarea type="text" rows="5" cols="31" name="message">
					 <?php if(isset($_GET['message'])) { 
					  	$message = $_GET['message'];
			         	echo $message; 
			         } else {}
			         ?>
				</textarea>
			</label>
	    </div>
	    
		<br>
		    
		<button type="submit" name="submit" class="email-form__submit">SUBMIT</button>	

	</form>
</div>