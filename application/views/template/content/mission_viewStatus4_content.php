<h1>Votre mission est actuellement en attente d'ordre</h1>

<p>Vous explorez actuellement <?=$space_object->name_space_object ?> son status actuel est <?=$space_object->name_space_object_status ?></p>

<p>Vous avez a actuellement  <?=$space_object->xp_space_object_status ?> point(s) et vous avez besoin de <?=$next_status->step_space_object_status ?> points pour passé au niveau suivant qui évoluera le status de <?=$space_object->name_space_object ?> à <?=$next_status->name_space_object_status ?></p>


<p>Action actuelle disponible pour l'état d'avancement de la planète :</p>

<ul>
<?php
foreach($actions AS $action){
	if($action->id_space_object_status <= $space_object->id_space_object_status){
		echo '<li>'.anchor('c_mission/doAction/'.$info->id_mission.'/'.$action->id_space_action,$action->name_space_action, array('title' => 'Lancer one mission d\'/de '.$action->name_space_action, 'class' => '')).': cette action coûte '.$action->cout_space_action.' points d\'action et durera '.$action->time_space_action.' sec</li>';
	}
	else{
		echo '<li>'.$action->name_space_action.'</li>';
	}
}
echo anchor('c_mission/comeBack/'.$info->id_mission.'/','Retourner sur Terre', array('title' => 'Retourner sur Terre', 'class' => ''));?>
</ul>

<h2>Vous actuellement <?=$info->point_action ?> point(s) d'action disponible</h2>
<?php if(isset($event)): ?>
<pre><?php print_r($event); ?></pre>
<?php endif; ?>