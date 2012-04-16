<table class="table">
	<thead>
		<tr>
			<th>Nom du bâtiment</th>
			<th>Status du bâtiment</th>
		</tr>
	</thead>
	<tbody>
            <?php
            $count = 0;
            foreach ($users_technologys as $technology) {
                $count = $count + $technology->level_technology;   
                ?>
                <tr>
                <td><?= $technology->name_technology ?></td>
                <?php
                if($technology->status_technology == 1){
                     echo ('<td>Votre batiment est en construction et il reste <span id="countdown" class="'.($technology->date_end_technology - now()).'"></span> sec</td>');
                }
                else{
                    if($technology->level_technology == 0){
                        if($technology->level_type_technology == 1){
                            echo '<td>'.anchor('c_technology/develop/'.$technology->id_technology,'Construire', array('title' => 'Construire le'.$technology->name_technology, 'class' => '')).'</td>';
                        }
                        elseif($technology->level_type_technology == 2 && $count>=5){
                            echo '<td>'.anchor('c_technology/develop/'.$technology->id_technology,'Construire', array('title' => 'Construire le'.$technology->name_technology, 'class' => '')).'</td>';
                        }
                        elseif($technology->level_type_technology == 3 && $count>=10){
                            echo '<td>'.anchor('c_technology/develop/'.$technology->id_technology,'Construire', array('title' => 'Construire le'.$technology->name_technology, 'class' => '')).'</td>';
                        }
                        else{
                            echo('<td>Vous ne pouvez pas encore débloquer cette technologie</td>');
                        }
                    }
                    elseif($technology->level_technology == $technology->levelmax_technology){
                    	echo('<td>Vous avez atteint le niveau max</td>');
                    }
                    else{
                        echo '<td>'.anchor('c_technology/improve/'.$technology->id_technology.'/'.(($technology->level_technology) +1),'Evoluer au niveau suivant', array('title' => 'Evoluer le batiment'.$technology->name_technology, 'class' => '')).'</td>';
                    }
                }
            }?>
		</tr>
	</tbody>
</table>