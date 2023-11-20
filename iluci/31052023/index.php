<?php
	$title = "Grignetta - Cresta Segantini";
    $track = "31052023.gpx";
	$day = "31-05-2023, Mercoledì";
	$participants = "<img class=\"person\" src=\"../assets/people/oracolo.png\"> Oracolo";
	$path = "../relazioni/29_2_3/crestasegantini/";
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
	
		<div class="banner-container"><img class="banner" src="../assets/banner/alpinismoroccia.png"></div>
		
		<!-- Descrizione -->
		<?php
		include $path . 'descrizione.php';
		?>
		
		<div class="picker-bar bordered-sides">
			<div class="picker-choice"><div class="picker button roccia selected" id="relazione-button">Relazione</div></div>
			<div class="picker-choice"><div class="picker button roccia" id="condizioni-button">Condizioni</div></div>
			<div class="picker-choice"><div class="picker button roccia" id="racconti-button">Racconti</div></div>
			<div class="picker-choice"><div class="picker button roccia" id="foto-button">Foto</div></div>
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
						<td>Serata soleggiata nonostante le previsioni fossero dubbie, le nuvole si son tenute sempre lontane. La roccia in Segantini è ottima, con dei tratti facili dove fare un po' più di attenzione.</td>
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
							<img class="star" src="../assets/star.png"> (Oracolo)
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
						<td>Diversi resinati sulla cresta e qualche rado chiodo vecchio.</td>
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
						Nonostante ho una mezza proposta di andare al Due Mani con Nicholas e il Biondo un po' perchè mi libero più tardi e un po' perchè ho ancora un po' di tosse preferisco farmi un giro solitario in Grignetta. Parto senza grosse pretese visto che il meteo è dubbio con l'idea di arrivare al Colle Valsecchi e poi si vedrà. Salendo noto che il meteo è molto buono, c'è un ottimo sole, allora parto in Segantini col brutto tempo che si avvicinerà solo verso la fine, ma comunque non arriverà mai in Grignetta. In tutto il giro trovo solo dei ragazzi che salgono dalla zona bassa Cermenati con sacchi a pelo, presumo per passare una notte al bivacco, per il resto non vedo anima viva, eccetto un camoscio da parte alla croce quando arrivo in cima, prima volta che mi capita in vari anni che vado su e giù da questa montagna.
					</div>
				</div>
			</div>
		
			<!-- Foto -->
			<div id="foto" class="foto hidden">
				<h3>Foto</h3>
				
				<a href="https://photos.app.goo.gl/92XGuQiTYnvEi1Uh7" target="_blank" rel="noopener noreferrer">
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
