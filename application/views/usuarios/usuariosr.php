 
<?php
if ($usuariosw) {
    foreach ($usuariosw->result() as $usuario) {
        ?>
      
        <ul>

            <li><a href="<?= $usuario->idUser; ?>"><?= $usuario->nombreuser; ?></a></li>
        </ul>
    <?php } ?>
<?php
} else {
    echo "<p> Usuario no enocntrado</p>";
}
?>

</body>
</html>
