<?php
	$title = "Vandea - Materia Esotica nel Mondo Quantistico";
    $track = "05112023.gpx";
	$day = "05-11-2023, Domenica";
	$participants = "<img class=\"person\" src=\"../assets/people/gabriele.png\"> Gabriele, <img class=\"person\" src=\"../assets/people/oracolo.png\"> Oracolo";
	$path = "../relazioni/10_3_10/vandea-materiaesotica/";
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
						<td>Giornata serena e abbastanza calda. La roccia purtroppo era parecchio bagnata, causa le piogge dei giorni precedenti.</td>
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
							<img class="star" src="../assets/emptystar.png">
							<img class="star" src="../assets/emptystar.png"> (Oracolo)
						</td>
					</tr>
					<tr>
						<th>Materiale</th>
						<td>12 rinvii, scarpette, imbrago, casco, moschettoni e cordini per soste. Qualche cordino può essere utile per piante e spuntoni, ma non indispensabile.</td>
					</tr>
					<tr>
						<th>Orientamento</th>
						<td>Non immediato ma ben indicato da cartelli. Una volta individuati l'attacco è sufficiente fare attenzione a non sbagliare via.</td>
					</tr>
					<tr>
						<th>Chiodatura</th>
						<td>Sistematica a golfari, soste sempre ottime.</td>
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
						Piove da tutta settimana, compresa la notte prima, ma comunque facciamo un tentativo a Vandea con Gabri che non è mai stato.  Andiam su con la sua macchina e partiamo con la singola di Gabri direzione Materia Esotica. Parecchio bagnato e erba sull'avvicinamento, e arrivati all'attacco ci accorgiamo che il primo tiro (escluso quello sotto la cengia) è bello bagnato, Gabri lo tirerà fuori con qualche sacramento, e aprendosi due dita proprio all'inizio dove gli passo subito un cerotto. Sale comunque e ci alterniamo fino alla fine, con qualche fatica per il dito ferito ma senza grossi problemi. Finita la via andiamo avanti verso l'Eden, salendo un po' a caso anche se la via fondamentalmente si risolve in un tiro, Gabri scalerà con le scarpe d'avvicinamento, fino all'uscita. Dato appunto che gli fa male il dito scendiamo senza fare Brentalone, tra l'altro ho evitato di relazionare l'Eden sia perchè non siamo sicuri di quale via abbiamo fatto, sia perchè non ricordo bene i dettagli.
					</div>
				</div>
			</div>
		
			<!-- Foto -->
			<div id="foto" class="foto hidden">
				<h3>Foto</h3>
				
				<a href="https://photos.app.goo.gl/GJN7x1QeBDc5Lqsk7" target="_blank" rel="noopener noreferrer">
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
