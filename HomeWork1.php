<?php
/**
 * Created by PhpStorm.
 * User: enxhi
 * Date: 1/20/2019
 * Time: 10:41 PM
 */

class HomeWork1
{
    public function fibonacci($n,$first = 0,$second = 1){
        $fib = [$first, $second];
        for($i=1;$i<$n;$i++)
        {
            $fib[] = $fib[$i]+$fib[$i-1];
        }
    return $fib;
    }

    public function calculate($length, $input){
        if($input < 0 || $length < 0){
            return "No negative nubers allowed!";
        }
        $fibonaciSeq = $this->fibonacci(($input*$length));
        $count = 0; // lenght of sequence until we find the first number from which fibonacci serie will start
        foreach($fibonaciSeq as $seq){
            if($input < $seq){
                $count++;
            }
        }
        // $fibonaciSeqSerie is the whole sequence
        $fibonaciSeqSerie = $this->fibonacci(($length+$count));
        // $fibonaciStart is the array from the first element bigger than the input user put
        $fibonaciStart = array_slice($fibonaciSeqSerie, $length);
        //$arrayPrint is the array starting from the first bigger number user put and till the length user also wanted
        $arrayPrint = [];
        for($i = 0; $i < $length; $i++){
            $arrayPrint[] = $fibonaciStart[$i];
        }
        return $arrayPrint ;
    }
}