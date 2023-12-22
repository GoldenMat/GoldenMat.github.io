<?php
	$title = "Torrione Diaz - Via Normale";
    $track = "22122023.gpx";
	$day = "22-12-2023, Venerdì";
	$participants = "<img class=\"person\" src=\"../assets/people/oracolo.png\"> Oracolo";
	$path = "../relazioni/29_2_3/torrionediaz/";
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
						<td>Mattinata serena con forte vento di favonio. La roccia sulla ferratina è liscia nella canaletta, e delicata sul tratto sommitale.</td>
					</tr>
					<tr>
						<th>Difficoltà Percepita</th>
						<td>PD (Oracolo)</td>
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
						<td>Imbrago, casco e kit da ferrata.</td>
					</tr>
					<tr>
						<th>Orientamento</th>
						<td>Facile fino al Coltignone, poi bisogna capire il punto dove deviare dal sentiero GER. Sulla ferrata basta seguire la catena.</td>
					</tr>
					<tr>
						<th>Chiodatura</th>
						<td>Ottima con la catena fissata su resinati, e 2 pioli, in ottimo stato. Considerare che non è una ferrata ufficiale, quindi fare attenzione.</td>
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
						Voglio cercare di capire un po' dove passa il "sentiero" che collega il Regismondo al Coltignone dall'alto, e dato che so che la parte finale è attrezzata con catene decido di andare su a dargli un occhio prima del lavoro. Nel bosco del Valentino e in cima al Coltignone c'è un forte vento da Nord, ma non darà problemi. Sceso dal GER becco subito la deviazione giusta per portarmi alla base del Torrione (è molto logica) e risalgo la ferratina che nonostante un segnale di pericolo di morte alla base (chissà messo da chi) si rivelerà in ottimo stato, anche perchè salire da lì senza quella sarebbe stato duro. Un attimo di pausa in cima (mentre arriva l'alba) e scendo un po' verso il Coltignoncino, non del tutto perchè il tempo è limitato, quindi torno indietro ripercorrendo la canaletta al contrario, non banale visto che sono anche senza ginocchiere. Per il resto tutto ok e ovviamente non si è vista anima viva, il vento ha reso l'alba di un colore fantastico.
					</div>
				</div>
			</div>
		
			<!-- Foto -->
			<div id="foto" class="foto hidden">
				<h3>Foto</h3>
				
				<a href="https://photos.app.goo.gl/K6u37YYdUPifQifVA" target="_blank" rel="noopener noreferrer">
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
