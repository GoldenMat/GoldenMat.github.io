<?php
	$title = "Buco del Piombo - Via Molteni-Valsecchi";
    $track = "25112023.gpx";
	$day = "25-11-2023, Sabato";
	$participants = "<img class=\"person\" src=\"../assets/people/maraja.png\"> Maraja, <img class=\"person\" src=\"../assets/people/oracolo.png\"> Oracolo";
	$path = "../relazioni/11_1_7/moltenivalsecchi/";
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
	
		<div class="banner-container"><img class="banner" src="../assets/banner/falesia.png"></div>
		
		<!-- Descrizione -->
		<?php
		include $path . 'descrizione.php';
		?>
		
		<div class="picker-bar bordered-sides">
			<div class="picker-choice"><div class="picker button falesia selected" id="relazione-button">Relazione</div></div>
			<div class="picker-choice"><div class="picker button falesia" id="condizioni-button">Condizioni</div></div>
			<div class="picker-choice"><div class="picker button falesia" id="racconti-button">Racconti</div></div>
			<div class="picker-choice"><div class="picker button falesia" id="foto-button">Foto</div></div>
		</div>
		
		<div class="content">
		
			<!-- Relazione -->
			<?php
			include $path . 'index.php';
			?>
			
			<!-- Condizioni -->
			<div id="condizioni" class="condizioni hidden">
				<h3>Condizioni</h3>
				
				<table class="info falesia">
					<tr>
						<th>Meteo e Condizioni</th>
						<td>Giornata soleggiata ma non eccessivamente calda, l'esposizione favorevole ci ha protetto dal forte vento da Nord che ha spazzato altre montagne delle nostre parti. La roccia in via è solida grazie alle ripetizioni, ma un po' sporca a causa della vegetazione.</td>
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
							<img class="star" src="../assets/emptystar.png">
							<img class="star" src="../assets/emptystar.png"> (Oracolo)
						</td>
					</tr>
					<tr>
						<th>Materiale</th>
						<td>Imbrago, casco, scarpette, 14 rinvii ed eventualmente un paio di friend medi per L2. Materiale per scendere in doppia nel caso si decidesse di farlo.</td>
					</tr>
					<tr>
						<th>Orientamento</th>
						<td>Facile, la zona è piena di cartelli e i sentieri sono evidenti. In via attenzione a non prendere varianti, decisamente più impegnative.</td>
					</tr>
					<tr>
						<th>Chiodatura</th>
						<td>Ottima a fix, soste su fix e catena che consentono facilmente di scendere in doppia.</td>
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
					
					<div class="story-block falesia">
						C'era in ballo una mezza idea di tornare a fare la Savini al San Martino, ma poi io e Nicholas ripieghiamo volentieri sul Buco del Piombo, posto nuovo per entrambi. L'avvicinamento è comodissimo, e quasi all'attacco incrociamo due ragazzi che vogliono fare il Diedro Scarabelli, quindi noi optiamo per l'altra classica, la Molteni-Valsecchi, anche per evitare di darci fastidio tra cordate. Alla partenza sembra manchino i fix, ma poi salendo si trovano: alterniamo fino in cima, con qualche perplessità su certi punti (la via è un po' sporca e non sempre si vedono i fix). Siamo tutto il tempo al sole, e il vento è debole su questo versante e non da fastidio. Abbandoniamo l'idea di scendere in doppia, anche perchè Nicholas ha male a un piede, quindi scendiamo dal sentiero che è molto comodo ma un po' scivoloso sotto le foglie, fino a ritornare all'attacco per recuperare il materiale. Lì troviamo gli altri due che si sono calati da L2, la parete è ormai in ombra anche se non è tardi (l'esposizone a Est è un po' una fregatura), quindi salgo giusto L1 del Diedro Scarabelli per fare un po' di movimento ancora, e poi mi faccio calare in moulinette. Arriviamo alla macchina di primo pomeriggio, con tutto il tempo per dedicarci al terzo tempo presso un baretto sul lago di Pusiano devo dire molto buono, ottima scoperta.
					</div>
				</div>
			</div>
		
			<!-- Foto -->
			<div id="foto" class="foto hidden">
				<h3>Foto</h3>
				
				<a href="https://photos.app.goo.gl/EuVu9qindQ9QJkvJ9" target="_blank" rel="noopener noreferrer">
					<img src="../assets/googlephotos.png">
					<p>Google Photos Album</p>
				</a>
			</div>
		</div>
	
		<a href="../">
			<div class="back falesia">
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
