<?php
	$folder = "/relazioni/28_1_5/bormio3000/";
?>

<div id="relazione" class="relazione">
	<h3>Relazione</h3>

	
	<table class="info sci">
		<tr>
			<th>Data Uscita</th>
            <td><?php echo $day; ?></td>
			<th>Area</th>
			<td>Sobretta</td>
		</tr>
		<tr>
			<th>Luogo di Partenza</th>
			<td>Bormio 2000 - Valdisotto (SO)</td>
			<th>Quota</th>
			<td>
				1940m la partenza<br>
				2540m la conca di Valbella<br>
				3020m la Cima Bianca
			</td>
		</tr>
		<tr>
			<th>Dislivello</th>
			<td>1080m</td>
			<th>Tempo di salita</th>
			<td>03:00 ore</td>
		</tr>
		<tr>
			<th>Esposizione</th>
			<td>Nord-Ovest, Nord</td>
			<th>Difficoltà Tecnica</th>
			<td>1.3/E1</td>
		</tr>
		<tr>
			<th>Punti di Appoggio</th>
			<td>Chalet Rododendri, Heaven 3000 (se aperti)</td>
			<th>Pendii Pericolosi</th>
			<td>Qualcosa nel primo pezzo di discesa sotto Valbella, ma se si sta sulle piste niente di particolare</td>
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
		
		<p>Da Lecco dirigersi in Valtellina, che va percorsa interamente fino ad arrivare a Bormio. Arrivati in paese, si segue inizialmente verso il Passo Gavia, per poi attraversare l'Adda seguendo le indicazioni verso Bormio 2000. Si superano un paio di rotonde, fino alla deviazione verso destra che indica l'inizio della salita verso Bormio 2000. Si superano in ordine i nuclei di Piatta e San Pietro, fino ad arrivare dopo diversi tornanti al largo parcheggio di Bormio 2000. Fare attenzione alle condizioni della strada se in presenza di neve fresca o basse temperature.</p>
		
		<h4>Salita</h4>
		
		<div class="halved-grid">
			<div class="halved-block-text">Dal parcheggio si sale sulle piste nei pressi degli impianti, tenendo tendenzialmente la destra per imboccare la strada carrareccia che d'estate consente ai mezzi di portarsi verso Bormio 3000. Dopo 3 tornanti si attraversa in orizzontale (direzione Nord-Est) fino a raggiungere il Chalet Rododendri, dove la salita inizia ad essere più ripida giungendo prima a Pian dei Larici (pilone degli impianti) e poi, aggirando il dosso verso sinistra, alla bella conca di Valbella.</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "v1.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "v1.jpg"; ?>">
			</a></div>

			<div class="halved-block-text">Dalla conca si sale verso sinistra, per poi tornare con due tornanti consecutivi verso il filo di cresta. Questo va seguito integralmente, stando leggermente a sinistra degli impianti, fino a raggiungere con fatica Bormio 3000 dove una pausa è d'obbligo (garage zona impianti in caso di brutto tempo e ristorante chiuso).</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "v2.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "v2.jpg"; ?>">
			</a></div>
		</div>
		
		<h4>Discesa</h4>
		
		<div class="halved-grid">
			<div class="halved-block-text">La discesa avviene per la via di salita, con molte varianti a seconda delle condizioni della neve seguendo le varie piste. Fare attenzione a non stare troppo a destra, onde evitare di scendere oltre Bormio 2000. Un'alternativa degna di menzione è il Vallone, percorso di freeride che scende sul versante Ovest della Cima Bianca: il percorso è molto bello e totalmente diverso dalla linea di salita, ma richiede condizioni di neve assestata.</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "d1.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "d1.jpg"; ?>">
			</a></div>
		</div>
	
	</div>
</div>