<?php
	$title = "Campo Moro - Cascata Castello";
    $track = "30122023.gpx";
	$day = "30-12-2023, Sabato";
	$participants = "<img class=\"person\" src=\"../assets/people/dello.png\"> Dello, <img class=\"person\" src=\"../assets/people/gabriele.png\"> Gabriele, <img class=\"person\" src=\"../assets/people/martab.png\"> Marta B, <img class=\"person\" src=\"../assets/people/oracolo.png\"> Oracolo";
	$path = "../relazioni/15_3_2/castello/";
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
			<?php
			include $path . 'index.php';
			?>
			
			<!-- Condizioni -->
			<div id="condizioni" class="condizioni hidden">
				<h3>Condizioni</h3>
				
				<table class="info cascata">
					<tr>
						<th>Meteo e Condizioni</th>
						<td>Mattinata serena e tranquilla, l'avvicinamento è abbastanza ghiacciato (ramponi) e la cascata si presta non formatissima ma scalabile con attenzione, ghiaccio decente.</td>
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
						<td>NDA per arrampicata su ghiaccio (imbrago, casco, scarponi pesanti, ramponi, 2 picozze tecniche, almeno 10 viti con relativo rinvio). Necessarie mezze corde da 60m se non si volesse spezzare la calata.</td>
					</tr>
					<tr>
						<th>Orientamento</th>
						<td>Facile, facendo attenzione a non mancare la deviazione dove si lascia il sentiero per la cascata (non attraversare il fiume)</td>
					</tr>
					<tr>
						<th>Chiodatura</th>
						<td>Soste su solide catene su albero.</td>
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
						La sera dobbiamo andare al Cristina e Henry ci fa sapere tramite Lorenzo che il Castello dovrebbe esserci, quindi andiamo con Gabri anche per far provare la Marta ad arrampicare su ghiaccio. Parcheggio comodo, avvicinamento tracciato, e attacchiamo al centro visto che a sinistra c'è un gruppetto di ragazzi. Fatto il primo tiro decidiamo di proseguire, la Marta preferisce tornare a terra, quindi caliamo lei e andremo avanti noi sul secondo tiro non banale fino alla sosta sommitale. Mentre Gabri cala la Marta il primo di cordata a sinistra fa un bel volo, che Dello riprenderà parzialmente, tanto spavento ma non sembra essersi fatto troppo male, soprattutto considerato la lunghezza! Gabri recupererà le sue picche + moschettone + l'ultima vite (era arrivato in sosta ed è scivolato mentre si barcaiolava), invece le altre viti le recupererà un ragazzo che sale dove son saliti loro. Alla fine si è fatto tardi per consentirmi di provare un tirello più facile sulla destra, quindi scendiamo dopo esserci cambiati all'Edelweiss dove mangiamo e salutiamo Gabri.
					</div>
				</div>
			</div>
		
			<!-- Foto -->
			<div id="foto" class="foto hidden">
				<h3>Foto</h3>
				
				<a href="https://photos.app.goo.gl/gJyuAkRc2wFDXSL9A" target="_blank" rel="noopener noreferrer">
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
