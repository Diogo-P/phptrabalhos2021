<?php
    session_start();
    require_once '../server/_conexao.php';
    if(!isset($_SESSION['logado'])) header("Location: ../../index.php");
    $id =  $_GET["id"];
    $stmt = $conn->query("SELECT nome, descricao FROM musicas WHERE id=$id")->fetch();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Podcast</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/addPodcast.css">
</head>
<body>
    <h1 class="mb-4">Atualizar podcast</h1>
    <form method="post" action="../server/updateForm.php"  enctype="multipart/form-data" >
        <input type="hidden" name="id" value="<?=$_GET["id"]?>">
        <label for="file">
            <p class="input_text">Foto de capa:</p>
            <input type="file" name="file[]" accept=".png, .jpg"/>
        </label>

        <label for="nome"> 
            <p class="input_text">Digite o nome do podcast</p>
            <input type="text" name="nome" id="nome" required  value="<?=  $stmt["nome"] ?>">
        </label>
        
        <label for="desc">
            <p class="input_text">Digite uma descrição do podcast</p>
            <textarea name="desc" id="desc" cols="30" rows="5" resize="noresize" required> <?= $stmt["descricao"] ?> </textarea>
        </label>
        <label for="file">
            <p class="input_text">Arquivo mp3:</p>
            <input type="file" name="file[]" accept="mp3"/>
        </label>
        <input type="submit" name="submit" value="Enviar" class="btn btn-success mt-2"/>
    </form>
</body>
</html>