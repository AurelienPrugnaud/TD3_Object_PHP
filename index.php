<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>PHP object TD3</title>
</head>
<body>
<header>
	<div class="bg-dark text-light mb-3 position-relative p-1">
		<h1 class="text-center">PHP Object/accesseurs/constante/statique</h1>
	</div></header>
<main>
	<div class="container">
        <div class="text-center mb-3">
            <a href="/subjectsList" class="link-dark" >Liste des matières</a>
        </div>
		<?php
		if(!empty($list)):
			include("views/".$list.".php");
        elseif(empty($list)):
			include("views/errorPageNotFound.php");
		endif;
		?>
	</div>
</main>
</body>
</html>