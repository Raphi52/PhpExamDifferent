<?php require_once '../Model/Database.php'; //on appelle notre fichier de config
$id = null;
if (!empty($_GET['id'])) {
    $id = $_REQUEST['id'];
}
if (null == $id) {
    header("location:index.php");
} else {
    //on lance la connection et la requete
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) .
        $sql = "SELECT * FROM user where id =?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    $data = $q->fetch(PDO::FETCH_ASSOC);
    Database::disconnect();
}


/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>