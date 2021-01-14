<?php

include_once('PrimeNumberFun.php');


$primeNums = new PrimeNumberFun();

$primeNumsArray = $primeNums->spitOutPrimeNumbers(20);

$result = $primeNums->appendToPrimeNumbers($primeNumsArray);

var_dump($result);