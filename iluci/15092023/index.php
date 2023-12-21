<?php
	$title = "Grignone - Cresta di Piancaformia";
    $track = "15092023.gpx";
	$day = "15-09-2023, Venerdì";
	$participants = "<img class=\"person\" src=\"../assets/people/oracolo.png\"> Oracolo";
	$path = "../relazioni/29_2_3/crestapiancaformia/";
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
						<td>Giornata brutta, ha piovuto tutto il tempo e faceva abbastanza freddo. La roccia in piancaformia è da fare attenzione quando si arrampicheggia, specie oggi che era anche bagnata</td>
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
						<th>Orientamento</th>
						<td>Facile, tutto è ben segnato, eccetto la parte finale della cresta dove bisogna avere un po' d'occhio per non sbagliare.</td>
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
						Giornata piovosa, partenza rilassata e l'idea è cercare una finestra di non pioggia per andare in Piancaformia. A tratti piove parecchio, alla chiesetta mi devo fermare per far scolare un po'. Vado avanti con ombrello in mano fondamentalmente fino all'ultima parte, stando sempre abbastanza in cresta. Metto via l'ombrello e parto sull'ultimo tratto con calma visto il bagnato e la pioviggine, arrivando comodamente in cima dove mi fermo a cambiarmi e mangiare qualcosa sulla panchina presso i bagni. Hanno allargato la balconata e stanno facendo ancora diversi lavori. Scendo sulla Ganda in tranquillità con una piccola pausa alla Bogani, dove esce la Mariangela ma preferisco non fermarmi sia perchè son da solo che perchè ho un colloquio di lavoro il pomeriggio tardi. Potrei essere l'unica persona che ha visto oggi. Al bivio Bietti-Bogani c'è un tizio con lo scavatore (stan lavorando su quel tratto), quindi faccio una piccola variante a monte, penso non mi abbia neanche visto, e scendo fino al Vo. Per tornare a casa passo in macchina da Varenna, giusto per variare un po', e tra l'altro finalmente esce il sole.
					</div>
				</div>
			</div>
		
			<!-- Foto -->
			<div id="foto" class="foto hidden">
				<h3>Foto</h3>
				
				<a href="https://photos.app.goo.gl/i9kDNiCbJAkswf7W8" target="_blank" rel="noopener noreferrer">
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
