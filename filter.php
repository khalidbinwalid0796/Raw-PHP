<?php

/***
 * 
 *  FILTER_SANITIZE_EMAIL --> remove special character;
 *  FILTER_VALIDATE_EMAIL-->check given data is email or not;
 *  filter_var-->remove html tag from input data;
 *  check number validation between two number
 *     
***/

    $name_error = '';
    $email_error = '';
    $name = '';
    $email = '';

    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $email = $_POST['email'];

        if ($name != "") {
            $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
            if ($name == "") {
                $name_error .= 'Please enter a valid name.<br/><br/>';
            }
        } else {
            $name_error .= 'Please enter your name.<br/>';
        }

        if ($email != "") {
            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            if (filter_var($email, FILTER_VALIDATE_EMAIL) === false ) {
                $email_error .= "$email is NOT a valid email address.<br/><br/>";
            }
        } else {
            $email_error .= 'Please enter your email address.<br/>';
        }

        if(empty($name_error) && empty($email_error)){
            echo "Thank You";
        }

    }
?>

<!DOCTYPE HTML>
<html>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            Name : <input type="text" name="name" value="<?php echo $name; ?>" /><br><?php echo $name_error?><br>
            Email : <input type="email" name="email" value="<?php echo $email; ?>" /><br><?php echo $email_error ?><br>
            <input type="submit" value="submit" name="submit"/>
        </form>
    </body>
</html>

<?php
    $integer = 150;
    $min = 1;
    $max = 300;
    if (filter_var($integer, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) !== false) {
        echo("value exists between 1 and 300");
    } else {
        echo("value not exists between 1 and 300");
    }
?>    