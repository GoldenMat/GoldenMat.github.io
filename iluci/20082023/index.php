<?php
	$title = "Prealpi Lecchesi | Cresta OSA + Cresta Segantini + Cresta Ongania";
    $track = "20082023.gpx";
	$day = "20-08-2023, Domenica";
	$participants = "<img class=\"person\" src=\"../assets/people/oracolo.png\"> Oracolo";
	$path = "../relazioni/11_1_9/trecreste/";
	$path1 = "../relazioni/11_1_9/crestaosa/";
	$path2 = "../relazioni/29_2_3/crestasegantini/";
	$path3 = "../relazioni/29_2_1/crestaongania/";
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
					<div class="picker-choice"><div class="picker button roccia selected" id="relazione1-button">Moregallo - Cresta OSA</div></div>
					<div class="picker-choice"><div class="picker button roccia" id="relazione2-button">Grignetta - Cresta Segantini</div></div>
					<div class="picker-choice"><div class="picker button roccia" id="relazione3-button">Zucco Pesciola - Cresta Ongania</div></div>
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
				
				<table class="info roccia">
					<tr>
						<th>Meteo e Condizioni</th>
						<td>Giornata calda, probabilmente la più calda dell'anno, e solo negli orari più vicini all'alba e alla sera si stava bene. La roccia sulle vie è ottima, con le dovute eccezioni ma sempre dove facile.</td>
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
							<img class="star" src="../assets/star.png"> (Oracolo)
						</td>
					</tr>
					<tr>
						<th>Materiale</th>
						<td>Corda da 60m, imbrago, casco e una manciata di rinvii/fettucce/cordini per tutte e 3 le vie. Eventualmente qualche protezione veloce. Nel caso specifico penso sia molto difficile concatenarle in giornata legandosi, cosa da tenere a conto.</td>
					</tr>
					<tr>
						<th>Orientamento</th>
						<td>Sentieri per lo più segnati, sulla Segantini e sull'Ongania ci può essere qualche problema di orientamento (non immediato in Segantini e diverse varianti sull'Ongania), consigliabile seguire le relazioni se non le si conoscesse.</td>
					</tr>
					<tr>
						<th>Chiodatura</th>
						<td>Per lo più assente sulla cresta OSA e resinati con qualche chiodo distanziati sulle altre vie. Comunque c'è tutto ciò che serve.</td>
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
						Dopo anni che ci penso metto finalmente in atto questo progetto, anche se forse la forma non è il massimo ma alla fine bisogna provarci. Lascio la macchina la sera prima dietro al Soldanella con dentro 7 litri d'acqua (2 bottiglie + camel bag + borraccia), 2 red bull, 2 panini, buondì, 2 scatolette di frutta, diverse barrette/gel e 2 cambi completi. La mattina esco alle 4 da casa e attacco subito il Moregallo, dove arriverò in cima verso le 6, beccando l'alba fondamentalmente al ponte di roccia. Buona forma anche se il ginocchio fa ancora un po' male dal giorno prima, per fortuna ho la seconda ginocchiera in macchina. La giornata si prevede molto calda. Scendo da Moregge e inforco la bici direzione Resinelli, farò una fermata alla protezione civile e spingerò l'ultimo pezzo sotto al Soldanella. Pausetta e poi si parte in direttissima con un caldo allucinante, ma via via mi riprendo sempre un po' di più (anche se sottostimo l'acqua). Parto bene in Segantini e supero due ragazzi alla prima calata, che poi non vedrò più. La lingua è un toccasana e dopo l'ultima parte con un caldo anomalo arrivo in cima, dove faccio una pausetta prima di scendere deciso dalla Cermenati. Lunga pausa alla macchina dove mangio, bevo e mi cambio x bene, da qui alla fine sarà tutto nel mio zaino quindi anche lo zaino diventa più oneroso (ma non di tanto). Scendo rapido fino a Balisio, dove salgo fino a Moggio facendo una pausa a Cassina presso il tornante dato che il sole mi stava ammazzando. Ripigliatomi un attimo parto con calma per la salita verso Bobbio, che raggiungo con fatica ormai verso ora di cena. Preferisco bypassare la Lecco e andare diretto all'attacco dell'Ongania, dove faccio una pausa e raduno le forze rimaste per evitare di perdere lucidità in via. Faccio la via con un po' di fatica ma sono in cima, contento anche se esausto. Dopo una pausa rifocillante obbligata scendo con calma, il buio mi prenderà all'altezza del bosco ma nonostante tutto le gambe girano ancora bene, ormai la salita a piedi è finita. Arrivo alla bici verso le 22 e incredibilmente durante il ritorno le mie gambe spingono ancora parecchio sulle (brevi) salite di Maggio, Balisio e il Griso, forse il cambio di mezzo o forse perchè è tanto che non faccio fatica. Arriverò a casa verso le 23 molto contento del progetto andato bene, con la macchina che verrà recuperata il giorno dopo con l'aiuto di papà.
					</div>
				</div>
			</div>
		
			<!-- Foto -->
			<div id="foto" class="foto hidden">
				<h3>Foto</h3>
				
				<a href="https://photos.app.goo.gl/CncrxcwtazJzL5DG7" target="_blank" rel="noopener noreferrer">
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
