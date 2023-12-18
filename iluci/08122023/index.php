<?php
	$title = "Monte Sodadura - Cresta Sud-Ovest";
    $track = "08122023.gpx";
	$day = "08-12-2023, Venerdì";
	$participants = "<img class=\"person\" src=\"../assets/people/dello.png\"> Dello, <img class=\"person\" src=\"../assets/people/oracolo.png\"> Oracolo";
	$path = "../relazioni/29_2_1/sodadura-crestasudovest/";
?>

<head>
	<link rel="stylesheet" href="../style/style.css">
	<script type="text/javascript" src="../script/script.js"></script>
	<link rel="icon" type="image/x-icon" href="../assets/icon.png">
	<title>I Luci! <?php echo $title; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<div class="container">
	
		<div class="banner-container"><img class="banner" src="../assets/banner/escursionismo.png"></div>
		
		<!-- Descrizione -->
		<?php
		include $path . 'descrizione.php';
		?>
		
		<div class="picker-bar bordered-sides">
			<div class="picker-choice"><div class="picker button escursionismo selected" id="relazione-button">Relazione</div></div>
			<div class="picker-choice"><div class="picker button escursionismo" id="condizioni-button">Condizioni</div></div>
			<div class="picker-choice"><div class="picker button escursionismo" id="racconti-button">Racconti</div></div>
			<div class="picker-choice"><div class="picker button escursionismo" id="foto-button">Foto</div></div>
		</div>
		
		<div class="content">
		
			<!-- Relazione -->
			<?php
			include $path . 'index.php';
			?>
			
			<!-- Condizioni -->
			<div id="condizioni" class="condizioni hidden">
				<h3>Condizioni</h3>
				
				<table class="info escursionismo">
					<tr>
						<th>Meteo e Condizioni</th>
						<td>Mattinata di brutto tempo, ha nevicato fin dalla partenza, smettendo solo nella parte finale. Sotto la neve, specie sulla strada, parecchio ghiaccio che ci ha costretto a mettere i ramponi presto. Comunque non tanta neve fresca, max 10-15cm.</td>
					</tr>
					<tr>
						<th>Giudizio Soggettivo</th>
						<td>
							<img class="star" src="../assets/star.png">
							<img class="star" src="../assets/star.png">
							<img class="star" src="../assets/star.png">
							<img class="star" src="../assets/emptystar.png">
							<img class="star" src="../assets/emptystar.png"> (Oracolo)
						</td>
					</tr>
					<tr>
						<th>Orientamento</th>
						<td>Banale fino ai Piani, poi comunque facile perchè la cresta è evidente. Anche la discesa è difficile da sbagliare.</td>
					</tr>
				</table>
			</div>
		
			<!-- Racconti -->
			<div id="racconti" class="racconti hidden">
				<h3>Racconti</h3>
				
				<div class="story left">
				
					<div class="profile-block">
						<img class="profile" src="../assets/people/oracolo.png">
						<br>Oracolo
					</div>
					
					<div class="story-block escursionismo">
						Festa dell'Immacolata ma il meteo non è il massimo, con Dello decidiamo comunque di andare a fare una sgambata a Artavaggio. Nevica mentre saliamo in strada, troviamo un posto risicato alla stanga e si inizia a salire. Un po' di ghiaccio sotto la neve fresca ci fa mettere i ramponi abbastanza prima dei Piani, poi arrivati all'albergo Sciatori ci concediamo una breve pausa alla chiesetta. Iniziamo a salire sulla cresta Sud-Ovest, fino in cima dove arriveremo senza problemi, c'è anche un pochino di visibilità nonostante il meteo non sia per niente bello. In discesa tappa al Nicola, per un paio di polente e birre self service, poi giù sciolti fino alla macchina che raggiungeremo di primo pomeriggio, il meteo non si è aperto ma non si è stati male tutto sommato.
					</div>
				</div>
			</div>
		
			<!-- Foto -->
			<div id="foto" class="foto hidden">
				<h3>Foto</h3>
				
				<a href="https://photos.app.goo.gl/oAPxDJGycuLm7K8F6" target="_blank" rel="noopener noreferrer">
					<img src="../assets/googlephotos.png">
					<p>Google Photos Album</p>
				</a>
			</div>
		</div>
	
		<a href="../">
			<div class="back escursionismo">
				<div class="back-button">
					<img class="back-image" src="../assets/back.png">
				</div>
				<div class="back-text">
					<p class="back-text">Home</p>
				</div>
			</div>
		</a>
	</div>

</body>
