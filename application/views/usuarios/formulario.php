<?php echo form_open('usuarios/recibirDatos') ?>
<?php
$nombre = array(
    'name' => 'nombre',
    'placeholder' => 'Escribe tu nombre'
);
$identificacion = array(
    'name' => 'identificacion',
    'placeholder' => 'Escribe la identificación'
);
?>


<?= form_label('Nombre: ', 'nombre') ?>  
<?= form_input($nombre) ?>

<br><br><br>

<?= form_label('Identificacion : ', 'identificacion') ?> 
<?= form_input($identificacion) ?>
<br><br><br>
<label>
    apellido 1: 
</label>
<br><br><br>
<label>
    apellido 2: 
</label>
<br><br>
<?= form_submit('', 'Enviar Registro') ?>
<?= form_close() ?>
</body>
</html>

