<?php
	$folder = "/relazioni/28_3_1/valbione-flusso/";
?>

<div id="relazione" class="relazione">
	<h3>Relazione</h3>
	
	<table class="info cascata">
		<tr>
			<th>Data Uscita</th>
            <td><?php echo $day; ?></td>
			<th>Area</th>
			<td>Adamello</td>
		</tr>
		<tr>
			<th>Luogo di Partenza</th>
			<td>Valbione - Ponte di Legno (BS)</td>
			<th>Quota</th>
			<td>
				1504m la partenza<br>
				1850m (circa) l'attacco della cascata<br>
				1900m (circa) l'uscita della cascata
			</td>
		</tr>
		<tr>
			<th>Dislivello</th>
			<td>400m (circa)</td>
			<th>Tempi</th>
			<td>02:30 ore (01:00 ore la via)</td>
		</tr>
		<tr>
			<th>Esposizione</th>
			<td>Nord</td>
			<th>Difficoltà Tecnica</th>
			<td>WI3+</td>
		</tr>
		<tr>
			<th>Punti di Appoggio</th>
			<td>Rifugio Capanna Valbione</td>
			<th>Acqua</th>
			<td>Al rifugio</td>
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
		
		<p>Da Lecco salire in Valtellina fino a Tresenda, poi prendere per l'Aprica. Scollinare in Val Camonica e proseguire fino a Ponte di Legno, parcheggiando nel comodo parcheggio della seggiovia di Valbione.</p>
		
		<h4>Avvicinamento</h4>
		
		<div class="halved-grid">
			<div class="halved-block-text">Dall'arrivo della seggiovia portarsi verso Nord per comodo sentiero costeggiando verso destra un laghetto, e poi quello che d'estate è il campo da golf. Inoltrandosi nella valle il bosco si dirada, e salire senza percorso obbligato fino alla base delle cascate (evidenti fin dalla partenza della piana). Flusso è la seconda cascata a partire da sinistra, più bassa rispetto a quella all'estrema sinistra, attacca presso una base comoda.</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "a1.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "a1.jpg"; ?>">
			</a></div>
		</div>
		
		<h4>Via</h4>
		
		<div class="halved-grid">
			<div class="halved-block-text"><b>L1:</b> salire la colata tenendo tendenzialmente la destra. Un muretto più verticale porta a una nicchietta dove ci sono una sosta su 3 chiodi e una su 2 fix con catena.
			<br>&#187; 25m (WI2+, WI3)</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "l1.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "l1.jpg"; ?>">
			</a></div>
			
			<div class="halved-block-text"><b>L2:</b> tornare verso il centro della colata, tramite una rampa non difficile, fino al saltino finale che si supera abbastanza in verticale. Arrivati al pianoro sommitale, puntare a destra dove si trova la sosta di calata.
			<br>&#187; 25m (WI2+, WI3+)</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "l2.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "l2.jpg"; ?>">
			</a></div>
		</div>
		
		<h4>Discesa</h4>
		
		<div class="halved-grid">
			<div class="halved-block-text">Una doppia da 50m e si rientra seguendo a ritroso l'avvicinamento fino alla seggiovia.</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "d1.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "d1.jpg"; ?>">
			</a></div>
		</div>
	
	</div>
</div>