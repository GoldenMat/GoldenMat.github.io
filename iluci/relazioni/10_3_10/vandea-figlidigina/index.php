<?php
	$folder = "/relazioni/10_3_10/vandea-figlidigina/";
?>

<div id="relazione" class="relazione">
	<h3>Relazione</h3>
	
	<table class="info falesia">
		<tr>
			<th>Data Uscita</th>
            <td><?php echo $day; ?></td>
			<th>Area</th>
			<td>Piz della Forcola-Pizzo Paglia</td>
		</tr>
		<tr>
			<th>Luogo di Partenza</th>
			<td>Albonico - Sorico (CO)</td>
			<th>Quota</th>
			<td>
				420m la partenza<br>
				420m (circa) l'attacco della via<br>
				470m (circa) l'uscita della via
			</td>
		</tr>
		<tr>
			<th>Dislivello</th>
			<td>100m (circa)</td>
			<th>Tempi</th>
			<td>01:30 ore (00:30 ore la via)</td>
		</tr>
		<tr>
			<th>Esposizione</th>
			<td>Sud</td>
			<th>Difficoltà Tecnica</th>
			<td>5a</td>
		</tr>
		<tr>
			<th>Punti di Appoggio</th>
			<td>Nessuno</td>
			<th>Acqua</th>
			<td>Un paio di fiumi sull'avvicinamento, nessuna idea della potabilità</td>
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
		
		<p>Da Lecco prendere la SS36 fino a raggiungere Colico, dove si esce seguendo le indicazioni per Menaggio/Lugano. Raggiunto il Ponte del Passo (sul fiume Mera) lo si supera, e appena dopo si prende la deviazione a destra che per strada comoda ma con diversi tornanti porta fino al piccolo nucleo di Albonico (attenzione a non prendere una strada che sale a sinistra prima di entrare nella frazione). Entrare tra le case (possibile parcheggio appena prima di entrare) e seguire una svolta a sinistra e una a destra, dopo la quale si trova un piccolo parcheggio sulla destra (pochi posti).</p>
		
		<h4>Avvicinamento</h4>
		
		<div class="halved-grid">
			<div class="halved-block-text">Proseguire per la strada asfaltata fino a incontrare dopo qualche decina di metri la "casa Simona" (cartello), ove si stacca un sentiero sulla destra che si inoltra nel bosco. Attraversare un bel ponticello sul fiume e proseguire in direzione San Fedelino, ignorare un cartello sulla destra con indicazione Vandea, e trovarne un altro con indicazioni "Codroipo-Patriage-Eden". Seguire il sentiero che si inoltra nel bosco, fino a giungere alla struttura del Codroipo, lasciarla a sinistra raggiungendo quella di Le Patriage, proseguire su sentiero ora in leggera salita fino a un cartello che indica "Uccel di Bosco" verso sinistra. Salire ora per balze erbose e rocciose facili, traversando verso destra presso una zona rocciosa, fino a un comodo boschetto alla base della via Figli di Gina (scritta sulla parete).</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "a1.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "a1.jpg"; ?>">
			</a></div>
		</div>
		
		<h4>Via</h4>
		
		<div class="halved-grid">
			<div class="halved-block-text"><b>L1:</b> salire lo spigolo seguendo i fix sulla sua destra, con arrampicata facile e qualche passaggio più delicato ma sempre ben protetto, fino in cima alla struttura.
			<br>&#187; 25m, 4 fix (4c, 5a)</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "l1.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "l1.jpg"; ?>">
			</a></div>
			
			<div class="halved-block-text"><b>L2:</b> seguire il tratto appoggiato sommitale verso sinistra, individuando un passaggio tra le fronde. Salire il successivo muretto fino a sostare in cima a quest'ultimo, dove si possono togliere le scarpette e slegarsi.
			<br>&#187; 25m (2c, 4c)</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "l2.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "l2.jpg"; ?>">
			</a></div>
		</div>
		
		<h4>Discesa</h4>
		
		<div class="halved-grid">
			<div class="halved-block-text">Proseguire per facili balze fino a incrociare in breve il sentiero che collega Albonico a San Fedelino. Seguirlo verso sinistra, tornando verso la macchina, oppure portandosi all'attacco di altre vie (vari cartelli).</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "d1.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "d1.jpg"; ?>">
			</a></div>
		</div>
	
	</div>
</div>