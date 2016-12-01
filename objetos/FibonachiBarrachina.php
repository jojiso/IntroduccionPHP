<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Fibonacci {

    var $serie = [];

    function __construct($num) {
        if ($num > 0) {
            $this->serie[] = 0;
            $a1 = 0;
        }
        if ($num > 1) {
            $this->serie[] = 1;
            $a2 = 1;
        }
        for ($i = 3; $i <= $num; $i++) {
            $nuevo = $a1 + $a2;
            $this->serie[] = $nuevo;
            $a1 = $a2;
            $a2 = $nuevo;
        }
    }

    function getLimite() {
        return count($this->serie);
    }

    function getSerie() {
        return $this->serie;
    }

    function inSerie($num) {
        $esta = FALSE;
        $i = 0;
        while (!$esta AND $i < count($this->serie) AND $this->serie[$i] <= $num) {
            if ($num == $this->serie[$i]) {
                $esta = TRUE;
            }
            $i++;
        }
        return $esta;
    }

    function getElemento($num) {
        return $this->serie[$num - 1];
    }

}
