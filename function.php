<?php
function dd($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}
function find($table,$id){
    global $pdo;
    $sql="SELECT * FROM `$table` WHERE `id`='$id'";

    return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}


?>