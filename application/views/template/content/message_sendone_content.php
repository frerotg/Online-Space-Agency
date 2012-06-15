<div class="message_send">	
		<div class="corner-top-left corner"></div>
		<div class="corner-top-right corner"></div>
		<div class="title-register">
			<h1><span class="little-h1">Envoi ton message</span></h1>
		</div>	
		<?= form_open_multipart('c_message/sendOne'); ?>
			<label for="title_message">Titre du message : <span class="error"></span></label>
				<input type="text" name="title_message" id="title_message" />
		    <label for="message">Message : <span class="error"></span></label><br />
		    <textarea name="message" id="message"></textarea>
		    <label for="username_receive">Destinataire : <span class="error"></span></label>
				<input type="text" name="username_receive" id="username_receive" />
			<input type="submit" value="Envoyer" />
		<?= form_close(); ?>
		<div class="success-register">
			<div class="message-success-register">
				<p>Bravo !<br />Ton message a ete envoye avec succes</p>
			</div>
		</div>
		<div class="corner-bottom-left corner"></div>
		<div class="corner-bottom-right corner"></div>
</div>