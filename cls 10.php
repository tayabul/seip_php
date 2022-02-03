<?php

    // array

// $data =['Rakib','Mohim','Nahid'];

// foreach($data as $x){
//     echo $x.'<br/>';
// }
// foreach($data as $num=>$x){
//     echo $num.'-'.$x.'<br/>';
// }


// echo strpos("Hello world", "world");        // output 6
// echo '<br/>';

// echo strrev('Tayabul');
// echo '<br/>';

// echo str_replace('Content','Value','This is Content');      // output- This is Value
// echo '<br/>';


    //Data type chek

// $x=87384;

// echo is_int($x);
    // or
// var_dump(is_int($x));

echo '<br/>';
echo '<br/>';
echo '<br/>';


// $x = 7273.22;

// echo is_float($x);
// var_dump(is_float($x));
// var_dump($x);


    // finite or infinite function

    $a = 0;
    $a = 3241;

        echo is_finite($a).'<br/>';     // confution finite or infinite 

    $value = 0;
    $value = 4353;
        echo is_finite(log($value));


    echo '<br/>';
    echo '<br/>';
    echo '<br/>';


    // $time = date("H");

    // if ($time < "2") {
    //     echo "Have a good day!";
    // }else{
    //     echo 'Not';
    // }

    
    echo '<br/>';
    echo '<br/>';
    echo '<br/>';



    // $day = date('D');
    // $fullday = date('l');
    // $month = date('M');
    // $year = date('Y');
    // $time = date('h:i:sa');
    // $dmy = date('d-m-Y');

    // echo $day.'<br/>';
    // echo $fullday.'<br/>';
    // echo $month.'<br/>';
    // echo $year.'<br/>';
    // echo $time.'<br/>';
    // echo $dmy;


    // echo '<br/>';

    // $d = mktime(2, 27, 45, 9, 19, 2018);  // (hour, minutes, second, month, date, year)

    // echo date('d-m-Y h:i:sa', $d);

    // or

    // $d=strtotime("10:30pm January 28 2014");
    // echo  date("Y-m-d h:i:sa", $d);

    // echo '<br/>';
    // echo '<br/>';



    // $t = date("H");
    // echo "<p/>The hour (of the server) is " . $t.", and will give the following message :<p/>";
 
    
    // if ($t < "10") {
    //     echo "Have a good morning!";
    // } elseif ($t < "20") {
    // echo "Have a good day!";
    // } else {
    // echo "Have a good night!";
    // }


    echo '<br/>';
    echo '<br/>';
    echo '<br/>';




  
    echo $user =$_GET['red']?? "anonymous";     // confusion
    echo("<br>");
  
   
    echo $color = $color ?? "red";


    echo '<br/>';
    echo '<br/>';
    echo '<br/>';


    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    asort($age);
    print_r($age);


    echo '<br/>';
    echo '<br/>';
    echo '<br/>';



?> 
