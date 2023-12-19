<?php
	$folder = "/relazioni/29_2_3/crestacermenati/";
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
			<div class="halved-block-text">Dal Piazzale tornare indietro e prendere la strada in salita che, passando sotto al Forno della Grigna, sale fino a un bivio dove si prende a sinistra in direzione rifugio Porta. Raggiunto il rifugio inoltrarsi nel bosco alle spalle dello stesso, che sale fino a un bivio (cartelli) dove si tiene a destra imboccando il sentiero della Cresta Cermenati. Ben presto si esce dal bosco e si supera una primo passaggio con una piccola catena che permette di superare comodamente una zona rocciosa.</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "v1.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "v1.jpg"; ?>">
			</a></div>
			
			<div class="halved-block-text">Da qui è impossibile sbagliare: seguire la cresta sempre in salita, attraversando in ordine il bivio per i Torrioni Magnaghi che si lascia a destra (cartello), l'uscita del canalone Caimi sulla sinistra, e la congiunzione del sentiero Cecilia (a sinistra, cartello) nell'unico punto dove il sentiero spiana un attimo. L'ultima parte percorre il largo canale a sinistra della vetta, dove arrivati alla sella si sale con un'ultima, facile catena sulla destra fino in cima alla Grignetta.</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "v2.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "v2.jpg"; ?>">
			</a></div>
			
			<div class="halved-block-text">La discesa avviene per la medesima via di salita, facendo attenzione nei tratti più ripidi a non muovere sassi in testa a chi è sotto di noi.</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "v3.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "v3.jpg"; ?>">
			</a></div>
		</div>
	
	</div>
</div>