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
        <h1>Registrar Estudiante</h1>
        <form action="../Controladores/create.php" method="POST">
            <label>Nombre</label>
            <input type="text" required="" name="nombre">
            <br>
            <br>
            <label>Apellido</label>
            <input type="text" required="" name="apellido">
            <br>
            <br>
            <label>Documento</label>
            <input type="text" required="" name="documento">
            <br>
            <br>
            <label>Correo Electronico</label>
            <input type="text" required="" name="correo">
            <br>
            <br>
            <label>Materia</label>
            <select name="materia">
                <option value="">Seleccione una materia</option>
                <option value="Ciencias">Ciencias</option>
                <option value="Fisica">Fisica</option>
                <option value="Ingles">Ingles</option>
                <option value="Matematicas">Matematicas</option>
            </select>
            <br>
            <br>
            <label>Docente</label>
            <select name="docente" required="">
                <option value="">Seleccione un docente</option>
                <option value=""></option>
            </select>
            <br>
            <br>
            <label>Nota</label>
            <input type="number" required="" name="nota">
            <br>
            <br>
            <input type="submit" value="Registrar">
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
