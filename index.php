<?php 




$a = 40;
$b = 10;
$c = 30;

if($a > $b && $a > $c){

    echo "$a is greather number";

}elseif($b > $c && $b > $a){

    echo "$b is greatherNumber";
}else{

    echo "$c is greather number";
}
echo "<br>";





function GreatherNum($a, $b, $c){


    $a = $a;
    $b = $b;
    $c = $c;
    
    if($a > $b && $a > $c){
    
    echo "$a is greatherNumber";
    
    }elseif($b > $c && $b > $a){
    
        echo "$b is greatherNumber";
    }else{
    
        echo "$c is greatherNumber";
    }

}

//GreatherNum(10,20,50);






$user = "Denial";

var_dump(ctype_alpha($user));
echo "<br>";

if(ctype_alpha($user)){

    echo "welcome $user";
}else{

    echo "Invelid user name";
}

$age = "22";

if(is_numeric($age)==1){

    echo "Your age is $age";
}else{

    echo "Nothing";
}
echo "<br>";






$num1 = 20;
$num2 = 30;
$num3 = 60;
$num4 = 70;

if($num1 > $num2 && $num1 > $num3 && $num1 > $num4){
    
    echo "Num1 is greatest number";
}elseif($num2 > $num1 && $num2 > $num3 && $num2 > $num4){

    echo "Num2 is greaest number";
}elseif($num3 > $num1 && $num3 > $num2 && $num3 > $num4){

    echo "Num3 is greaest number";
}else{
    echo "Num4 is greaest number";
}
echo "<br>";






//texted if

$num = 51;

if($num > 0){

        if($num%2 == 0){
            echo "$num is posetive even number";
        }else{
            echo "$num is posetive odd number";
    }

}elseif($num < 0){
    echo " $num is Nagetive number";
}else{
    echo "This is nutral number";
}
echo "<br>";









$email = "abdullah@gmail.com";
$password = 012;

if($email == "abdullah@gmail.com" and $password == 012 ){

    echo "You are login";
}else{
    echo "Invelid user email or password";
}
echo "<br>";






//password checking
$email = "abdullah@gmail.com";
$password = 012;

if($email == "abdullah@gmail.com"){
    
    if($password==012){
        echo "Welcome $email";
    }else{
        echo "Incorrect your password";
    }

}else{
    echo "Invelid email address";
}
echo "<br>";






//loan system
/**
 * amount 50000
 * interest 10%
 * year 1
 * per month pay
 * 
 * 0.1 * 1 = 0.1 total interest 
 * 50000 * 0.1 = total interest mony
 * 50000 + total interest mony = totalmony
 * totalmony / 12 = permont pay
 */

$amount = 50000;
$year = 1;
$interest = 10;

$totalinterest = ($interest/100) * $year;
$totalinterestmony = $totalinterest * 50000;
$totalinterestpay = $totalinterestmony + $amount;
$permonthpay = $totalinterestpay / (1 * 12);
//echo "You have per mont pay " . round($permonthpay);

function paypermonth($amount = 60000, $i = 10, $year = 1){

$amount = $amount;
$interest = $i;
$year = $year;

$totalinterest = ($interest/100) * $year;
$totalinterestmony = $totalinterest * $amount;
$totalinterestpay = $totalinterestmony + $amount;
$permonthpay = $totalinterestpay / ($year * 12);

return round($permonthpay);

}

//paypermonth(50000,10,2);
//paypermonth();



//callback function
function get($totalincome, $totalCost, $paypermonth){

$totalincome = $totalincome;
$totalCost = $totalCost;
$totlalsaving = $totalincome - $totalCost;

if($totlalsaving>$paypermonth){

    echo "You are eligible for loan You have paypermonth $paypermonth";
}else{
    
    echo "You are not eligible for loan";
}
}

//get(10000, 5000, paypermonth(40000,5,1));
get(10000, 5000, paypermonth());
echo "<br>";





//array 
//$user = ["name"=>"Abdullah","sam"=>"andy"];
$user = ['Arif', 'Rohim', 'korim'];

echo $user[2];

?>
