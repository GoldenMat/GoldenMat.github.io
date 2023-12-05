<?php
	$folder = "/relazioni/15_2_4/muntgriatschouls/";
?>

<div id="relazione" class="relazione">
	<h3>Relazione</h3>

	
	<table class="info sci">
		<tr>
			<th>Data Uscita</th>
            <td><?php echo $day; ?></td>
			<th>Area</th>
			<td>Kesch</td>
		</tr>
		<tr>
			<th>Luogo di Partenza</th>
			<td>Parcheggio di Braschigls - S-Chanf (Svizzera, Canton Grigioni)</td>
			<th>Quota</th>
			<td>
				1670m la partenza<br>
				2020m la piana di Laret<br>
				2767m la cima
			</td>
		</tr>
		<tr>
			<th>Dislivello</th>
			<td>1097m</td>
			<th>Tempo di salita</th>
			<td>03:00 ore</td>
		</tr>
		<tr>
			<th>Esposizione</th>
			<td>Sud-Est</td>
			<th>Difficoltà Tecnica</th>
			<td>2.2/E1</td>
		</tr>
		<tr>
			<th>Punti di Appoggio</th>
			<td>Nessuno</td>
			<th>Pendii Pericolosi</th>
			<td>La parte alta della discesa può essere soggetta a scariche con neve insicura, nel caso meglio scendere dalla via di salita</td>
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
		
		<p>Da Lecco seguire la SS36 fino a Colico. Da qui portarsi in val Chiavenna e alla rotonda in centro al paese portarsi verso la dogana Svizzera di Castesegna. Entrati in territorio svizzero percorrere tutta la val Bregaglia fino al Passo del Maloja, poi costeggiando i bei laghi dell'Engadina arrivare a San Moritz. Proseguire direzione Zernez fino al paese di S-Chanf, dove si prende a sinistra entrando nel paese, e lo si percorre tutto verso sinistra (Ovest) fino a che, in uscita dal nucleo, si trova un comodo parcheggio con pochi posti dove è possibile cominciare la salita.</p>
		
		<h4>Salita</h4>
		
		<div class="halved-grid">
			<div class="halved-block-text">Salire sul fianco del pendio sopra al paese in direzione Ovest (verso Zuoz) fino a una piccola dorsale che permette di salire con diverse inversioni fino al rado boschetto soprastante, superando un paio di casette fino alla comoda piana di Laret.</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "v1.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "v1.jpg"; ?>">
			</a></div>

			<div class="halved-block-text">Portarsi fino in fondo alla piana dove si ricomincia a salire nel sempre rado bosco, fino a uscire sui larghi pendii finali. Superare una casetta dalla quale si sale cercando di portarsi verso il largo crestone di destra (Est), con bella vista sulla sottostante val Susauna, fino nella parte finale a prendere la cresta vera e propria che si segue comodamente fino alla larga cima (piccola struttura di vetta poco sotto sul versante Engadina).</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "v2.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "v2.jpg"; ?>">
			</a></div>
		</div>
		
		<h4>Discesa</h4>
		
		<div class="halved-grid">
			<div class="halved-block-text">Nel caso ci sia concreto rischio di scariche è consigliato scendere dalla via di salita. In alternativa è possibile scendere direttamente in direzione Engadina (Sud-Est), seguendo la linea che si preferisce, dove diversi pendii si alternano a diverse vallette. Attenzione nella parte bassa a non tenere troppo la destra, per non finire in un ripido canale che porta in direzione Zuoz, ma a riprendere il bosco nei pressi di Laret per poi scendere seguendo maggiormente la linea di salita.</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "d1.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "d1.jpg"; ?>">
			</a></div>
		</div>
	
	</div>
</div>