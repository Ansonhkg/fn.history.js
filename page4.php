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
	<div id="bar">
	<h1>Page 4</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
	<p>Asperiores, hic commodi! Consectetur maiores perspiciatis quod maxime.</p>
	<p>Saepe quisquam repellat, eum rem commodi ducimus iste.</p>
	<p>Eligendi sequi mollitia, blanditiis tempore perferendis eaque tempora.</p>
	<p>Unde est, explicabo. Quis in reiciendis, veritatis adipisci!</p>
	<p>Maiores, cum! Illo dolore veniam labore iste tempora.</p>
	</div>
</div>

<script>
$('.d-link').history();
</script>
</body>
</html>