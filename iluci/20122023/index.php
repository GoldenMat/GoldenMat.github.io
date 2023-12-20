<?php
	$title = "Grignetta - Sentiero delle Capre";
    $track = "20122023.gpx";
	$day = "20-12-2023, Mercoledì";
	$participants = "<img class=\"person\" src=\"../assets/people/oracolo.png\"> Oracolo";
	$path = "../relazioni/29_2_3/sentierodellecapre/";
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
						<td>Mattinata calda, visto il periodo, 14° ai Resinelli quando sono sceso...preoccupante. Non c'è neve che non sia evitabile, a parte nella zona della cima dove è molto ghiacciata.</td>
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
						<th>Orientamento</th>
						<td>Non immediato trovare il bivio del sentiero delle Capre, ma se non si sbaglia quello si va tranquilli. Discesa intuitiva, ai bivi ci sono sempre i cartelli che evitano errori.</td>
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
						Parto abbastanza tardi visto che ormai l'alba è verso le 8, e già la mattina mi rendo conto che fa parecchio caldo, salendo son soltanto in felpa e maglietta. Tutto il percorso è pulito, eccetto la cima, e non c'è nessuno tranne una frontale che scende in Cermenati. Sull'ultimo tratto faccio lo spigolo a destra della Cermenati, non fa neanche troppo freddo, e becco un'alba bellissima tra l'orizzonte e la coltre di nuvole: infatti dopo 10-15 minuti il sole sparisce tra le nuvole e sarà così fino alla macchina. Discesa relax in Cermenati, il poco ghiaccio che c'è è evitabile.
					</div>
				</div>
			</div>
		
			<!-- Foto -->
			<div id="foto" class="foto hidden">
				<h3>Foto</h3>
				
				<a href="https://photos.app.goo.gl/vmxpxbvW7b6bsy2H6" target="_blank" rel="noopener noreferrer">
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
