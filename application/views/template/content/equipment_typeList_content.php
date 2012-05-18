	<div class="alert">
		<div class="success">
			<p></p>
		</div>
		<div class="fail">
			<p></p>
		</div>
	</div>
<table class="table">
	<thead>
		<tr>
			<th>Nom du bâtiment</th>
			<th>Status du bâtiment</th>
			<th>Nombre d'exemplaire(s)</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($equipments AS $equipment):
			$requiredsBuilding = !empty($equipment->building_required)?unserialize($equipment->building_required):unserialize('a:0:{}');
			$requiredsTechnology = !empty($equipment->technology_required)?unserialize($equipment->technology_required):unserialize('a:0:{}');
			
			$ok = 1;
			foreach($requiredsBuilding AS $id => $level){
				if($user_buildings[$id] >= $level){}else{$ok = 0;}
			}
			foreach($requiredsTechnology AS $id => $level){
				if($user_technologys[$id] >= $level){}else{$ok = 0;}
			}
			?>
			<tr>
				<td><img src="<?=base_url(); ?>/data/image-equipment/<?=$equipment->id_equipment ?>-mini.jpg" /></td>
				<td><?= $equipment->name_equipment ?></td>
			<?php if($equipment->status_equipment == 1):?>
	        	<td>Votre equipement est en construction et il reste <span id="countdown" class="<?= $equipment->date_end_equipment - now() ?>"></span> sec</td>
	        <?php else: ?>
	        	<?php if($underConstruction !== 1): ?>
	            	<?php if($ok == 1): ?>
	                	<td><?= anchor('c_equipment/build/'.$equipment->id_equipment,'Construire', array('title' => 'Construire le'.$equipment->name_equipment, 'class' => 'build', 'id' => $equipment->id_equipment)) ?></td>
					<?php else: ?>
	                	<td>Vous ne répondez pas aux conditions nécéssaire pour construire cet équipement</td>
	                <?php endif; ?>
				<?php else: ?>
					<td>Vous avez déjà un équipement en construction</td>
				<?php endif; ?>
	        <?php endif; ?>
	        </tr>
		<?php endforeach; ?>
		</tr>
	</tbody>
</table>