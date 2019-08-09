<form method="post" action="#section_contact">
	<p style="font-weight: 600;">＊　記入必須項目</p>

	<p><?php echo $messageStatus ?></p>

	<div class="client_information_input">
		<label>名前：　＊</label><br>
			<input type="text" placeholder="名前を書いてください。" name="name" value="<?php if (!empty($name)) {echo $name;} ?>" maxlength="20"><br>
			<p class="error"><?php if (!empty($nameErr)) {echo $nameErr;} ?></p>
	</div>

	<div class="client_information_input">
		<label>メールアドレス：　＊</label><br>
			<input type="email" placeholder="メールアドレスを書いてください。" name="email" value="<?php if (!empty($email)) {echo $email;} ?>" maxlength="20"><br>
			<p class="error"><?php if (!empty($emailErr)) {echo $emailErr;} ?></p>
		</div>

		<div class="client_information_input">
			<label>メールアドレスの確認：　＊</label>
				<input type="email" placeholder="Confirm your email address here." name="mailCheck" value="<?php if (!empty($mailCheck)) {echo $mailCheck;} ?>" maxlength="20">
		</div>


		<div class="client_information_input">
			<label>件名： *</label><br>
				<input type="text" placeholder="メッセージの件名を書いてください。" name="subject" value="<?php if (!empty($subject)) {echo $subject;} ?>" maxlength="20"><br>
			<p class="error"><?php if (!empty($subjectErr)) {echo $subjectErr;} ?></p>
		</div>

		<div class="client_information_input">
			<label>メッセージ：　＊</label><br>
				<input type="text" placeholder="メッセージを書いてください。" name="message" value="<?php if (!empty($message)) {echo $message;} ?>" maxlength="1000"><br>
			<p class="error"><?php if (!empty($messageErr)) {echo $messageErr;} ?></p>
		</div>

	<input type="submit" name="confirm" value="確認">
</form>
