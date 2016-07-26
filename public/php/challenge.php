<?php
//    $numbers = [1,2,3,4,5,6,7,8,9];
//    foreach($numbers as $number) {
//        if ($number == 1) {
//            echo 'one' . PHP_EOL;
//        } else if ($number == 2) {
//            echo 'two' . PHP_EOL;
//        } else if ($number == 3) {
//            echo 'three' . PHP_EOL;
//        } else if ($number == 4) {
//            echo 'four' . PHP_EOL;
//        } else if ($number == 5) {
//            echo 'five' . PHP_EOL;
//        } else if ($number == 6) {
//            echo 'six' . PHP_EOL;
//        } else if ($number == 7) {
//            echo 'seven' . PHP_EOL;
//        } else if ($number == 8) {
//            echo 'eight' . PHP_EOL;
//        } else if ($number == 9) {
//            echo 'nine' . PHP_EOL;
//        }
//    }



fwrite(STDOUT, 'positive integer 1: ');
$uno = fgets(STDIN);
fwrite(STDOUT, 'positive integer 2: ');
$dos = fgets(STDIN);

function greatest($uno, $dos) {
    $unoArray = [];
    $dosArray = [];
    $alike = [];
    $final = 0;
    for ($i = 1; $i < 100; $i++) {
        if ($uno % $i == 0) {
            $unoArray[] = $i;
        }

        if ($dos % $i == 0) {
            $dosArray[] = $i;
        }
    }

    foreach($unoArray as $number) {
        if (in_array($number, $dosArray)) {
            $alike[] = $number;
        }
    }

    foreach ($alike as $number) {
        if ($number > $final) {
            $final = $number;
        }
    }
    return $final;
}

echo greatest($uno, $dos);



//fwrite(STDOUT, 'Input: ');
//$input = fgets(STDIN);
//
//function converter($input) {
//    $array = str_split($input);
//    $number = substr($input, 0, 2);
//    $number = (int)$number;
//    if ($array[3] == "r") {
//        if ($array[2] == "d") {
//            $number /= 57.2958;
//        }
//    } else if ($array[3] == "d") {
//        if ($array[2] == "r") {
//            $number *= 57.2958;
//        }
//    }
//    return ($number . $array[3]);
//}
//
//echo 'Output: ' . converter($input) . PHP_EOL;


//
//function fibonacci($n,$first = 0,$second = 1)
//{
//    $fib = [$first, $second];
//    for($i = 1; $i < $n; $i++)
//    {
//        $fib[] = $fib[$i]+$fib[$i-1];
//    }
//    return $fib;
//}
//
//fwrite(STDOUT, 'Fib number? ');
//$number = fgets(STDIN);
//
//function indexOf($number) {
//    $fibArray = fibonacci(25);
//    foreach ($fibArray as $index => $fib) {
//        if ($fib == $number) {
//            return $index;
//        }
//    }
//    return 'Your chosen number is not in the fibonacci sequence.';
//}
//
//echo 'Index: ' . indexOf($number) . PHP_EOL;

//fwrite(STDOUT, 'Number? ');
//fgets(STDIN);
//
//for ($i = 1; $ < $n; $i++) {
//    for ($a = 0; $a < $n; $a++) {
//        if ($a + $b + $c + $d == $n) {
//
//        }
//        for ($b = 0; $b < $n; $b++) {
//            for ($c = 0; $c < $n; $c++) {
//                for ($d = 0; $d < $n; $d++)
//            }
//        }
//    }
//}
