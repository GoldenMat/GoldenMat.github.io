<?php
	$title = "Vandea - La Vita è Bella + Figli di Gina + Brontolone al Brentalone";
    $track = "17122023.gpx";
	$day = "17-12-2023, Domenica";
	$participants = "<img class=\"person\" src=\"../assets/people/dello.png\"> Dello, <img class=\"person\" src=\"../assets/people/oracolo.png\"> Oracolo";
	$path = "../relazioni/10_3_10/vandea-lavitaebella-figlidigina-brontolonealbrentalone/";
	$path1 = "../relazioni/10_3_10/vandea-lavitaebella/";
	$path2 = "../relazioni/10_3_10/vandea-figlidigina/";
	$path3 = "../relazioni/10_3_10/vandea-brontolonealbrentalone/";
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
					<div class="picker-choice"><div class="picker button falesia selected" id="relazione1-button">La Vita è Bella</div></div>
					<div class="picker-choice"><div class="picker button falesia" id="relazione2-button">Figli di Gina</div></div>
					<div class="picker-choice"><div class="picker button falesia" id="relazione3-button">Brontolone al Brentalone</div></div>
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
				
				<div id="relazione3" class="relazione3 hidden">
					<?php
					include $path3 . 'index.php';
					?>
				</div>
			</div>
			
			<!-- Condizioni -->
			<div id="condizioni" class="condizioni hidden">
				<h3>Condizioni</h3>
				
				<table class="info falesia">
					<tr>
						<th>Meteo e Condizioni</th>
						<td>Giornata bella, un po' di foschia, freddo finchè non è arrivato il sole, poi si stava benissimo. La roccia sulle vie è ottima, con brevi tratti erbosi a cui prestare attenzione.</td>
					</tr>
					<tr>
						<th>Difficoltà Percepita</th>
						<td>PD</td>
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
						<td>12 rinvii, scarpette, imbrago, casco, moschettoni e cordini per soste. Inutile ogni tipo di protezione veloce.</td>
					</tr>
					<tr>
						<th>Orientamento</th>
						<td>Non immediato ma ben indicato da cartelli. Una volta individuati gli attacchi seguendo la chiodatura è difficile sbagliare.</td>
					</tr>
					<tr>
						<th>Chiodatura</th>
						<td>Sistematica a fix e resinati, soste sempre ottime.</td>
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
						Oggi vogliamo scalare senza fare troppa fatica, e la scelta ricade ovviamente su Vandea, dove visto che è un po' che non la ripetevo propongo di fare La vita è bella, per poi proseguire verso l'alto col classico concatenamento stile Vandea. Partiamo al freddo prima di altre cordate, ma già alla prima sosta arriva il sole e scaleremo decisi fino in cima alla struttura. Proseguendo poi appena sopra nella zona dell'Eden, dove è tutto nuovo, dato che finiamo più a destra dell'altra volta che ero venuto con Gabri, attacchiamo una via chiamata Figli di Gina alla base. Finiti anche questi altri due tiri ci portiamo al Brentalone, dove stan già salendo diverse cordate, ma riusciremo a infilarci in mezzo senza dare fastidio a nessuno (compresa una cordata che si stava calando); in pratica concateno gli ultimi tiri saltando qualche fix e facendo fondamentalmente un bel tirone da 50 e passa metri, fino a uscire dalle difficoltà. In cima scambiamo due parole con Plinio, socio dell'Andrea Savonitto e apritore con lui di alcune delle vie di Vandea, per poi scendere in totale tranquillità dalla comoda strada.
					</div>
				</div>
			</div>
		
			<!-- Foto -->
			<div id="foto" class="foto hidden">
				<h3>Foto</h3>
				
				<a href="https://photos.app.goo.gl/K4PFhEF2Qc8sXHKS9" target="_blank" rel="noopener noreferrer">
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
