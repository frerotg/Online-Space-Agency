<table class="table">
	<thead>
		<tr>
			<th>Nom du bâtiment</th>
			<th>Status du bâtiment</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($users_buildings as $building) { 
		$foo = TRUE;
		$foo2 = TRUE;
		
		if(!empty($building->building_required)){
        	$foo = FALSE;
            $buildings_required = unserialize($building->building_required);
            $result = array_intersect($list_building, $buildings_required);
            $result2 = array_diff($buildings_required, $result);
            if(empty($result2)){
            	$foo = TRUE;
            }
		}
        if(!empty($building->technology_required)){
        	$foo2 = FALSE;
            $technologys_required = unserialize($building->technology_required);
            $result = array_intersect($list_technology, $technologys_required);
            $result2 = array_diff($technologys_required, $result);
            if(empty($result2)){
            	$foo2 = TRUE;
            }
		}?>
		<tr>
			<td><?= $building->name_building ?></td>
			<?php
			if($building->status_building == 1){
            	echo ('<td>Votre batiment est en construction et il reste <span id="countdown" class="'.($building->date_end_building - now()).'"></span> sec</td>');
                $enConstruction = 1;
            }
            else{
            	if($building->level_building == 0){
                	if($foo && $foo2){
                    	if($enConstruction != 1){
                        	echo '<td>'.anchor('c_building/build/'.$building->id_building,'Construire', array('title' => 'Construire le'.$building->name_building, 'class' => '')).'</td>';
                        }
                        else{
                        	echo '<td>Un bâtiment est déjà en construction</td>';
                        }
                    }
                    else{
                    	echo('<td>Vous ne répondez pas aux conditions nécéssaire pour construire se batiment</td>');
                    }
               	}
               	else{
               		echo '<td>'.anchor('c_building/evolve/'.$building->id_building.'/'.(($building->level_building) +1),'Evoluer au niveau suivant', array('title' => 'Evoluer le batiment'.$building->name_building, 'class' => '')).'</td>';
               	}
			}
		}?>
		</tr>
	</tbody>
</table>