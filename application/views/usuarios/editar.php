<?php echo form_open("usuarios/actualizar/".$id) ?>

<?php

$nombre = array(
    'name' => 'nombre',
    'placeholder' => 'Escribe tu nombre',
    'value' => $usuario->result()[0] -> nombreuser
);

$identificacion = array(
    'name' => 'idUsuarios',
    'placeholder' => 'usuario id',
    'value' => $usuario->result()[0] -> idUser
);
?>
<?=form_label('Nombre: ', 'nombre')?>
<?=form_input($nombre) ?>
<br><br>
<?=form_label('Número id: ', 'identificacion')?>
<?=form_input($identificacion) ?>
<br>
<br>
<?= form_submit('', 'Editar usuario') ?>
<?= form_close() ?>
</body>
</html>