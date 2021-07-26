<?php
    $users=[
            ["id"=>1,"name"=>"Jon","mobile"=>"01870","address"=>"Dhaka"],
            ["id"=>2,"name"=>"Ton","mobile"=>"01770","address"=>"Dhaka"],
            ["id"=>3,"name"=>"Ron","mobile"=>"01710","address"=>"Khulna"],
            ["id"=>4,"name"=>"Don","mobile"=>"01710","address"=>"Khulna"]
        ];
?>
<!DOCTYPE HTML>
<html>
    <body>
        <table border="1">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Mobile</th>
                <th>Address</th>
            </thead>
            <tbody>
            <?php

    //First Way

/*                foreach ($users as $user){
                    echo '<tr>';
                    echo '<td>'.$user['id'].'</td>';
                    echo '<td>'.$user['name'].'</td>';
                    echo '<td>'.$user['mobile'].'</td>';
                    echo '<td>'.$user['address'].'</td>';
                    echo '</tr>';
                }
*/
    //Second Way
           foreach ($users as $user){
               echo "<tr>
                       <td>$user[id]</td>
                       <td>$user[name]</td>
                       <td>$user[mobile]</td>
                       <td>$user[address]</td>
                    </tr>";
           }

            ?>
            </tbody>
        </table>
    </body>
</html>