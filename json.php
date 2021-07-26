<?php

   /***
    * *
    * * json_encode(index array or associative array)-> json array or json object a convert kore 
    * * but json array or json object ar data type kintu string mane string a convert kore.
    * *
    * *
    * * json_decode(json array or json object as string)-> array or object a convert kore.
    * *
    * ***/

   //echo json_encode([]); 
   //echo json_decode([]); //Argument must be of type string


//json_encode-------

    //index array converted into json array
    $colors = array("Red", "Green", "Blue", "Orange", "Yellow");
    echo "Using json_encode, index array converted into json array<br>";
    echo json_encode($colors)."<br><br>";
    // $encode_data = json_encode($colors)."<br><br>";
    // echo gettype($encode_data);



    //associative array converted into json object
    $marks = array("Peter"=>65, "Harry"=>80, "John"=>78, "Clark"=>90);
    echo "<br>Using json_encode, associative array converted into json object<br>";
    echo json_encode($marks)."<br><br>";
    // $encode_data = json_encode($marks)."<br><br>";
    // echo gettype($encode_data);



    //forcefully indexed array converted into json object
    $colors = array("Red", "Green", "Blue", "Orange");
    echo "<br>Using json_encode(JSON_FORCE_OBJECT), forcefully indexed array converted into json object<br>";
    echo json_encode($colors, JSON_FORCE_OBJECT)."<br><br>";
    // $encode_data = json_encode($colors)."<br><br>";
    // echo gettype($encode_data);


//json_decode------
    // JSON string(object) into object
    $json1 = '{"Peter":65,"Harry":80,"John":78,"Clark":90}';
    // echo gettype($json1);
    // $dede_data = json_decode($json1);
    // echo gettype($dede_data);
    var_dump(json_decode($json1));
    echo "<br><hr>";


    //JSON string(object) into array
    $json2 = '{"Peter":65,"Harry":80,"John":78,"Clark":90}';
    // echo gettype($json2);
    // $dece_data = json_decode($json2,true);
    // echo gettype($dece_data);
    var_dump(json_decode($json2,true));
    echo "<br><hr>";




    $json = '{"Peter":65,"Harry":80,"John":78,"Clark":90}';
    // Decode JSON data to PHP associative array
    $arr = json_decode($json, true);
    // Access values from the associative array
    echo $arr["Peter"]."<br>";  // Output: 65
    echo $arr["Harry"]."<br>";  // Output: 80
    echo $arr["John"]."<br>";   // Output: 78
    echo $arr["Clark"]."<br>";  // Output: 90

    // Decode JSON data to PHP object
    $obj = json_decode($json);
    // Access values from the returned object
    echo $obj->Peter."<br>";   // Output: 65
    echo $obj->Harry."<br>";   // Output: 80
    echo $obj->John."<br>";    // Output: 78
    echo $obj->Clark."<br>";   // Output: 90





    $json = '{"Peter":65,"Harry":80,"John":78,"Clark":90}';
    // Decode JSON data to PHP associative array
    $arr = json_decode($json, true);

    // Loop through the associative array
    foreach ($arr as $key => $value) {
        echo $key . "=>" . $value . "<br>";
    }
    echo "<hr>";
    // Decode JSON data to PHP object
    $obj = json_decode($json);

    // Loop through the object
    foreach ($obj as $key => $value) {
        echo $key . "=>" . $value . "<br>";
    }
    ?>



<!--nestes json object(string) access-->
<!--json objected converted into array, then access-->

<?php
$json_string = '{
   "results" : [
      {
         "address_components" : [
            {
               "long_name" : "1600",
               "short_name" : "1600",
               "types" : [ "street_number" ]
            },
            {
               "long_name" : "Amphitheatre Pkwy",
               "short_name" : "Amphitheatre Pkwy",
               "types" : [ "route" ]
            },
            {
               "long_name" : "Mountain View",
               "short_name" : "Mountain View",
               "types" : [ "locality", "political" ]
            },
            {
               "long_name" : "Santa Clara County",
               "short_name" : "Santa Clara County",
               "types" : [ "administrative_area_level_2", "political" ]
            },
            {
               "long_name" : "California",
               "short_name" : "CA",
               "types" : [ "administrative_area_level_1", "political" ]
            },
            {
               "long_name" : "United States",
               "short_name" : "US",
               "types" : [ "country", "political" ]
            },
            {
               "long_name" : "94043",
               "short_name" : "94043",
               "types" : [ "postal_code" ]
            }
         ],
         "formatted_address" : "1600 Amphitheatre Parkway, Mountain View, CA 94043, USA",
         "geometry" : {
            "location" : {
               "lat" : 37.4224764,
               "lng" : -122.0842499
            },
            "location_type" : "ROOFTOP",
            "viewport" : {
               "northeast" : {
                  "lat" : 37.4238253802915,
                  "lng" : -122.0829009197085
               },
               "southwest" : {
                  "lat" : 37.4211274197085,
                  "lng" : -122.0855988802915
               }
            }
         },
         "place_id" : "ChIJ2eUgeAK6j4ARbn5u_wAGqWA",
         "types" : [ "street_address" ]
      }
   ],
   "status" : "OK"
}';
$json_array=json_decode($json_string,true);

display_array_recursive($json_array);
function display_array_recursive($json_rec){
    if($json_rec){
        foreach($json_rec as $key=> $value){
            if(is_array($value)){
                display_array_recursive($value); 
                //parameter hisabe array jei pabe sei function nije nijek call korbe karon array k to venge felte hobe
            }else{
                echo $key.'----->>>>>'.$value.'<br>';
            }
        }
    }
}
?>
