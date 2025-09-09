<div class="row justify-content-center">
    <div class="col-md-6 col-lg-5 col-xl-4">
        <div class="card shadow-sm">
            <div class="card-body p-4">

                <div class="text-center mb-4">
                    <i class="bi bi-box-arrow-in-right" style="font-size: 3rem;"></i>
                    <h3 class="card-title mt-2">Acessar Sistema</h3>
                    <p class="text-muted">Bem-vindo de volta!</p>
                </div>

                <form action="login_logic.php" method="POST" class="needs-validation" novalidate>

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="seu@email.com" required>
                        <label for="email">Endereço de e-mail</label>
                        <div class="invalid-feedback">
                            Por favor, insira um e-mail válido.
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Sua senha" required>
                        <label for="password">Senha</label>
                        <div class="invalid-feedback">
                            Por favor, insira sua senha.
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">
                                Lembrar-me
                            </label>
                        </div>
                        <a href="forgot-password.php" class="small text-decoration-none">Esqueci a senha</a>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg">Entrar</button>
                    </div>
                </form>

                <hr class="my-4">

                <div class="text-center">
                    <p class="text-muted small">Não tem uma conta? <a href="index.php?page=cadastro">Cadastre-se aqui</a></p>
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