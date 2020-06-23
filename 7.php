<?php
    session_start();
    // $paspaudimo_sk = 0;
    // $_SESSION['paspaudimo_sk'] = 0;
    // pasitikrinam ar egzistuoja sesion kintamasis
    if ( !isset($_SESSION['paspaudimo_sk']) ) {
        $_SESSION['paspaudimo_sk'] = 0;
    }
    //patikkrinam ar paspaudimas buvo priimtas
    $vote = isset($_POST['action']) ? $_POST['action'] : false;
    if ( $vote ) {
        // padidinam
        echo $_SESSION['paspaudimo_sk']++;
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        echo '<p style="background-color: yellow; height: 100vh; width: 100%"></p>';
        echo $_SESSION['paspaudimo_sk'];
        if($_SESSION['paspaudimo_sk'] == 2){
            // $_SERVER['REQUEST_METHOD'] == 'GET';
            $_SESSION['paspaudimo_sk'] = 0;
            header('Location: 7.php');
            die();
        } 
    } elseif($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo '<p style="background-color: green; height: 100vh; width: 100%"></p>';
}
print_r($_GET);
print_r($_POST);
?>
<form action="" method="get">
<button name="action" value="get">Paspaudei get!</button>
</form>
<form action="" method="post">
<button name="action" value="post">Paspaudei post!</button>
</form>
<?php