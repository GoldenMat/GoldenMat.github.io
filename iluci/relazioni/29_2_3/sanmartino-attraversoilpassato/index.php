<?php
	$folder = "/relazioni/29_2_3/sanmartino-attraversoilpassato/";
?>

<div id="relazione" class="relazione">
	<h3>Relazione</h3>
	
	<table class="info roccia">
		<tr>
			<th>Data Uscita</th>
            <td><?php echo $day; ?></td>
			<th>Area</th>
			<td>Grigne</td>
		</tr>
		<tr>
			<th>Luogo di Partenza</th>
			<td>Rancio - Lecco (LC)</td>
			<th>Quota</th>
			<td>
				380m la partenza<br>
				500m (circa) l'attacco della via<br>
				550m (circa) l'uscita delle via
			</td>
		</tr>
		<tr>
			<th>Dislivello</th>
			<td>300m (circa)</td>
			<th>Tempi</th>
			<td>02:00 ore (01:00 ore la via)</td>
		</tr>
		<tr>
			<th>Esposizione</th>
			<td>Sud-Est</td>
			<th>Difficoltà Tecnica</th>
			<td>VI (IV+/A0)</td>
		</tr>
		<tr>
			<th>Punti di Appoggio</th>
			<td>Nessuno</td>
			<th>Acqua</th>
			<td>No</td>
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
		
		<p>Da Lecco salire in Valsassina seguendo la strada vecchia. Superato il Bar Sole, prendere a sinistra al tornante per via Quarto, e seguirla fino a dove finisce nei pressi del cimitero. Poche possibilità di parcheggio, in alternativa parcheggiare lungo la strada (facendo attenzione a non intralciare il passaggio) o tornare indietro e cercare posto nei quartieri limitrofi.</p>
		
		<h4>Avvicinamento</h4>
		
		<div class="halved-grid">
			<div class="halved-block-text">Dal cimitero seguire la stradina che si inoltra tra le case, che diventa una scalinata che esce su un altra strada asfaltata. Percorrere quest'ultima verso sinistra, superando un tornante fino a dove una scalinata (cartelli) permette di guadagnare rapidamente quota fino a immettersi sul sentiero che da Laorca va verso il San Martino. Seguire il sentiero che costeggia le paramassi fino a una Madonnina, dalla quale con qualche tornante ci si alza rapidamente nel bosco. Giunti a una zona più pianeggiante, notare su un albero l'indicazione per il sentiero della Vergella: seguirla, passando sotto alla placchetta di sinistra (falesia), e continuare a traversare superando un altro settorino, poi ignorare una traccia abbastanza evidente si stacca in discesa verso sinistra e proseguire dritti fino a quando si vede la catena del sentiero della Vergella. Sulla placca appena prima sulla destra attacca Attraverso il Passato (sasso con il nome della via all'inizio).</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "a1.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "a1.jpg"; ?>">
			</a></div>
		</div>
		
		<h4>Via</h4>
		
		<div class="halved-grid">
			<div class="halved-block-text"><b>L1:</b> salire la bella placchetta in verticale con arrampicata piacevole, qualche passo più verticale ma sempre ben appigliato, fino a raggiungere la comoda sosta (2 fix + catena).
			<br>&#187; 25m, diversi chiodi e clessidre cordonate (III, IV)</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "l1.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "l1.jpg"; ?>">
			</a></div>
			
			<div class="halved-block-text"><b>L2:</b> traversare decisamente a destra con passi più tecnici ma buone mani. Superato un diedrino si prosegue verso destra, su rocce ora decisamente più rotte, fino a un ultimo saltino che con facili passi atletici porta all'ottima cengia di sosta (2 fix + catena).
			<br>&#187; 30m, diversi chiodi e clessidre cordonate (IV+, III)</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "l2.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "l2.jpg"; ?>">
			</a></div>
			
			<div class="halved-block-text"><b>L3:</b> salire il diedro verso destra portandosi sotto a una fessura verticale. Superarla con passo tecnico (azzerabile) spostandosi leggermente a destra. Salire ora in verticale su placchetta fessurata fino alla sosta (clessidra cordonata) su cengia al limite del bosco.
			<br>&#187; 35m, diversi chiodi e clessidre cordonate (IV, VI/A0, IV+, III)</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "l3.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "l3.jpg"; ?>">
			</a></div>
		</div>
		
		<h4>Discesa</h4>
		
		<div class="halved-grid">
			<div class="halved-block-text">Seguire la traccia verso sinistra, che porta sul sentiero della Vergella appena sopra al canalino verticale. Seguirlo in discesa con attenzione, poi percorrere a ritroso il sentiero dell'avvicinamento fino a Rancio.</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "d1.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "d1.jpg"; ?>">
			</a></div>
		</div>
	
	</div>
</div>