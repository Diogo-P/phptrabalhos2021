<?php 
    session_start();
    if(!isset($_SESSION['logado'])) header("Location: ../../index.php");
     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar podcast</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/addPodcast.css">
</head>
<body>
    <h1 class="mb-4">Cadastrar podcast</h1>
    <form method="post" action="../server/uploadForm.php"  enctype="multipart/form-data" >
        <label for="file">
            <p class="input_text">Foto de capa:</p>
            <input type="file" name="file[]" accept=".png, .jpg" required/>
        </label>

        <label for="nome"> 
            <p class="input_text">Digite o nome do podcast</p>
            <input type="text" name="nome" id="nome" required>
        </label>
        
        <label for="desc">
            <p class="input_text">Digite uma descrição do podcast</p>
            <textarea name="desc" id="desc" cols="30" rows="5" resize="noresize" required></textarea>
        </label>
        <label for="file">
            <p class="input_text">Arquivo mp3:</p>
            <input type="file" name="file[]" accept="mp3" required/>
        </label>
        <input type="submit" name="submit" value="Enviar" class="btn btn-success mt-2"/>
    </form>
</body>
</html>