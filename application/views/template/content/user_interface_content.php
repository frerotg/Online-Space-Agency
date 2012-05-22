<div class="user_interface_index">
	<div class="welcome">
		<p>Bienvenue Mr/Mme <?php echo $this->session->userdata('username'); ?></p>
	</div>
	<div class="historicalDate">
		<p>Le 25 avril 1990, le télescope spatial Hubble fût lancé depuis Cap Canaveral</p>
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
					<?php if($mission->id_status == 1): ?>
					<p class="time countdown"><?php echo ($mission->date_start_start - now()) ?></p>
					<?php elseif($mission->id_status == 2 or $mission->id_status == 3): ?>
					<p class="time countdown"><?php echo ($mission->date_start_end - now()) ?></p>
					<?php elseif($mission->id_status == 4 or $mission->id_status == 6): ?>
					<p class="time countdown"></p>
					<?php elseif($mission->id_status == 5): ?>
					<p class="time countdown"><?php echo ($mission->date_end_space_action - now()) ?></p>
					<?php elseif($mission->id_status == 7): ?>
					<p class="time countdown"><?php echo ($mission->date_end_end - now()) ?></p>
					<?php endif; ?>
				</div>
			</div>
			<?php endforeach; ?>
		<?php else: ?>
		<p class="nothing">Aucune mission actuellement</p>
		<?php endif; ?>
	</div>
	<div class="batiment-encours encours">
		<h3>Batiment</h3>
		<?php if(!empty($building)): ?>
		<img src="<?=base_url(); ?>/data/image-batiment/<?=$building->id_building ?>-mini.jpg" width="120" height="80" />
		<p class="status countdown"><?php echo ($building->date_end_building - now()); ?></p>
		<?php else: ?>
		<p class="status nothing">Aucun batiment en construction</p>
		<?php endif; ?>
	</div><!--
	--><div class="technologie-encours encours">
		<h3>Technologie</h3>
		<?php if(!empty($technology)): ?>
		<img src="" alt="" width="120" height="80" />
		<p class="status countdown"><?php echo ($technology->date_end_technology - now()); ?></p>
		<?php else: ?>
		<p class="status nothing">Aucune technologie en developpement</p>
		<?php endif; ?>
	</div><!--
	--><div class="equipement-encours encours">
		<h3>Equipement</h3>
		<?php if(!empty($equipment)): ?>
		<img src="" alt="" width="120" height="80" />
		<p class="status countdown"><?php echo ($equipment->date_end_equipment - now()); ?></p>
		<?php else: ?>
		<p class="status nothing">Aucun equipement en construction</p>
		<?php endif; ?>
	</div>
</div>