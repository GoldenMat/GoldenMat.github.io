<?php
	$folder = "/relazioni/29_2_3/sanmartino-marcellinopaneevino/";
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
				470m (circa) l'attacco della via<br>
				520m (circa) l'uscita della via
			</td>
		</tr>
		<tr>
			<th>Dislivello</th>
			<td>270m (circa)</td>
			<th>Tempi</th>
			<td>02:00 ore (01:00 ore la via)</td>
		</tr>
		<tr>
			<th>Esposizione</th>
			<td>Sud-Est</td>
			<th>Difficoltà Tecnica</th>
			<td>VI+ (V/A0)</td>
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
			<div class="halved-block-text">Dal cimitero seguire la stradina che si inoltra tra le case, che diventa una scalinata che esce su un altra strada asfaltata. Percorrere quest'ultima verso sinistra, superando un tornante fino a dove una scalinata (cartelli) permette di guadagnare rapidamente quota fino a immettersi sul sentiero che da Laorca va verso il San Martino. Seguire il sentiero che costeggia le paramassi fino a una Madonnina, dalla quale con qualche tornante ci si alza rapidamente nel bosco. Giunti a una zona più pianeggiante, notare su un albero l'indicazione per il sentiero della Vergella: seguirla, passando sotto alla placchetta di sinistra (falesia), e continuare a traversare superando un altro settorino finchè una traccia abbastanza evidente si stacca in discesa verso sinistra. Seguirla fino a una comoda piazzola, qui attaccano diverse vie e Marcellino Pane e Vino attacca al centro (sasso alla base).</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "a1.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "a1.jpg"; ?>">
			</a></div>
		</div>
		
		<h4>Via</h4>
		
		<div class="halved-grid">
			<div class="halved-block-text"><b>L1:</b> salire qualche metro in verticale, per poi traversare a sinistra sotto lo strapiombo seguendo i cordini. All'estremità sinistra salire in verticale con passo atletico, arrivando su una zona più appoggiata sotto un muro verticale, dove si trova la sosta (2 fix, poco visibile).
			<br>&#187; 30m, diversi chiodi e clessidre cordonati (IV+, V, IV)</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "l1.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "l1.jpg"; ?>">
			</a></div>
			
			<div class="halved-block-text"><b>L2:</b> salire nel diedro a destra per poi portarsi in spaccata verso sinistra dove c'è il fix. Ristabilirsi con passo ostico (azzerabile) sulla cengetta a sinistra, dalla quale si sale in verticale con un passo di equilibrio (anch'esso azzerabile, a fatica). Superato questo l'arrampicata diventa più facile, anche se un po' più sporca, fino a una pianta con cordone dove parte una corda fissa verso destra.
			<br>&#187; 35m, 3 fix, 1 chiodo, 3 clessidre con cordone (IV+, VI+/A0, V+/A0, III)</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "l2.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "l2.jpg"; ?>">
			</a></div>
		</div>
		
		<h4>Discesa</h4>
		
		<div class="halved-grid">
			<div class="halved-block-text">Seguire la corda fissa verso destra, che poi diventa catena, fino a ritornare sul sentiero della Vergella. Seguirlo in discesa il canalino verticale, con attenzione, poi percorrere a ritroso il sentiero dell'avvicinamento fino a Rancio.</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "d1.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "d1.jpg"; ?>">
			</a></div>
		</div>
	
	</div>
</div>