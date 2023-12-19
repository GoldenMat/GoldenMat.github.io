<?php
	$title = "Zucco dell'Angelone - Anabasi";
    $track = "12112023.gpx";
	$day = "12-11-2023, Domenica";
	$participants = "<img class=\"person\" src=\"../assets/people/carlo.png\"> Carlo, <img class=\"person\" src=\"../assets/people/dello.png\"> Dello, <img class=\"person\" src=\"../assets/people/oracolo.png\"> Oracolo";
	$path = "../relazioni/29_2_1/angelone-anabasi/";
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
						<td>Giornata uggiosa ma non particolarmente fredda. La roccia in via è ottima, un po' unta sui tratti obbligati, con tratti facili erbosi a cui porre più attenzione. Nessuna traccia di neve sulla discesa.</td>
					</tr>
					<tr>
						<th>Difficoltà Percepita</th>
						<td>AD (Oracolo)</td>
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
						<td>NDA per vie sportive (imbrago, casco, scarpette, 10 rinvii, cordini). Qualche misura di friend (0.5-2 BD) può tornare utile sui tratti facili. Con corde da almeno 60m qualche tiro può essere facilmente concatenato.</td>
					</tr>
					<tr>
						<th>Orientamento</th>
						<td>Facile fino al quarto sperone (seguire tracce e cartelli), l'orientamento in via non è banale ma la relazione dovrebbe fugare ogni dubbio. Non immediata la discesa, una volta che si individua la traccia giusta invece basta seguirla fino al parcheggio.</td>
					</tr>
					<tr>
						<th>Chiodatura</th>
						<td>Ottima a resinati, non sempre vicini. Qualche cordone sui tratti più difficili.</td>
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
						All'inizio si pensava di andare in Medale, ma Dello non se la sente quindi reclutiamo anche il Carlo e andiamo in Angelone. Arrivo un po' in ritardo da Dello e andiamo a Barzio dove ci incontriamo col Carlo, subito mentre parcheggio iniziamo male perchè prendo dentro la macchina dietro, per fortuna senza conseguenze. Andiamo fino all'attacco passando dal Terzo Sperone, e saremo da soli su tutta la via. Parte Carlo, al secondo tiro mentre sale ci sono 3 ragazzi che ravanano sulla destra in cerca di Condor, a cui diciamo come rimediare all'errore commesso, poi io e Dello saliamo e si prosegue facendo la variantina pulita al quarto tiro fino al terrazzone. Dello farà la seconda parte, con qualche tribulata nel diedro anche se pensa che lo potrebbe liberare volendo, con un paio di tratti dove andiamo avanti io e Carlo. Arriviamo alla fine, dove incrociamo altre cordate usciti da Condor. Facciamo giusto l'ultimo tiro, poi mettiamo via tutto e si scende nel bosco con qualche perplessità all'inizio, ma poi ritroviamo la solita traccia.
					</div>
				</div>
			</div>
		
			<!-- Foto -->
			<div id="foto" class="foto hidden">
				<h3>Foto</h3>
				
				<a href="https://photos.app.goo.gl/LSotwAZYN6r3Uc147" target="_blank" rel="noopener noreferrer">
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
