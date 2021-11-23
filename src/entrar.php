<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" href="../assets/css/index_nav.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>
<body>

    <a  href="../index.php"><img width="100" class="position-absolute" src="../assets/img/logo.png"></a>
	
<main>
  <div class="row">
    <div class="col-md-6 mx-auto p-0 mt-5">
        <div class="">
            <div class="login-box">
                <div class="login-snip"> <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Logar</label> <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Cadastrar</label>
                    <div class="login-space">
                        <div class="login mt-2">
                            <form action="./server/login.php" method="post">
                                <div class="group"> <label for="user" class="label text-black">Usuário</label> <input name="user" type="text" class="input" placeholder="Digite seu nome de usuário"> </div>
                                <div class="group"> <label for="pass" class="label text-black">Senha</label> <input name="pass" type="password" class="input" data-type="password" placeholder="Digite sua senha"> </div>
                                <div class="group"> <input id="check" type="checkbox" class="check" checked> <label for="check"><span class="icon"></span> Continuar conectado</label> </div>
                                <div class="group"> <input type="submit" class="button"  value="Fazer login"> </div>
                                <div class="foot"> <a href="#"> Esqueci minha senha</a> </div>
                            </form>
                        </div>
                        <div class="sign-up-form">
                            <form action="./server/signup.php" method="post">
                                <div class="group"> <label for="user" class="label text-black">Usuário</label> <input name="user" id="user" type="text" class="input" required placeholder="Crie seu nome de usuário"> </div>
                                <div class="group"> <label for="pass" class="label text-black">Senha</label> <input name="pass" id="pass" type="password" class="input" required data-type="password" placeholder="Crie sua senha"> </div>
                                <div class="group"> <label for="pass" class="label text-black">Confirmar senha</label> <input name="repass" id="repass" type="password" class="input" required data-type="password" placeholder="Confirme sua senha"> </div>
                                <div class="group"><div id="message" class="ml-3"></div></div>
                                <div class="group"> <label for="pass" class="label text-black">Email</label> <input name="email" id="email" type="text" class="input dub" required placeholder="Digite seu email"> </div>
                                <div id="messageemail"></div>
                                <div class="group"> <input type="submit" class="button" value="Fazer cadastro"> </div>
                                <div class="foot"> <label for="tab-1">Já sou cadastrado</label> </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>


</body>
    <script src="../assets/js/jquery.js"></script>
	<script src="../assets/js/login.js"></script>
</html>