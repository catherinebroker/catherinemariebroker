<form method="post" action="#section_contact">
	<p style="font-weight: 600;">* required field</p>

	<p><?php echo $messageStatus ?></p>

	<div class="client_information_input">
		<label>Name: *</label><br>
		<input type="text" placeholder="Write your name here." name="name" value="<?php if (!empty($name)) {echo $name;} ?>" maxlength="20"><br>
		<p class="error"><?php if (!empty($nameErr)) {echo $nameErr;} ?></p>
	</div>

	<div class="client_information_input">
		<label>Email Address: *</label><br>
			<input type="email" placeholder="Write your email address here." name="email" value="<?php if (!empty($email)) {echo $email;} ?>" maxlength="20"><br>
		<p class="error"><?php if (!empty($emailErr)) {echo $emailErr;} ?></p>
	</div>

	<div class="client_information_input">
		<label>Confirm Email Address: *</label>
			<input type="email" placeholder="Confirm your email address here." name="mailCheck" value="<?php if (!empty($mailCheck)) {echo $mailCheck;} ?>" maxlength="20">
	</div>

	<div class="client_information_input">
		<label>Subject: *</label>
			<input type="text" placeholder="Write the subject of your message here." name="subject" value="" maxlength="20"><br>
		<p class="error"><?php if (!empty($subjectErr)) {echo $subjectErr;} ?></p>
	</div>

	<div class="client_information_input">
		<label>Message: *</label>
			<input type="text" placeholder="Write your message here." name="message" value="<?php if (!empty($message)) {echo $message;} ?>" maxlength="1000"><br>
		<p class="error"><?php if (!empty($messageErr)) {echo $messageErr;} ?></p>
	</div>

	<input type="submit" value="Submit">
</form>
