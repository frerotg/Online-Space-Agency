    	<div class="row">
	    	<div class="span16">
	    	</div>
    	</div>
    	<div class="row">
    		<p><?= $message->title_message; ?></p>
    		<p><?= $message->message; ?></p>
    		<p><?= anchor('c_message/removeOne/' .$message->id_message ,'Supprimer', array('title' =>'Supprimer le message')) ?></p>
    	</div>
