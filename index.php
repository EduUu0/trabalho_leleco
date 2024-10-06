<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!--NÃO ALTERAR-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="src/css/styles.css">
    <style>
        .centered-form {
            max-width: 800px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <!--NÃO ALTERAR-->
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-purple sidebar">
                <div class="logo">
                    <i class="bi bi-0-circle-fill"></i>
                    <h2>HORIZON+</h2>
                </div>
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#" data-target="produtos">
                                <i class="bi bi-phone-fill icon-large"></i>
                                <span>Produtos</span>
                                <i id="indicator" class="bi bi-caret-left-fill indicator"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-target="pedidos">
                                <i class="bi bi-basket2-fill icon-large"></i>
                                <span>Pedidos</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-target="fornecedores">
                                <i class="bi bi-people-fill icon-large"></i>
                                <span>Fornecedores</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-target="funcionarios">
                                <i class="bi bi-person-badge-fill icon-large"></i>
                                <span>Funcionários</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-target="estoque">
                                <i class="bi bi-box-fill icon-large"></i>
                                <span>Estoque</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-target="equipamentos">
                                <i class="bi bi-pc-display-horizontal icon-large"></i>
                                <span>Equipamentos</span>
                            </a>
                        </li>
                    </ul>
                    <div class="user">
                        <div class="nav-item">
                            <div class="d-flex align-items-center card-user">
                                <i class="bi bi-person-circle users"></i>
                                <div class="ml-2">
                                    <div>Funcionário</div>
                                    <div class="text-muted" style="font-size: 0.8em;">Função xyz</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <!--NÃO ALTERAR-->

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
                    <h1 class="h2">Cadastro de Produtos</h1>
                </div>
                <!--NÃO ALTERAR-->
                
                <div id="produtos" class="content centered-form">
                    <div id="confirmationMessage" class="alert alert-success" role="alert" style="display: none;">
                        Produto cadastrado com sucesso!
                    </div>
                    <form id="productForm">
                        <div class="form-group">
                            <label for="productName">Nome do Produto</label>
                            <input type="text" class="form-control" id="productName" placeholder="Nome completo do produto" maxlength="100" required>
                        </div>
                        <div class="form-group">
                            <label for="productDescription">Descrição do Produto</label>
                            <textarea class="form-control" id="productDescription" rows="3" placeholder="Descrição detalhada do produto"></textarea>
                        </div>
                        <div class="form-row ">
                        <div class="form-group col-md-4">
                            <label for="productCategory">Categoria do Produto</label>
                            <select class="form-control" id="productCategory">
                                <option>Eletrônicos</option>
                                <option>Roupas</option>
                                <option>Alimentos</option>
                                <option>Utensílios Domésticos</option>
                                <option>Outros</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="unitMeasure">Unidade de Medida</label>
                            <input type="text" class="form-control" id="unitMeasure" placeholder="Unidade (ex: kg, litro, unidade)" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="productSupplier">Fornecedor do Produto</label>
                            <select class="form-control" id="productSupplier">
                                <option>Fornecedor A</option>
                                <option>Fornecedor B</option>
                                <option>Fornecedor C</option>
                                <option>Fornecedor D</option>
                            </select>
                        </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="costPrice">Preço de Custo</label>
                                <input type="text" class="form-control" id="costPrice" placeholder="Preço de custo" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="stockQuantity">Quantidade em Estoque</label>
                                <input type="number" class="form-control" id="stockQuantity" placeholder="Quantidade em estoque" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="salePrice">Preço de Venda</label>
                                <input type="text" class="form-control" id="salePrice" placeholder="Preço de venda" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Cadastrar Produto</button>
                    </form>
                </div>
                <!-- Outras Divs de Conteúdo -->
                <div id="pedidos" class="content" style="display: none;">
                    <h2>Gestão de Pedidos</h2>
                    <!-- Conteúdo relacionado a pedidos -->
                </div>
                <div id="fornecedores" class="content" style="display: none;">
                    <h2>Gestão de Fornecedores</h2>
                    <!-- Conteúdo relacionado a fornecedores -->
                </div>
                <div id="funcionarios" class="content" style="display: none;">
                    <h2>Gestão de Funcionários</h2>
                    <!-- Conteúdo relacionado a funcionários -->
                </div>
                <div id="estoque" class="content" style="display: none;">
                    <h2>Gestão de Estoque</h2>
                    <!-- Conteúdo relacionado a estoque -->
                </div>
                <div id="equipamentos" class="content" style="display: none;">
                    <h2>Gestão de Equipamentos</h2>
                    <!-- Conteúdo relacionado a equipamentos -->
                </div>
                <!--NÃO ALTERAR-->
            </main>
        </div>
    </div>
    <!--NÃO ALTERAR-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="src/js/script.js"></script>
    <script>
        $(document).ready(function(){
            $('#salePrice').mask('000.000.000.000.000,00', {reverse: true});
            $('#costPrice').mask('000.000.000.000.000,00', {reverse: true});

            $('#productForm').on('submit', function(event) {
                event.preventDefault();
                $('#confirmationMessage').fadeIn().delay(2000).fadeOut();
                this.reset();
            });

            $('.nav-link').on('click', function() {
                $('.content').hide(); 
                var target = $(this).data('target');
                $('#' + target).show(); 
            });
        });
    </script>
    <!--NÃO ALTERAR-->
</body>

</html>