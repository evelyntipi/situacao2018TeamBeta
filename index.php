<?php 
	//guarda na variável $erro o que está na url da página. Caso não tenha nada, guarda o valor 0.
	$erro = isset($_GET['erro']) ? $_GET['erro']:0;	
 ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
		<meta charset="UTF-8">

		<title>Twitter clone</title>

		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="css/home.css">
	
	</head>
<body>
	<!--Static navbar-->
	        
	          <ul>
	          	<li class="li_beta1"><span><a href="perfil.php">Meu perfil</a></span></li>
	            <li><span><a href="entrar.php">Entrar</a></span></li>
	            <li class="li-beta"><span class="beta1"><a href="#">News</a></span></li>
	            <li><span class="beta2"><a href="#">Quadrinhos</a></span></li>
	            <li><span class="beta3"><a href="#">Manga</a></span></li>
	            <li><span class="beta4"><a href="#">Otaku Store</a></span></li>
	          </ul>

	    <div class="">
	    	<br><br><br><br>
	    		<div class="">
	    			BetaComics<br><br><br>
	    			BetaMangá<br><br><br>
	    			BetaStore<br>
	    		</div>
	    		<div class="">
	    			Destaques da semana
	    		</div>
	    		<div class="	">
	    			Propagandas
	    		</div>
	    	
	    </div>
	    

	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>