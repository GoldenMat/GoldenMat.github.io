<?php
	$folder = "/relazioni/11_1_9/barro-creste/";
?>

<div id="relazione" class="relazione">
	<h3>Relazione</h3>
	
	<table class="info escursionismo">
		<tr>
			<th>Data Uscita</th>
            <td><?php echo $day; ?></td>
			<th>Area</th>
			<td>Corni di Canzo</td>
		</tr>
		<tr>
			<th>Luogo di Partenza</th>
			<td>Parcheggio Via Pian Sciresa - Malgrate (LC)</td>
			<th>Quota</th>
			<td>
				310m la partenza<br>
				435m la baita di Pian Sciresa<br>
				922m la cima
			</td>
		</tr>
		<tr>
			<th>Dislivello</th>
			<td>650m (circa)</td>
			<th>Tempi</th>
			<td>03:30 ore</td>
		</tr>
		<tr>
			<th>Esposizione</th>
			<td>Nord, Sud</td>
			<th>Difficoltà Tecnica</th>
			<td>T2</td>
		</tr>
		<tr>
			<th>Punti di Appoggio</th>
			<td>Baita Pian Sciresa</td>
			<th>Acqua</th>
			<td>Fontana alla fine della discesa dei Tre Corni, al bivio col sentiero di Mezzo</td>
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
		
		<p>Da Lecco passare il Ponte Kennedy e salire sulla salita del Griso fino a raggiungere la rotonda a 8 dell'Obi di Malgrate. Entrare nel quartiere del Gaggio passando sopra alla ferrovia, prendere via Gaggio (3a uscita) alla rotonda successiva, e percorrerla interamente finchè questa diventa via San Grato. A un bivio prendere la destra per via Pian Sciresa, che va seguita sempre in salita (cartelli) finchè questa finisce, dove è possibile parcheggiare la macchina. Si può partire per lo stesso giro (al contrario) anche da Galbiate in via dell'Oliva, volendo.</p>
		
		<h4>Giro</h4>
		
		<div class="halved-grid">
			<div class="halved-block-text">Salire il comodo e rapido sentiero che porta fino alla Baita di Pian Sciresa. Da qui ci sono diversi modi per raggiungere il cippo degli Alpini: il più comodo è quello di proseguire oltre la baita (direzione bosco del Faè) fino al primo cartello, che indica a sinistra il cippo. Seguire il comodo sentiero fino alla base della ripida scalinata che porta al piccolo sacrario del cippo. Da qui proseguire ancora in salita (cartelli) fino al roccione isolato del Sasso della Vecchia, dove inizia il sentiero delle Creste vero e proprio.</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "v1.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "v1.jpg"; ?>">
			</a></div>
			
			<div class="halved-block-text">Salire ripidamente i prati del versante Nord della montagna, con pendenza che molla raramente, fino a un placido boschetto che permette di sbucare poco dopo al bel punto panoramico dei prati della Corna (consigliabile portarsi un po' verso Lecco sul filo di cresta per godere di un panorama stupendo). Da qui si segue abbastanza fedelmente il filo di cresta, che supera una piccola elevazione, un'altra dove per salire (e scendere) bisogna arrampicare - tratto più tecnico dell'intera cresta, infine si incontra il sentiero che sale dall'Eremo (via normale) che si segue per roccette fino alla comoda cima con croce di vetta.</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "v2.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "v2.jpg"; ?>">
			</a></div>
			
			<div class="halved-block-text">La discesa va effettuata dal versante opposto (Sud) seguendo il cosiddetto sentiero dei "Tre Corni": si parte anzitutto su una scoscesa crestina che presenta circa a metà un passaggino non banale su roccette (scendere dritto, buone mani e piedi non immediatamente visibili). Giunti al punto di massima depressione (sella della Pila) si parte in breve salita sull'elevazione del Terzo Corno, per poi scendere anche gli altri due corni fino ad arrivare in un ripido boschetto, che porta ad una strada carrareccia con fontana, dove termina il sentiero delle creste.</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "v3.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "v3.jpg"; ?>">
			</a></div>
			
			<div class="halved-block-text">Da qui si prende a sinistra il sentiero di Mezzo, facile e ben frequentato, che permette di percorrere tutto il fianco Est della montagna, lungo ma non difficile e abbastanza pianeggiante, con bei panorami su Lecco e sul lago di Garlate in certi punti. Superate anche le deviazioni che scendono a San Michele si incrocia prima una bella piana verde, poi il sentiero percorso all'inizio del giro, che si segue verso destra rapidamente fino al parcheggio.</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "v4.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "v4.jpg"; ?>">
			</a></div>
		</div>
	
	</div>
</div>