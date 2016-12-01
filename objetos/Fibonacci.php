<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Fibonacci {

    private $num;
    private $pos;

    public function fibonacci($num) {
        $this->num = $num;
        $fibo = [];
        if ($num > 0) {
            $fibo[] = 0;
            $a1 = 0;
        }
        if ($num > 1) {
            $fibo[] = 1;
            $a2 = 1;
        }
        for ($i = 3; $i <= $num; $i++) {
            $nuevo = $a1 + $a2;
            $fibo[] = $nuevo;
            $a1 = $a2;
            $a2 = $nuevo;
        }
        return $fibo;
    }
    public function fiboposition($pos){
        $this->pos = $pos;
        $fibo = [];
        if ($pos > 0) {
            $fibo[] = 0;
            $a1 = 0;
        }
        if ($pos > 1) {
            $fibo[] = 1;
            $a2 = 1;
        }
        for ($i = 3; $i <= $pos; $i++) {
            $nuevo = $a1 + $a2;
            $fibo[] = $nuevo;
            $a1 = $a2;
            $a2 = $nuevo;
        }
        return $nuevo;
    }

    public function setDimensiones($alto, $ancho) {
        $this->setAncho($ancho);
        $this->setAlto($alto);
    }

    public function area() {
        return $this->ancho * $this->alto;
    }

}
