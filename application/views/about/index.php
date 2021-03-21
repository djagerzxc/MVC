<!DOCTYPE html>
<html>
	<head>
		<title><?= $dat['title'] ?></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<style>
			* {
				font-family: monospace;
			}
		</style>
	</head>
	<body>
		<h5>Controller >></h5>
		<ul>
			<li>About</li>
		</ul>
		<h5>Method >></h5>
		<ul>
			<li>index</li>
		</ul>
		<h5>Default URL >></h5>
		<ul>
			<li><?= $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/about/index'?></li>			
		</ul>
		<a href="<?= base_url('home') ?>">Home</a>
		<br><br>
		<a href="<?= base_url('about') ?>">About</a>
		<br><br>
		<a href="<?= base_url('help') ?>">Help</a>
	</body>
</html>