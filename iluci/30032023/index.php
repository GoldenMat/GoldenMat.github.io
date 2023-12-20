<?php
	$title = "Corni di Canzo - Ferrata Corno Rat";
    $track = "30032023.gpx";
	$day = "30-03-2023, Giovedì";
	$participants = "<img class=\"person\" src=\"../assets/people/oracolo.png\"> Oracolo";
	$path = "../relazioni/11_1_9/cornorat-ferrata/";
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
	
		<div class="banner-container"><img class="banner" src="../assets/banner/ferrata.png"></div>
		
		<!-- Descrizione -->
		<?php
		include $path . 'descrizione.php';
		?>
		
		<div class="picker-bar bordered-sides">
			<div class="picker-choice"><div class="picker button ferrata selected" id="relazione-button">Relazione</div></div>
			<div class="picker-choice"><div class="picker button ferrata" id="condizioni-button">Condizioni</div></div>
			<div class="picker-choice"><div class="picker button ferrata" id="racconti-button">Racconti</div></div>
			<div class="picker-choice"><div class="picker button ferrata" id="foto-button">Foto</div></div>
		</div>
		
		<div class="content">
		
			<!-- Relazione -->
			<?php
			include $path . 'index.php';
			?>
			
			<!-- Condizioni -->
			<div id="condizioni" class="condizioni hidden">
				<h3>Condizioni</h3>
				
				<table class="info ferrata">
					<tr>
						<th>Meteo e Condizioni</th>
						<td>Giornata brutta, pioviggine e freddo hanno accompagnato tutta la salita, nonostante le previsioni fossero un po' meglio. La roccia sulla ferrata è unta ma solida.</td>
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
							<img class="star" src="../assets/emptystar.png">
							<img class="star" src="../assets/emptystar.png">
							<img class="star" src="../assets/emptystar.png"> (Oracolo)
						</td>
					</tr>
					<tr>
						<th>Materiale</th>
						<td>Imbrago, casco e kit da ferrata.</td>
					</tr>
					<tr>
						<th>Orientamento</th>
						<td>I sentieri e la ferrata sono ottimamente segnati da bolli e cartelli. L'unico punto dove ci si può sbagliare è l'inizio della discesa, seguire la traccia a sinistra e non andare oltre.</td>
					</tr>
					<tr>
						<th>Chiodatura</th>
						<td>La ferrata grazie alla ristrutturazione del 2021 è in ottimo stato, cavo su tutto il percorso e numerose staffe (anche fin troppe a volte).</td>
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
					
					<div class="story-block ferrata">
						Il meteo dava una apertura quindi mi faccio la ferrata del Corno Rat dopo il lavoro. Questa apertura non è mai arrivata, anzi durante la salita ha piovigginato a intermittenza, un po' freddo alle mani ma niente di eccessivo. Sicuramente speravo in condizioni migliori ma è sempre un buon allenamento quando si ha poco tempo.
					</div>
				</div>
			</div>
		
			<!-- Foto -->
			<div id="foto" class="foto hidden">
				<h3>Foto</h3>
				
				<a href="https://photos.app.goo.gl/nRXvvNP34LKk2dJK9" target="_blank" rel="noopener noreferrer">
					<img src="../assets/googlephotos.png">
					<p>Google Photos Album</p>
				</a>
			</div>
		</div>
	
		<a href="../">
			<div class="back ferrata">
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
