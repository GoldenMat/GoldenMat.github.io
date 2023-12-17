<?php
	$folder = "/relazioni/10_3_10/vandea-brontolonealbrentalone/";
?>

<div id="relazione" class="relazione">
	<h3>Relazione</h3>
	
	<table class="info falesia">
		<tr>
			<th>Data Uscita</th>
            <td><?php echo $day; ?></td>
			<th>Area</th>
			<td>Piz della Forcola-Pizzo Paglia</td>
		</tr>
		<tr>
			<th>Luogo di Partenza</th>
			<td>Albonico - Sorico (CO)</td>
			<th>Quota</th>
			<td>
				420m la partenza<br>
				500m (circa) l'attacco della via<br>
				600m (circa) la cima del Brentalone
			</td>
		</tr>
		<tr>
			<th>Dislivello</th>
			<td>200m (circa)</td>
			<th>Tempi</th>
			<td>02:00 ore (01:00 ore la via)</td>
		</tr>
		<tr>
			<th>Esposizione</th>
			<td>Sud</td>
			<th>Difficoltà Tecnica</th>
			<td>5b</td>
		</tr>
		<tr>
			<th>Punti di Appoggio</th>
			<td>Nessuno</td>
			<th>Acqua</th>
			<td>Un paio di fiumi sull'avvicinamento, nessuna idea della potabilità</td>
		</tr>
		<tr>
			<th>Partecipanti</th>
            <td colspan="3"><?php echo $participants; ?></td>
		</tr>
	</table>
	
	<div class="left">
    
        <?php if(isset($track)) : ?>
            <div class="centered"><a href="<?php echo $track; ?>" target="_blank" download>
                <img class="traccia" src="traccia.png">
            </a></div>
            <br><p class="caption">(clicca sull'immagine per scarica la traccia GPS)</p>
        <?php endif; ?>
	
		<h4>Accesso</h4>
		
		<p>Da Lecco prendere la SS36 fino a raggiungere Colico, dove si esce seguendo le indicazioni per Menaggio/Lugano. Raggiunto il Ponte del Passo (sul fiume Mera) lo si supera, e appena dopo si prende la deviazione a destra che per strada comoda ma con diversi tornanti porta fino al piccolo nucleo di Albonico (attenzione a non prendere una strada che sale a sinistra prima di entrare nella frazione). Entrare tra le case (possibile parcheggio appena prima di entrare) e seguire una svolta a sinistra e una a destra, dopo la quale si trova un piccolo parcheggio sulla destra (pochi posti).</p>
		
		<h4>Avvicinamento</h4>
		
		<div class="halved-grid">
			<div class="halved-block-text">Proseguire per la strada asfaltata fino a incontrare dopo qualche decina di metri la "casa Simona" (cartello), ove si stacca un sentiero sulla destra che si inoltra nel bosco. Attraversare un bel ponticello sul fiume e proseguire in direzione San Fedelino. Seguire il sentiero ignorando le deviazioni verso destra, fino a dopo un punto in salita incontrare un cartello sulla sinistra "Falesia Brentalone", dove si inizia a seguire la traccia ben segnata dagli ometti. Si continua superando qualche muretto a secco fino a una casa abbandonata, dalla quale si va decisamente a sinistra in piano, superando un acquitrino e giungendo rapidamente alla base della struttura del Brentalone. Brontolone attacca sullo spigolo di destra (scritta alla base).</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "a1.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "a1.jpg"; ?>">
			</a></div>
		</div>
		
		<h4>Via</h4>
		
		<div class="halved-grid">
			<div class="halved-block-text"><b>L1:</b> salire la lama staccata per poi proseguire sullo spigolo, con bella arrampicata non troppo difficile. Si supera una zona facile verso sinistra, per poi salire in verticale con un passo più ostico obbligato, fino alla comoda sosta.
			<br>&#187; 30m, diversi fix (4c, 4a, 5b)</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "l1.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "l1.jpg"; ?>">
			</a></div>
			
			<div class="halved-block-text"><b>L2:</b> salire in verticale sopra la sosta, ben protetto e senza eccessive difficoltà, fino alla cengia successiva.
			<br>&#187; 20m, 3 fix (4c, 4a)</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "l2.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "l2.jpg"; ?>">
			</a></div>
			
			<div class="halved-block-text"><b>L3:</b> salire leggermente a sinistra della sosta, inizialmente facile fino a un diedrino che si supera con un passo atletico. Proseguire poi in verticale superando un saltino ostico verso destra, volendo azzerabile, fino a una sosta che conviene saltare, proseguendo senza difficoltà fino alla sosta finale su terreno ormai facile.
			<br>&#187; 40m, 6 fix, 1 sosta intermedia (4a, 5a, 5b/A0, 4a)</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "l3.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "l3.jpg"; ?>">
			</a></div>
		</div>
		
		<h4>Discesa</h4>
		
		<div class="halved-grid">
			<div class="halved-block-text">Salire una decina di metri fino alle placche sommitali del Brentalone, in posizione panoramicissima dal Manduino fino al Legnone. Scendere dalle placche verso le antenne su facili roccette, dove poi comincia una strada di servizio che si segue integralmente, superando diversi tornanti, fino a incrociarne una a sinistra che riporta al ponte superato durante l'avvicinamento, da cui in breve alla partenza.</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "d1.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "d1.jpg"; ?>">
			</a></div>
		</div>
	
	</div>
</div>