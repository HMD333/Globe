<?php
if(isset($_POST["ID"])){
    require_once "Data/dbh.inc.php";
    $ID = htmlspecialchars($_POST["ID"]);
    if(!empty($ID)){
        $query = "DELETE FROM News 
        WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('s', $ID);
        $stmt->execute();
    }
    header("Location: ./My_posts.php");
}
