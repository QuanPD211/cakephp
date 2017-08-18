<?php  
echo $this->Form->create('Valid', array('action' => 'vidu1'));
?>
<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
	<meta charset="utf-8">
</head>
<body>
	<form method="post">
		<!-- <input type="text" name="name"> -->
		<?php echo $this->Form->input('name'); ?>
		<!-- <input type="password" name="pass"> -->
		<?php echo $this->Form->input('email'); ?>
		<input type="submit" name="submit">
	</form>
</body>
</html>