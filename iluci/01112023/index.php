<?php
	$title = "Zucco dell'Angelone - Foto di Gruppo con Signorine + Schiavi della Pietra";
    $track = "01112023.gpx";
	$day = "01-11-2023, Mercoledì";
	$participants = "<img class=\"person\" src=\"../assets/people/dello.png\"> Dello, <img class=\"person\" src=\"../assets/people/henry.png\"> Henry, <img class=\"person\" src=\"../assets/people/martab.png\"> Marta B, <img class=\"person\" src=\"../assets/people/mayday.png\"> Mayday, <img class=\"person\" src=\"../assets/people/oracolo.png\"> Oracolo, <img class=\"person\" src=\"../assets/people/walterone.png\"> Walterone";
	$path = "../relazioni/29_2_1/angelone-fotodigruppo-schiavidellapietra/";
	$path1 = "../relazioni/29_2_1/angelone-fotodigruppo/";
	$path2 = "../relazioni/29_2_1/angelone-schiavidellapietra/";
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
			<div id="relazione" class="relazione">
				<div class="picker-bar">
					<div class="picker-choice"><div class="picker button falesia selected" id="relazione1-button">Foto di Gruppo con Signorine</div></div>
					<div class="picker-choice"><div class="picker button falesia" id="relazione2-button">Schiavi della Pietra</div></div>
				</div>
			
				<div id="relazione1" class="relazione1">
					<?php
					include $path1 . 'index.php';
					?>
				</div>
				
				<div id="relazione2" class="relazione2 hidden">
					<?php
					include $path2 . 'index.php';
					?>
				</div>
			</div>
			
			<!-- Condizioni -->
			<div id="condizioni" class="condizioni hidden">
				<h3>Condizioni</h3>
				
				<table class="info falesia">
					<tr>
						<th>Meteo e Condizioni</th>
						<td>Giornata brutta e relativamente fredda, siamo riusciti a scalare prima che arrivasse la pioggia che non era scontato. La roccia in via è sempre ottima, con qualche tiro più sporco, ma niente di che.</td>
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
						<td>NDA per vie sportive: imbrago, casco, scarpette, 10 rinvii, cordini per soste e moschettoni. Possibile integrare un po' con protezioni veloci e cordini in alberi/clessidre, non necessario ma utile se non si padronasse il grado.</td>
					</tr>
					<tr>
						<th>Orientamento</th>
						<td>L'avvicinamento è marcato da cartelli e purchè non si perda il sentiero si arriva tranquillamente all'attacco. In via attenzione a non prendere varianti più impegnative, seguire la relazione. La discesa non è immediatamente individuabile ma una volta beccato il sentiero si segue senza possibilità di errore fino alla strada, e da lì al parcheggio.</td>
					</tr>
					<tr>
						<th>Chiodatura</th>
						<td>Sistematica a resinati, non sempre cortissimi, ma tendenzialmente sicura. Soste ottime, con catena su Foto di Gruppo.</td>
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
						L'idea iniziale era di fare la Segantini, ma in Grignetta ha nevicato un pochino e il meteo è abbastanza brutto, quindi si ripiega in Angelone, e alla fine facciamo due cordate. Partiamo e ci dirigiamo al terzo sperone, dove stan scalando due tedeschi, ma partiamo io, Dello e Marta su Foto di Gruppo originale e Mayday, Henry e Walterone sulla variante di sinistra. Saliamo concatenando secondo e terzo tiro, e dopo un po' di fatica sul tiro finale ci portiamo rapidi al quarto Sperone, dove noi attacchiamo Schiavi e gli altri attaccano Manomorta Tramviaria. Facciamo l'ultimo tiro un po' nel bosco causa un po' di traffico all'uscita delle altre vie, mentre Mayday e i veci van subito verso destra nel bosco per iniziare la discesa. Scendiamo con calma sotto una leggera pioggerella, per poi ribeccarci al parcheggio dove facciamo pausa al B-Cafè prima di tornare a casa.
					</div>
				</div>
			</div>
		
			<!-- Foto -->
			<div id="foto" class="foto hidden">
				<h3>Foto</h3>
				
				<a href="https://photos.app.goo.gl/NfvZTkB56fFDxL2cA" target="_blank" rel="noopener noreferrer">
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
