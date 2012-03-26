<table class="table">
	<thead>
		<tr>
			<th>Nom du bâtiment</th>
			<th>Status du bâtiment</th>
			<th>Nombre d'exemplaire(s)</th>
		</tr>
	</thead>
	<tbody>
                    <?php
                    foreach ($users_equipments as $equipment) { 
                        
                        $foo = TRUE;
                        $foo2 = TRUE;
                        

                       if(!empty($equipment->building_required)){
                            $foo = FALSE;
                            $buildings_required = unserialize($equipment->building_required);
                            $result = array_intersect($list_building, $buildings_required);
                            $result2 = array_diff($buildings_required, $result);
                            if(empty($result2)){
                                $foo = TRUE;
                            }
                        }
                        
                        if(!empty($equipment->technology_required)){
                            $foo2 = FALSE;
                            $technologys_required = unserialize($equipment->technology_required);
                            $result = array_intersect($list_technology, $technologys_required);
                            $result2 = array_diff($technologys_required, $result);
                            if(empty($result2)){
                                $foo2 = TRUE;
                            }
                        }
                        
                        ?>
                        <tr>
                        <td><?= $equipment->name_equipment ?></td>
                        <?php
                        if($equipment->status_equipment == 1){
                             echo ('<td>Votre equipement est en construction et il reste <span id="countdown" class="'.($equipment->date_end_equipment - now()).'"></span> sec Vous actuellement'.$equipment->amount_equipment.' exemplaire de cet equipement</td>');
                        }
                        else{
                            if($foo && $foo2){
                                echo '<td>'.anchor('c_equipment/build/'.$equipment->id_equipment,'Construire', array('title' => 'Construire le'.$equipment->name_equipment, 'class' => '')).'</td>';
                                echo('<td>'.$equipment->amount_equipment.'</td>');
                            }
                            else{
                                echo('<td>Vous ne répondez pas aux conditions nécéssaire pour construire cet equipment</td>');
                                echo('<td>'.$equipment->amount_equipment.'</td>');
                            }
                        }
                    }?>
		</tr>
	</tbody>
</table>