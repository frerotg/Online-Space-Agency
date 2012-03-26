<ul class="nav nav-pills">
<?php foreach ($types as $type) {
echo '<li>'.anchor('c_technology/typeList/'.$type->id_type_technology, $type->name_type_technology, array('title' => $type->description_type_technology, 'class' => '')).'</li>';
}?>
</ul>
