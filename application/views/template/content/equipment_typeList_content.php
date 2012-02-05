    	<div class="row">
	    	<div class="span16">
	    		
	    	</div>
    	</div>
    	<div class="row">
    		<div class="span10">
                    <ul> 
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
                        <li>
                        <?= $equipment->name_equipment ?>
                        <?php
                        if($equipment->status_equipment == 1){
                             echo (' Votre equipement est en construction et il reste <span id="countdown" class="'.($equipment->date_end_equipment - now()).'"></span> sec Vous actuellement'.$equipment->amount_equipment.' exemplaire de cet equipement');
                        }
                        else{
                            if($foo && $foo2){
                                echo anchor('c_equipment/build/'.$equipment->id_equipment,'Construire', array('title' => 'Construire le'.$equipment->name_equipment, 'class' => ''));
                                echo('Vous actuellement'.$equipment->amount_equipment.'exemplaire de cet equipement');
                            }
                            else{
                                echo('Vous ne répondez pas aux conditions nécéssaire pour construire cet equipment');
                                echo('Vous actuellement'.$equipment->amount_equipment.'exemplaire de cet equipement');
                            }
                        }?>
                        </li>
                    <?php
                    }?>
                        </li>
                    </ul>
    		</div>
    		<div class="span6"></div>
        </div>