<?php
	$title = "Corma di Machaby - Via Lo Dzerby";
    $track = "02122023.gpx";
	$day = "02-12-2023, Sabato";
	$participants = "<img class=\"person\" src=\"../assets/people/henry.png\"> Henry, <img class=\"person\" src=\"../assets/people/oracolo.png\"> Oracolo, <img class=\"person\" src=\"../assets/people/papa.png\"> Papa, <img class=\"person\" src=\"../assets/people/tania.png\"> Tania, <img class=\"person\" src=\"../assets/people/walterino.png\"> Walterino";
	$path = "../relazioni/9_3_5/lodzerby/";
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
						<td>Giornata fredda e ventosa, ma a parte il tratto iniziale siamo sempre stati al sole il che ha reso la scalata godibile. La roccia in via è solida ma leggermente scivolosa, forse a causa delle ripetizioni o anche magari per la bassa quota, il che rende la roccia un po' così.</td>
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
						<td>Imbrago, scarpette, casco, 14 rinvii. Protezioni veloci e cordini abbastanza inutili, la roccia non gli accoglie molto e comunque la chiodatura è sufficiente; tutte le soste son collegate.</td>
					</tr>
					<tr>
						<th>Orientamento</th>
						<td>Facile purchè non si sbagli l'avvicinamento, la via è indicata da una targhetta e in via è impossibile sbagliare. La discesa è intuitiva nella prima parte e banale nella seconda.</td>
					</tr>
					<tr>
						<th>Chiodatura</th>
						<td>Perfetta a fix leggermente distanti solo dove è più facile. Tutte le soste sono su due fix con catena.</td>
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
						C'è brutto ovunque quindi decidiamo di andare a Arnad, unico posto delle alpi dove dovrebbe esserci bel tempo. All'ultimo si aggiunge anche la Tania, ci troviamo a Nibionno e partiamo direzione val d'Aosta. Arrivati là non è bello come credevo anche se la pioggia è un lontano ricordo, e post colazione all'osteria Arcaden si parte per il breve e comodo avvicinamento, fino alla base delle vie. Avremo davanti guida e cliente sullo Dzerby, dove saliremo io e Walterino, mentre gli altri 3 vanno su Mitico Vento, ma a parte all'attacco dove siamo fianco a fianco, per il resto non ci vedremo molto. La via Lo Dzerby è facile con qualche passaggino più pepato sempre ben protetto, su roccia un po' scivolosa ma alla fine divertente. Usciamo in cima, dove scambiamo due balle e due foto e aspettiamo l'arrivo degli altri all'ultimo sole, trovando nel frattempo un paio di soste dove potrebbero uscire. Alla fine quando va via il sole vediamo la Tania, poi Henry fa l'ultimo tiro e arrivano in cima. La discesa sarà comoda (tranne il primo pezzo un po' da arrangiarsi) fino al paese, dove io vado a prendere la macchina e raggiungo gli altri al ristorante, dove dopo esserci cambiati mangeremo con gusto la famosa merenda Valdostana.
					</div>
				</div>
			</div>
		
			<!-- Foto -->
			<div id="foto" class="foto hidden">
				<h3>Foto</h3>
				
				<a href="https://photos.app.goo.gl/JDfUrWAgVxg2o6JN6" target="_blank" rel="noopener noreferrer">
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
