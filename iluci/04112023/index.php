<?php
	$title = "Bormio 3000 - Piste da Bormio 2000";
    $track = "04112023.gpx";
	$day = "04-11-2023, Sabato";
	$participants = "<img class=\"person\" src=\"../assets/people/danieler.png\"> Daniele R, <img class=\"person\" src=\"../assets/people/francescom.png\"> Francesco M, <img class=\"person\" src=\"../assets/people/giacomo.png\"> Giacomo, <img class=\"person\" src=\"../assets/people/lucar.png\"> Luca R, <img class=\"person\" src=\"../assets/people/oracolo.png\"> Oracolo, <img class=\"person\" src=\"../assets/people/riki.png\"> Riki, <img class=\"person\" src=\"../assets/people/ruben.png\"> Ruben, <img class=\"person\" src=\"../assets/people/ste.png\"> Ste";
	$path = "../relazioni/28_1_5/bormio3000/";
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
						<td>Mattinata abbastanza fredda, all'inizio c'era bello ma poi si è coperto via via sempre più. Tanto vento in alto. La neve era ventata e pastosa in alto, molto bella invece sotto la conca di Valbella.</td>
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
						<td>NDA per scialpinismo (sci, scarponi, attacchi, pelli, bastoncini). Nelle condizioni attuali ramponi e rampanti inutili.</td>
					</tr>
					<tr>
						<th>Orientamento</th>
						<td>Non immediato senza la traccia dei gatti ma nel dubbio seguire gli impianti. Facile invece nella parte alta, seguire il lato destro (Ovest) della cresta.</td>
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
						Volevo fare canyoning questo weekend, ma Tiziano è malato, Andre ormai ha preso la domenica lavorativa, e i veci sapevo già che non è che avessero molto voglia. Allora li balzo a piè pari e mi aggrego a Ste e agli altri per la prima sciata della stagione, il mattino il meteo sembra ok quindi con lo Stelvio chiuso si punta a Bormio, visto che Ruben e socio son già su. Ritrovo mattutino alla Tamoil, tappa a Sondrio per prendere Dani, colazione rapida poi andiamo fino a Bormio 2000 con qualche dubbio per la strada, ma che si rivelerà in buone condizioni. Saliamo relax fino ai Rododendri, dove si sale con diverse inversioni, Dani ha problemi allo skistopper che riuscirà a risolvere soltanto Ste. Usciti dal bosco ci rendiamo conto che il vento sarà parecchio fastidioso, ma nonostante ciò tutti (tranne Dani che è rimasto indietro) iniziamo a salire verso Bormio 3000, salvo che poi saremo soltanto io e il biondo che punteremo fino alla cima, gli altri scendono prima in polvere a sinistra. Arrivati scaglionati a Bormio 3000, giusto un attimo di pausa e iniziamo a scendere, inizialmente cercando di destreggiarci tra i dossi che ha lasciato il gatto, poi nel whiteout totale tra vento e neve dove non vediamo dove si va, poi arrivati a Valbella prendiamo le piste sotto, inizialmente su neve pesantissima, poi riusciamo a tornare sul bello e ce la godiamo fino alla macchina. Gli altri si son divisi in 3 gruppi: Dani era sceso con degli altri tizi che ha trovato sul percorso, Luca e Ricky diretti alla macchina, mentre Ste Ruben e Giacomo scendono circa 200m sotto al parcheggio e tornano su ripellando.
					</div>
				</div>
			</div>
		
			<!-- Foto -->
			<div id="foto" class="foto hidden">
				<h3>Foto</h3>
				
				<a href="https://photos.app.goo.gl/aXM4nCT9AAbxLd6D6" target="_blank" rel="noopener noreferrer">
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
