<?php
	$folder = "/relazioni/15_2_1/grevasalvas/";
?>

<div id="relazione" class="relazione">
	<h3>Relazione</h3>

	
	<table class="info sci">
		<tr>
			<th>Data Uscita</th>
            <td><?php echo $day; ?></td>
			<th>Area</th>
			<td>Güglia-Ot</td>
		</tr>
		<tr>
			<th>Luogo di Partenza</th>
			<td>Plaun da Lej - Sils im Engadin (Svizzera, Canton Grigioni)</td>
			<th>Quota</th>
			<td>
				1800m la partenza<br>
				1950m il paese di Grevasalvas<br>
				2460m il Lej Nair<br>
				2932m la cima
			</td>
		</tr>
		<tr>
			<th>Dislivello</th>
			<td>1132m</td>
			<th>Tempo di salita</th>
			<td>03:30 ore</td>
		</tr>
		<tr>
			<th>Esposizione</th>
			<td>Est</td>
			<th>Difficoltà Tecnica</th>
			<td>2.2/E1</td>
		</tr>
		<tr>
			<th>Punti di Appoggio</th>
			<td>Nessuno, oltre al paese di Grevasalvas</td>
			<th>Pendii Pericolosi</th>
			<td>Il traverso sotto al Lej Nair e la prima parte della discesa diretta, evitabile seguendo la cresta.</td>
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
		
		<p>Da Lecco seguire la SS36 fino a Colico. Da qui portarsi in val Chiavenna e alla rotonda in centro al paese portarsi verso la dogana Svizzera di Castesegna. Entrati in territorio svizzero percorrere tutta la val Bregaglia fino al Passo del Maloja, costeggiare poi il lago di Sils fino a un grande parcheggio sulla destra (sulla sinistra si trova il ristorante Murtarol), in località Plaun da Lej.</p>
		
		<h4>Salita</h4>
		
		<div class="halved-grid">
			<div class="halved-block-text">Appena oltre il ristorante parte la comoda carrareccia, innevata in piena stagione, che sale senza grosse pendenze sul lato idrografico destro della valletta. Si supera un bivio (cartelli) e un ponticello, e si sale dolcemente (o tagliando i tornanti) fino al bel nucleo di Grevasalvas, che si attraversa.</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "v1.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "v1.jpg"; ?>">
			</a></div>
			
			<div class="halved-block-text">Da qui la salita si fa più libera, salendo i dossi a Nord del paesino tenendo una vaga dorsale che parte abbastanza a sinistra, ma mai con percorso obbligato. Si sale per circa 300m di dislivello fino a individuare un grande pianoro che si apre sulla sinistra, dove inizia a vedersi anche la parte centrale dell'itinerario. Seguire questo pianoro in falsopiano con qualche brevissimo saliscendi, fino alla base di una depressione dove si traversa decisamente sulla destra (terreno esposto, attenzione se ghiacciato) fino a imboccare un largo canale che sale ripidamente fino al bellissimo Lej Nair.</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "v2.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "v2.jpg"; ?>">
			</a></div>
			
			<div class="halved-block-text">Aggirare il lago, uguale sia sulla destra che sulla sinistra, e imboccare una larga ed evidente dorsale che sale verso la cresta Nord-Est del Piz Grevasalvas. Giunti con fatica sul filo di cresta, si segue questa largamente sulla sinistra (qualche passaggino facile su roccia se con poca neve), fino ai pendii finali dove con un tornante da sinistra verso destra si giunge sulla larga e panoramica cima.</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "v3.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "v3.jpg"; ?>">
			</a></div>
		</div>
		
		<h4>Discesa</h4>
		
		<div class="halved-grid">
			<div class="halved-block-text">La discesa ricalca grossomodo la via di salita, con un paio di varianti possibili: anzitutto si può scendere più diretti verso il lago senza rifare la cresta (consigliabile, attenzione alla qualità della neve se ci si tiene molto a destra). La seconda è una volta giunti al canale sotto al lago, si tiene la destra imboccando il largo vallone, dopo il quale tramite un altra valletta si giunge al piccolo nucleo di Blaunca. Da qui seguendo la valle verso sinistra si torna a Grevasalvas. Anche per questa variante attenzione alle condizioni della neve.</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "d1.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "d1.jpg"; ?>">
			</a></div>
		</div>
	
	</div>
</div>