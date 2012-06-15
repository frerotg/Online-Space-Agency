<div class="message_list">
	<?php echo anchor('c_message/newMessage/','Envoyer un nouveau message', array('title' =>'Nouveau message', 'class' => 'newMessage')) ?>
	<?php foreach($messages AS $message): ?>
		<div class="contener-message">
			<div class="header-message">
				<h1><?= $message['title_message'] ?> (<?= $message['sender'] ?>)</h1>
			</div>
			<div class="content-message">
				<p><?= $message['content_message'] ?></p>
			</div>
		</div>
	<?php endforeach; ?>
</div>

