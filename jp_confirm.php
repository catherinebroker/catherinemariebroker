<form action="#section_contact" method="post">
  <input type="hidden" name="name" value="<?php echo $name; ?>">
  <input type="hidden" name="email" value="<?php echo $email; ?>">
	<input type="hidden" name="subject" value="<?php echo $subject; ?>">
  <input type="hidden" name="message" value="<?php echo $message; ?>">
  <input type="hidden" name="confirmed" value="true">
  <div>
    <label>名前：</label>
    <p><?php echo $name; ?></p>
  </div>

  <div>
    <label>メールアドレス：</label>
    <p><?php echo $email; ?></p>
  </div>

	<div>
    <label>メールアドレスの確認：</label>
    <p><?php echo $mailCheck; ?></p>
  </div>

  <div>
    <label>件名：</label>
    <p><?php echo $subject; ?></p>
  </div>

  <div>
    <label>メッセージ：</label>
    <p><?php echo $message; ?></p>
  </div>
  <input type="button" value="メッセージを修正する" onclick="history.back(-1)"><br>
  <input type="submit" name="submit" value="送信">
</form>
