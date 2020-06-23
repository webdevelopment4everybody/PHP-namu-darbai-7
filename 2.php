<?php
$color ='';
$backgroundColor='black';
if(isset($_GET['color'])) {
    $color = urldecode($_GET['color']);
    $backgroundColor=$color;
    }
$first_link='<a href="2.php">pirmas linkas</a>'.'<br>';
$second_link='<a href="2.php?color='.$color.' ">antras linkas</a>'.'<br>';
echo '<div style="width: 100%; height: 100vh; background-color:'.$backgroundColor.'">'.$first_link.$second_link.'</div>';
