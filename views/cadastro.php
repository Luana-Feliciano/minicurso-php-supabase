<?php
$message = '';
$message_type = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['password'];
    $confirma_senha = $_POST['confirm_password'];

    if (empty($nome) || empty($email) || empty($senha)) {
        $message = "Todos os campos são obrigatórios!";
        $message_type = "danger";
    } elseif ($senha !== $confirma_senha) {
        $message = "As senhas não coincidem!";
        $message_type = "danger";
    } else {

        //
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

                <form method="POST" class="needs-validation" novalidate>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Seu nome completo" required>
                        <label for="nome">Nome Completo</label>
                        <div class="invalid-feedback">
                            Por favor, insira seu nome.
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="seu@email.com" required>
                        <label for="email">Endereço de e-mail</label>
                        <div class="invalid-feedback">
                            Por favor, insira um e-mail válido.
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Crie uma senha" required minlength="6">
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
                        <button type="submit" class="btn btn-primary btn-lg">Cadastrar</button>
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