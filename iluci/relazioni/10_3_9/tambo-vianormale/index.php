<?php
	$folder = "/relazioni/10_3_9/tambo-vianormale/";
?>

<div id="relazione" class="relazione">
	<h3>Relazione</h3>
	
	<table class="info escursionismo">
		<tr>
			<th>Data Uscita</th>
            <td><?php echo $day; ?></td>
			<th>Area</th>
			<td>Tambò-Quadro</td>
		</tr>
		<tr>
			<th>Luogo di Partenza</th>
			<td>Passo dello Spluga - Madesimo (SO)</td>
			<th>Quota</th>
			<td>
				??m la partenza<br>
				??m la cima
			</td>
		</tr>
		<tr>
			<th>Dislivello</th>
			<td>??m</td>
			<th>Tempi</th>
			<td>??hh:mm ore</td>
		</tr>
		<tr>
			<th>Esposizione</th>
			<td>??PuntiCardinali</td>
			<th>Difficoltà Tecnica</th>
			<td>??ScalaT</td>
		</tr>
		<tr>
			<th>Punti di Appoggio</th>
			<td>??</td>
			<th>Acqua</th>
			<td>??</td>
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
		
		<p>??Accesso</p>
		
		<h4>Giro</h4>
		
		<div class="halved-grid">
			<div class="halved-block-text">??Giro1</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "v1.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "v1.jpg"; ?>">
			</a></div>
		</div>
	
	</div>
</div>