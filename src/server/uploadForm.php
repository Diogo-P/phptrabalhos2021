<?php

require_once "./_conexao.php";

function uploadFiles()
{
    $date = new DateTime();
    $total = count($_FILES['file']['name']);
    $tmp = array();

    for($i=0 ; $i < $total ; $i++) {

        $tmpFilePath = $_FILES['file']['tmp_name'][$i];

        if ($tmpFilePath != ""){
            $ext = explode(".", $_FILES["file"]["name"][$i]);

            $newFilePath = "../upload/" . $ext[0] ."{$date->getTimestamp()}.{$ext[1]}";
            if (move_uploaded_file($tmpFilePath, $newFilePath)) {

                if($_FILES['file']['type'][$i] == "audio/mpeg") {
                    $tmp["mp3"] = $newFilePath;
                } else if ($_FILES['file']['type'][$i] == "image/png" || $_FILES['file']['type'][$i] == "image/jpeg") {
                    $tmp["img"] = $newFilePath;
                }
            } 
        }
    } 

    return $tmp;
}

if (isset($_POST["submit"])) {

    $filesUploded = uploadFiles();

    if ($filesUploded) {
        $nome = $_POST["nome"];
        $desc = $_POST["desc"];
        $sql = "INSERT INTO musicas (img, mp3, nome, descricao) VALUES ('{$filesUploded["img"]}', '{$filesUploded["mp3"]}', '{$nome}', '{$desc}')";
        
        if ($conn->prepare($sql)->execute()) {
            header("Location: ../Dash/admin.php");
        }

    } else {
        echo "não foi possivel cadastrar";
    }

}