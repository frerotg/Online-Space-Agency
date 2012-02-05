    	<div class="row">
	    	<div class="span16">
	    		
	    	</div>
    	</div>
    	<div class="row">
    		<div class="span10">
                    <?php
                    foreach ($types as $type) {
                        echo anchor('c_technology/typeList/'.$type->id_type_technology, $type->name_type_technology, array('title' => $type->description_type_technology, 'class' => ''));
                    }?>
    		</div>
    		<div class="span6"></div>
    	</div>
