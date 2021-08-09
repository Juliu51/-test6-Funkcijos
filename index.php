<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funkcijos</title>
</head>
<body>
    <?php 

//////////////1/////////////////////
echo "PIRMA UZDUOTIS";
echo "<br>";
function tekstas($arg) 
{
    if (is_array($arg)) {   
        $arg = $arg[0];
    }
    return "<h1 style='display: inline;'>" . "$arg" . '</h1>';
}

echo tekstas('Labas');

// //////////////2/////////////////////
echo "<hr>";
echo "ANTRA UZDUOTIS";
echo "<br>";


antras("sveiki", 4);

function antras($tekstas, $nr) {
    echo "<h$nr>" . $tekstas . "</h$nr>";
};

// //////////////3/////////////////////
echo "<hr>";
echo "TRECIA UZDUOTIS";
echo "<br>";
function times(){
echo $kodas = md5(time()).'<br>';
$sk = preg_replace_callback('/[0-9]+/i', 'tekstas', $kodas );
echo $sk;
}
echo times() ;

// //////////////4/////////////////////
echo "<hr>";
echo "KETVIRTAS UZDUOTIS";
echo "<br>";


function kintamieji( $skaicius) {
    if(!is_int($skaicius)) {
        echo "Ivesk sveika skaiciu";
        return;
    }
   $counter = 0;
   for ($i=2; $i < $skaicius; $i++) { 
      if($skaicius % $i == 0) {
          $counter++;
         }
   }
  return $counter;
}
echo kintamieji(24);
....
?>
<?php
// //////////////5/////////////////////

echo "<hr>";
echo "PENKTAS UZDUOTIS";
echo "<br>";
   
$arr = [];
for ($i=0; $i < 100; $i++) { 
    $arr[] = rand(33,77);
        }
        random($arr);
function random($arr) {
    
    $tmp = [];
    $newArr = [];
    foreach ($arr as $value) {
        $tmp[] = kintamieji($value);
    }
    asort($tmp);
    foreach($tmp as $key => $value) {
        $newArr[] = $arr[$key];
    }
    echo "<br>";
    echo implode(', ' , $newArr);
    }
// //////////////6/////////////////////
echo "<hr>";
echo "SESTAS UZDUOTIS";
echo "<br>";
    for ($z=0 ; $z < 100 ; $z++ ) { 
        $arr9[]  = rand(333, 777);
    }
    $ilgis = count($arr9);
    
   foreach ($arr9 as $key => $value) {
     if(kintamieji($value) == 0) {
           unset($arr9[$key]);
     }
   }
   echo (implode(', ' , $arr9));

// //////////////7/////////////////////
echo "<hr>";
echo "SEPTINTAS UZDUOTIS";
echo "<br>";
echo "<pre>";
$result = Lp(rand(10,30));
print_r($result);
echo "</pre>";

function Lp($times) {
    if ($times > 0) {
    $aq = [];
    $rndMass = rand(10,20);
    for ($i=0; $i < $rndMass-1; $i++) { 
        $aq[] = rand(0,10);
    }
    $aq[] =  Lp($times-1);
    } else {
        return 0;
    }
    return $aq;
}
// //////////////8/////////////////////
echo "<hr>";
echo "ASTUNTAS UZDUOTIS";
echo "<br>";

function bendraSuma($result){
    $count = 0;
    foreach ($result as $value) {
        if (is_numeric($value)) {
            $count += $value;              //!sudeda masyve
        } else {
            $count += bendraSuma($value); //!rekursija submasyvams
        }  
    }
    return $count;
}
echo "Suma visu masyvu ir submasyvu yra ";
echo bendraSuma($result);
// //////////////9/////////////////////
echo "<hr>";
echo "DEVINTAS UZDUOTIS";
echo "<br>";

$mass = [];
for ($i=0; $i < 3; $i++) { 
    $mass[] = rand(1,33);
}
function xl($mass) {
    if($mass[count($mass)-1] % 2 !== 0 || 
        $mass[count($mass)-2] % 2 !== 0 ||
        $mass[count($mass)-3] % 2 !== 0){
      do { 
          $mass[] = rand(1,33);
        }  
 while($mass[count($mass)-1] % 2 !== 0 || 
        $mass[count($mass)-2] % 2 !== 0 || 
        $mass[count($mass)-3] % 2 !== 0);
       print_r($mass);
    } else {
        print_r($mass);
    }
}
xl($mass);
// //////////////10/////////////////////
echo "<hr>";
echo "DESIMTAS UZDUOTIS";
echo "<br>";

    // for ($x=0; $x < 10; $x++) { 
    //     $arrX = [];
    //     for ($n=0; $n < 10; $n++) { 
    //         $arrX[][$n] = rand(1,100);
    //     }
    // }
    // echo "<pre>";
    // print_r($arrX);
    // echo "</pre>";
?>
</body>
</html>