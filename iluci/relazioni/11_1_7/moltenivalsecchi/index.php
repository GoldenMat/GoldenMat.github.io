<?php
	$folder = "/relazioni/11_1_7/moltenivalsecchi/";
?>

<div id="relazione" class="relazione">
	<h3>Relazione</h3>
	
	<table class="info falesia">
		<tr>
			<th>Data Uscita</th>
            <td><?php echo $day; ?></td>
			<th>Area</th>
			<td>Palanzone</td>
		</tr>
		<tr>
			<th>Luogo di Partenza</th>
			<td>Cascina Zoccolo - Erba (CO)</td>
			<th>Quota</th>
			<td>
				630m la partenza<br>
				700m (circa) l'attacco della via
				800m (circa) l'uscita della via
			</td>
		</tr>
		<tr>
			<th>Dislivello</th>
			<td>170m (circa)</td>
			<th>Tempi</th>
			<td>03:00 ore (02:00 ore la via)</td>
		</tr>
		<tr>
			<th>Esposizione</th>
			<td>Est</td>
			<th>Difficoltà Tecnica</th>
			<td>6b (5b/A0)</td>
		</tr>
		<tr>
			<th>Punti di Appoggio</th>
			<td>Nessuno</td>
			<th>Acqua</th>
			<td>Piccolo fiume uscente dal Buco del Piombo, bere a proprio rischio.</td>
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
		
		<p>Da Lecco imboccare la statale verso Como, e superato il Bennet di Erba prendere a destra sulla salita che porta verso Albavilla. Alla successiva rotonda andare in direzione Ponte Lambro, fino a una deviazione sulla sinistra indicante il Buco del Piombo (cartelli). Seguire la strada stretta fino a un bivio, dove si gira a destra e con gli ultimi tornanti scoscesi si giunge fino a uno spiazzo con cartello nei pressi della Cascina Zoccolo, dove c'è una ristretta possibilità di parcheggio.</p>
		
		<h4>Avvicinamento</h4>
		
		<div class="halved-grid">
			<div class="halved-block-text">Seguire la strada carrabile che prosegue oltre il parcheggio, fino a un bivio dove si prende a destra, in leggera discesa, fino a giungere alla grotta del Buco del Piombo. La via attacca sulla destra della grotta tramite sentierino, è sulla sinistra nei pressi di un ancoraggio di partenza (scritta rossa sbiadita).</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "a1.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "a1.jpg"; ?>">
			</a></div>
		</div>
		
		<h4>Via</h4>
		
		<div class="halved-grid">
			<div class="halved-block-text"><b>L1:</b> si sale in verticale su buone prese (fix poco visibili), ignorando poi i fix nuovi che vanno dritti prendendo invece un evidente cengetta che traversa verso destra, per poi salire un diedrino-fessura che porta a una comoda cengia. La sosta è poco a destra.
			<br>&#187; 30m, qualche spit (4b, 4a, 4c)</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "l1.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "l1.jpg"; ?>">
			</a></div>

			<div class="halved-block-text"><b>L2:</b> traversare a destra, superare un passo delicato ma ben protetto, e salire in verticale nel diedro seguendo gli spit. Arrivati a una zona più sporca, inviduare l'ancoraggio successivo proseguendo in verticale su difficoltà minori ma senza protezioni (qua è l'unico punto della via dove avere un friend medio può far comodo). Seguire ancora il vago diedro tenendo leggermente la sinistra, fino a una catena che permette di superare una zona sporca arrivando alla comoda sosta.
			<br>&#187; 40m, diversi spit (5c/A0, 5b, 5a)</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "l2.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "l2.jpg"; ?>">
			</a></div>

			<div class="halved-block-text"><b>L3:</b> si sale l'evidente diedro canale sopra la sosta, l'inizio è ostico poi le difficoltà diminuiscono. La sosta si trova a sinistra presso uno spiazzo dove la verticalità si spezza un po'.
			<br>&#187; 35m, diversi spit (5b, 5a)</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "l3.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "l3.jpg"; ?>">
			</a></div>

			<div class="halved-block-text"><b>L4:</b> risalire il pilastrino sopra la sosta stando un pochino a destra (più facile di quello che sembra), per poi tramite roccette più appoggiate portarsi alla parte finale della via. Qui l'uscita originale segue il canale a destra (visibile uno spit, sconsigliabile perchè sporco); in alternativa si prende la placca sinistra, molto dura ma ben chiodata, che porta fino al bosco dove si trova la sosta finale.
			<br>&#187; 35m, diversi spit (5a, 4c, 6b/A0, 6a/A0)</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "l4.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "l4.jpg"; ?>">
			</a></div>
		</div>
		
		<h4>Discesa</h4>
		
		<div class="halved-grid">
			<div class="halved-block-text">È possibile scendere in doppia con due calate con corde da 50m, fino alla S2 e da lì fino a terra. In alternativa (noi abbiam fatto così) si sale brevemente nel bosco fino a incrociare un evidente sentiero, che seguito a sinistra porta rapidamente al bivio incontrato durante l'avvicinamento, da qui a sinistra per ripassare all'attacco della via o a destra per tornare alla macchina.</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "d1.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "d1.jpg"; ?>">
			</a></div>
		</div>
	
	</div>
</div>