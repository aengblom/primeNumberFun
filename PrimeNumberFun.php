<?php

class PrimeNumberFun{


    function __construnct(){

    }

    public function spitOutPrimeNumbers($numOfNums){

        $count = 0;
        $number = 2;
        $primeNumberArray = [];

        while ($count < $numOfNums ){

            $div_count=0;

            for ( $i=1;$i<=$number;$i++){

                if (($number%$i)==0){
                    $div_count++;
                }
            }

            if ($div_count<3){

                array_push($primeNumberArray, $number);
                $count=$count+1;

            }
            
            $number=$number+1;
        }

        return $primeNumberArray;

    }//end spitOutPrimeNumbers

    public function appendToPrimeNumbers($primeNumberArray){

        $appendedPrimeNumberArray = [];

        foreach($primeNumberArray as $primeNumber){

            $primeNumberString = strval($primeNumber);

            if(substr($primeNumberString, -1) == '7'){

                $primeNumberString = $primeNumberString.' - has a 7';

            }
            
            if(substr($primeNumberString, -2, 1) == '3'){

                $primeNumberString = $primeNumberString.' - has a 3 in the tens digit';

            }

            array_push($appendedPrimeNumberArray, $primeNumberString);

        }

        return $appendedPrimeNumberArray;

    }//end appendToPrimeNumbers

}