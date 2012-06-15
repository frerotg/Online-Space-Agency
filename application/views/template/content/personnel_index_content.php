<div class="personnel_index">
	<?php if($base > 0): ?>
	<ul class="sub-menu">

		<li><?= anchor('c_personnel/listRecruitable', 'Acheter un personnel', array('title' => 'Accedez à la page d\'achat du personnel', 'class' => '')); ?>
		</li>
	</ul>
	<p class="description">
		Voici le personnel actuel de votre agence, le personnel est divisé en différents types et chaque type a une importance. Les pilotes et les spationautes sont vos représentants durant les missions, les scientifiques s'occupent de la recherche de nouvelles technologies et les Hors-la-loi/Gardes ne sont actuellement pas encore disponible.
	</p>
	<div class="alert">
		<div class="success">
			<p></p>
		</div>
		<div class="fail">
			<p></p>
		</div>
	</div>
	<div class="content-personnel">
		<ul>
			<li><a href="#table-personnel1">Spationaute</a></li>
			<li><a href="#table-personnel2">Pilote</a></li>
			<li><a href="#table-personnel3">Scientifique</a></li>
			<li><a href="#table-personnel4">Hors la loi</a></li>
			<li><a href="#table-personnel5">Garde</a></li>
		</ul>
		<?php foreach($types AS $type): ?>
		<table class="table-personnel" id="table-personnel<?= $type->id_type_personnel ?>">
			<thead>
				<tr>
	                 <th class="personnel-name">Nom</th>
	                 <th class="personnel-skill1 <?= $type->skill1_type_personnel ?>"><?= $type->skill1_type_personnel ?></th>
	                 <th class="personnel-skill2 <?= $type->skill2_type_personnel ?>"><?= $type->skill2_type_personnel ?></th>
	                 <th class="personnel-salaire">Salaire</th>
	                 <th class="personnel-valeur">Valeur</th>
	                 <th class="personnel-action"></th>
	             </tr>
             </thead>
             <tbody>
	             <?php switch ($type->id_type_personnel){
	             	case 2: ?>
	             		<?php foreach($pilotes AS $pilote): ?>
	             			<tr>
				                <td class="personnel-name"><?= $pilote->name_personnel; ?></td>
				                <td class="personnel-skill1"><?= $pilote->skill1_personnel; ?></td>
				                <td class="personnel-skill2"><?= $pilote->skill2_personnel; ?></td>
				                <td class="personnel-salaire"><?= $pilote->salaire_personnel; ?></td>
				                <td class="personnel-valeur"><?= $pilote->valeur_personnel; ?></td>
				    			<td class="personnel-action"><?php echo anchor('c_personnel/kick/' .$pilote->id_personnel ,'Virer', array('title' =>'Virer ce personnel', 'class' => 'kick', 'id' => $pilote->id_personnel)) ?></td>
	              			</tr>
	             		<?php endforeach;
	             		if(count($pilotes) !== $limit['pilote']):
	             			$restant = $limit['pilote'] - count($pilotes);
	             			for($i=1; $i<=$restant; $i++): ?>
	             			<tr>
				                <td colspan="6" class="post-free">Poste vacant</td>
	              			</tr>
	             			<?php endfor;
	             		endif;
	             		break;
	             	case 1: ?>
	             		<?php foreach($spationautes AS $spationaute): ?>
	             			<tr>
				                <td class="personnel-name"><?= $spationaute->name_personnel; ?></td>
				                <td class="personnel-skill1"><?= $spationaute->skill1_personnel; ?></td>
				                <td class="personnel-skill2"><?= $spationaute->skill2_personnel; ?></td>
				                <td class="personnel-salaire"><?= $spationaute->salaire_personnel; ?></td>
				                <td class="personnel-valeur"><?= $spationaute->valeur_personnel; ?></td>
				    			<td class="personnel-action"><?php echo anchor('c_personnel/kick/' .$spationaute->id_personnel ,'Virer', array('title' =>'Virer ce personnel', 'class' => 'kick', 'id' => $spationaute->id_personnel)) ?></td>
	              			</tr>
	             		<?php endforeach;
	             		if(count($spationautes) !== $limit['spationaute']):
	             			$restant = $limit['spationaute'] - count($spationautes);
	             			for($i=1; $i<=$restant; $i++): ?>
	             			<tr>
				                <td colspan="6" class="post-free">Poste vacant</td>
	              			</tr>
	             			<?php endfor;
	             		endif;
	             		break;
	             	case 3: ?>
	             		<?php foreach($scientifiques AS $scientifique): ?>
	             			<tr>
				                <td class="personnel-name"><?= $scientifique->name_personnel; ?></td>
				                <td class="personnel-skill1"><?= $scientifique->skill1_personnel; ?></td>
				                <td class="personnel-skill2"><?= $scientifique->skill2_personnel; ?></td>
				                <td class="personnel-salaire"><?= $scientifique->salaire_personnel; ?></td>
				                <td class="personnel-valeur"><?= $scientifique->valeur_personnel; ?></td>
				    			<td class="personnel-action"><?php echo anchor('c_personnel/kick/' .$scientifique->id_personnel ,'Virer', array('title' =>'Virer ce personnel', 'class' => 'kick', 'id' => $scientifique->id_personnel)) ?></td>
	              			</tr>
	             		<?php endforeach;
	             		if(count($scientifiques) !== $limit['scientifique']):
	             			$restant = $limit['scientifique'] - count($scientifiques);
	             			for($i=1; $i<=$restant; $i++): ?>
	             			<tr>
				                <td colspan="6" class="post-free">Poste vacant</td>
	              			</tr>
	             			<?php endfor;
	             		endif;
	             		break;
	             	case 4: ?>
	             		<?php foreach($horslalois AS $horslaloi): ?>
	             			<tr>
				                <td class="personnel-name"><?= $horslaloi->name_personnel; ?></td>
				                <td class="personnel-skill1"><?= $horslaloi->skill1_personnel; ?></td>
				                <td class="personnel-skill2"><?= $horslaloi->skill2_personnel; ?></td>
				                <td class="personnel-salaire"><?= $horslaloi->salaire_personnel; ?></td>
				                <td class="personnel-valeur"><?= $horslaloi->valeur_personnel; ?></td>
				    			<td class="personnel-action"><?php echo anchor('c_personnel/kick/' .$horslaloi->id_personnel ,'Virer', array('title' =>'Virer ce personnel', 'class' => 'kick', 'id' => $horslaloi->id_personnel)) ?></td>
	              			</tr>
	             		<?php endforeach;
	             		if(count($horslalois) !== $limit['horslaloi']):
	             			$restant = $limit['horslaloi'] - count($horslalois);
	             			for($i=1; $i<=$restant; $i++): ?>
	             			<tr>
				                <td colspan="6" class="post-free">Poste vacant</td>
	              			</tr>
	             			<?php endfor;
	             		endif;
	             		break;
	             	case 5: ?>
	             		<?php foreach($securites AS $securite): ?>
	             			<tr>
				                <td class="personnel-name"><?= $securite->name_personnel; ?></td>
				                <td class="personnel-skill1"><?= $securite->skill1_personnel; ?></td>
				                <td class="personnel-skill2"><?= $securite->skill2_personnel; ?></td>
				                <td class="personnel-salaire"><?= $securite->salaire_personnel; ?></td>
				                <td class="personnel-valeur"><?= $securite->valeur_personnel; ?></td>
				    			<td class="personnel-action"><?php echo anchor('c_personnel/kick/' .$securite->id_personnel ,'Virer', array('title' =>'Virer ce personnel', 'class' => 'kick', 'id' => $securite->id_personnel)) ?></td>
	              			</tr>
	             		<?php endforeach;
	             		if(count($securites) !== $limit['securite']):
	             			$restant = $limit['securite'] - count($securites);
	             			for($i=1; $i<=$restant; $i++): ?>
	             			<tr>
				                <td colspan="6" class="post-free">Poste vacant</td>
	              			</tr>
	             			<?php endfor;
	             		endif;
	             		break; ?>
	             <?php } ?>
             </tbody>
		</table>
		<?php endforeach; ?>
	</div>
	<?php else: ?>
	<p class="nothing">Vous devez construire le "Centre de Commandement" afin de pouvoir recruter du personnel</p>
	<?php endif; ?>
</div>
