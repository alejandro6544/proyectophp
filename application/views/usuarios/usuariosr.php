 
<?php
if(isset($usuariosw)){
foreach ($usuariosw->result() as $usuario){?>

<ul>
    <li><?= $usuario->nombreuser;?></li>
</ul>
<?php }?>
<?php }else{
     echo "<p> Error en la";
}
?>
   
</body>
</html>
