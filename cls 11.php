<?php

    

$a = 5;
$b = 5;
// $a += $b;   // $c = $a+$b;
$a -= $b;   // $c = $a-$b;

// echo $a;
        // syntex end

    
echo '<br/>';
echo '<br/>';

    //comparison operator
$x = '3'; //string
$y = 3;     //int

if($x === $y){
  echo 'True';
}else{
    echo 'False';
}
// if($x !== $y){
//     echo 'True';
// }else{
//     echo 'False';
// }
// if($x <= $y){
//     echo 'True';
// }else{
//     echo 'False';
// }
// echo $x <=> $y;
     // syntex end

    echo '<br/>';
    echo '<br/>';
    echo '<br/>';


    // logical operator 'and &&, or ||, !

$a = 10;
$b = 4;
$c = 8;

// if($a < $c){
//     echo 'True';
// }else{
//     echo 'False';
// }

// if($a && $b < $c){
//     echo 'True';
// }else{
//     echo 'False';
// }

if($a > $b  && $b < $c){
    echo 'True';
}else{
    echo 'False';
}

// if($a > $b  && $b > $c){
//     echo 'True';
// }else{
//     echo 'False';
// }

// if($a > $b || $b > $c){
//     echo 'True';
// }else{
//     echo 'False';
// }

// if($a > $b || $b < $c){
//     echo 'True';
// }else{
//     echo 'False';
// }
        // syntex end

    // concreat operator

// $firstName = 'Tayabul';
// $lastName = 'Islam';

// echo $firstName.' '.$lastName;

// array operator

// $array = ['name'=>'Tayabul', 'address' =>'Chattogram', ];
// $array = ['name'=>'Tayabul', 'address' =>'Chattogram', 'mobile'=>'92809382'];
// $array1 = ['name'=>'Tayabul', 'address'=>'Chattogram',];
// $array1 = ['name'=>'Islam', 'address'=>'Chattogram',];

// print_r($array + $array1);
// echo $array == $array1;
// echo $array !== $array1;

     // syntex end

     echo '<br/>';
     echo '<br/>';

    // type operator

// class school{

// }
// class studet{

// }
// $obj = new school();

// if($obj instanceof school){
//     echo 'True';
// }else{
//     echo 'False';
// }

// if($obj instanceof studet){
//     echo 'True';
// }else{
//     echo 'False';
// }
        // syntex end


    // Conditional Assignment Operator
    //ternarry operator

// $result = 'passed';
$result = 'feild';

// echo $result == 'passed' ? 'Congratulations' : 'Sorry';      //condition ? 'ok' : 'not ok';
    // or this echo
echo $result == 'feild' ? 'Sorry' : 'Congratulations';

    // or this echo
// if($result == 'feild'){
//     echo 'You are not allowed';
// }else{
//     echo 'Good';
// }
        // syntex end

// $array =['result'=>'Passed'];
// // $array =['name'=>'Passed'];

// echo $array['result'] ?? 'N/A';
