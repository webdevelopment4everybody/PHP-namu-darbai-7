<?php
$background_color='black';
$raides= 'ABCDEFGHIJKLMNOPRSTUVZ';
$checkbox = '';
$count=0;
for ($i=0; $i < rand(3,10);$i++) {
    $reiksme = substr($raides, $i, 1);
    $checkbox .= "$reiksme<input type='checkbox' name='$reiksme' value='$reiksme'><br>";
}
$checkbox .='<button name="mygtukas" value=".$i.">Mygtukas</button>';
if(isset($_POST['mygtukas'])){
    $background_color ='white';
    $checkbox = '';
    $count=(count($_POST)-1);//del mygtuko -1         
}
?>
<form action="" method="post">
<?= $checkbox ?>
<!-- <input type='hidden' value='send' name='first'> -->
<!-- <button type="submit" name="button" value="mgt">Mygtukas</button> -->
</form>
<?php
echo "Paspausta kartu:", $count;
echo '<div style="width: 100%; height: 100vh; background-color:'.$background_color.'"></div>';