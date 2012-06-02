<div class="mission_index">
	<a href="#" title="Lancer une nouvelle mission" class="new-mission">
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
			<a></a>
			<?php endforeach; ?>
		<?php else: ?>
		<p class="nothing">Aucune mission actuellement</p>
		<?php endif; ?>
	</div>
</div>