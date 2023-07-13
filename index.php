<?php
    include ('_conn.php');
    include ('model.php');
    $req = AfficherClients($conn);
    include ('view.php');
?>
