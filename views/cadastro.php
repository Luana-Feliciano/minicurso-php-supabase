<?php

require_once './config.php';

$message = '';
$message_type = '';

$name = "";
$email = "";
$password = "";
$confirm_password = "";

//print_r($_POST);
$ok = "";
$error = ""; 

if(isset($_POST['btnacao'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']);
    $confirm_password = sha1($_POST['confirm_password']);
    $user = (int)$_POST['user']; 

    if(strlen(trim($name))==0){
        $error .= "Informe o nome do usuário.<bR>"; 
    }

    if(strlen(trim($email))==0){
        $error .= "Informe o email do usuário.<br>"; 
    }

    if(strlen(trim($password))==0){
        $error .= "Informe a senha do usuário.<br>"; 
    }

    if($password <> $confirm_password){
        $error .= "As senhas nao conferem.<br>"; 
    }

    if(strlen(trim($error))==0){

        if($user > 0 ){
            $sql = "UPDATE usuarios SET nome = '$name', email = '$email', senha = '$password' WHERE usuario = $user";
        }else {
            $sql = "INSERT INTO usuarios (nome, email, senha) values ( '$name', '$email', '$password')";
        }


        $res = pg_query($con, $sql);

        if(strpos(pg_last_error($con), "usuarios_email_key")){
            $error .=  " Email já cadastrado. <br>  ";
        }

        if(strlen(pg_last_error($con))==0){
            $ok = "Cadastro realizado com sucesso."; 
            $error = ""; 
        } 
    }
}


if(isset($_GET['edit'])){
    $user = (int)$_GET['edit'];

    $sql = "SELECT * from usuarios where usuario = $user ";
    $res = pg_query($con, $sql);

    if(pg_num_rows($res)>0){
        $name = pg_fetch_result($res, 0, "nome");
        $email = pg_fetch_result($res, 0, "email");
        
    }

}



?>

<?php if ($message): ?>
    <div class="alert alert-<?php echo $message_type; ?>">
        <?php echo $message; ?>
    </div>
<?php endif; ?>

<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-sm">
            <div class="card-body p-4">
                
                <div class="text-center mb-4">
                    <i class="bi bi-person-plus-fill" style="font-size: 3rem;"></i>
                    <h3 class="card-title mt-2">Criar Nova Conta</h3>
                    <p class="text-muted">Preencha os dados para se registrar no sistema.</p>
                </div>

                <div>
                    <?= $error . $ok ?>
                </div>

                <form method="POST" class="needs-validation" novalidate>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="name" name="name" value="<?=$name?>" placeholder="Seu nome completo" required>
                        <label for="nome">Nome Completo</label>
                        <div class="invalid-feedback">
                            Por favor, insira seu nome.
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" name="email" value="<?=$email?>" placeholder="seu@email.com" required>
                        <label for="email">Endereço de e-mail</label>
                        <div class="invalid-feedback">
                            Por favor, insira um e-mail válido.
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="password" name="password"  placeholder="Crie uma senha" required minlength="6">
                        <label for="password">Senha</label>
                        <div id="passwordHelp" class="form-text">Sua senha deve ter no mínimo 6 caracteres.</div>
                        <div class="invalid-feedback">
                            A senha é obrigatória e precisa ter no mínimo 6 caracteres.
                        </div>
                    </div>
                    
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirme sua senha" required>
                        <label for="confirm_password">Confirme sua Senha</label>
                        <div class="invalid-feedback">
                            As senhas não conferem.
                        </div>
                    </div>

                    <div class="d-grid mt-4">
                        <input type="submit" name="btnacao" value="Cadastrar" class="btn btn-primary btn-lg">
                        <input type="hidden" name="user" value="<?=$user?>">
                    </div>
                </form>

                <hr class="my-4">

                <div class="text-center">
                    <p class="text-muted small">Já tem uma conta? <a href="index.php?page=login">Entre aqui</a></p>
                </div>

            </div>
        </div>
    </div>
</div>