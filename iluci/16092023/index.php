<?php
	$title = "Grignetta - Cresta Segantini";
    $track = "16092023.gpx";
	$day = "16-09-2023, Sabato";
	$participants = "<img class=\"person\" src=\"../assets/people/carlo.png\"> Carlo, <img class=\"person\" src=\"../assets/people/fra.png\"> Fra, <img class=\"person\" src=\"../assets/people/jenna.png\"> Jenna, <img class=\"person\" src=\"../assets/people/oracolo.png\"> Oracolo";
	$folder = "/relazioni/29_2_3/crestasegantini/";
	$path = ".." . $folder;
?>

<head>
	<link rel="stylesheet" href="../style/style.css">
	<script type="text/javascript" src="../script/script.js"></script>
	<link rel="icon" type="image/x-icon" href="../assets/icon.png">
	<title>I Luci!
		<?php echo $title; ?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<div class="container">

		<div class="banner-container"><img class="banner" src="../assets/banner/alpinismoroccia.png"></div>

		<!-- Descrizione -->
		<?php
		include $path . 'descrizione.php';
		?>

		<div class="picker-bar">
			<div class="picker-choice">
				<div class="picker button roccia" id="relazione-button">Relazione</div>
			</div>
			<div class="picker-choice">
				<div class="picker button roccia" id="condizioni-button">Condizioni</div>
			</div>
			<div class="picker-choice">
				<div class="picker button roccia" id="racconti-button">Racconti</div>
			</div>
			<div class="picker-choice">
				<div class="picker button roccia" id="foto-button">Foto</div>
			</div>
		</div>

		<div class="content">

			<!-- Relazione -->
			<?php
			include $path . 'index.php';
			?>
		
			<!-- Condizioni -->
			<div id="condizioni" class="condizioni hidden">
				<h3>Condizioni</h3>
				
				<table class="info roccia">
					<tr>
						<th>Meteo e Condizioni</th>
						<td>Giornata nebbiosa, ma senza freddo, comunque ci son stati pochi momenti con visibilità. La roccia in Segantini è ottima, con dei tratti facili dove fare un po' più di attenzione.</td>
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
						<td>Corda da 40-50m, imbrago, casco, qualche rinvio e moschettone. Eventualmente materiale da calata.</td>
					</tr>
					<tr>
						<th>Orientamento</th>
						<td>La Direttissima e il canale Angelina, sono facili da seguire, seguire la traccia più evidente. La cresta Segantini hai dei bolli argento, frutto di una copertura maldestra di alcuni bolli rossi aggiunti qualche anno fa, consigliabile seguire accuratamente la relazione per evitare di perdersi o finire su varianti più impegnative. La cresta Cermenati è impossibile da sbagliare, basta scendere.</td>
					</tr>
					<tr>
						<th>Chiodatura</th>
						<td>Diversi resinati sulla cresta, qualche fix e qualche rado chiodo vecchio.</td>
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
					
					<div class="story-block roccia">
						Convinco Fra e la Jenna a venire a farsi un giro in Segantini, la giornata non sarà il top ma fa niente. Si aggrega anche il Carlo, partenza rilassata, e via senza fretta fino all'attacco, nell'Angelina facciamo il sentiero solito anzichè il mio solito avvicinamento e facciamo soltanto l'ultima piccola scorciatoia per giungere direttamente all'attacco. Parto sulla via alternandomi col Carlo, mentre Fra ci seguirà a ruota con Jenna dietro. Proseguiamo con calma, la nebbia ci fa da compagnia sempre ma la vista si aprirà a tratti con scorci anche molto belli, come nella lingua. Arriviamo in cima dopo pranzo, che per un quarto d'ora sarà soltanto nostra, dove ci concediamo un po' di relax. Solita discesa in Cermenati, per poi finire con pizza e spritz/birre al forno, dove decido di comprare anche il nuovo libro del Ghiaccio delle Orobie che il Geppe aveva lì in vetrina.
					</div>
				</div>
			</div>
		
			<!-- Foto -->
			<div id="foto" class="foto hidden">
				<h3>Foto</h3>
				
				<a href="https://photos.app.goo.gl/bhCFDrKStnnUyYjU8" target="_blank" rel="noopener noreferrer">
					<img src="../assets/googlephotos.png">
					<p>Google Photos Album</p>
				</a>
			</div>
		</div>
	
		<a href="../">
			<div class="back roccia">
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
