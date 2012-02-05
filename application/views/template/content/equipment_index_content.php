    	<div class="row">
	    	<div class="span16">
	    		
	    	</div>
    	</div>
    	<div class="row">
    		<div class="span10">
                    <?php
                    foreach ($types as $type) {
                        echo anchor('c_equipment/typeList/'.$type->id_type_equipment, $type->name_type_equipment, array('title' => $type->name_type_equipment, 'class' => ''));
                    }?>
    		</div>
    		<div class="span6"></div>
    	</div>
