
<!--num = 4562-->
<!--rev_num = 0-->

<!--rev_num = rev_num *10 + num%10 = 2-->
<!--num = num/10 = 456-->

<!--rev_num = rev_num *10 + num%10 = 20 + 6 = 26-->
<!--num = num/10 = 45-->

<!--rev_num = rev_num *10 + num%10 = 260 + 5 = 265-->
<!--num = num/10 = 4-->

<!--rev_num = rev_num *10 + num%10 = 2650 + 4 = 2654-->
<!--num = num/10 = 0-->


<?php
$num = 23456;
$revnum = 0;
while ($num > 1)
{
    $revnum = ($revnum * 10) + ($num % 10);
    $num = ($num / 10);
}
echo "Reverse number of 23456 is: $revnum";


?>