<?php

function afficher()
{
    if (require("./base-conn.php")) {
        $req = $access->prepare("SELECT * FROM tour ORDER BY id DESC");
        $req->execute();
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        $req->closeCursor();
        return $data;
    }
}
