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
        <h1>Registrar Materias</h1>
        <form action="../Controladores/update.php" method="POST">
            <label>Materia</label>
            <input type="hidden" name="id_materia" value=""/>
            <input type="text" required="" name="materia" placeholder="Ejemplo, Matemaricas"></input>
            <br>
            <br>
            <input type="submit" value="Modificar">
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>