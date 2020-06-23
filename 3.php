<form action="" method="get">
Irasyk spalva: <input type="text" name="color">
<br>
<button type="submit">Submit</button>
</form>

<?php
$color = '';//negalima taip bet tik taip gaunasi
$backgroundColor='black';
if (isset($_GET['color'])){
    $color = urldecode($_GET['color']);
    $backgroundColor=$color;
}
?>
<?php
print_r($_GET);
echo '<div style="width: 100%; height: 100vh; background-color:'.$backgroundColor.'"></div>';