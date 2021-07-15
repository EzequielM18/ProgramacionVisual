<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    
        <?php
        include "./triangulo.php";
        $triangulo = new triangulo();
        echo $triangulo->get_formulariotriangulo();


        if (isset($_POST[Calcular])) {
    
        ("El Area Del Triangulo Es: $triangulo->area($_POST('base'), $_POST('altura'))");

    }

