<?php
	$folder = "/relazioni/29_2_3/sentierodellecapre/";
?>

<div id="relazione" class="relazione">
	<h3>Relazione</h3>
	
	<table class="info escursionismo">
		<tr>
			<th>Data Uscita</th>
            <td><?php echo $day; ?></td>
			<th>Area</th>
			<td>Grigne</td>
		</tr>
		<tr>
			<th>Luogo di Partenza</th>
			<td>Piazzale Daniele Chiappa ai Piani Resinelli - Abbadia Lariana (LC)</td>
			<th>Quota</th>
			<td>
				1278m la partenza<br>
				2184m la cima
			</td>
		</tr>
		<tr>
			<th>Dislivello</th>
			<td>900m</td>
			<th>Tempi</th>
			<td>03:30 ore</td>
		</tr>
		<tr>
			<th>Esposizione</th>
			<td>Sud</td>
			<th>Difficoltà Tecnica</th>
			<td>T3</td>
		</tr>
		<tr>
			<th>Punti di Appoggio</th>
			<td>Bivacco Ferrario o gli esercizi ai Resinelli</td>
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
		
		<p>Da Lecco salire in Valsassina fino a Ballabio. Alla rotonda all'ingresso del paese prendere verso sinistra e subito dopo a destra salendo poi per i tornanti fino ai Piani Resinelli. Parcheggiare nel grande piazzale appena arrivati ai Resinelli (da Maggio 2023 a pagamento, 5€ al giorno).</p>
		
		<h4>Giro</h4>
		
		<div class="halved-grid">
			<div class="halved-block-text">Dal Piazzale tornare indietro e prendere la strada in salita che, passando sotto al Forno della Grigna, sale fino a un bivio dove si prende a sinistra in direzione rifugio Porta. Raggiunto il rifugio inoltrarsi nel bosco alle spalle dello stesso, che sale fino a un bivio (cartelli) dove si tiene a sinistra imboccando il sentiero della Direttissima. Il sentiero sale traversando a mezza costa verso Ovest, si oltrepassa un largo canalone (il Caimi) e si individua una deviazione poco evidente che è l'inizio del sentiero delle Capre (se si è arrivati presso un sasso con scritta "Oransoda" si è andati troppo in là).</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "v1.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "v1.jpg"; ?>">
			</a></div>
			
			<div class="halved-block-text">Il sentiero sale subito molto ripido per un prato, poi un facile canaletto che porta sul filo di cresta, tra le guglie del versante Ovest della Grignetta a sinistra e la cresta Cermenati a destra, ben visibili entrambi. Si prosegue fino a uno sperone, dove si gira sul lato sinistro e si supera un facile passaggio su roccette, poi ancora in verticale sempre ripido ma mai troppo difficile, fino a un punto dove il sentiero spiana e si ricongiunge alla creste Cermenati, che sale da destra. Da qui si ignora il bivio sulla sinistra e si sale nel largo canale finale, scollinato il quale una catena sulla destra porta rapidamente in cima.</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "v2.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "v2.jpg"; ?>">
			</a></div>
			
			<div class="halved-block-text">La discesa può ripercorrere la medesima via di salita, ma è più consigliabile scendere invece dalla cresta Cermenati. Ritornare al ricongiungimento dei due sentieri e tenere la destra; continuare a scendere superando in ordine l'uscita del Canale Caimi, il bivio per il traverso dei Magnaghi, la catena finale sopra al bosco, e si arriva al bivio tra Direttissima e Cermenati, da cui si scende al rifugio Porta e ai Resinelli seguendo a ritroso il percorso dell'andata.</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "v3.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "v3.jpg"; ?>">
			</a></div>
		</div>
	
	</div>
</div>