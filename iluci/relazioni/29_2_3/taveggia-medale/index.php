<?php
	$folder = "/relazioni/29_2_3/taveggia-medale/";
?>

<div id="relazione" class="relazione">
	<h3>Relazione</h3>
	
	<table class="info roccia">
		<tr>
			<th>Data Uscita</th>
            <td><?php echo $day; ?></td>
			<th>Area</th>
            <td>Grigne</td>
        </tr>
        <tr>
            <th>Luogo di Partenza</th>
            <td>Laorca - Lecco (LC)</td>
            <th>Quota</th>
            <td>
                500m la partenza<br>
                680m (circa) l'attacco della via<br>
                950m (circa) l'uscita della via
            </td>
		</tr>
		<tr>
			<th>Dislivello</th>
            <td>500m (circa)</td>
            <th>Tempi</th>
            <td>6:00 ore (5:00 ore la via)</td>
		</tr>
		<tr>
			<th>Esposizione</th>
            <td>Sud-Est</td>
            <th>Difficoltà Tecnica</th>
            <td>VII+ (VI/A1)</td>
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
		
		<p>Da Lecco salire in Valsassina seguendo la strada vecchia. Arrivati al ponte della gallina, prendere a sx prima del tornante per entrare a Laorca. Seguire la strada fino a quando entra nella frazione (slargo con pensilina dei pullman) e parcheggiare in un posto libero.</p>
		
		<h4>Avvicinamento</h4>
		
		<div class="halved-grid">
			<div class="halved-block-text">Entrare nella frazione seguendo a destra al bivio, che porta rapidamente al cimitero di Laorca. Scendere le scale sulla sinistra e imboccare via Crogno, che con comoda cementata prosegue fino a raggiungere l'ex Rifugio Medale, dove la strada finisce. Si segue a sinistra (indicazioni San Martino e Medale) per breve sentiero che si ricollega alla strada che costeggia le paramassi tra Rancio e Laorca. Seguirla verso destra fino a una zona con panchine e un muro cementate, dove si devia a sinistra (cartello) in direzione della ferrata del Medale. Prendere a sinistra il bivio successivo con la valle della Medale (cartello) e proseguire in falsopiano fin quando si stacca un'evidente traccia verso destra che porta all'attacco della via Taveggia, scritta alla base.</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "a1.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "a1.jpg"; ?>">
			</a></div>
		</div>
		
		<h4>Via</h4>
		
		<div class="halved-grid">
			<div class="halved-block-text"><b>L1:</b> attaccare direttamente la paretina per poi uscire a sinistra su una lunga rampa, che obliquando sotto il verticale porta fino alla base di un diedro, dove son presenti due soste (a destra si stacca la via Eternium).
			<br>&#187; 50m, 1 resinato (III+, IV)</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "l1.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "l1.jpg"; ?>">
			</a></div>
			
			<div class="halved-block-text"><b>L2:</b> salire il diedro non banale ma con buone mani, uscendo a sinistra. Poi più facile fino alla sosta.
			<br>&#187; 30m, 4 resinati (IV+, III+)</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "l2.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "l2.jpg"; ?>">
			</a></div>
			
			<div class="halved-block-text"><b>L3:</b> salire in verticale per qualche metro poi traversare a sinistra seguendo la logica, puntando ad un evidente albero. Ristabilirsi con l'aiuto dell'albero fino a una comoda cengia dove si trova la sosta.
			<br>&#187; 30m, 2 resinati, 1 chiodo (IV, III+, IV)</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "l3.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "l3.jpg"; ?>">
			</a></div>
			
			<div class="halved-block-text"><b>L4:</b> percorrere l'unto diedro appena a destra della sosta, ben chiodato ma comunque non banale, il quale dopo un po' di metri obliqua verso sinistra, ma rimane continuo fino alla sosta.
			<br>&#187; 35m, 4 resinati, 5 chiodi (VI+/A0, VI, V+)</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "l4.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "l4.jpg"; ?>">
			</a></div>
			
			<div class="halved-block-text"><b>L5:</b> partenza verso sinistra, poi per risalti erbosi (attenzione, roccia delicata) fino alla cengia mediana, dove volendo si può abbandonare la via traversando verso destra (III).
			<br>&#187; 30m, 3 resinati (IV)</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "l5.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "l5.jpg"; ?>">
			</a></div>
			
			<div class="halved-block-text"><b>L6:</b> salire in verticale su passaggi atletici con buone erosioni. La sosta si trova leggermente sulla destra.
			<br>&#187; 20m, 2 resinati (IV+, V+)</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "l6.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "l6.jpg"; ?>">
			</a></div>
			
			<div class="halved-block-text"><b>L7:</b> tiro chiave della "nicchia": partire per placchetta fino a una larga fessura giallastra dove si entra col corpo. Da qui affrontare direttamente lo strapiombo, duro ma fattibile in A1, poi si esce su un piccolo speroncino con un paio di passi obbligati, fino allo strapiombo finale, più facile del primo ma comunque atletico, che permette di uscire su una zona erbosa, la sosta si trova sulla cengetta verso sinistra.
			<br>&#187; 30m, diversi resinati e chiodi, 2 cordoni (V, VII+/A1, VI, VI+/A1)</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "l7.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "l7.jpg"; ?>">
			</a></div>
			
			<div class="halved-block-text"><b>L8:</b> traversare a destra con passi delicati fino a un fittone, dove la traversata continua ora più facile fino alla verticale di un vago diedro che si segue verso l'alto. Superare un muretto più impegnativo (possibile A0, 3 resinati) e uscire in un diedro finale che con arrampicata continua porta alla sosta.
			<br>&#187; 40m, 6 resinati, 2 chiodi (V, VII-/A0, V+)</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "l8.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "l8.jpg"; ?>">
			</a></div>
			
			<div class="halved-block-text"><b>L9:</b> salire i 3 diedri consecutivi verso destra, tenendo d'occhio la buona chiodatura che indica quando cambiare diedro (proseguendo dritti ci si trova su roccia sporca, consigliabile). La sosta si trova circa una decina di metri a destra dalla verticale di quella precedente.
			<br>&#187; 40m, 3 resinati, 4 chiodi (V+, V)</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "l9.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "l9.jpg"; ?>">
			</a></div>
			
			<div class="halved-block-text"><b>L10:</b> salire il canale erboso alla destra della sosta, molto sporca la parte bassa, ma non difficile. Sosta su albero all'uscita della parete
			<br>&#187; 20m (II, IV)</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "l10.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "l10.jpg"; ?>">
			</a></div>
		</div>
		
		<h4>Discesa</h4>
		
		<div class="halved-grid">
			<div class="halved-block-text">Seguire il sentiero che parte a mezzacosta in direzione Coltignone (Nord), che con diverse catene e tratti anche ripidi fa perdere dislivello fino a ricongiungersi al sentiero che scende dalla cima nella valle della Medale. Si scende ora senza problemi fino a ricongiungersi all'avvicinamento nei pressi delle reti paramassi. Da qui a ritroso fino alla macchina.</div>
			
			<div class="halved-block-image"><a href="<?php echo $folder . "d1.jpg"; ?>" target="_blank" rel="noopener noreferrer">
				<img class="image" src="<?php echo $folder . "d1.jpg"; ?>">
			</a></div>
		</div>
	
	</div>
</div>