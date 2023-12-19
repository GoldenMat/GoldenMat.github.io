<?php
	$title = "Zucco dell'Angelone - Anabasi";
    $track = "18032023.gpx";
	$day = "18-03-2023, Sabato";
	$participants = "<img class=\"person\" src=\"../assets/people/gabriele.png\"> Gabriele, <img class=\"person\" src=\"../assets/people/julien.png\"> Julien, <img class=\"person\" src=\"../assets/people/oracolo.png\"> Oracolo";
	$path = "../relazioni/29_2_1/angelone-anabasi/";
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
						<td>Giornata soleggiata, caldo sulla parte bassa della via, ci siamo poi coperti dopo il tiro chiave poichè è salito un po' di vento. Nessuna traccia di neve compresa la discesa, condizioni decisamente primaverili.</td>
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
						<td>NDA per vie sportive (imbrago, casco, scarpette, 10 rinvii, cordini). Qualche misura di friend (0.5-2 BD) può tornare utile sui tratti facili. Con corde da almeno 60m qualche tiro può essere facilmente concatenato.</td>
					</tr>
					<tr>
						<th>Orientamento</th>
						<td>Facile fino al quarto sperone (seguire tracce e cartelli), l'orientamento in via non è banale ma la relazione dovrebbe fugare ogni dubbio. Non immediata la discesa, una volta che si individua la traccia giusta invece basta seguirla fino al parcheggio.</td>
					</tr>
					<tr>
						<th>Chiodatura</th>
						<td>Ottima a resinati, non sempre vicini. Qualche cordone sui tratti più difficili o attorno a qualche albero di sosta.</td>
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
						Dovevamo essere in quattro ma Carlo ci abbandona, quindi andiamo in cordata a 3 a fare questa classica sempre bella. Julien e io ci divideremo la via, lui farà fino a S5 e io il resto, e comunque nonostante qualche impiccio con le corde arriveremo in cima relativamente rapidi. Prima volta che scalo con Julien ma penso proprio non sarà l'ultima, ci siam trovati proprio bene. Due cordate dietro sui primi tiri ma dopo il tiro chiave li perderemo di vista.
					</div>
				</div>
			</div>
		
			<!-- Foto -->
			<div id="foto" class="foto hidden">
				<h3>Foto</h3>
				
				<a href="https://photos.app.goo.gl/9Urpp9RzM9AfUZ3Z9" target="_blank" rel="noopener noreferrer">
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
