<?php
    session_start();
    require_once '_conexao.php';

    $usuario = $_POST['user'];
    $senha = $_POST['pass'];
    $sql = $conn->prepare("SELECT * FROM users WHERE user = '$usuario'");
    $sql->execute();
    if($sql->rowCount() == 1){
        $info = $sql->fetch();
        if(md5($senha) == $info['pass']){
            $_SESSION['logado'] = true;
            if ($info['user'] == 'admin') {
                header("Location: ../Dash/admin.php");
            } else {
                header("Location: ../Dash_user/user.php");
            }
            die();
        }else{
            //Erro
            echo json_encode(array("erro" => true));
            header("Location: ../entrar.php");
        }
    }else{
        //Erro
        echo json_encode(array("erro" => true));
        header("Location: ../entrar.php");
    }
    