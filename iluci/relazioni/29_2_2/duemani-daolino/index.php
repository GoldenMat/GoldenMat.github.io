<?php
	$folder = "/relazioni/29_2_2/duemani-daolino/";
?>

<div id="relazione" class="relazione">
	<h3>Relazione</h3>
	
	<table class="info escursionismo">
		<tr>
			<th>Data Uscita</th>
            <td><?php echo $day; ?></td>
			<th>Area</th>
			<td>Resegone</td>
		</tr>
		<tr>
			<th>Luogo di Partenza</th>
			<td>Parcheggio prima della Forcella di Olino - Morterone (LC)</td>
			<th>Quota</th>
			<td>
				1130m la partenza<br>
				1340m la bocchetta di Desio<br>
				1666m la cima
			</td>
		</tr>
		<tr>
			<th>Dislivello</th>
			<td>536m</td>
			<th>Tempi</th>
			<td>02:30 ore</td>
		</tr>
		<tr>
			<th>Esposizione</th>
			<td>Sud-Est, Est</td>
			<th>Difficoltà Tecnica</th>
			<td>T2</td>
		</tr>
		<tr>
			<th>Punti di Appoggio</th>
			<td>Nessuno</td>
			<th>Acqua</th>
			<td>Salendo alla bocchetta di Desio si incrociano dei fiumiciattoli</td>
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
		
		<p>Da Lecco raggiungere Ballabio tramite la strada vecchia, e all'inizio del paese prendere la deviazione verso destra (cartelli) per Morterone. Seguire la strada di Morterone, stretta ma asfaltata, che sale con diversi tornanti e poi a mezzacosta sopra la val Boazzo. Superato il casotto dell'ANAS, prima di raggiungere la forcella di Olino individuare un piccolo parcheggio (cartello Due Mani) che indica la partenza del sentiero, parcheggiare lì.</p>
		
		<h4>Giro</h4>
		
		<div class="halved-grid">
			<div class="halved-block-text">Salire seguendo il sentiero che taglia a mezzacosta, con tratti in salita mai troppo ripidi e altri di falsopiano, attraversando diverse canalette e fiumiciattoli fino a dove sale un po' più deciso verso la dorsale. Raggiunto il punto di scollinamento si è alla bocchetta di Desio, dove il sentiero si congiunge a quelli che salgono dalla Culmine di San Pietro e da Maggio, con un piccolo casolare diroccato, un baitello e uno stagno</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "v1.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "v1.jpg"; ?>">
			</a></div>
			
			<div class="halved-block-text">Da qui prendere verso sinistra (Ovest, cartelli) la salita finale al Due Mani, che sale abbastanza costante prima nel bosco, poi raggiunto un grosso ometto il terreno si apre (e anche la vista), salendo ripido verso la cima. A circa 100m di dislivello sotto la cima c'è un bivio, entrambi i sentieri raggiungono la vetta ma il mio consiglio è di seguire quello di destra, che sale alla bocchetta tra cima principale e Zucco di Desio (l'altra elevazione del due mani), raggiunta la quale si prende a sinistra e per una bellissima cresta aerea ma escursionistica si raggiunge la cima, col bivacco Locatelli-Milani-Scaioli e una bella vista su Lecco e tutte le montagne del circondario.</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "v2.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "v2.jpg"; ?>">
			</a></div>
			
			<div class="halved-block-text">Per fare un piccolo anello consiglio di scendere nella direzione opposta a quella di salita, arrivando così a un'altra bocchetta (all'inizio si aggira un saltino verso sinistra, se non si volesse farlo sul filo di cresta). Da qui scendere sul versante morteronese verso sinistra, dove un comodo sentiero a mezzacosta in leggera discesa riporta esattamente nel bivio che si è incontrato durante la salita. Da qui semplicemente seguire a ritroso il sentiero della salita, tornando così sulla strada di Morterone e al parcheggio.</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "v3.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "v3.jpg"; ?>">
			</a></div>
		</div>
	
	</div>
</div>