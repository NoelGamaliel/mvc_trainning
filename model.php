<?php
    function AfficherClients($conn) {
        $sql = 'SELECT * FROM membres';
        $req = $conn->prepare($sql);
        $req->execute();  
        
        
        return $req;
    }
?>