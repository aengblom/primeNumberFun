<?php

class PrimeNumberFun{


    function __construct(){

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

            //turn int to a string
            $primeNumberString = strval($primeNumber);

            //check for 7 on end
            if(substr($primeNumberString, -1) == '7'){

                $primeNumberString = $primeNumberString.' - has a 7';

            }

            
            //lets strip out the stuff we added if there is a 7
            if(strpos($primeNumberString, '-') !== false){

                $what_you_want = substr($primeNumberString, 0, strpos($primeNumberString, '-'));
                $what_you_want = trim($what_you_want);

            }else{

                $what_you_want = $primeNumberString;

            }
            
            //check if 3 in tens place
            if(substr($what_you_want, -2, 1) == '3'){

                //but if it is actually the number 3, don't append
                if($what_you_want == '3'){

                    $primeNumberString = $primeNumberString;

                }else{

                    $primeNumberString = $primeNumberString.' - has a 3 in the tens digit';

                }

            }


            //push the appended junk on the new array
            array_push($appendedPrimeNumberArray, $primeNumberString);

        }

        return $appendedPrimeNumberArray;

    }//end appendToPrimeNumbers

}