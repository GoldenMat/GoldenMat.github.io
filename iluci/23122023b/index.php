<?php
	$title = "Moregallo - Cresta Osa";
    $track = "23122023b.gpx";
	$day = "23-12-2023, Sabato";
	$participants = "<img class=\"person\" src=\"../assets/people/bea.png\"> Bea, <img class=\"person\" src=\"../assets/people/dello.png\"> Dello, <img class=\"person\" src=\"../assets/people/martab.png\"> Marta B, <img class=\"person\" src=\"../assets/people/oracolo.png\"> Oracolo, <img class=\"person\" src=\"../assets/people/papa.png\"> Papa, <img class=\"person\" src=\"../assets/people/rosa.png\"> Rosa, <img class=\"person\" src=\"../assets/people/teo.png\"> Teo";
	$path = "../relazioni/11_1_9/crestaosa/";
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
						<td>Serata calda, fin troppo per il periodo. In cima freschino ma niente di eccessivo. La roccia in via è ottima, con l'eccezione del penultimo tiro.</td>
					</tr>
					<tr>
						<th>Difficoltà Percepita</th>
						<td>F (Oracolo)</td>
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
						<td>NDA per alpinismo su roccia (imbrago, casco, 4-6 rinvii, cordini). Eventualmente qualche friend medio, anche se clessidre e spuntoni abbondano. Scarpette non necessarie (o eventualmente toglierle dopo il camino) e nel caso in cui il primo di cordata abbia sufficiente esperienza una mezza corda è sufficiente.</td>
					</tr>
					<tr>
						<th>Orientamento</th>
						<td>I sentieri son tutti segnati e la via è super logica, nel dubbio rimanere sul filo di cresta che non si sbaglia.</td>
					</tr>
					<tr>
						<th>Chiodatura</th>
						<td>Mancante su tutta la via, soste comprese a parte 3 (di cui una poco utile). Comunque visto la natura della via non c'è bisogno di niente che non offra già la roccia.</td>
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
						Crestina dell'antivigilia, la Bea parte prima con un amico e la Tania pacca all'ultimo, rimaniamo io, Fra e Teo sull'avvicinamento. Superiamo diverse persone e arriviamo alla deviazione finale dove troviamo Bea e socio, quindi andiamo all'attacco. La situazione si palesa all'attacco: c'è un bordello che manco lo sbarco in Normandia, tipo 5 persone sul pilastro e 10 che ancora devono partire. Io mi cambio rapido e sparo su in cima al torrione schivando gente a destra e a manca, poi aspetto per almeno una quindicina di minuti che arrivino anche gli altri che giustamente si sono legati. Qualche foto poi ripartiamo, Fra e Teo fanno conserva per velocizzare e così facendo lasceremo un po' indietro la Bea e socio, ma tanto ci ritroveremo in cima. La parte centrale siamo solo noi 3 fino al tiro finale, dove ribecchiamo i seregnesi che stanno uscendo dalla via. Arriviamo in cima dove troviamo tutti quelli di Seregno, più Dello con Marta e Rosa saliti dal sentiero. Festeggiamenti con vin brulè, spumanti, pandoro, etc. etc. Alla fine scenderemo dalle catene e diretti giù da Sambrosera, senza passare da San Tomaso visto che Henry e Walterone non sono saliti, e comunque agli altri non interessa, oltre al fatto che si è fatto anche un po' tardi.
					</div>
				</div>
			</div>
		
			<!-- Foto -->
			<div id="foto" class="foto hidden">
				<h3>Foto</h3>
				
				<a href="https://photos.app.goo.gl/mQJ1zvtmcX7wKpQG6" target="_blank" rel="noopener noreferrer">
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
