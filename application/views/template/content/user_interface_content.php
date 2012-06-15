<div class="user_interface_index">
	<div class="welcome">
		<p>Bienvenue Mr/Mme <?php echo $this->session->userdata('username'); ?></p>
	</div>
	<div class="historicalDate">
		<p><?= $know_date['description_know_date'] ?></p>
	</div>
	<div class="mission">
		<h1><span>Mission en cours</span></h1>
		<?php if(count($missions)): ?>
			<?php foreach($missions as $mission): ?>
			<div class="way">
				<div class="earth"><h2>Terre</h2></div><!--
			 --><div class="progress"></div><!--
			 --><div class="destination"><h2><?php echo $mission->name_space_object ?></h2></div><!--
			 --><div class="rocket">
					<div class="infobulle-rocket">
						<p><?php echo $mission->name_status ?></p>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		<?php else: ?>
		<p class="nothing">Aucune mission actuellement</p>
		<?php endif; ?>
	</div>
	<div class="batiment-encours encours">
		<h3>Bâtiment</h3>
		<?php if(!empty($building)): ?>
		<img src="<?=base_url(); ?>/data/image-batiment/<?=$building->id_building ?>-mini.jpg" width="120" height="80" />
		<p class="status countdownBuilding"><span class="<?php echo ($building->date_end_building - now()); ?>"><?php echo ($building->date_end_building - now()); ?><span></p>
		<?php else: ?>
		<p class="status nothing">Aucun bâtiment en construction</p>
		<?php endif; ?>
	</div><!--
	--><div class="technologie-encours encours">
		<h3>Technologie</h3>
		<?php if(!empty($technology)): ?>
		<img src="" alt="" width="120" height="80" />
		<p class="status countdownTechnology"><span class="<?php echo ($technology->date_end_technology - now()); ?>"><?php echo ($technology->date_end_technology - now()); ?><span></p>
		<?php else: ?>
		<p class="status nothing">Aucune technologie en développement</p>
		<?php endif; ?>
	</div><!--
	--><div class="equipement-encours encours">
		<h3>Equipement</h3>
		<?php if(!empty($equipment)): ?>
		<img src="" alt="" width="120" height="80" />
		<p class="status countdownEquipment"><span class="<?php echo ($equipment->date_end_equipment - now()); ?>"><?php echo ($equipment->date_end_equipment - now()); ?><span></p>
		<?php else: ?>
		<p class="status nothing">Aucun équipement en construction</p>
		<?php endif; ?>
	</div>
	<div class="tuto">
		<h1>Voici les étapes à suivre pour bien démarrer dans O.S.A :</h1>
		<div class="list-tuto">
			<p>1.Construction du "Centre de Commandement"</p>
			<p>2.Construction des quatre bâtiments de type "Ressources"</p>
			<p>3.Construction du "Bureau de Relation Gouvernemental"</p>
			<p>4.Recrutement de personnel</p>
			<p>5.Contruction des quatre bâtiments de type "Construction"</p>
			<p>6.Construction du Télescope"</p>
			<p>7.Construction de la "Base de Lancement"</p>
			<p>9.Production des quatre types d'équipements</p>
			<p>10.Lancement de votre première mission</p>
		</div>
	</div>
</div>