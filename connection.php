<?php

//mysql
//This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0.
//    $con=mysql_connect("localhost","root","");
//    mysql_select_db("youtube",$con); //mysql_select_db -> database select kore nie ase
//    $sql = "insert into test(name) values(sakib)";
//    mysql_query($sql); //mysql_query->sql query execute kore


//PDO will work on 12 different database systems, whereas MySQLi will only work with MySQL databases


//mysqli
    $con=mysqli_connect("localhost","root","","youtube"); //localhost->host name or server name
    //$sql = "insert into test(name) values(sakib)";
    $sql = "select * from test";
    $res = mysqli_query($con,$sql); //mysqli_query->sql query execute kore
    if(mysqli_num_rows($res)>0){
        while($row =mysqli_fetch_assoc($res)){
            echo "<pre>";
            print_r($row);
        }
    }else{
        echo "Data Not Found";
    }



//PDO->PHP Data Objects $ has an exception class to handle any problems that may occur in our database queries
    $con = new PDO("mysql:host=localhost; dbname=youtube","root","");
    //$sql = "insert into test(name) values('sakib')";
    $sql = "select * from test";
    $stmt = $con->prepare($sql);
    $stmt->execute();
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo "<pre>";
    print_r($row);

try{
    $con=new PDO("mysql:host=localhost;dbname=youtube","root","");
}catch(PDOExection $e){
    echo $e->getMessage();
}

?>
