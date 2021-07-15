<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of triangulo
 *
 * @author Personal
 */
class triangulo {
public $Base;
    public $Altura;
    public $area;

    function triangulo() {
        $this->Base = 0;
        $this->Altura = 0;
    }

    function get_formulariotriangulo() {
        $html = '<form name= "triangulo" action="" method="POST">
                <table aling = "center" border= "10">
                 <tr><td colspan="3">Calcular Triangulo</td></tr>
                 <tr><td>base</td></tr><tr><td><input type= "text" id= "Base" name= "Base"></td></tr>
                 <tr><td>altura</td></tr><tr><td><input type= "text" id= "Altura" name= "Altura"></td></tr> 
                 <table aling = "center" colspan="5"><center></td></tr><td><input type= "submit" values="Calcular"></td></tr>
                 <tr>
                 </table>
                 </form>';
        return $html;
    }

    public function area($base, $altura) {
        $area = ($base * $altura) / 2;
        return $area;
    }

}

                          
