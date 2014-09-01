<meta charset="utf-8">
<?php echo $fail; ?>
<form <?php echo form_open_multipart('testLogin/conLogin/getValueInput'); ?> >
	<input type="text" name="user" id="user">
	<input type="text" name="password" id="password">
	<input type="submit" value="LOGIN" id="login">
</form>