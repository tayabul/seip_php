<?php
    // for loop
    // initialization; condition; increment/decrement
// for($i=2; $i<=20; $i++){
//     echo $i.'<br/>';
// }

// for($i=20; $i>=2; $i--){
//     echo $i.'<br/>';
// }


    // do while loop

    // $i = 10;

    // do{
    //     echo $i.'<br/>';
    //     $i++;
    // }while($i < 20);


    // do{
    //     echo $i.'<br/>';
    //     $i+=2;
    // }while($i <= 20);



    // while loop

    // $i = 1;

    // while($i < 10){
    //     echo $i.'<br/>';
    //     $i+=2;
    // }
    
        // loop done.
    
    // array
    // associative, index, multidimentional

// $student = array('Rony','Efti','Jishan');
// $student = ['Rony','Efti','Jishan'];

// echo '<pre/>';
// print_r($student);
// echo $student[2];

// $all = count($student);
// for($i=0; $i<$all; $i++){
//     echo $i.'. '. $student[$i].'<br/>';     
// }

    // associative array
// $student =[
//     'Roll1'=> ' Nafij',
//     'Roll2'=> ' Shihab',
//     'Roll3'=> ' Rafi',
//     'Roll4'=> ' Abir'
// ];
// echo '<pre/>';
// // print_r($student);
// echo $student['Roll2'];

// foreach($student as $index=>$value){
//     echo $index.'-'.$value.'<br/>';         // index + value print
// }

    //associative array done

    // multidimentional array
$student=[
    'class-6' => ['Nayem,', ' Emon'],
    'Class-5' => ['Roky,',' Rimon,',' Sabbir'],
    'Class-9' => ['Johan,',' Masud,',' Akib'],
    'Class-8' => ['Tamim,',' Ridoy,',' Shakil']
];

echo '<pre/>';
foreach($student as $key=>$data){

    $output="$key".": ";
    foreach($data as $value){
        $output.=$value;
    }
    echo "<h2>$output</h2>";
    
    echo '<br/>';

    $x= 'tayab';

    echo $x;
}
?>