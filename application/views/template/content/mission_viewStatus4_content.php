<div class="mission_view4 mission_view">
	<ul class="tabs-mission">
		<li><a href="#actions">Actions de la mission</a></li>
		<li><a href="#discover">Découverte de l'astre</a></li>
	</ul>
	<div id="actions">
		<div class="destination">
			<div class="image-destination">
				<img class="img-1" src="<?=base_url(); ?>/data/image-astre/<?=$space_object->id_space_object ?>.jpg" />
				<img class="img-2" src="<?=base_url(); ?>/data/image-astre/<?=$space_object->id_space_object ?>.jpg" />
				<img class="img-3" src="<?=base_url(); ?>/data/image-astre/<?=$space_object->id_space_object ?>.jpg" />
			</div>
			<div class="description-destination">
				<ul>
				<li class="name">Nom de l'astre : <span><?=$space_object->name_space_object ?></span></li>
				<li class="type">Type d'astre : <span><?=$space_object->name_type_space ?></span></li>
				<li class="distance">Distance de la Terre : <span><?=$space_object->distance_space_object ?> millions de km</span></li>
				<li class="status">Status actuel de l'astre : <span><?=$space_object->name_space_object_status ?></span></li>
				</ul>
			</div>
		</div>
		<div class="experience-destination">
			<h2>Experience actuelle de l’astre</h2>
			<?php 
			$pourcent = (($space_object->xp_space_object_status)/($next_status->step_space_object_status)*100);
			$width = $pourcent*6.3;						
			?>
			<div class="content-bar">
				<p><?=$space_object->xp_space_object_status ?> / <?=$next_status->step_space_object_status ?> (<?= $pourcent ?>%)</p>
				<div class="bar">
					<div class="bar-background"></div>
					<div class="bar-frontground" style="width: <?= $width ?>px;"></div>
				</div>
			</div>
		</div>
		<div class="actions-enabled">
			<h2>Action(s) disponible pour la mission actuelle :</h2>
			<div class="points-restant"><span class="up">Points restant : </span><span class="down"><?=$info->point_action ?></span></div>
			<?php foreach($actions AS $action): ?>
				<?php if($action->id_space_object_status <= $space_object->id_space_object_status): ?>
					<div class="action">
						<div class="image-action"><img src="<?=base_url(); ?>/data/image-action/<?=$action->id_space_action ?>.jpg" /></div>
						<div class="label-action">
							<h3><?=$action->name_space_action ?></h3>
							<p><?=$action->description_space_action ?></p>
						</div>
						<div class="info-action">
							<p class="cost"><?=$action->cout_space_action ?> .pt</p>
							<p class="time"><?=$action->time_space_action ?> .sec</p>
						</div>
						<div class="go-action">
							<?php if($info->point_action < $action->cout_space_action): ?>
								<?= anchor('c_mission/comeBack/'.$info->id_mission,'Retour sur Terre', array('title' => 'Executer la mission')); ?>
							<?php else: ?>
								<?= anchor('c_mission/doAction/'.$info->id_mission.'/'.$action->id_space_action,'Executer l\'action !', array('title' => 'Executer la mission')); ?>
							<?php endif; ?>
						</div>
					</div>
				<?php endif; ?>
			<?php endforeach; ?>
			<?= anchor('c_mission/comeBack/'.$info->id_mission,'Retour sur Terre', array('title' => 'Executer la mission', 'class' => 'back')); ?>
		</div>
	</div>
	<div id="discover">
		<div class="last-event">
			<?php if($info->last_event_mission == NULL): ?>
				<h2><span class="label">Dernière analyse : </span>Vous n'avez pas encore effectuer d'action.</h2>
			<?php elseif($info->last_event_mission == 0): ?>
				<h2><span class="label">Dernière analyse : </span>Vous avez découvert l'entièreté des conaissances avec cette actions.</h2>
			<?php else: ?>
				<h2><span class="label">Dernière analyse : </span><?=$event->name_space_object_event; ?></h2>
				<div class="content-last-event">
					<div class="content-last-event2">
						<div class="image-last-event">
							<img src="<?=base_url(); ?>/data/image-event/<?=$event->id_space_object_event; ?>.jpg" />
						</div>
						<div class="description-last-event">
							<p><?=$event->description_space_object_event; ?></p>
						</div>
					</div>
				</div>
			<?php endif; ?>
		</div>
		<div class="events">
			<h2>Historique des découvertes</h2>
			<?php foreach($events AS $eventt): ?>
			<div class="event">
				<h3><?= $eventt->name_space_object_event ?></h3>
				<img src="<?=base_url(); ?>/data/image-event/<?=$eventt->id_space_object_event; ?>.jpg" />
				<p><?=$eventt->description_space_object_event ?></p>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>