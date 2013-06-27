<?php
include_once "etc/markdown.php";
$my_text = file_get_contents('townsville.md');
$my_html = Markdown($my_text);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta id="viewport" name="viewport" content="width=320; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
		<link href="etc/css/bootstrap.min.css" rel="stylesheet">
		<link href="etc/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="etc/css/style.css" rel="stylesheet">
	</head>

<body>
	<div class="container-narrow">
		<div class="row-fluid">
			<div class="span12">
	<?php
				echo $my_html;
	?>
			</div>
		</div>
	</div>
</body>
</html>