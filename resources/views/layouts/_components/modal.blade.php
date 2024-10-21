<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="modalCadastrarProduto">Cadastrar Novo Produto</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
            <div class="modal-body">
                <form class="was-validated" action="{{ route('produto.store')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="nomeProduto" class="form-label">Produto</label>
                        <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome')}}" placeholder="Digite o nome do produto" required minlength="3">
                        {{$errors->has('nome') ? $errors->first('nome') : ''}}
                        <div class="invalid-feedback text text-danger">O campo nome do Produto precisa ter no mínimo 3 caracteres</div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-success">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>