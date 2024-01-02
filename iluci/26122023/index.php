<?php
	$title = "San Martino - San Martino Plaisir + Attraverso il Passato";
    $track = "26122023.gpx";
	$day = "26-12-2023, Martedì";
	$participants = "<img class=\"person\" src=\"../assets/people/laurac.png\"> Laura C, <img class=\"person\" src=\"../assets/people/maraja.png\"> Maraja, <img class=\"person\" src=\"../assets/people/oracolo.png\"> Oracolo, <img class=\"person\" src=\"../assets/people/rosa.png\"> Rosa";
	$path = "../relazioni/29_2_3/sanmartino-sanmartinoplaisir-attraversoilpassato/";
	$path1 = "../relazioni/29_2_3/sanmartino-sanmartinoplaisir/";
	$path2 = "../relazioni/29_2_3/sanmartino-attraversoilpassato/";
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
					<div class="picker-choice"><div class="picker button roccia selected" id="relazione1-button">San Martino Plaisir</div></div>
					<div class="picker-choice"><div class="picker button roccia" id="relazione2-button">Attraverso il Passato</div></div>
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
						<td>Giornata uggiosa, ma non eccessivamente fredda. La roccia sulle vie è buona, con qualche punto dove fare attenzione.</td>
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
						<td>NDA (imbrago, casco, scarpette, 12 rinvii, cordini per clessidre e alberi). Si può scalare tranquillamente con una corda singola. Protezioni veloci tendenzialmente inutili, poichè le vie sono ben chiodate soprattutto dove serve.</td>
					</tr>
					<tr>
						<th>Orientamento</th>
						<td>I sentieri di avvicinamento e discesa son ben segnati, a parte quelli che vanno proprio agli attacchi che non son segnati ma son ben visibili comunque. Sulle vie è sempre visibile la protezione successiva.</td>
					</tr>
					<tr>
						<th>Chiodatura</th>
						<td>Sistematica a spit su San Martino Plaisir. Tradizionale a chiodi/cordoni in clessidre o nei chiodi stessi su Attraverso il Passato; comunque molto buona, visto anche lo stato recente dell'attrezzatura. Soste a fix, catena o cordoni, eccetto l'ultima di San Martino Plaisir da attrezzare su solido albero.</td>
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
						Nicholas vuole scalare, gli propongo di andare a vedere la nuova via dell'Ivo Ferrari variante di Tutto di Traverso. Alla fine si aggregano anche la Laura e Rosa, quindi faremo due cordate, saliamo all'attacco superando un po' di gente con temperature un po' caldine per il periodo. Partiamo rapidi e a quanto pare una cordata dietro Laura e Rosa rinuncia a salire per fare GGG; lo strapiombo si rivela molto ostico ma chiodato bene. Il tiro dopo ha un passo balordo, per il resto bella arrampicata; e l'ultimo tiro una fessura ben chiodata ma difficile da scalare in libera, solo la Laura ce la farà. Scesi dalla catena ci scambieremo, io e Rosa faremo Attraverso il Passato, mentre gli altri Marcellino Pane e Vino. Ci ricongiungiamo e riscendiamo dalla Vergella, con dietro i tizi che alla fine han fatto anche loro San Martino Plaisir. Rinunciamo a fare una terza via per goderci il terzo tempo da Alchimia, non prima di essere passati a vedere il posto dove mi sono spaccato qualche anno fa da parte alle Placchette di destra.
					</div>
				</div>
			</div>
		
			<!-- Foto -->
			<div id="foto" class="foto hidden">
				<h3>Foto</h3>
				
				<a href="https://photos.app.goo.gl/B2XuZ8QhwVXNz2hc6" target="_blank" rel="noopener noreferrer">
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
