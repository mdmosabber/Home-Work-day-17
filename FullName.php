<?php


class FullName{

    function makeFullName($firstName,$lastName){

        $fullName = $firstName.' '.$lastName;

        return $fullName;

    }

    function myCalculator($data){
//            echo '<pre>';
//            print_r($data);
            $btn1 = $data['btn1'];

            switch ($btn1){
                case '+':
                    $result = $data['first_number'] + $data['last_number'];
                    break;
                case '-':
                    $result = $data['first_number'] - $data['last_number'];
                    break;
                case '*':
                    $result = $data['first_number'] * $data['last_number'];
                    break;
                case '/':
                    $result = $data['first_number'] / $data['last_number'];
                    break;
                case '%':
                    $result = $data['first_number'] % $data['last_number'];
                    break;
            }
            return $result;
    }

    function startingValue($startNumber, $endingNumber){

       for($x= $startNumber; $x<= $endingNumber; $x++){
            echo $x.' ';
        }
    }

    function maximumToMinimum($startNumber,$endingNumber){

           for($y= $startNumber; $y >= $endingNumber; $y--){
            echo $y.' ';
        }
    }

    function oddNumber($startNumber, $endingNumber){

        for($y= $startNumber; $y <= $endingNumber; $y++){
            if ($y % 2 == 1)
            {
                echo $y.' ';
            }
        }
    }

    function evenNumber($startNumber,$endingNumber){

        for($y= $startNumber; $y <= $endingNumber; $y++){
            if ($y % 2 == 0)
            {
                echo $y.' ';
            }
        }
    }



}