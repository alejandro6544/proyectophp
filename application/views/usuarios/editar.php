<?php form_open("usuarios/actualizar/".$id) ?>

<?php

$nombre = array(
    'name' => 'nombre',
    'placeholder' => 'Escribe tu nombre',
    'value' => $bcurso->result()[0] -> idUser
);

$identificacion = array(
    'name' => 'idUsuarios',
    'placeholder' => 'usuario id',
    'value' => $bcurso->result()[0] -> nombreuser
);
?>
<?=form_label('Nombre: ', 'nombre')?>
<?=form_input($nombre) ?>
<br>
<?=form_label('Número id: ', 'identificacion')?>
<?=form_input($identificacion) ?>
<br>
<br>
<?= form_submit('', 'Actualizar Usuario')?>
<?=form_close()?>
</body>
</html>