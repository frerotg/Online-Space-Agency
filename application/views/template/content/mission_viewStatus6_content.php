<div class="mission-status6">
	<p>Votre action est terminé</p>
	<?php
		if($info->date_end_space_action <= $now){
			echo anchor('c_mission/analyseAction/'.$info->id_mission.'/'.$info->id_space_action,'- Analyser les résultats -', array('title' => 'Analyser les résultats', 'class' => 'analyse-action'));
		}
	?>
</div>