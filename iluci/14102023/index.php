<?php
	$title = "Sass Becchè - Via Normale";
    $track = "14102023.gpx";
	$day = "14-10-2023, Sabato";
	$participants = "<img class=\"person\" src=\"../assets/people/francescom.png\"> Francesco M, <img class=\"person\" src=\"../assets/people/giorgio.png\"> Giorgio, <img class=\"person\" src=\"../assets/people/maraja.png\"> Maraja, <img class=\"person\" src=\"../assets/people/oracolo.png\"> Oracolo";
	$path = "../relazioni/15_3_3/sassbecche/";
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
						<td>Giornata dal meteo variabile, soleggiato la mattina, poi nebbia e un po' di freddo sulla cresta, ma mai brutto. La roccia sulla via è buona, se considerata la sua scarsa frequentazione. Porre più attenzione durante l'ultima parte dell'avvicinamento.</td>
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
						<td>Di base da escursionismo, eventualmente portare una corda, qualche rinvio, protezione veloce e qualche cordone (da abbandono) se non si avesse confidenza con le difficoltà alpinistiche. Considerare che legandosi i tempi si dilatano.</td>
					</tr>
					<tr>
						<th>Orientamento</th>
						<td>Impegnativo su tutta la gita, i sentieri sono segnati ma non immediati da trovare, e dopo il bivacco Garzonedo non ci sono più segnali evidenti. Se si individua la via giusta non è complicato, anche abbastanza intuitivo per certi versi, ma perdersi non è difficile e può essere molto pericoloso.</td>
					</tr>
					<tr>
						<th>Chiodatura</th>
						<td>Assente su tutta la via</td>
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
						Ho voglia di una camminatona e la propongo al Biondo, la mia idea era Pizzo di Prata ma lui rilancia con il Sass Becchè, che non è lontano in realtà, e forse anche più carino. Siamo io, lui, Maraja e Giorgio, e partiamo la mattina presto facendo il permesso delle strade agro-silvo-pastorali del comune di Villa di Chiavenna, fino al punto di partenza. Partiamo con le frontali un po' in discesa (sarà da rifare al ritorno), fino a incrociare il fiume e risalire al primo alpeggio, da cui si prende la lunga val Aurosina fino al bivacco Garzonedo. Qui finisce il sentiero e ci sono solo radi ometti, ma la via è evidente: un primo canale, poi un traverso, un secondo canale, delle cenge e la cresta finale. Niente di eccessivamente difficile ma lungo e totalmente fuori sentiero il che richiede di procedere con calma per ore, ma comunque arriveremo in cima anche se con un po' di nebbia; il materiale portato non lo useremo. Dopo un pochino di pausa in cima scendiamo con attenzione, disarrampicando cresta e canali, devo dire abbastanza stancante fino al bivacco, non tanto per la difficoltà quanto per il tipo di terreno.
					</div>
				</div>
			</div>
		
			<!-- Foto -->
			<div id="foto" class="foto hidden">
				<h3>Foto</h3>
				
				<a href="https://photos.app.goo.gl/BdxopK2gsLm9LcdM8" target="_blank" rel="noopener noreferrer">
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
