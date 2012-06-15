<div class="mission_index">
	<a href="<?=base_url(); ?>index.php/c_mission/createMission" title="Lancer une nouvelle mission" class="new-mission">
		<div>
			<p>Lancer une nouvelle mission</p>
		</div>
	</a>
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
			<?php if(($mission->id_status == 4) OR ($mission->id_status == 6)): ?>
			<a href="<?=base_url(); ?>index.php/c_mission/viewMission/<?=$mission->id_mission ?>" title="Status de mla mission" class="status-mission">
				Voir l'etat de la mission
			</a>
			<?php endif; ?>
			<?php endforeach; ?>
		<?php else: ?>
		<p class="nothing">Aucune mission actuellement</p>
		<?php endif; ?>
	</div>
</div>