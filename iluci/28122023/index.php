<?php
	$title = "Coltignone - Traversata Regismondo-Coltignone";
    $track = "28122023.gpx";
	$day = "28-12-2023, Giovedì";
	$participants = "<img class=\"person\" src=\"../assets/people/claudiog.png\"> Claudio G, <img class=\"person\" src=\"../assets/people/oracolo.png\"> Oracolo";
	$path = "../relazioni/29_2_3/coltignone-traversataalta/";
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
						<td>Giornata uggiosa e umida, anche se salendo a tratti faceva molto caldo. Un po' di pioviggine sulla discesa non ha disturbato per niente. La roccia sulla traversata è per lo più da verificare, con brevi tratti dove è solida. Il terreno è assolutamente da valutare in ogni sezione.</td>
					</tr>
					<tr>
						<th>Difficoltà Percepita</th>
						<td>PD (Oracolo)</td>
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
						<td>Imbrago, casco, kit da ferrata. Uno spezzone di corda può essere utile se l'attrezzatura fosse in cattive condizioni o nel caso qualcuno fosse inesperto.</td>
					</tr>
					<tr>
						<th>Orientamento</th>
						<td>La traversata è ben segnata, ma è assolutamente necessario avere un ottimo senso dell'orientamento e magari studiare preventivamente la zona (che è in alta qualità sul satellite di Google Maps). Perdersi in queste zone potrebbe avere brutte conseguenze.</td>
					</tr>
					<tr>
						<th>Chiodatura</th>
						<td>Ottima catena a resinati e maglie grosse, più qualche vecchissima fettuccia assolutamente inaffidabile in pochi tratti senza catena.</td>
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
						Non saprei come classificare questo giro, c'è un po' di tutto. Partiamo da Laorca e all'attacco del sentiero per l'Antimedale troviamo la Laura e Simone, che andranno a fare la Miriam. Per raggiungere la cima del San Martino percorriamo una variante recentemente ripulita, di cui non voglio dare troppe informazioni perchè esula dal giro e richiede decisa competenza alpinistica. Proseguiamo verso il Regismondo, dove ci riassettiamo sotto la catena, verticale ma in buone condizioni; prima di salire in cima al Regismondo prendiamo a sinistra un'ottima traccia in piano che ci porta sul versante Nord, dove scendiamo alla forcella col famoso canalone che si vede bene dal Moregallo, tramite una catena a dir poco vitale visto che la discesa è davvero delicata, ma grazie alla catena si scenderà senza grossi problemi. Da lì fino a salire è tutto un alternarsi di nastri rossi e catene: nastri rossi fino alla vetta del San Vittore, catena per scendere, poi nastri rossi sulle cenge delicate fino a una catena bella verticale che porta fondamentalmente sulla cima del Coltignoncino, erbosa e molto bella. Proseguiamo tramite la catena fino al Coltignone, questo tratto l'avevo già percorso Venerdì prima di Natale quindi avevo già un'idea, e così facendo siamo in cima in circa 4 ore e mezza. Devo dire molto soddisfatto, giro andato tutto liscio e molto godibile con qualche punta di attenzione, e finalmente sono salito sul Coltignoncino che volevo farlo da anni. Discesa Resinelli-Calolden rilassata, con tappa da Sel dove ci concediamo un ottimo pranzo a prezzi modici.
					</div>
				</div>
			</div>
		
			<!-- Foto -->
			<div id="foto" class="foto hidden">
				<h3>Foto</h3>
				
				<a href="https://photos.app.goo.gl/SXjP6cw75tbehgk66" target="_blank" rel="noopener noreferrer">
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
