<?php
	$folder = "/relazioni/29_2_1/sodadura-crestasudovest/";
?>

<div id="relazione" class="relazione">
	<h3>Relazione</h3>
	
	<table class="info escursionismo">
		<tr>
			<th>Data Uscita</th>
            <td><?php echo $day; ?></td>
			<th>Area</th>
			<td>Campelli-Aralalta</td>
		</tr>
		<tr>
			<th>Luogo di Partenza</th>
			<td>Partenza carrozzabile per Artavaggio - Moggio (LC)</td>
			<th>Quota</th>
			<td>
				1200m la partenza<br>
				1650m i Piani di Artavaggio<br>
				2010m la cima
			</td>
		</tr>
		<tr>
			<th>Dislivello</th>
			<td>810m</td>
			<th>Tempi</th>
			<td>05:00 ore</td>
		</tr>
		<tr>
			<th>Esposizione</th>
			<td>Sud-Ovest</td>
			<th>Difficoltà Tecnica</th>
			<td>T2</td>
		</tr>
		<tr>
			<th>Punti di Appoggio</th>
			<td>I rifugi di Artavaggio e poco sopra i rifugi Nicola e Cazzaniga-Merlini</td>
			<th>Acqua</th>
			<td>Diverse sorgenti fino ai Piani di Artavaggio, più sopra solo ai rifugi</td>
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
		
		<p>Da Lecco salire in Valsassina fino a Balisio, dove si prende a destra in direzione Culmine di San Pietro. Alla rotonda di Cremeno si imbocca la strada per la Culmine (destra), che superando Cassina e Moggio si innalza a tornanti sul versante Est della valle Ferrera. Circa 1km prima di arrivare alla Culmine si nota una stanga sulla sinistra, con indicazioni per Artavaggio: parcheggiare nei pressi (pochi posti).</p>
		
		<h4>Giro</h4>
		
		<div class="halved-grid">
			<div class="halved-block-text">Imboccare la strada che lungamente, con qualche tornante, porta senza pendenze eccessive fino ai Piani di Artavaggio, dove si lascia a destra l'ex albergo Sciatori.</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "v1.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "v1.jpg"; ?>">
			</a></div>

			<div class="halved-block-text">Tenere la destra in direzione rifugio Gherardi, fino ad arrivare alla base della cresta Sud-Ovest del Sodadura. Salire ora in verticale, sentiero non sempre evidente nel primo tratto, seguendo poi la logica e panoramica cresta. Si prosegue superando un paio di dossi senza difficoltà, un piccolo tratto su roccette facili e si giunge sulla comoda cima, panorama a 360° nelle giornate terse.</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "v2.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "v2.jpg"; ?>">
			</a></div>

			<div class="halved-block-text">La discesa si svolge dalla cresta Nord-Ovest, la via normale, che scende rapidamente fino al rifugio Nicola. Da qui si imbocca la carrozzabile che riporta prima ai Piani di Artavaggio, e poi diventa la stessa percorsa in salita che arriva fino a dove si è lasciata la macchina.</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "v3.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "v3.jpg"; ?>">
			</a></div>
		</div>
	
	</div>
</div>