<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Inicio Sesion</title>
    </head>
    <body>
        <h1>Inicio de Sesión</h1>
        <form action="Usuarios/Controladores/login.php" method="POST">
            <label>Usuario</label>
            <input type="text" name="username" autocomplete="off">
            <br>
            <br>
            <label>Password</label>
            <input type="password" name="password" autocomplete="off">
            <br>
            <br>
            <input type="submit" value="Iniciar Sesión">

        </form>
        <?php
        ?>
    </body>
</html>
