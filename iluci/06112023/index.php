<?php
	$title = "Moregallo - Cresta OSA";
    $track = "06112023.gpx";
	$day = "06-11-2023, Lunedì";
	$participants = "<img class=\"person\" src=\"../assets/people/maraja.png\"> Maraja, <img class=\"person\" src=\"../assets/people/oracolo.png\"> Oracolo";
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
		
		<div class="picker-bar">
			<div class="picker-choice"><div class="picker button roccia" id="relazione-button">Relazione</div></div>
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
						<td>Serata limpida e dalle temperature non troppo rigide, in salita son stato in maglietta visto anche il ritmo forte con cui siamo andati. Qualche lampo verso Nord dalla cima ma non ha piovuto finchè non eravamo a casa da un pezzo. La roccia in via come al solito è ottima, a parte il canaletto che porta al ponte di roccia, quindi ordinaria amministrazione.</td>
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
						I giri post lavoro per quanto mi riguarda erano finiti, nonostante ciò mi aggrego a Nicholas che vuole fare una crestina in velocità. Ci troviamo all'imbrunire e in meno di 45 minuti siamo all'attacco, da cui lui parte sparato mentre io mi sistemo un attimo e poi lo seguo a distanza, fondamentalmente rimarrà sempre 5 minuti avanti a me. Tra il buio, il fatto di farla in velocità, e le poche foto alla fine saremo in cima in circa 1h15 o giù di lì, non male. Ritorno più tranquillo, nonostante un fulmine proveniente dal San Primo che non so bene onestamente se era brutto tempo lì o cosa, per quanto ci riguarda nessun problema a parte i sentieri un po' umidi ma è normale dopo tutte queste piogge. Ci ricolleghiamo alla strada di San Tomaso per risparmiare le ginocchia sull'ultimo tratto di discesa.
					</div>
				</div>
			</div>
		
			<!-- Foto -->
			<div id="foto" class="foto hidden">
				<h3>Foto</h3>
				
				<a href="https://photos.app.goo.gl/C94MZsUV9EeKhnQQ6" target="_blank" rel="noopener noreferrer">
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
