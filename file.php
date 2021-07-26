<?php

//touch('test.txt'); //file create
//unlink('test.txt'); //file remove
//mkdir('test'); //folder or directory create
//rmdir('test'); //folder or directory remove
//copy('test.txt','abc.txt'); //


//write
    $f = fopen("test.txt","a");
    fwrite($f,"sakib");
    echo(fwrite($f,"tamim"))."<br>"; //output:5 (length)
    echo(fputs($f,"kabir")); //output:5 (length)
    fclose($f);



//read
//    $f = fopen("test.txt","r");
//    while(!feof($f)){  //feof->end of file
//        echo fgets($f)."<br>"; //fgets->for read a single line from open file
//        //echo fgetc($f)."<br>"; //fgetc->for read character by character from open file
//    }
//    fclose($f);


//read
//    $a = readfile("test.txt");
//    echo $a; //output: sakib5
//readfile("test.txt"); //output: sakib



//file size in byte format
//echo filesize('test.txt');



//exist file
//    if(file_exists('test.txt')){
//        echo "yes";
//    }

?>