<?php

    require_once '_conexao.php';

    $id = $_POST["id"];

	$stmt = $conn->query("SELECT img, mp3 FROM musicas WHERE id='$id'")->fetch();

    unlink($stmt["img"]);
    unlink($stmt["mp3"]);
    
    if ($conn->prepare("DELETE FROM musicas WHERE id=?")->execute([$id])) {
        echo json_encode(array("ok" => true));
    } else {
        echo json_encode(array("ok" => false));
    }


    