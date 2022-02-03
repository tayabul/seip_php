<?php

   // $data = 7483.748;       // float to int
   // $data = '34728.22';        // string to int
   // $value = (int)$data;

   // echo $value .'<br/>' ;

    $institute = "Bangladesh Sweden Polytechnic Institute.";
   //  $value = "Welcome to $institute";
   //  $value = "Welcome to '$institute'";
   //  $value = 'Welcome to $institute';
   //  $value = "Welcome to " $institute""; // wrong.
   //  $value = "Welcome to \"$institute\"";  //scaping (\") kora jabe

     $value  = <<<Data
         Welcome to "$institute"
     Data;                          //heredock  scaping (\") kora jabe na

   //  $value  = <<<Input
   //       Welcome to '$institute'
   //   Input;                           //nawdock

    echo $value;

   

?> 
