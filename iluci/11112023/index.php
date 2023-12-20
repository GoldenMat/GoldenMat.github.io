<?php
	$title = "San Martino - Attraverso il Passato + Marcellino Pane e Vino";
    $track = "11112023.gpx";
	$day = "11-11-2023, Sabato";
	$participants = "<img class=\"person\" src=\"../assets/people/dello.png\"> Dello, <img class=\"person\" src=\"../assets/people/henry.png\"> Henry, <img class=\"person\" src=\"../assets/people/oracolo.png\"> Oracolo, <img class=\"person\" src=\"../assets/people/silviav.png\"> Silvia V, <img class=\"person\" src=\"../assets/people/walterino.png\"> Walterino, <img class=\"person\" src=\"../assets/people/walterone.png\"> Walterone";
	$path = "../relazioni/29_2_3/sanmartino-attraversoilpassato-marcellinopaneevino/";
	$path1 = "../relazioni/29_2_3/sanmartino-attraversoilpassato/";
	$path2 = "../relazioni/29_2_3/sanmartino-marcellinopaneevino/";
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
			<div id="relazione" class="relazione">
				<div class="picker-bar">
					<div class="picker-choice"><div class="picker button roccia selected" id="relazione1-button">Attraverso il Passato</div></div>
					<div class="picker-choice"><div class="picker button roccia" id="relazione2-button">Marcellino Pane e Vino</div></div>
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
				
				<table class="info roccia">
					<tr>
						<th>Meteo e Condizioni</th>
						<td>Giornata bella e abbastanza calda, almeno finchè c'era il sole. Le vie sono ripulite dalle ripetizioni, con Marcellino un po' più sporca ma niente di problematico.</td>
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
						<td>NDA (imbrago, casco, scarpette, 10 rinvii, cordini per clessidre e alberi). Si può scalare tranquillamente con una corda singola. Qualche friend medio-piccolo può aiutare ma non sono indispensabili, poichè le vie rimangono chiodate soprattutto dove serve.</td>
					</tr>
					<tr>
						<th>Orientamento</th>
						<td>I sentieri di avvicinamento e discesa son ben segnati, a parte quelli che vanno proprio agli attacchi che non son segnati ma son ben visibili comunque. Sulle vie è quasi sempre visibile la protezione successiva.</td>
					</tr>
					<tr>
						<th>Chiodatura</th>
						<td>Tradizionale a chiodi/cordoni in clessidre o nei chiodi stessi. Qualche fix sui passi chiave di Marcellino Pane e Vino. Comunque molto buona, visto anche lo stato recente dell'attrezzatura. Soste a fix, catena o cordoni.</td>
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
						Partenza tardi con Dello che mi viene a prendere poichè la sera precedente ero a Milano, son bello ribaltato ma raggiungiamo gli altri al San Martino che sono lì a fare la falesietta. Partiamo poi su Attraverso il Passato, dove Dello fa un po' di fatica x uscire da L3, del resto quel passo è sempre balordo in libera. All'uscita ci raggiunge Henry che era andato con Ste a fare Regatta de Blanc in Medale, quindi ci portiamo giù alle vie basse, io e Dello faremo Marcellino Pane e Vino, mentre gli altri fanno GGG. Ci ritroviamo in cima e scendiamo nuovamente dalla Vergella, tempo di andare a recuperare lo zaino e raggiungo gli altri sulla discesa. La pausa finale la faremo al Circolino a Ballabio dove ci raggiungono anche Adri e soci che erano in Antimedale a fare Istruttori.
					</div>
				</div>
			</div>
		
			<!-- Foto -->
			<div id="foto" class="foto hidden">
				<h3>Foto</h3>
				
				<a href="https://photos.app.goo.gl/LA3fZzJmC1hw4WfN9" target="_blank" rel="noopener noreferrer">
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
