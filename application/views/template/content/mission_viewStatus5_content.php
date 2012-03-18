<p>Votre mission est actuellement en action</p>

<?php
echo $now;
echo'<br /><b>Infos de la mission :</b><br /><br />';
print_r($info)?><br /><br /><br /><br /><?php
echo'<br /><b>Infos du Space Object actuelle :</b><br /><br />';
print_r($space_object);?><br /><br /><?php
echo'<br /><b>Infos sur la Coque :</b><br /><br />';
print_r($coque);?><br /><br /><?php
echo'<br /><b>Infos sur le Lanceur :</b><br /><br />';
print_r($lance);?><br /><br /><?php
echo'<br /><b>Infos sur la Combinaison :</b><br /><br />';
print_r($combinaison);?><br /><br /><?php
echo'<br /><b>Infos sur le Module :</b><br /><br />';
print_r($module);?><br /><br /><?php
echo'<br /><b>Infos sur le Pilote :</b><br /><br />';
print_r($pilote);?><br /><br /><?php
echo'<br /><b>Infos sur le Spationaute 1 :</b><br /><br />';
print_r($spationaute);?><br /><br /><?php
echo'<br /><b>Infos sur le Spationaute 2 :</b><br /><br />';
print_r($spationaute2);?><br /><br /><?php
echo'<br /><b>Infos sur les actions relatif au space object :</b><br /><br />';
print_r($actions);?><br /><br /><?php
echo'<br /><b>Infos sur les Events déjà découvert pour ce Space Object :</b><br /><br />';
print_r($events);?><br /><?php

if($info->date_end_space_action >= $now){
	echo 'Pas encore fini';
}