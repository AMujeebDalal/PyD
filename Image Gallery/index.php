<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="jquery-3.1.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="CSS/custom.css"/>
<link rel="stylesheet" type="text/css" href="CSS/fancy.css"/>
<script type="text/javascript" src="JS/jquery.fancybox.js">
</script>
<title>Dynamic Image Gallery</title>
</head>
<body class="bg">
<?php
include("upload.php");
?>
<hr/>
<form action="index.php" method="POST" enctype="multipart/form-data">
Choose File:<input type="file" name="file"/>
Title:<input type="text" name="nam" />
<input type="submit" name="submit" />
</form>


</body>
</html>