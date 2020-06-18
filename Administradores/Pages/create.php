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
        <h1>Registrar Administrador</h1>
        <form action="../Controladores/create.php" method="POST">
            <label>Nombre</label>
            <input type="text" required="" name="nombre">
            <br>
            <br>
            <label>Apellido</label>
            <input type="text" required="" name="apellido">
            <br>
            <br>
            <label>Usuario</label>
            <input type="text" required="" name="usuario">
            <br>
            <br>
            <label>Password</label>
            <input type="text" required="" name="password">
            <br>
            <br>
            <input type="hidden" name="administrador" value="administrador">
            <br>
            <input type="submit" value="Registrar">
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
