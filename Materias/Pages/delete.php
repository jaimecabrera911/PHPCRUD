<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Eliminar Tercero</h1>
        <form action="delete.php" method="POST">
            <input type="hidden" name="id_materia" value=""/>
            <p>¿Está seguro de eliminar el tercero?</p>
            <br>    
            <input type="submit" value="Eliminar Materia"/>
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
