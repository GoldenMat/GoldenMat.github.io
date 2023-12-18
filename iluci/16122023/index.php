<?php
	$title = "Valbione - Cascata di Sinistra e Flusso";
    $track = "16122023.gpx";
	$day = "16-12-2023, Sabato";
	$participants = "<img class=\"person\" src=\"../assets/people/gabriele.png\"> Gabriele, <img class=\"person\" src=\"../assets/people/oracolo.png\"> Oracolo";
	$path = "../relazioni/28_3_1/valbione-sinistra-flusso/";
	$path1 = "../relazioni/28_3_1/valbione-sinistra/";
	$path2 = "../relazioni/28_3_1/valbione-flusso/";
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
	
		<div class="banner-container"><img class="banner" src="../assets/banner/cascata.png"></div>
		
		<!-- Descrizione -->
		<?php
		include $path . 'descrizione.php';
		?>
		
		<div class="picker-bar bordered-sides">
			<div class="picker-choice"><div class="picker button cascata selected" id="relazione-button">Relazione</div></div>
			<div class="picker-choice"><div class="picker button cascata" id="condizioni-button">Condizioni</div></div>
			<div class="picker-choice"><div class="picker button cascata" id="racconti-button">Racconti</div></div>
			<div class="picker-choice"><div class="picker button cascata" id="foto-button">Foto</div></div>
		</div>
		
		<div class="content">
		
			<!-- Relazione -->
			<div id="relazione" class="relazione">
				<div class="picker-bar">
					<div class="picker-choice"><div class="picker button cascata selected" id="relazione1-button">Cascata di Sinistra</div></div>
					<div class="picker-choice"><div class="picker button cascata" id="relazione2-button">Flusso</div></div>
				</div>
			
				<div id="relazione1" class="relazione1">
					<?php
					include $path1 . 'index.php';
					?>
				</div>
				
				<div id="relazione2" class="relazione2 hidden">
					<?php
					include $path2 . 'index.php';
					?>
				</div>
			</div>
			
			<!-- Condizioni -->
			<div id="condizioni" class="condizioni hidden">
				<h3>Condizioni</h3>
				
				<table class="info cascata">
					<tr>
						<th>Meteo e Condizioni</th>
						<td>Giornata fredda il giusto, meteo sereno. Le cascate erano in buone condizioni, lavorate dalle numerose ripetizioni.</td>
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
							<img class="star" src="../assets/emptystar.png"> (Oracolo)
						</td>
					</tr>
					<tr>
						<th>Materiale</th>
						<td>NDA per arrampicata su ghiaccio (imbrago, casco, scarponi pesanti, ramponi, 2 picozze tecniche, almeno 10 viti con relativo rinvio). Necessarie mezze corde da 60m se non si volesse spezzare calate.</td>
					</tr>
					<tr>
						<th>Orientamento</th>
						<td>Banale, basta seguire la valle e le cascate sono ben visibili.</td>
					</tr>
					<tr>
						<th>Chiodatura</th>
						<td>Cordini di calata sulla cascata di Sinistra, chiodi e fix con catena su Flusso.</td>
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
					
					<div class="story-block cascata">
						Prima uscita della stagione di ghiaccio, puntiamo a Valbione con Gabri dopo aver preso in ipotesi anche la Val Malenco. Parcheggiamo sottoterra a 4€ vicino alla seggiovia, che scopriamo tra l'altro molto comodo, dove già intravediamo diverse cordate, ma sull'avvicinamento saremo comunque soli. O per lo meno, fino all'ultimo tratto, dove ci sono diverse persone sia davanti che dietro, infatti giunti alle cascate la situazione si palesa: c'è veramente parecchia gente su tutte la cascate meno quella di sinistra. Puntiamo allora a quella, dove con noi salgono anche i ragazzi del soccorso della Val Camonica in aggiornamento, ma comunque riusciremo a seguire una linea indipendente sulla destra. Torniamo poi verso la cascata appena a destra, Flusso, dove sembra possiamo scalare la parte destra, e scambiamo due parole con due matti toscani venuti lì in giornata. Evidente che ci sia qua mezza Italia anche perchè le condizioni son sicure, a differenza di altri posti. Mentre saliamo ben due cordate si piazzano alla nostra sinistra, con Gabri che gli bestemmierà un po' a dietro perchè costretto così a un'uscita un po' delicata. Una bella doppia lunga e ci leviamo dalle balle per poi tornare con calma fino alla seggiovia.
					</div>
				</div>
			</div>
		
			<!-- Foto -->
			<div id="foto" class="foto hidden">
				<h3>Foto</h3>
				
				<a href="https://photos.app.goo.gl/WMtv678cbiBvSdaA8" target="_blank" rel="noopener noreferrer">
					<img src="../assets/googlephotos.png">
					<p>Google Photos Album</p>
				</a>
			</div>
		</div>
	
		<a href="../">
			<div class="back cascata">
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
