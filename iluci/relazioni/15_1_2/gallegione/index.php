<?php
	$folder = "/relazioni/15_1_2/gallegione/";
?>

<div id="relazione" class="relazione">
	<h3>Relazione</h3>
	
	<table class="info escursionismo">
		<tr>
			<th>Data Uscita</th>
            <td><?php echo $day; ?></td>
			<th>Area</th>
			<td>Stella-Gallegione</td>
		</tr>
		<tr>
			<th>Luogo di Partenza</th>
			<td>Parcheggio Plazzura - Soglio (Svizzera, Canton Grigioni)</td>
			<th>Quota</th>
			<td>
				1100m la partenza<br>
				1630m l'alpeggio di Dair<br>
				1900m l'alpeggio di Laira<br>
				2724m il Passo Prasgnola<br>
				3107m la cima
			</td>
		</tr>
		<tr>
			<th>Dislivello</th>
			<td>2007m</td>
			<th>Tempi</th>
			<td>08:00 ore</td>
		</tr>
		<tr>
			<th>Esposizione</th>
			<td>Sud, Est</td>
			<th>Difficoltà Tecnica</th>
			<td>T2</td>
		</tr>
		<tr>
			<th>Punti di Appoggio</th>
			<td>Nessuno</td>
			<th>Acqua</th>
			<td>Fontana all'alpeggio di Dair e fiume prima di Laira</td>
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
		
		<p>Da Lecco imboccare la SS36 fino a Colico. Prendere la val Chiavenna e seguirla fino all'abitato omonimo, dove si prende in direzione Sankt Moritz, superando la dogana di stato. Usciti dall'abitato di Castasegna, si prosegue per un paio di chilometri fino a imboccare una deviazione che si stacca sulla sinistra, dove presto si stacca la strada sulla sinistra che porta all'abitato di Soglio (cartelli). La strada sale a tornanti fino all'abitato, e al bivio all'ingresso del paese prendere a sinistra (indicazioni Hotel La Soglina) e dopo poco si incontra sulla sinistra una strada che scende a parcheggio (a pagamento). Lasciare la macchina qua.</p>
		
		<h4>Giro</h4>
		
		<div class="halved-grid">
			<div class="halved-block-text">Tornare sulla strada principale che si segue a sinistra fino a quando si stacca una carrareccia (indicazioni Dair) che va seguita integralmente, con qualche possibilità di tagliere i tornanti tramite sentiero. Fare attenzione che alcuni tratti di taglio possono avere degli alberi caduti. Una volta imboccato il sentiero alla fine della strada questo prosegue in costante salita ma mai ecessivamente ripido, fino a dirigersi verso Nord e uscire dal bosco nei pressi del bell'alpeggio di Dair.</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "v1.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "v1.jpg"; ?>">
			</a></div>
			
			<div class="halved-block-text">Superato l'alpeggio si prosegue sempre in direzione Nord per un boschetto ripido, si guada un fiume, si superano un paio di casette e tramite un altro tratto nel bosco si giunge a Laira, dove c'è l'ultimo crocevia (andando a sinistra si va verso gli alpeggi sul versante Italiano). Da qui seguire la marcata traccia che sale sui pendii soprastanti, con molti tornanti e mai difficile, che sale puntando un po' a sinistra verso la bastionata rocciosa del versante Sud-Est della cima. Un piccolo tratto con catena, non difficile ma a cui prestare attenzione, consente di superare l'ultimo risalto e guadagnare il bel pianoro del Passo Prasgnola. Ricordarsi se si sbagliasse sentiero che il largo canalone ben visibile fin da Laira va sempre tenuto sulla sinistra.</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "v2.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "v2.jpg"; ?>">
			</a></div>
			
			<div class="halved-block-text">Dal passo la via di salita si fa un po' meno obbligata: bisogna risalire il pendio di sinistra (Ovest) che porta, tenendo un po' la destra, verso la cresta e poi la cima del Gallegione. Qualche ometto indica la via, ma si può passare un po' dove si preferisce. Arrivati in cresta, si supera una selletta, e si giunge sulla cima svizzera (segnale triangolare), camminando un pochino avanti si giunge anche su quella italiana (piccola croce).</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "v3.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "v3.jpg"; ?>">
			</a></div>
			
			<div class="halved-block-text">La discesa ricalca integralmente la salita. Attenzione nel tratto con catene sotto al Passo Prasgnola. Fare un anello è possibile passando verso il versante italiano ma si allunga di parecchio il chilometraggio.</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "v4.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "v4.jpg"; ?>">
			</a></div>
		</div>
	
	</div>
</div>