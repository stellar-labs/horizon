<?php
	use function Horizon\configuration;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic" />
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css" />
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css" />
	<style>
		.text-center {
			text-align: center;
		}

		.display-table {
			display: table;
			height: 100%;
			width: 100%;
		}

		.display-table-cell {
			display: table-cell;
			vertical-align: middle;
		}
	</style>
</head>
<body>
	<div class="display-table" style="width: 100vw; height: 100vh;">
		<div class="display-table-cell text-center">
			<h1><?= configuration("app.name") ?></h1>
			<?php foreach($menus as $menu): ?>
				<a href="<?= $menu["href"] ?>" class="button button-clear"><?= $menu["text"] ?></a>
			<?php endforeach ?>
		</div>
	</div>
</body>
</html>
