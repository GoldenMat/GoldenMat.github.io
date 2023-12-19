<?php
	$title = "Bivio - Ristorante Camon (piste)";
    $track = "19112023.gpx";
	$day = "19-11-2023, Domenica";
	$participants = "<img class=\"person\" src=\"../assets/people/adrian.png\"> Adrian, <img class=\"person\" src=\"../assets/people/giorgios.png\"> Giorgio S, <img class=\"person\" src=\"../assets/people/oracolo.png\"> Oracolo, <img class=\"person\" src=\"../assets/people/scotty.png\"> Scotty";
	$path = "../relazioni/15_1_4/ristorantecamon/";
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
	
		<div class="banner-container"><img class="banner" src="../assets/banner/scialpinismo.png"></div>
		
		<!-- Descrizione -->
		<?php
		include $path . 'descrizione.php';
		?>
		
		<div class="picker-bar bordered-sides">
			<div class="picker-choice"><div class="picker button sci selected" id="relazione-button">Relazione</div></div>
			<div class="picker-choice"><div class="picker button sci" id="condizioni-button">Condizioni</div></div>
			<div class="picker-choice"><div class="picker button sci" id="racconti-button">Racconti</div></div>
			<div class="picker-choice"><div class="picker button sci" id="foto-button">Foto</div></div>
		</div>
		
		<div class="content">
		
			<!-- Relazione -->
			<?php
			include $path . 'index.php';
			?>
			
			<!-- Condizioni -->
			<div id="condizioni" class="condizioni hidden">
				<h3>Condizioni</h3>
				
				<table class="info sci">
					<tr>
						<th>Meteo e Condizioni</th>
						<td>Giornata caratterizzata dal maltempo, durante la salita ha piovuto praticamente tutto il tempo, aprendosi un po' quando ormai avevamo deciso di spellare e scendere. La neve non è tanta ma dove c'è è anche decente, per lo più si è sciato bene nonostante la brevità.</td>
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
							<img class="star" src="../assets/emptystar.png">
							<img class="star" src="../assets/emptystar.png"> (Oracolo)
						</td>
					</tr>
					<tr>
						<th>Materiale</th>
						<td>NDA per scialpinismo (sci, attacchi, scarponi, pelli, bastoncini, casco). Alle condizioni attuali rampanti e ramponi totalmente inutili.</td>
					</tr>
					<tr>
						<th>Orientamento</th>
						<td>Facile, seguire la linea dell'impianto e tenerlo alla destra sulla salita finale.</td>
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
					
					<div class="story-block sci">
						Scotty ha noleggiato gli scarponi e si vuole sciare, dopo aver discusso un po' sulla meta via Whatsapp decidiamo di puntare verso lo Julier con qualche dubbio. Arrivati in Engadina piove, e andando verso lo Julier la copertura nevosa è quantomeno dubbia. Scendiamo fino a Bivio, un occhio a vari pendii, e decidiamo di provare con le piste anche se non siam sicuri della sciabilità. Saliamo con pioggia debole fino alla stazione intermedia, dove nonostante si apre un pochino decidiamo che ne abbiamo abbastanza, e quindi si spella e ci si prepara per scendere. La discesa nonostante tutto devo dire che è stata anche buona, avendo studiato bene durante la salita dove saremmo scesi ci abbiamo azzeccato, e pezzi di pastona si alternavano a pezzi belli sciabili, sempre con un po' di filosofia, ma sicuramente non la brutta sciata che si prevedeva dalla macchina. Alla fine visto che abbiam fatto poco ci spariamo una birretta di Adrian alla macchina e scendiamo in cerca di pranzo verso Chiavenna.
					</div>
				</div>
			</div>
		
			<!-- Foto -->
			<div id="foto" class="foto hidden">
				<h3>Foto</h3>
				
				<a href="https://photos.app.goo.gl/q5Ede3b5BRrqsHeU8" target="_blank" rel="noopener noreferrer">
					<img src="../assets/googlephotos.png">
					<p>Google Photos Album</p>
				</a>
			</div>
		</div>
	
		<a href="../">
			<div class="back sci">
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
