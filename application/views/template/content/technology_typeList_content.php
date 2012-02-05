    	<div class="row">
	    	<div class="span16">
	    		
	    	</div>
    	</div>
    	<div class="row">
            <ul>
            <?php
            $count = 0;
            foreach ($users_technologys as $technology) {
                $count = $count + $technology->level_technology;   
                ?>
                <li>
                <?= $technology->name_technology ?>
                <?php
                if($technology->status_technology == 1){
                     echo (' Votre batiment est en construction et il reste <span id="countdown" class="'.($technology->date_end_technology - now()).'"></span> sec');
                }
                else{
                    if($technology->level_technology == 0){
                        if($technology->level_type_technology == 1){
                            echo anchor('c_technology/develop/'.$technology->id_technology,'Construire', array('title' => 'Construire le'.$technology->name_technology, 'class' => ''));
                        }
                        elseif($technology->level_type_technology == 2 && $count>=5){
                            echo anchor('c_technology/develop/'.$technology->id_technology,'Construire', array('title' => 'Construire le'.$technology->name_technology, 'class' => ''));
                        }
                        elseif($technology->level_type_technology == 3 && $count>=10){
                            echo anchor('c_technology/develop/'.$technology->id_technology,'Construire', array('title' => 'Construire le'.$technology->name_technology, 'class' => ''));
                        }
                        else{
                            echo('Vous ne pouvez pas encore débloquer cette technologie');
                        }
                    }
                    else{
                        echo anchor('c_technology/improve/'.$technology->id_technology.'/'.(($technology->level_technology) +1),'Evoluer au niveau suivant', array('title' => 'Evoluer le batiment'.$technology->name_technology, 'class' => ''));
                    }
                }
            }?>
                </li>
            </ul>
    	</div>
    	<div class="span6"></div>
        </div>