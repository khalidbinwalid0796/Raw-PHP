<?php

    $cars = array("bmw","volvo","lodi");

    for($i=0;$i<count($cars);$i++){ 
        echo $cars[$i];
        echo "<br>";
    }

    $age = array(
        "sakib"=>24,
        "tamin"=>35,
        "miraz"=>25
    );
    foreach ($age as $key=>$value){
        echo $key."<br>".$value;
        echo "<br>";
    }

    $mcars = array(
        array("bmw",30), //echo $mcars[0][0]; echo $mcars[0][1];
        array("volvo",40),
        array("lodi",50)
    );

//associative array->
//array_change_key_case($arr_name,CASE_UPPER)->sob key gulo boro hater kore dei
//array_change_key_case($arr_name,CASE_LOWER)->sob key gulo coto hater kore dei
    $name = array(
        "Sakib"=>24,
        "Tamin"=>35,
        "Miraz"=>25
    );
    echo "<pre>";
    print_r(array_change_key_case($name,CASE_UPPER)) ;
    //print_r(array_change_key_case($name,CASE_LOWER)) ;
    echo "</pre>";



//multidimension array->
//array_column($arr_name,$column_key, $index_key)->multidimension array theke j kono column ar value access kora jai & key te array ar id ar value assign kora jai
$age = array(
    array(
        "id"=>'26',
        "tamin"=>'35',
        "last_name"=>'qwe'
    ),
    array(
        "id"=>'25',
        "tamin"=>'35',
        "last_name"=>'asd'
    ),
    array(
        "id"=>'24',
        "tamin"=>'35',
        "last_name"=>'zxc'
    )
);

//$last_name = array_column($age,'last_name');
$last_name = array_column($age,'last_name','id'); //array_name, value, key(na dile by default nie nei)
echo "using array array_column()";
echo "<pre>";
print_r($last_name);
echo "</pre>";
echo "using array array_column()";




//array combine-> 2ta array theke key value akare value gulo print kora jai
$student= array("aa","bb","cc");
$dept = array("cse","eee","math");
$combine = array_combine($student,$dept); //1st array key hoy, 2nd array value hoy
echo "<br>using array_combine";
echo "<pre>";
print_r($combine) ;
echo "</pre>";
echo "using array_combine<br>";




//array_merge(array_name1,array_name2)->index & associative array k merge kore
$a1=array("red","green");
$a2=array("blue","yellow");
echo "<br>using array_merge";
echo "<pre>";
print_r(array_merge($a1,$a2));
echo "</pre>";
echo "using array_merge<br>";




//index array
//array_count_values($arr_name) ->array te pottek ta element koto bar kore ase seta ber kore dei
$student= array("qwe","asd","zxc","qwe","asd","zxc");
echo "<br>array_count_values";
echo "<pre>";
print_r(array_count_values($student));
echo "</pre>";



//associative array->
//array_diff($arr1,$arr2)->1st array ar sathe 2nd array ar difference ber kore value match kore, but value print hoy 1st array ar j gulo match kore na sei properti gulo
$arr1 = array(
    "id"=>'26',
    "name"=>'sakib',
    "last_name"=>'qwe'
);
$arr2 = array(
    "id"=>'24',
    "name"=>'sakib',
    "last_name"=>'zxc'
);
$diff = array_diff($arr1,$arr2);
echo "<br>array_diff";
echo "<pre>";
print_r($diff) ;
echo "</pre>";



//associative array->
//array_diff_assoc($arr1,$arr2)->1st array ar sathe 2nd array ar difference ber kore key & value match kore, but value print hoy 1st array ar j gulo match kore na sei properti gulo
$arr1 = array(
    "id"=>'26',
    "name"=>'sakib',
    "last_name"=>'qwe'
);
$arr2 = array(
    "id"=>'24',
    "name"=>'sakib',
    "last_name"=>'zxc'
);
$diff = array_diff_assoc($arr1,$arr2);
echo "<br>array_diff_assoc";
echo "<pre>";
print_r($diff) ;
echo "</pre>";



//associative array->
//array_diff_key($arr1,$arr2)->1st array ar sathe 2nd array ar difference ber kore key match kore, but value print hoy 1st array ar j gulo match kore na sei properti gulo
$arr1 = array(
    "id"=>'26',
    "name"=>'sakib',
    "last_name"=>'qwe'
);
$arr2 = array(
    "id"=>'24',
    "name1"=>'sakib',
    "last_name1"=>'zxc'
);
$diff = array_diff_key($arr1,$arr2);
echo "<br>array_diff_key";
echo "<pre>";
print_r($diff) ;
echo "</pre>";



//associative array->
//array_intersect($arr1,$arr2)->match kora vule gulo nie ase but key kintu sei 1st array ar key gulo hobe
$arr1 = array(
    "id"=>'26',
    "name"=>'sakib',
    "last_name"=>'qwe'
);
$arr2 = array(
    "id"=>'24',
    "name1"=>'sakib',
    "last_name1"=>'zxc'
);
$diff = array_intersect($arr1,$arr2);
echo "<br>array_intersect";
echo "<pre>";
print_r($diff) ;
echo "</pre>";



//associative array->
//array_intersect_assoc($arr1,$arr2)->key & value match kora vule gulo nie ase
$arr1 = array(
    "id"=>'26',
    "name"=>'sakib',
    "last_name"=>'qwe'
);
$arr2 = array(
    "id"=>'24',
    "name"=>'sakib',
    "last_name1"=>'zxc'
);
$diff = array_intersect_assoc($arr1,$arr2);
echo "<br>array_intersect_assoc";
echo "<pre>";
print_r($diff) ;
echo "</pre>";



//associative array->
//array_intersect_key($arr1,$arr2)->key match kora vule gulo nie ase
$arr1 = array(
    "id"=>'26',
    "name"=>'sakib',
    "last_name"=>'qwe'
);
$arr2 = array(
    "id"=>'24',
    "name"=>'sakib',
    "last_name1"=>'zxc'
);
$diff = array_intersect_key($arr1,$arr2);
echo "<br>array_intersect_key";
echo "<pre>";
print_r($diff) ;
echo "</pre>";



//associative array->
//array_key_exists("key_name",$array_name)->key ase kina check kore
$arr1 = array(
    "id"=>'26',
    "name"=>'sakib',
    "last_name"=>'qwe'
);

echo "<br>array_key_exists<br>";
if(array_key_exists("name",$arr1)){
    echo "exist";
}else{
    echo  "not exist";
}



//associative array->
//array_key($array_name)->array ar key gulo print kore.
$arr1 = array(
    "id"=>'26',
    "name"=>'sakib',
    "last_name"=>'qwe'
);
echo "<br>array_keys";
$res = array_keys($arr1);
    echo "<pre>";
    print_r($res) ;
    echo "</pre>";




//array_map(callback_function,array_name);
function myfunction($num)
{
    return($num*$num);
}

$a=array(1,2,3,4,5);

echo "<pre>";
print_r(array_map("myfunction",$a));
echo "</pre>";




//array_multisort(array_name);(array_name1,array_name2)->akta array thakle by default ascending order a sort kore
//2ta array thakle 1st ta ascending & 2nd ta descending order a sort hoy
$a=array("Dog","Cat"); //2ta array ar size same hote hobe
$b = array("Bear","Zebra");
array_multisort($a);
echo "<pre>";
print_r($a);
echo "</pre>";

array_multisort($a,$b);
//array_multisort($a,SORT_ASC,$b,SORT_DESC); //aivabe bole o dea jai
echo "<pre>";
print_r($a);
echo "</pre>";
echo "<pre>";
print_r($b);
echo "</pre>";



//array_pad(array_name,size,custom_value)
$a=array("red","green");
echo "<br>using array_pad";
echo "<pre>";
print_r(array_pad($a,5,"blue")); //5 ta value print hobe but array te 2ta ase baki 3 ta blue hoye jabe
echo "</pre>";


//array_pop(array_name)->last element ta delete kore dai
$a=array("red","green","blue");
array_pop($a);
echo "<pre>";
print_r($a);
echo "</pre>";


//array_push(array_name,value)->last element add kore
$a=array("red","green");
array_push($a,"blue","yellow");
echo "<pre>";
print_r($a);
echo "</pre>";



//index array->value gulo numeric, akhn array_product(array_name) value gulok gun kore return kore
$a=array(5,5);
echo(array_product($a));
echo "<pre>";
print_r($a);
echo "</pre>";



//array_replace(array_name1,array_name2)->1st array k 2nd array die replace
$a1=array("1st_red","1st_green");
$a2=array("2nd_blue","2nd_yellow");
echo "<br> using array_replace";
echo "<pre>";
print_r(array_replace($a1,$a2));
echo "</pre>";



//array_reverse(array_name)->array k ulta kore print kore
$a=array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota");
echo "<br> using array_reverse";
echo "<pre>";
print_r(array_reverse($a));
echo "</pre>";



//array_search(value,array_name,strict_mode)->input dea hoy value & oi value ar key return kore
$a=array("a"=>"5","b"=>5,"c"=>"5");
echo "<pre>";
echo array_search(5,$a,true); //true mane strict mode open
echo "</pre>";




//array_shift(array_name)->array ar 1st element remove kore
$a=array("a"=>"red","b"=>"green","c"=>"blue");
echo array_shift($a)."<br>";
echo "<pre>";
print_r ($a);
echo "</pre>";



//array_slice(array_name,slicing_number)
$a=array("red","green","blue","yellow","brown");
echo "<br>using array_slice<br>";
echo "<pre>";
print_r(array_slice($a,2));
echo "</pre>";



//array_sum(array_name)
$a=array(5,15,25);
echo "<pre>";
echo array_sum($a);
echo "</pre>";



//array_unique(array_name)->duplicate entry gulo remove kore dai
$a=array("a"=>"red","b"=>"green","c"=>"red");
echo "<pre>";
print_r(array_unique($a));
echo "</pre>";



//array_unshift(array_name)->array ar first a element add kore
$a=array("a"=>"red","b"=>"green");
array_unshift($a,"blue");
echo "<pre>";
print_r($a);
echo "</pre>";



//array_values(array_name)->array ar value gulo print kore
$a=array("Name"=>"Peter","Age"=>"41","Country"=>"USA");
echo "<pre>";
print_r(array_values($a));
echo "</pre>";




//in_array(item,array_name)->item, array te ase kina check kore
$carss = array("bmw","volvo","lodi","abc","qwe");
if(in_array("bmw",$carss)){
    echo"found";
}else{
    echo"not found";
}




//array checking function
echo"<br>";
$yes = array('this', 'is', 'an array');
echo is_array($yes) ? 'Array' : 'not an Array';
echo "<br>";
$no = 'this is a string';
echo is_array($no) ? 'Array' : 'not an Array';
echo"<br>";





$input_array = array('a', 'b', 'c', 'd', 'e');
echo "<br>using array_chunk<br>";
echo "<pre>";
print_r(array_chunk($input_array, 2)); //array size 2
echo "</pre>";
echo "<br>using array_chunk and strict mode<br>";
echo "<pre>";
print_r(array_chunk($input_array, 2, true));
echo "</pre>";


//array_walk(array_name,custom_function)->associative array k user defined function a pass kora jai
function myfun($dept, $name){
    echo "$name is a $dept<br>";
}

$name = array(
    "sakib" => "all-rounder",
    "tamim" => "batsman",
    "miraz" => "bolwer",
);

array_walk($name,"myfun");



//arsort(array_name)->value gulok desc order a print kore
$agee=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
arsort($agee);

foreach($agee as $x=>$x_value)
{
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}



//asort(array_name)->value gulok asc order a print kore
$ages=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
asort($ages);

foreach($ages as $x=>$x_value)
{
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}



//compact()->takes variable name as parameter that will be key in array
$firstname = "Peter";
$lastname = "Griffin";
$age = "41";

$result = compact("firstname", "lastname", "age");
echo "<pre>";
print_r($result); //return array
echo "</pre>";




//index array ar value dei
// current(array_name)->array ar current mane 1st value ta return kore;
// next(array_name)->array ar next mane 2nd value ta return kore;
// prev(array_name)->array ar previous value ta return kore;
// end(array_name)->array ar last value ta return kore
$people = array("Peter", "Joe", "Glenn", "Cleveland");
echo current($people) . "<br>";
echo next($people) . "<br>";
echo prev($people) . "<br>";
echo end($people) . "<br>";




//associative array ar currnet key,array ar key onusare asc & desc order a sajano jai
//key(array_name)->array ar current key ar index print kore
//krsort(array_name)->descending order(key) a array print hoy
//ksort(array_name)->ascending order(key) a array print hoy

$people=array("Peter","Joe","Glenn","Cleveland");
echo "<br> using key<br>";
echo "The key from the current position is: " .key($people)."<br>"; //1st key ar index mane 0 print kore

$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
krsort($age);

foreach($age as $x=>$x_value)
{
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}

$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
ksort($age);

foreach($age as $x=>$x_value)
{
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}




//shuffle(array_name)->random order a print hoy
$my_array = array("red","green","blue","yellow","purple");

echo "<pre>";
shuffle($my_array);
print_r($my_array);
echo "</pre>";
?>