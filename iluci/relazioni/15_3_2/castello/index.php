<?php
	$folder = "/relazioni/15_3_2/castello/";
?>

<div id="relazione" class="relazione">
	<h3>Relazione</h3>
	
	<table class="info cascata">
		<tr>
			<th>Data Uscita</th>
            <td><?php echo $day; ?></td>
			<th>Area</th>
			<td>Scalino</td>
		</tr>
		<tr>
			<th>Luogo di Partenza</th>
			<td>Sasso dell'Agnello - Lanzada (SO)</td>
			<th>Quota</th>
			<td>
				1860m la partenza<br>
				2000m la cascata
			</td>
		</tr>
		<tr>
			<th>Dislivello</th>
			<td>140m</td>
			<th>Tempi</th>
			<td>02:00 ore (01:00 ore la via)</td>
		</tr>
		<tr>
			<th>Esposizione</th>
			<td>Nord-Ovest</td>
			<th>Difficoltà Tecnica</th>
			<td>WI3+</td>
		</tr>
		<tr>
			<th>Punti di Appoggio</th>
			<td>Nessuno</td>
			<th>Acqua</th>
			<td>Fiume durante l'avvicinamento</td>
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
		
		<p>Da Sondrio salire in Val Malenco e all'altezza di Chiesa portarsi verso Est (destra) sulla strada che passando da Lanzada arriva fino a Campo Franscia. Iniziare a salire i tornanti verso Campo Moro (attenzione, spesso ghiacciati d'inverno), fino all'Alpe Largone e poco sopra al Sasso dell'Agnello, dove si parcheggia (pochi posti sulla destra).</p>
		
		<h4>Avvicinamento</h4>
		
		<div class="halved-grid">
			<div class="halved-block-text">Salire il ripido sentiero che poi lascia a sinistra la baitella e prosegue nel bosco su pendenze minori. Giunti a un bivio proseguire verso destra, e prima di attraversare il fiume proseguire sulla sinistra attraversando un bel pianoro, ormai in vista della cascata. Salire nel boschetto fino alla base della cascata.</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "a1.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "a1.jpg"; ?>">
			</a></div>
		</div>
		
		<h4>Via</h4>
		
		<div class="halved-grid">
			<div class="halved-block-text"><b>L1:</b> la cascata può essere salita in vari punti, ma descriverò la maniera più semplice (sulla sinistra). Salire una vaga canaletta fino all'evidente albero sulla sinistra, dove si trova la sosta con catena.
			<br>&#187; 25m (WI2)</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "l1.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "l1.jpg"; ?>">
			</a></div>
			
			<div class="halved-block-text"><b>L2:</b> salire ora verso destra su pendenze via via più accentuate, fino al tratto finale abbastanza verticale. Sosta in cima alla cascata con catena.
			<br>&#187; 35m (WI2+, WI3+)</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "l2.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "l2.jpg"; ?>">
			</a></div>
		</div>
		
		<h4>Discesa</h4>
		
		<div class="halved-grid">
			<div class="halved-block-text">Effettuare una calata da 55m (spezzabile alla S1), per poi rientrare tramite il sentiero dell'avvicinamento.</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "d1.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "d1.jpg"; ?>">
			</a></div>
		</div>
	
	</div>
</div>