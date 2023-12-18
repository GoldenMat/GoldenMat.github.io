<?php
	$title = "Perledo - Falesia dell'Oreste";
    $track = "09122023.gpx";
	$day = "09-12-2023, Sabato";
	$participants = "<img class=\"person\" src=\"../assets/people/oracolo.png\"> Oracolo, <img class=\"person\" src=\"../assets/people/scotty.png\"> Scotty";
	$path = "../relazioni/29_2_3/falesiaoreste/";
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
						<td>Giornata serena ma fredda. Quando il sole è sceso si faceva fatica ad arrampicare. La falesia è ripulita ma ancora un po' polverosa visto che comunque non è ancora molto frequentata.</td>
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
						<td>NDA per falesia (imbrago, scarpette, 12 rinvii). Casco consigliabile soprattutto in presenza di altre cordate.</td>
					</tr>
					<tr>
						<th>Orientamento</th>
						<td>Facile, indicato da cartelli fin dal parcheggio.</td>
					</tr>
					<tr>
						<th>Chiodatura</th>
						<td>Sistematica a resinati. Soste con moschettone di calata.</td>
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
						Partenza tardi causa serata a Milano la sera prima, prendo Scotty e andiamo a Perledo, gli altri paccano tutti. Saliamo con calma fino alla falesia, il meteo non sarà bellissimo ma inizialmente il sole si scalda. Faremo Valentina (5a), Riccardo (5a+) e Il Ghiro (5a+): i tiri non son da sottovalutare nonostante i gradi, ma comunque sono chiodati molto bene. Ci sono altre vie sulla destra però più dure e lasciamo perdere, visto che inizia a fare anche parecchio freddo quando andremo via.
					</div>
				</div>
			</div>
		
			<!-- Foto -->
			<div id="foto" class="foto hidden">
				<h3>Foto</h3>
				
				<a href="https://photos.app.goo.gl/ctLFHa7PMJKMgpzT6" target="_blank" rel="noopener noreferrer">
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
