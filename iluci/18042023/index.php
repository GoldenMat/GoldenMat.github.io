<?php
	$title = "Medale - Ferrata degli Alpini";
    $track = "18042023.gpx";
	$day = "18-04-2023, Martedì";
	$participants = "<img class=\"person\" src=\"../assets/people/francescom.png\"> Francesco M, <img class=\"person\" src=\"../assets/people/giulia.png\"> Giulia, <img class=\"person\" src=\"../assets/people/maraja.png\"> Maraja, <img class=\"person\" src=\"../assets/people/oracolo.png\"> Oracolo";
	$path = "../relazioni/29_2_3/ferrata-medale/";
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
	
		<div class="banner-container"><img class="banner" src="../assets/banner/ferrata.png"></div>
		
		<!-- Descrizione -->
		<?php
		include $path . 'descrizione.php';
		?>
		
		<div class="picker-bar bordered-sides">
			<div class="picker-choice"><div class="picker button ferrata selected" id="relazione-button">Relazione</div></div>
			<div class="picker-choice"><div class="picker button ferrata" id="condizioni-button">Condizioni</div></div>
			<div class="picker-choice"><div class="picker button ferrata" id="racconti-button">Racconti</div></div>
			<div class="picker-choice"><div class="picker button ferrata" id="foto-button">Foto</div></div>
		</div>
		
		<div class="content">
		
			<!-- Relazione -->
			<?php
			include $path . 'index.php';
			?>
			
			<!-- Condizioni -->
			<div id="condizioni" class="condizioni hidden">
				<h3>Condizioni</h3>
				
				<table class="info ferrata">
					<tr>
						<th>Meteo e Condizioni</th>
						<td>Serata di bel tempo, nonostante avesse appena piovuto abbiam trovato la roccia perfettamente asciutta. Temperatura ottima.</td>
					</tr>
					<tr>
						<th>Difficoltà Percepita</th>
						<td>F (Oracolo)</td>
					</tr>
					<tr>
						<th>Giudizio Soggettivo</th>
						<td>
							<img class="star" src="../assets/star.png">
							<img class="star" src="../assets/star.png">
							<img class="star" src="../assets/star.png">
							<img class="star" src="../assets/star.png">
							<img class="star" src="../assets/emptystar.png"> (Oracolo)
						</td>
					</tr>
					<tr>
						<th>Materiale</th>
						<td>Imbrago, casco e kit da ferrata.</td>
					</tr>
					<tr>
						<th>Orientamento</th>
						<td>La ferrata è ottimamente segnata e avvicinamento e discesa sono indicati dai cartelli, tuttavia nella zona dell'attacco e della discesa è possibile sbagliarsi: seguire in generale la traccia più evidente e attenersi a ciò che descrive la relazione e non ci dovrebbero esserci problemi.</td>
					</tr>
					<tr>
						<th>Chiodatura</th>
						<td>Cavo e fittoni su tutta la ferrata, compresi i tratti facili. Ristrutturata e riaperta nel 2022.</td>
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
					
					<div class="story-block ferrata">
						Il meteo nella parte avanti della settimana non sarà il massimo, allora decidiamo di andare in Medale di Martedì sera, anche se poco prima aveva piovuto. Di bagnato neanche traccia, saliamo rapidi la ferrata e siamo in cima dove ci ricongiungiamo con il Fra Mariani e ci facciamo una pausa tra birrette, snack e due balle. Per variare un po' scendiamo verso Laorca, da dove dopo aver salutato Fra percorriamo la strada fino alla macchina.
					</div>
				</div>
			</div>
		
			<!-- Foto -->
			<div id="foto" class="foto hidden">
				<h3>Foto</h3>
				
				<a href="https://photos.app.goo.gl/gpLdTqknU7c2ed9F8" target="_blank" rel="noopener noreferrer">
					<img src="../assets/googlephotos.png">
					<p>Google Photos Album</p>
				</a>
			</div>
		</div>
	
		<a href="../">
			<div class="back ferrata">
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
