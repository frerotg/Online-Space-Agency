<table class="table">
	<thead>
		<tr>
			<th>Nom du bâtiment</th>
			<th>Status du bâtiment</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($knows AS $know){?>
		<tr>
			<td><?= $know->name_know ?></td>
			<td>Lire</td>
		</tr>
		<?php } ?>
	</tbody>
</table>