<?php
$backgroundColor='pink';
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $backgroundColor = 'green';
    }
    else{
        $backgroundColor = 'yellow';
    }
?>
<form action="" method="get">
<button type="submit" name="action" value="get">Get paspaudei!</button>
</form>

<form action="" method="post">
<button type="submit" name="action" value="post">Post paspaudei!</button>
</form>
<?php
echo '<div style="width: 100%; height: 100vh; background-color:'.$backgroundColor.'">.</div>';
print_r($_GET);
print_r($_POST);