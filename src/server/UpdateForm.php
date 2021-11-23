<?php
    
    require_once '_conexao.php';

    $id = $_POST["id"];
	$stmt = $conn->query("SELECT img, mp3 FROM musicas WHERE id='$id'")->fetch();
    
    var_dump($_FILES);
    function uploadFiles($stmt)
    {
        $date = new DateTime();
        $total = count($_FILES['file']['name']);
        $tmp = array();
        if ($_FILES['file']['name'][0] != "" || $_FILES['file']['name'][1] != "") {
            for($i=0 ; $i < $total ; $i++) {

                $tmpFilePath = $_FILES['file']['tmp_name'][$i];
    
                if ($tmpFilePath != ""){
                    $ext = explode(".", $_FILES["file"]["name"][$i]);
    
                    $newFilePath = "../upload/" . $ext[0] ."{$date->getTimestamp()}.{$ext[1]}";

                    if($_FILES['file']['type'][$i] == "audio/mpeg") {
                        $tmp["mp3"] = $newFilePath;
                        unlink($stmt["mp3"]);
                    } else {
                        $tmp["mp3"] = $stmt["mp3"];
                    }
                    
                    if ($_FILES['file']['type'][$i] == "image/png" || $_FILES['file']['type'][$i] == "image/jpeg") {
                        $tmp["img"] = $newFilePath;
                        unlink($stmt["img"]);
                    } else {
                        $tmp["img"] = $stmt["img"];
                    }
                    
                    move_uploaded_file($tmpFilePath, $newFilePath);
                }
            } 
        } else {
            $tmp["mp3"] = $stmt["mp3"];
            $tmp["img"] = $stmt["img"];
        }
        return $tmp;
    }

    $file = uploadFiles($stmt);
    var_dump($file);
    
    $nome = $_POST["nome"];
    $desc = $_POST["desc"];
    
    $sql = "UPDATE musicas SET img=?, mp3=?, nome=?, descricao=? WHERE id=?";
    
    if ($conn->prepare($sql)->execute([$file["img"], $file["mp3"], $nome, $desc, $id])) {
        header("Location: ../Dash/admin.php");
    }

    