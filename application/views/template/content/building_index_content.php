    	<div class="row">
	    	<div class="span16">
	    		
	    	</div>
    	</div>
    	<div class="row">
    		<div class="span10">
                    <?php
                    foreach ($types as $type) {
                        echo anchor('c_building/typeList/'.$type->id_type_building, $type->name_type_building, array('title' => $type->description_type_building, 'class' => ''));
                    }?>
    		</div>
    		<div class="span6"></div>
    	</div>
