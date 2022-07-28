<?php
    require_once "header.inc.php";
    require_once "../dao/AgendaDao.php";
    
    //$id = isset($_GET["id"]) ? $_GET["id"] : 0;

    $id = $_GET["id"] ?? 0;

    $contato = new AgendaDao();

   if ($id != 0){
       $contato->getOne($id);
       $nome = $contato->getNome();
       $celular = $contato->getCelular();
       $fone = $contato->getFone();
       $cpf = $contato->getCpf();
    }

?>

<form method="POST" action="../control/cadastro.php"><!--form necessário para enviar ao php-->
    <div class="row mt-5">
        <div class="col-8 bg-dark offset-2 p-4 rounded">
            <div class="row">
                <div class="col-4 offset-2 form-group text-light">
                    <label for="nomePessoa">Nome:</label>
                    <!--id referência ao label -->
                    <input class="form-control" type="text" id="nomePessoa" name="nomePessoa" placeholder="Digite o nome" value="<?= $nome ?? "" ?>">
                </div>
                <div class="col-4 form-group text-light">
                    <label for="celularPessoa">Celular:</label>
                    <input class="form-control" type="text" id="celularPessoa" name="celularPessoa" placeholder="Digite o celular" value="<?= $celular ?? "" ?>">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-4 offset-2 form-group text-light">
                    <label for="telefonePessoa">Telefone:</label>
                    <input class="form-control" type="text" id="telefonePessoa" name="telefonePessoa" placeholder="Digite o telefone" value="<?= $fone ?? "" ?>">
                </div>
                <div class="col-4 form-group text-light">
                    <label for="cpfPessoa">Cpf:</label>
                    <input class="form-control" type="text" id="cpfPessoa" name="cpfPessoa" placeholder="Digite o CPF" value="<?= $cpf ?? "" ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-12 mt-4 text-center">
                    <?php if($id == 0) : ?>
                    <button class="btn btn-primary mr-3" type="submit">
                        <i class="far fa-save"></i>
                       Salvar
                    </button>
                    <?php else : ?>
                    <button class="btn btn-warning mr-3" type="submit">
                        <i class="fas fa-user-edit"></i>
                       Alterar
                    </button>
                    <?php endif; ?>
                    <a href="index.php" class="btn btn-danger">
                        <i class="fas fa-undo-alt"></i>
                        Voltar
                    </a>
                </div>
            </div>
        </div>  
    </div>
    <input type="hidden" id=" id" name="id" value="<?= $id ?>">
</form>

<?php
    require_once "footer.inc.php";
?>