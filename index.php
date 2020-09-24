<?php

function hello()
{
    echo "Hallo, World";
}
 hello();                                                                                                                // Keluaran Hallo, World 

$current_user="mike";
function is_mike()
{
    global $current_user;

    if($current_user=="mike"){
        echo "your name is mike";
    }else{
        "nope you not mike";
    }
}               
print_r(is_mike());                                                                                                 // Keluaran "your name is mike"


echo PHP_EOL;

function  halloName($name)
{
    if(is_array($name)  && !empty($name))
    {
        foreach($name as $key)
        {
            echo "Hallo, $key\n";
            echo "<br>";
        }
    }else
    {
        echo "Hallo Friend";
    }                                                                                                       // hasil "Hallo, mike"
}                                                                                                           // hasil "Hallo, mohade"
halloName(["Mike" , "Mohade" , "Homton" ]);                                 // hasil "Hallo, hompton"              


function getInfo($name,$title=Null)
{
    if($title)
    {
        echo "$name Was Arived,And Come As $title";
    }else{
        echo "$name Was Arived Welcome";
    }
}

getInfo("Mike","Frog");

function helloWorld($word)
{
    return"\n Hello World $word";
}

$hello=helloWorld();

// var_dump(helloWorld());       // ERO

echo $hello;
// var_dump($hello);

function add_up($a,$b)
{
    return [$a,$b,$a+$b];
}
print_r(add_up(4,2));

function sumArray($data)
{
    $result=0;
    foreach ($data as $key){
        $result+=$key;
    }
    return $result;
}

var_dump (sumArray([1,4,5,5]));



function answer()
{
    return " You answer the question";
}

$answer=answer();

echo PHP_EOL;

echo $answer; // Di Sini Mulai Perubahan Callback Function

echo PHP_EOL;

echo "======================================\n";

// Callback Function

$answer_cal="answer";
echo $answer_cal()."!!"; // Call Function

echo PHP_EOL;

// Anonymous Function

$askName="What is your name ?";
$name="buddy";

echo PHP_EOL;

echo "==========================\n";

$ask=function()use($askName,$name) // Penambahan "use($askName)" Mengakses Variable Global dan Kembali ke Variable Global Menggunakkan "$name"
{
     return "ask the question ?, $askName,$name"; 
};
echo $ask(); // Anonymous Function Adalah Anonymous Yang Tidak Memiliki Nama 


// Bult-in String Function spasi di hitung contoh < "Hilang kan"= 10 Huruf >

// strlen() Untuk Menghitung Jumalah 

echo "================================\n";

// $magang="Magang TOP jos";

// echo strlen($magang);

// substr() Untuk Menghilangkan Huruf


echo substr($magang,7); // TOP jos

echo substr($magang,7,3); //  TOP

// strpos() Untuk Mencari Dimulai dari 0
echo strpos($magang,"jos");
echo PHP_EOL;
echo $magang[11];


$team=[
    "mike"=>"developer",
    "chris"=>"designer",
    "hompton"=>"manager"
];

// array_keys berguna untuk mnampilkan bagian key pada array contoh "mike"=>"developer" mike = key

print_r(array_keys($team));

// array_key_exists berguna untuk mengcek apakah terdapat key pada array "jika terdapat keluaran = true" "jika tidak terdapat maka keluarannya = flase" 

var_dump(array_key_exists("mike",$team));

// array_walk Menambahi $value,$key

array_walk($team,function($value,$key){

    echo "$key is a $value\n";
}) ;


if(array_key_exists("jon",$team))
{
    echo "mike found in \$team";
}else{
    echo "Key not found in \$team";
}





?>