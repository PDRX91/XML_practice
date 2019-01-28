<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<?php
	require('./dummy.php');
	$url = 'dummy_data2.xml';
	$xml = simplexml_load_file($url) or die("Can't connect");
	$result = $xml->xpath("books/book/author");
	?><pre><?php
	print_r($result);
	// print_r($xml);
	?></pre><?php

	?>
</body>
</html>
