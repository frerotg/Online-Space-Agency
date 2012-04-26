    		<p><?= $message->title_message; ?></p>
    		<p><?= $message->content_message; ?></p>
    		<p><?= anchor('c_message/removeOne/' .$message->id_message ,'Supprimer', array('title' =>'Supprimer le message')) ?></p>