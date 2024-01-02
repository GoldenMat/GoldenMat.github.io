<?php
	$title = "Monte Cabianca - Canale Nord";
    $track = "27122023.gpx";
	$day = "27-12-2023, Mercoledì";
	$participants = "<img class=\"person\" src=\"../assets/people/carlo.png\"> Carlo, <img class=\"person\" src=\"../assets/people/oracolo.png\"> Oracolo";
	$path = "../relazioni/29_1_3/cabianca-canalenord/";
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
	
		<div class="banner-container"><img class="banner" src="../assets/banner/alpinismoghiacciomisto.png"></div>
		
		<!-- Descrizione -->
		<?php
		include $path . 'descrizione.php';
		?>
		
		<div class="picker-bar bordered-sides">
			<div class="picker-choice"><div class="picker button ghiaccio selected" id="relazione-button">Relazione</div></div>
			<div class="picker-choice"><div class="picker button ghiaccio" id="condizioni-button">Condizioni</div></div>
			<div class="picker-choice"><div class="picker button ghiaccio" id="racconti-button">Racconti</div></div>
			<div class="picker-choice"><div class="picker button ghiaccio" id="foto-button">Foto</div></div>
		</div>
		
		<div class="content">
		
			<!-- Relazione -->
			<?php
			include $path . 'index.php';
			?>
			
			<!-- Condizioni -->
			<div id="condizioni" class="condizioni hidden">
				<h3>Condizioni</h3>
				
				<table class="info ghiaccio">
					<tr>
						<th>Meteo e Condizioni</th>
						<td>Giornata bella con ottima visibilità. Vento assente. La neve è presente nella quantità giusta e in traccia è ottima, solo la discesa ha la cresta un po' secca ma non ci sono problemi particolari.</td>
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
							<img class="star" src="../assets/emptystar.png"> (Oracolo)
						</td>
					</tr>
					<tr>
						<th>Materiale</th>
						<td>Ramponi, picozza, casco, imbrago. Uno spezzone di corda può essere utile per i meno esperti, fare attenzione alle scarse possibilità di protezione specie sulla discesa.</td>
					</tr>
					<tr>
						<th>Orientamento</th>
						<td>Banale fino al lago, poi non immediato soprattutto se non ci fosse la traccia, meglio conoscere la zona. Il canale è facile da inviduare, molto meno la discesa.</td>
					</tr>
					<tr>
						<th>Chiodatura</th>
						<td>Assente</td>
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
					
					<div class="story-block ghiaccio">
						Tre giorni di chiusura aziendale, un giorno volevo fare neve e l'occasione arriva di andare a Carona per fare il Canale Nord del Cabianca. Si aggrega il Carlo, partenza mattutina dove sono un po' in ritardo da casa, e a Branzi il Carlo insiste per prendere un caffè. Parcheggiamo in fondo a Carona col Carlo che dice che possiamo salire di più, ma vabbe partiremo da lì tanto cambia poco effettivamente, la strada a salire è a tratti molto ghiacciata, e arriveremo senza ramponi fino alla diga di Fregabolgia ma non senza qualche rischio scivolata qua e là. Ramponati si parte verso il canale, che raggiungiamo e facciamo con picca e bastoncino senza eccessivi problemi, uscendo in cima dopo un signore milanese. Dopo una piccola pausa scendiamo dalla cresta, a tratti anche abbastanza affilata, e imbocchiamo il pendio di discesa di cui faremo il primo pezzo faccia a monte. Arrivati al bivio verso il Calvi salutiamo il tizio e scendiamo al rifugio ritracciando a tratti, dove ci concediamo un bel pranzetto a base di spatzle e strudel molto buoni. Discesa stavolta con ramponi sulla strada, comoda ma lunga, fino a quasi Pagliari. Una volta tolti i ramponi bisogna fare un po' di numeri per evitare di scivolare sull'ultimissimo tratto, cosa che non riesce al Carlo che un paio di culate per terra decide di darle comunque.
					</div>
				</div>
			</div>
		
			<!-- Foto -->
			<div id="foto" class="foto hidden">
				<h3>Foto</h3>
				
				<a href="https://photos.app.goo.gl/18t2znRxJKCxzbXx7" target="_blank" rel="noopener noreferrer">
					<img src="../assets/googlephotos.png">
					<p>Google Photos Album</p>
				</a>
			</div>
		</div>
	
		<a href="../">
			<div class="back ghiaccio">
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
