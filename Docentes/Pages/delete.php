<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema de Notas</title>
    </head>
    <body>
        <h1>Eliminar Docente</h1>
        <form action="../Controladores/delete.php" method="POST">
            <input type="hidden" name="id_usuario" value="">
            <p>¿Estás seguro de eliminar este docente?</p>
            <input type="submit" value="Eliminar">
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
