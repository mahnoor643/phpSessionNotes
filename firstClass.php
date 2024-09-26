<?php 
//variables
$name="Mahnoor";
$age=21;
$decimalValue=54.6;
$boolean=true;

//array
$fruits=array("Banana","Apple","Grapes");
$multipleDataType=array("Mahnoor",24,53.4,true);
//To fetch array
echo "<h1>".$fruits[0]."</h1>" . "<h2>$name</h2>";
//OR
foreach($fruits as $data){
    echo "<ul><li>$data</li></ul>";
}

//Associative array
$Students=array("name"=>"Mahnoor","fatherName"=>"Tariq","class"=>"2111G2");
echo $Students['name'] . "<br>";


//array functions
array_push($fruits, "Pomegranate",21);
array_pop($fruits); //last entered value  will pop
$keys=array_keys($Students);//will save keys of array in array
echo $keys[1];
$Students["age"]=21;//to add value in associative
print_r($Students);//print human readable information
rsort($fruits);//will sort array in descending
krsort($fruits);//will sort array with it's key
print_r($fruits);




//display structured information about one or more variables,
// including their type and value
var_dump(value: $fruits);




//Function Creation
function ageCalculator($val1,$val2,$val3){
    $sum=$val1+$val2+$val3;
    echo "<h2>The total sum is $sum</h2>";
}
ageCalculator(val1: 2,val2: 4,val3: 7);



foreach($Students as $key=>$val){
    echo "$key : $val <br>";
}
?>
