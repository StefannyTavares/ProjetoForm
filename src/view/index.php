        <?php
            require_once "header.inc.php";
            require_once "../dao/AgendaDao.php";

            $info = (new AgendaDao())->getAll();

            //var_dump($info);
        ?>

        <div class="row">
            <div class="col-md-12 text-center">
                <a class="btn btn-outline-primary mt-5" href="cadastro.php" target="_self">Novo contato</a>
            </div>
            <!--
            <div class="col-md-3 col-sm-6 col-lg-2 bg-dark">
                <a class="btn btn-primary mt-5" href="#" target="_self">Novo contato</a>
            </div>
            <div class="col-md-3 col-sm-6 col-lg-2 bg-success">
                <a class="btn btn-primary mt-5" href="#" target="_self">Novo contato</a>
            </div>
            <div class="col-md-3 col-sm-6 col-lg-2 bg-info">
                <a class="btn btn-primary mt-5" href="#" target="_self">Novo contato</a>
            </div>
            -->
        </div>

        <div class="card mt-5 shadow">
            <div class="card-header text-center">
                <h5>Contados Cadastrados</h5>
            </div>
            <div class="card-body">
                <table class="table table-striped table-dark table-hover table-bordered border-info">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Celular</th>
                            <th>Fone fixo</th>
                            <th>Whathsapp</th>
                            <th>Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php for ($c = 0; $c < count($info); $c++) : ?>
                        <tr>
                            <td><?php echo $info[$c]['nome'] ?></td>
                            <td><?= $info[$c]["celular"] ?></td>
                            <td><?= $info[$c]["fone"] ?></td>
                            <td><?= $info[$c]["cpf"] ?></td>
                            <td> <a href="cadastro.php?id=<?= $info[$c]['id']?>" class="btn btn-warning">
                            <i class="fas fa-edit"></i>
                            </a>
                            
                            <a href="../control/cadastro.php?delete=<?= $info[$c]["id"]?>" class="btn btn-danger">
                            <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                        </tr>
                    <?php endfor; ?>
                    </tbody>
                </table>    
            </div>
        </div>
        
    <?php
        require_once "footer.inc.php";
    ?>
    
