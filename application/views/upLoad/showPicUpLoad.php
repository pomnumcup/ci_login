<!DOCTYPE html>
<html>
<head>
	<title>แสดงรูปภาพตัวอย่าง</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
</head>
<body>
	<div align="center"><h3>แสดงรูปภาพ</h3></div>
	<?php $pic=$name ?>

	<div align="center"><img src="<?php echo base_url(); ?>\assets\image\<?php echo $pic; ?>" width="300" height="200"></div>
</body>
</html>