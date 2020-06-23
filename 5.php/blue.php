<?php

if(!empty($_GET)) {
    if($_GET['file'] == 'red.php'){
        header("Location: red.php");
        exit(); 
    }
}
$blue_link='<a href="red.php?file=red.php">Blue</a>'.'<br>';
echo $blue_link;
print_r($_GET);