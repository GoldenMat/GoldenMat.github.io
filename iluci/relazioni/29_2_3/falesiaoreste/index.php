<?php
	$folder = "/relazioni/29_2_3/falesiaoreste/";
?>

<div id="relazione" class="relazione">
	<h3>Relazione</h3>
	
	<table class="info falesia">
		<tr>
			<th>Data Uscita</th>
            <td><?php echo $day; ?></td>
			<th>Area</th>
			<td>Grigne</td>
		</tr>
		<tr>
			<th>Luogo di Partenza</th>
			<td>Parcheggio di Via alle Scuole - Perledo (LC)</td>
			<th>Quota</th>
			<td>
				380m la partenza<br>
				500m la falesia
			</td>
		</tr>
		<tr>
			<th>Dislivello</th>
			<td>120m</td>
			<th>Tempi</th>
			<td>01:00 ore</td>
		</tr>
		<tr>
			<th>Esposizione</th>
			<td>Sud-Ovest</td>
			<th>Difficoltà Tecnica</th>
			<td>dal 5a al 6b+</td>
		</tr>
		<tr>
			<th>Punti di Appoggio</th>
			<td>Nessuno</td>
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
		
		<p>Da Lecco prendere la SS36 uscendo per Abbadia e seguendo la vecchia strada del lago fino a Varenna. Entrare in paese e superarlo (o ancora meglio, fare la galleria e alla rotonda tornare verso il paese), per poi nei pressi della stazione imboccare la strada che sale verso Esino. Giunti al paese di Perledo, prima di entrare in centro prendere una deviazione sulla destra, via alle Scuole, e parcheggiare dove possibile (disco orario 4 ore).</p>
		
		<h4>Avvicinamento</h4>
		
		<div class="halved-grid">
			<div class="halved-block-text">Già dal parcheggio compare il cartello che indica la falesia, in ogni caso inoltrarsi per i vicoli del centro per poi prendere la mulattiera direzione Esino. Salire un po' con bei tratti panoramici su Vezio e sul lago, fino a passare sotto alla falesia (cartello) che si raggiunge con una comoda gradinata.</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "a1.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "a1.jpg"; ?>">
			</a></div>
		</div>
		
		<h4>Descrizione Falesia</h4>
		
		<div class="halved-grid">
			<div class="halved-block-text">La falesia è divisa fondamentalmente in due parti, la prima sulla sinistra dove compaiono i tiri più facili (Valentina, Riccardo, Il Ghiro) e quella di destra dove ci sono quelli più difficili. Sopra ai tiri centrali c'è una catena, probabilmente utilizzata per attrezzare la falesia, e sopra quest'ultima ci sono anche degli altri tiri percorribili in moulinette soltanto se si avesse una corda bella lunga. La base è abbastanza comoda ma non troppo spaziosa</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "v1.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "v1.jpg"; ?>">
			</a></div>
		</div>
		
		<h4>Discesa</h4>
		
		<div class="halved-grid">
			<div class="halved-block-text">Rientrare alla macchina per il sentiero dell'avvicinamento.</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "d1.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "d1.jpg"; ?>">
			</a></div>
		</div>
	
	</div>
</div>