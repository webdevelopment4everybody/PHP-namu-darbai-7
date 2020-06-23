
<?php
//Pirmas
$backgroundColor='black';
if(!empty($_GET)) {
    if($_GET['color'] == 1){
        $backgroundColor = 'red';
    }
}
$first_link='<a href="1.php">pirmas linkas</a>'.'<br>';
$second_link='<a href="1.php?color=1">antras linkas</a>'.'<br>';
echo '<div style="width: 100%; height: 100vh; background-color:'.$backgroundColor.'">'.$first_link.$second_link.'</div>';
print_r($_GET);