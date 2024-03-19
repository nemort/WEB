<?php
/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";


// Write your code here:
//1
$order = &$very_bad_unclear_name;
$order .= ", coke and fries";


//2
$count = 3;
echo $count;
echo "\n";

$cost = 10.9;
echo "$cost";
echo "\n";

echo 1 + 1 + 1 + 1 + 1 + 1 + 1 + 1 + 1 + 1 + 1 + 1;
echo "\n";

$lastMonth = 1187.23;
$thisMonth = 1089.98;
echo "Разница между расходами в этом месяце и прошлом ", $lastMonth - $thisMonth, "\n\n";


//11
$num_language = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_language;
echo $days_per_language;
echo "\n\n";


//12
echo 8**2;
echo "\n\n";


//13
$my_num = 52;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo $answer;
echo "\n\n";


//14
$a=10;
$b=3;
echo $a % $b, "\n";

if ($a % $b == 0) {
    echo "Делится\n";
    echo "Результат деления:", $a / $b;
}
else {
    echo "Делится с остатком.\n";
    echo "Остаток от деления: ", $a % $b;
}
echo "\n";

$st = pow(2, 10);
echo sqrt(245), "\n";

$a = [4, 2, 5, 19, 13, 0, 10];
$count = 0;
foreach($a as $element) {
    $count += pow($element, 2);
}
echo $count, "\n";

echo round(sqrt(379)), "\n";
echo round(sqrt(379), 1), "\n";
echo round(sqrt(379), 2), "\n";

$a = ['floor' => floor(sqrt(587)), 'ceil' => ceil(sqrt(587))];
print_r($a);
echo "\n";

$a = [4, -2, 5, 19, -130, 0, 10];
echo min($a);
echo "\n";
echo max($a);
echo "\n";

echo rand(1, 100), "\n";


$a = [];
for ($i = 0; $i < 10; $i++) {
    $array[$i] = rand();
}
print_r($array);
echo "\n";

$a = 9;
$b = 10;
echo abs($a - $b), "\n";

$a = [1, 2, -1, -2, 3, -3];
$b = [];
for ($i = 0; $i<sizeof($a); $i++) {
    $b[$i] = abs($a[$i]);
}
print_r($b);
echo "\n";

$a = 30;
$b = [];
for ($i = 1; $i <= $a; $i++) {
    if ($a % $i === 0) {
        $b[] = $i;
    }
}
print_r($b);

$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$count = 0;
$k = 0;
for ($i = 0; $i <= sizeof($nums); $i++) {
    $count += $nums[$i];
    $k += 1;
    if ($count > 10){
        echo $k;
        break;
    }
}
echo "\n\n";


//15
function printStringReturnNumber() {
    return 52;
}
$my_num = printStringReturnNumber();
echo $my_num;
echo "\n\n";


//16
function increaseEnthusiasm(string $str){
    return $str."!";
}
echo increaseEnthusiasm("Hello, world"), "\n";


function repeatThreeTimes(string $str){
    return $str.$str.$str;
}
echo repeatThreeTimes("I love pizza "), "\n";
echo increaseEnthusiasm(repeatThreeTimes("Hi")), "\n";


function cut(string $str, int $i = 10){
    return substr($str,0, $i);
}
echo cut("01234567891011121314151617181920");
echo "\n";


function recursion($a, $i = 0){
    if ($i<sizeof($a)){
        echo $a[$i] . "\n";
        recursion($a, $i + 1);
    }
}
echo "\n";
$a = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
recursion($a);


function summ($num) {
    $count = 0;
    while($num > 0){
        $count += $num % 10;
        $num = (int)($num / 10);
    }
    if ($count > 9){
        return summ($count);
    }
    return $count;
}
$num = 20289374502234;
echo "Однозначное число: ", summ($num);


//17
echo "\n";
function arrayX(int $len){
    for ($i = 1; $i <= $len; $i++){
        $array[$i] = str_repeat("x",$i) ;
    }
    return $array;
}
print_r(arrayX(3));


function arrayFill($x, int $len){
    for ($i = 0; $i <= $len; $i++){
        $array[$i] = $x;
    }
    return $array;
}
print_r(arrayFill("*",4));


function sumArrays($array) {
    $count = 0;
    foreach ($array as $i) {
        foreach ($i as $j) {
            $count += $j;
        }
    }
    return $count;
}
$array = [[1, 2, 3], [4, 5], [6]];
echo sumArrays($array), "\n";


$num = 1;
$array = [];
for ($i = 0; $i < 3; $i++) {
    $internalArray = [];

    for ($j = 0; $j < 3; $j++) {
        $internalArray[] = $num;
        $num++;
    }
    $array[] = $internalArray;
}
print_r($array);


$nums = [2, 5, 3, 9];
$result = $nums[0] * $nums[1] + $nums[2] * $nums[3];
echo $result, "\n";

$user = ['name' => "Романов", 'surname' => "Илья", 'patronymic' => "Андреевич"];
echo "ФИО: ", $user['name']," ", $user['surname']," ", $user['patronymic'], "\n";

$date = ['year' => 2024, 'month' => "03", 'day' => "10"];
echo "Дата: ", $date['year'],"-",$date['month'],"-",$date['day'], "\n";

$arr = ['a','b','c','d','e'];
echo sizeof($arr), "\n";
$len = count($arr);
echo $arr[$len - 1]."\n".$arr[$len - 2]."\n\n";


//18
function sumTwo(int $a, int $b){
    if (($a + $b) > 10) {
        return True;
    }
    else{
        return False;
    }
}
echo sumTwo(10, 1), "\n";


function isEqual(int $a, int $b){
    if ($a == $b){
        return True;
    }
    else{
        return False;
    }
}
echo isEqual(52, 52), "\n";

$test = 0;
echo $test == 0 ? 'верно' : '';
echo "\n";

$age = 52;
if ($age < 10 || $age > 99) {
    echo "$age не попадает в диапазон [10, 99]\n";
}
else {
    $sum = array_sum(str_split($age));
    if ($sum <= 9) {
        echo "Сумма цифр однозначна";
    } else {
        echo "Сумма цифр двузначна";
    }
}
echo "\n";

$arr = [1,2,3];
if (sizeof($arr) == 3) {
    $sum = array_sum($arr);
    echo $sum;
}


//19
echo "\n";
for ($i = 1; $i <= 20; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo 'x';
    }
    echo "\n";
}
echo "\n\n";


//20
$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];
$average = array_sum($nums) / sizeof($nums);
echo $average, "\n";

$a = 1;
$b = 100;
$sum = ($a * ($b + 1)) / 2;
echo $sum, "\n";

$nums = [52, 54, 228, 1480, 1, 2, 3, 4, 5, 6];
$nums = array_map("sqrt", $nums);
print_r($nums);

$nums = range(1, 26);
$letters = range('a', 'z');
print_r(array_combine($letters, $nums));

$str = '1234567890';
$pairs = str_split($str, 2);
$array = array_map("intval",$pairs);
$sum = array_sum($array);
echo $sum, "\n\n";


// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";