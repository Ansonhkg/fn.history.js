<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<script src="http://modernizr.com/downloads/modernizr-latest.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="history.js"></script>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<a href="page1.php" class="d-link">Page 1</a>
<a href="page2.php" class="d-link">Page 2</a>
<a href="page3.php" class="d-link">Page 3</a>
<a href="page4.php" class="d-link">Page 4</a>

<div class="grapme">
<h1>Page 3</h1>
<p>Lorem ipsum dolor sit amet, consectetur.</p>
<p>Quam voluptates, voluptate maiores optio doloribus!</p>
<p>In ipsa qui molestias, quisquam adipisci.</p>
</div>

<script>
$('.d-link').history();
</script>
</body>
</html>