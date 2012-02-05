    	<div class="row">
	    	<div class="span16">
	    		
	    	</div>
    	</div>
    	<div class="row">
    		<div class="span10">
                    <ul>
                    <?php
                    foreach ($users_buildings as $building) { 
                        
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
                        }
                        
                        ?>
                        <li>
                        <?= $building->name_building ?>
                        <?php
                        if($building->status_building == 1){
                             echo (' Votre batiment est en construction et il reste <span id="countdown" class="'.($building->date_end_building - now()).'"></span> sec');
                        }
                        else{
                            if($building->level_building == 0){
                                if($foo && $foo2){
                                    echo anchor('c_building/build/'.$building->id_building,'Construire', array('title' => 'Construire le'.$building->name_building, 'class' => ''));
                                }
                                else{
                                    echo('Vous ne répondez pas aux conditions nécéssaire pour construire se batiment');
                                }
                            }
                            else{
                                echo anchor('c_building/evolve/'.$building->id_building.'/'.(($building->level_building) +1),'Evoluer au niveau suivant', array('title' => 'Evoluer le batiment'.$building->name_building, 'class' => ''));
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