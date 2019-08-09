<form action="#section_contact" method="post">
  <input type="hidden" name="name" value="<?php echo $name; ?>">
  <input type="hidden" name="email" value="<?php echo $email; ?>">
	<input type="hidden" name="subject" value="<?php echo $subject; ?>">
  <input type="hidden" name="message" value="<?php echo $message; ?>">
  <input type="hidden" name="confirmed" value="true">
  <div>
    <label>Name</label>
    <p><?php echo $name; ?></p>
  </div>

  <div>
    <label>Email Address</label>
    <p><?php echo $email; ?></p>
  </div>

	<div>
    <label>Confirm Email Address</label>
    <p><?php echo $mailCheck; ?></p>
  </div>

  <div>
    <label>Subject</label>
    <p><?php echo $subject; ?></p>
  </div>

  <div>
    <label>Message</label>
    <p><?php echo $message; ?></p>
  </div>
  <input type="button" value="Edit Message Info" onclick="history.back(-1)"><br>
  <input type="submit" name="submit" value="Submit"></input>
</form>
