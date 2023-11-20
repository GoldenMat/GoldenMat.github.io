<?php
	$title = "Grignetta - Cresta Segantini";
    $track = "24092023.gpx";
	$day = "24-09-2023, Domenica";
	$participants = "<img class=\"person\" src=\"../assets/people/oracolo.png\"> Oracolo";
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
						<td>Giornata bella, si stava molto bene sia all'ombra che al sole. La roccia in Segantini è ottima, con dei tratti facili dove fare un po' più di attenzione.</td>
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
						Torno ancora in Segantini, stavolta da solo, per un duplice motivo: il primo è che la sera devo partire per la Sardegna quindi non ho molto tempo, l'altro è che il Maraja fa il compleanno ai Resinelli e ci si becca la mattina per un saluto. Inoltre per puro caso al Forno incontro anche dei vecchi amici, che andranno su in Grignetta dalla Cermenati. Salgo bello spedito sia in Direttissima che in Angelina, e parto appena dietro un signore anche lui slegato superando rapidamente due cordate tra attacco e primo torrione. Andiamo avanti io e lui facendo tutta la Segantini assieme, si chiama Cesare e penso sia il famoso tizio che la fa due volte che mi aveva detto il Carlo in passato. Arrivati in cima lui farà un secondo giro, mentre io vado su un po' al bivacco a rilassarmi. Giornata spaziale. Scendendo incontro Ste che sapevo voleva fare la traversata alta partendo da Lecco, come suo solito partito un po' "tardi" ma poi una volta che parte viaggia. Arrivo alla macchina presto, tappa ancora al Forno per prendere pane e affettato per il pranzo, e 1h30 per arrivare a casa perchè Lecco era totalmente intasata da un'incidente sul terzo ponte alle 11 di mattina...
					</div>
				</div>
			</div>
		
			<!-- Foto -->
			<div id="foto" class="foto hidden">
				<h3>Foto</h3>
				
				<a href="https://photos.app.goo.gl/t11DAi2v8MyHxfp47" target="_blank" rel="noopener noreferrer">
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
