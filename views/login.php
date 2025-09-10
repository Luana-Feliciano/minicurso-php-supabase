<?php

$message = '';
$message_type = '';
function realizarLogin($data) {
    global $con, $message, $message_type;

    $email = filter_var(trim($data['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $senha = $data['password'] ?? '';

    if (empty($email) || empty($senha)) {
        $message = "E-mail e senha são obrigatórios.";
        $message_type = "danger";
        return false;
    }

    $sql = "SELECT usuario, nome, senha FROM usuarios WHERE email = $1"; //seguranca de sql injection
    $result = pg_query_params($con, $sql, [$email]);
   
    if ($result && pg_num_rows($result) === 1) {//login deu certo
        $user = pg_fetch_assoc($result);

        if (sha1($senha) === $user['senha']) {
            $_SESSION['user'] = $user['usuario'];
            $_SESSION['username'] = $user['nome'];
            header("Location: index.php?page=lista_usuario");
            exit;
        }
    }

    $message = "E-mail ou senha inválidos.";
    $message_type = "danger";
    return false;
}

if (isset($_POST['btnacao'])) {
    realizarLogin($_POST);
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
                    <i class="icone bi bi-box-arrow-in-right" style="font-size: 3rem;"></i>
                    <h3 class="card-title mt-2">Acessar Sistema</h3>
                    <p class="text-muted">Bem-vindo de volta!</p>
                </div>

                <form method="POST" class="needs-validation" novalidate>

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="seu@email.com"
                            required>
                        <label for="email">Endereço de e-mail</label>
                        <div class="invalid-feedback">
                            Por favor, insira um e-mail válido.
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Sua senha" required>
                        <label for="password">Senha</label>
                        <div class="invalid-feedback">
                            Por favor, insira sua senha.
                        </div>
                    </div>

                    <div class="d-grid">
                        <button name="btnacao" type="submit" class="btn btn-primary btn-lg">Entrar</button>
                    </div>
                </form>

                <hr class="my-4">

                <div class="text-center">
                    <p class="text-muted small">Não tem uma conta? <a href="index.php?page=cadastro">Cadastre-se
                            aqui</a></p>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    (function () {
        'use strict'
        var forms = document.querySelectorAll('.needs-validation')
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>