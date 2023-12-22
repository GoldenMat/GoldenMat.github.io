<?php
	$folder = "/relazioni/29_2_3/torrionediaz/";
?>

<div id="relazione" class="relazione">
	<h3>Relazione</h3>
	
	<table class="info ferrata">
		<tr>
			<th>Data Uscita</th>
            <td><?php echo $day; ?></td>
			<th>Area</th>
			<td>Grigne</td>
		</tr>
		<tr>
			<th>Luogo di Partenza</th>
			<td>Grattacielo dei Piani Resinelli - Abbadia Lariana (LC)</td>
			<th>Quota</th>
			<td>
				1280m la partenza<br>
				1471m la cima del Coltignone<br>
				1419m la cima
			</td>
		</tr>
		<tr>
			<th>Dislivello</th>
			<td>300m (circa)</td>
			<th>Tempi</th>
			<td>02:00 ore (00:15 ore la ferrata)</td>
		</tr>
		<tr>
			<th>Esposizione</th>
			<td>Nord</td>
			<th>Difficoltà Tecnica</th>
			<td>C</td>
		</tr>
		<tr>
			<th>Punti di Appoggio</th>
			<td>Nessuno oltre la partenza</td>
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
		
		<p>Da Lecco recarsi in Valsassina e alla rotonda di Ballabio prendere a sinistra imboccando la strada che sale ai Piani Resinelli. Seguire la strada che sale lungamente per 14 tornanti, e arrivati al piazzale superarlo e passare a sinistra della chiesetta, imboccando la cosiddetta "circonvallazione". Seguire la strada, larga ma a senso unico, fino a raggiungere l'evidente grattacielo, sotto al quale si parcheggia a pagamanto (5€ al giorno nel 2023).</p>
		
		<h4>Avvicinamento</h4>
		
		<div class="halved-grid">
			<div class="halved-block-text">Dal grattacielo seguire l'evidente strada che sale verso il parco del Valentino. Superare un bel cancello tramite un comodo passaggio, superare anche la casa museo di Villa Gerosa, e arrivare a un bivio in cui si segue a sinistra (indicazioni Roccolo). In breve raggiungere un ulteriore bivio, dove si segue a sinistra, e con un breve saliscendi si giunge sulla comoda e panoramicissima cima del Coltignone.</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "a1.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "a1.jpg"; ?>">
			</a></div>
			
			<div class="halved-block-text">Dal Coltignone scendere verso Sud (direzione Lecco) seguendo la parte finale del sentiero GER, facendo attenzione alla forte ripidità. A un certo punto si giunge a un tratto con una catena che si segue per circa 20-30m di dislivello in discesa, facendo attenzione alla bocchetta (sulla destra) che separa Torrione Diaz dal Coltignoncino. Arrivati all'altezza di quest'ultima (bollo col numero del sentiero sulla sinistra), si lascia il sentiero traversando su erba fino alla bocchetta. Se si è individuato il punto giusto si noterà una traccia poco marcata, un nastrino rosso su un alberello, e un piolo nei pressi della bocchetta.</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "a2.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "a2.jpg"; ?>">
			</a></div>
		</div>
		
		<h4>Ferrata</h4>
		
		<div class="halved-grid">
			<div class="halved-block-text">Salire il saltino aiutandosi col piolo, per poi portarsi con attenzione all'attacco di un canale dove sale un'evidente catena. Seguire interamente il canaletto, non esposto ma abbastanza liscio, fino a uscire con l'aiuto di un piolo su erba e ghiaia ripide che si superano con l'aiuto della catena. Giunti al punto più alto della catena si abbandona la ferratina per girare dietro al Torrione, e salire facilmente sulla sommità (ometto di vetta).</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "v1.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "v1.jpg"; ?>">
			</a></div>
		</div>
		
		<h4>Discesa</h4>
		
		<div class="halved-grid">
			<div class="halved-block-text">Percorrere con attenzione la ferrata al contrario, risalire al Coltignone, e scendere ai Resinelli seguendo a ritroso il sentiero dell'avvicinamento.</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "d1.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "d1.jpg"; ?>">
			</a></div>
		</div>
	
	</div>
</div>