<?php
	$title = "Pizzo Farno - Anello Sardegnana-Laghi Gemelli";
    $track = "21102023.gpx";
	$day = "21-10-2023, Sabato";
	$participants = "<img class=\"person\" src=\"../assets/people/oracolo.png\"> Oracolo";
	$path = "../relazioni/29_1_3/farno-sardegnanagemelli/";
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
						<td>Giornata brutta, ha piovuto tutto il tempo, anche molto forte nella zona del Passo di Sardegnana. Un po' di vento sulla cresta del Pizzo Farno, ma niente di eccessivo. I sentieri sembrano ben curati specie nella zona dei Laghi Gemelli, ma difficile da dire in queste condizioni.</td>
					</tr>
					<tr>
						<th>Giudizio Soggettivo</th>
						<td>
							<img class="star" src="../assets/star.png">
							<img class="star" src="../assets/star.png">
							<img class="star" src="../assets/emptystar.png">
							<img class="star" src="../assets/emptystar.png">
							<img class="star" src="../assets/emptystar.png"> (Oracolo)
						</td>
					</tr>
					<tr>
						<th>Orientamento</th>
						<td>Non sempre immediato, la prima parte del giro è abbastanza da cercare anche se la traccia c'è sempre. Molto più facile e battuta la seconda parte.</td>
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
						Non c'è nessuno, Carlo compreso, allora decido di farmi un giro zona Laghi Gemelli dove non son mai stato, so che ha piovuto parecchio e il meteo sembra dare nuvoloso, quindi mi porto a Carona e inizio a salire verso il lago di Sardegnana. Il sentiero è particolarmente ripido ma si passa nonostante il bagnato, fino al bel lago dove vedo un tizio dell'enel e inizia a piovere a dirotto, e andrà avanti per parecchio tempo. Salendo verso il passo a circa metà si perde il sentiero, e tutto ok se non fosse che il vallone è pieno di placche scivolose, quindi con qualche bestemmia tra pioggia a dirotto e vento riesco finalmente ad arrivare al passo, parecchio zuppo ma ancora energico. Scendo sul versante oppoosto e salgo in breve al passo d'Aviasco, da cui si segue una facile dorsale (ben segnata) che porta fino all'anonimo Monte Aviasco, e poi al passo di Valsanguigno Nord, dove a parte il vento non ci sono problemi. Costeggio le cime per le rocce rosse della val Sanguigno fino al pendio che porta in cima al Pizzo Farno, dove finalmente smette un attimino e soprattutto c'è una cima un po' più marcata. Scendo ai Laghi Gemelli per un sentiero che è diventato un fiume, e tenendomi sul lato Est del lago superando qualche guado anche abbastanza grosso, arrivo fino alla diga e al rifugio, che è molto più grande di quello che pensavo, dove mi fermo ad asciugarmi un attimo sotto la tettoia, senza entrare. Da qui scendo tramite sentiero sempre easy fino a Carona, passando prima da altri due laghi, poi per un sentiero nel bosco a tornanti davvero eterno, che dura molto più di quello che pensavo. Arrivo alla macchina bello lavato, sicuramente il giro sarà da rifare in condizioni più normali.
					</div>
				</div>
			</div>
		
			<!-- Foto -->
			<div id="foto" class="foto hidden">
				<h3>Foto</h3>
				
				<a href="https://photos.app.goo.gl/CYY9L964vXRzEA8L8" target="_blank" rel="noopener noreferrer">
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
