<?php

if(!empty($_GET)) {
    if($_GET['file'] == 'blue.php'){
        header("Location: blue.php");
        exit(); 
    }
}
$red_link='<a href="red.php?file=blue.php">Red</a>'.'<br>';
echo $red_link;
print_r($_GET);