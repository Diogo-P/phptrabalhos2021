<?php
    session_start();
    require_once '_conexao.php';

    $user = $_POST["user"];
    $pass = md5($_POST["pass"]);
    $repass = md5($_POST["repass"]);
    $email = $_POST["email"];
    $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 

    if ($pass == $repass && preg_match($regex, $email)) {

        $sql = "INSERT INTO users (user, pass, email) VALUES ('$user', '$pass', '$email')";
        if ($conn->prepare($sql)->execute()) {
            $_SESSION['logado'] = true;
            header("Location: ../Dash_user/user.php");
        }
    
    } else {
        // Erro
        echo json_encode(array("erro" => true));
        header("Location: ../entrar.php");
    }


