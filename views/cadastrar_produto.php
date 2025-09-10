<div class="container py-5 px-4">
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-9">

            <div class="card shadow-sm mb-5">
                <div class="card-body p-4 p-lg-5">
                    <div class="text-center mb-4">
                        <i class="icone bi bi-box-seam" style="font-size: 3rem;"></i>
                        <h3 class="card-title mt-2">Cadastro de Produto</h3>
                        <p class="text-muted">Preencha os dados para adicionar um novo produto.</p>
                    </div>

                    <form id="productForm" class="needs-validation" novalidate>
                        <input type="hidden" id="productId">

                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="nome_produto"
                                        placeholder="Nome do Produto" required>
                                    <label for="nome_produto">Nome do Produto</label>
                                    <div class="invalid-feedback">O nome do produto é obrigatório.</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="preco" placeholder="Preço" required
                                        min="0" step="0.01">
                                    <label for="preco">Preço (R$)</label>
                                    <div class="invalid-feedback">Por favor, insira um preço válido.</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="quantidade"
                                        placeholder="Quantidade em estoque" required min="0">
                                    <label for="quantidade">Quantidade</label>
                                    <div class="invalid-feedback">Por favor, insira uma quantidade válida.</div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <textarea class="form-control" id="descricao" placeholder="Descrição do produto"
                                        style="height: 100px;"></textarea>
                                    <label for="descricao">Descrição (Opcional)</label>
                                </div>
                            </div>
                        </div>

                        <div class="d-grid mt-4">
                            <button type="submit" id="submitButton" class="btn btn-primary btn-lg">Cadastrar
                                Produto</button>
                            <button type="button" id="cancelButton"
                                class="btn btn-secondary btn-lg mt-2 d-none">Cancelar Edição</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="mt-5">
                <div class="text-center mb-4">
                    <i class="icone bi bi-list-ul" style="font-size: 3rem;"></i>
                    <h3 class="card-title mt-2">Produtos Cadastrados</h3>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover align-middle text-center table-striped">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Preço</th>
                                <th scope="col">Quantidade</th>
                                <th scope="col">Descrição</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody id="product-list">
                            <tr>
                                <td>Produto Estático 2</td>
                                <td>R$ 299,00</td>
                                <td>15</td>
                                <td>Outro item de exemplo no HTML.</td>
                                <td class="action-buttons">
                                    <button type="button" class="btn btn-outline-primary btn-sm">
                                        <i class="bi bi-pencil-square"></i> Editar
                                    </button>
                                    <button type="button" class="btn btn-outline-danger btn-sm">
                                        <i class="bi bi-trash"></i> Excluir
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p id="empty-state" class="text-center text-muted mt-4 d-none">Nenhum produto cadastrado ainda.</p>
                </div>
            </div>

        </div>
    </div>
</div>