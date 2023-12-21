<?php
	$title = "Pizzo Gallegione - Via Normale";
    $track = "22102023.gpx";
	$day = "22-10-2023, Domenica";
	$participants = "<img class=\"person\" src=\"../assets/people/francescom.png\"> Francesco M, <img class=\"person\" src=\"../assets/people/giorgio.png\"> Giorgio, <img class=\"person\" src=\"../assets/people/oracolo.png\"> Oracolo";
	$path = "../relazioni/15_1_2/gallegione/";
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
						<td>Giornata dal meteo vario, inizialmente sereno, poi nebbia nella zona della cima e freddo, poi si è riaperto durante la discesa. Durante la notte sono scesi circa 20-30cm di neve nella parte alta, che ha rallentato la salita rispetto al normale.</td>
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
						<th>Orientamento</th>
						<td>Facile fino al Passo Prasgnola, meno evidente la salita alla cima; in ogni caso le difficoltà sono basse e sbagliare non è la fine del mondo.</td>
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
						Non c'è voglia di canyoning tra gli altri, allora vado col Biondo e il Giorgio che mi hanno proposto il Gallegione, con qualche dubbio a causa della neve della notte, infatti decido di mettere gli scarponi invernali e si rivelerà la scelta giusta. Partiamo dopo aver fatto colazione a Mastai su una comoda strada, vedendo la val Bondasca incrostata di neve e ghiaccio, e tagliando troviamo un punto con albero caduto che ci fa tribulare un po'. Da lì fino agli alpeggi no problem, anzi ci mettiamo meno di quanto pensavo, fino ai prati sopra gli alpeggi dove comincia la prima neve, e notiamo che ne ha fatta di più di quella che pensavamo. Io e Fra tra l'altro siamo pure senza ramponi, ma essendo neve fresca non avremo particolari problemi. Saliamo fino al tratto con le catene prima del passo, facile ma dove un bollo vecchio ci manda fuori strada, anche se poi ritroveremo senza grossi problemi la via. Al passo la salita si fa più dolce ma la neve aumenta e dobbiamo andare un po' a intuito e un po' seguendo gli ometti qua e là sommersi, tutto ok alla fine e arriviamo in cima dove tira un po' di vento e c'è poca visibilità, ma niente di eccessivo. Pausetta a una selletta poco sotto la cima per rifocillarci e poi giù diretti verso il passo, rischiando qualche scivolata sulle placche nascoste dalla neve, ma il terreno non è esposto. Scendiamo dalle catene e arrivati sui prati notiamo che la neve si è già sciolta parecchio, infatti la quota si è alzata di un 100-200m minimo, il che ci porta a scendere proprio senza problemi fino agli alpeggi, dove riempio l'acqua a una fontana dove arriva una canna dell'acqua, e poi giù spediti fino a Soglio. Nel fiume vicino al paese noto degli ancoraggi da canyoning, poi scoprirò che era quello che Tiziano aveva proposto di andare a fare mentre ero in Sardegna.
					</div>
				</div>
			</div>
		
			<!-- Foto -->
			<div id="foto" class="foto hidden">
				<h3>Foto</h3>
				
				<a href="https://photos.app.goo.gl/1sWBQaqZaDUDz2Zx6" target="_blank" rel="noopener noreferrer">
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
