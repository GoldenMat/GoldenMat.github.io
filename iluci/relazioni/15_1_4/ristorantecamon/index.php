<?php
	$folder = "/relazioni/15_1_4/ristorantecamon/";
?>

<div id="relazione" class="relazione">
	<h3>Relazione</h3>

	
	<table class="info sci">
		<tr>
			<th>Data Uscita</th>
            <td><?php echo $day; ?></td>
			<th>Area</th>
			<td>Platta-Forbesch</td>
		</tr>
		<tr>
			<th>Luogo di Partenza</th>
			<td>Parcheggio del paese - Bivio (Svizzera, Canton Grigioni)</td>
			<th>Quota</th>
			<td>
				1780m la partenza<br>
				2200m il Ristorante Camon
			</td>
		</tr>
		<tr>
			<th>Dislivello</th>
			<td>420m</td>
			<th>Tempo di salita</th>
			<td>01:30 ore</td>
		</tr>
		<tr>
			<th>Esposizione</th>
			<td>Nord</td>
			<th>Difficoltà Tecnica</th>
			<td>1.2/E1</td>
		</tr>
		<tr>
			<th>Punti di Appoggio</th>
			<td>Ristorante Camon</td>
			<th>Pendii Pericolosi</th>
			<td>Niente di rilevante, si sta sempre sulle piste</td>
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
		
		<p>Da Lecco seguire la SS36 fino a Colico. Da qui portarsi in val Chiavenna e alla rotonda in centro al paese portarsi verso la dogana Svizzera di Castesegna. Entrati in territorio svizzero percorrere tutta la val Bregaglia fino al Passo del Maloja, poi costeggiando i bei laghi dell'Engadina arrivare a Silvaplana. Superare il paese e alla rotonda prendere a sinistra verso il Passo Julier, superare il passo e scendere verso il paese di Bivio. Raggiunto il paese, parcheggiare a fine paese sulla destra in un largo parcheggio.</p>
		
		<h4>Salita</h4>
		
		<div class="halved-grid">
			<div class="halved-block-text">Sci in mano attraversare la strada e portarsi alla partenza degli impianti. Da qui salire con le pelli, inizialmente leggermente a destra dell'impianto, poi a piacere fino all'ultimo pendio, dove si risale sotto l'impianto stesso o appena a sinistra. Arrivati sul pianoro sommitale sulla destra si trova il Ristorante Camon, comodo punto dove togliere le pelli. Possibile proseguire ancora per piste fino alla località "Al Cant" volendo, altri 300 metri di dislivello circa.</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "v1.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "v1.jpg"; ?>">
			</a></div>
		</div>
		
		<h4>Discesa</h4>
		
		<div class="halved-grid">
			<div class="halved-block-text">Per la via di salita, possibile scendere su altre piste ma attenzione a non scendere troppo a destra, si arriva da un'altra parte.</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "d1.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "d1.jpg"; ?>">
			</a></div>
		</div>
	
	</div>
</div>