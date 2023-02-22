<?php
function afficher()
{
    if (require("./base-conn.php")) {
        $reque = $access->prepare("SELECT*FROM acheter ORDER BY id DESC");
        $reque->execute();
        $data = $reque->fetchAll(PDO::FETCH_OBJ);
        $reque->closeCursor();
        return $data;
    }
}
