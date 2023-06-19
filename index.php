<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Exercicio 001</title>
</head>
<body>

    <style>
        body{
            background-color: #545d67;
        }

        .menu{
            margin: 0px;
            display: flex;
            padding: 20px;
            margin: 50px auto;
        }

        .menu2{
            background-color: white;
        }
        
    </style>

    <div class="menu2 px-4 py-5 my-5 text-center">
        <h1 class="display-5 fw-bold text-body-emphasis">Sistema de Aluguel de Veiculos</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Atividade 01 do treinamento para a equipe de desenvolvimento do projeto Paz e Pão.</p>
        </div>
    </div>

    <div class="menu d-flex flex-column flex-md-row p-4 gap-4 py-md-5 align-items-center justify-content-center">
        <ul class="dropdown-menu position-static d-grid gap-1 p-2 rounded-3 mx-0 shadow w-220px" data-bs-theme="dark">
            <li class="dropdown-item rounded-2">Carros:</li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item rounded-2" href="Carros/cadastroCr.php">Cadastrar Carro</a></li>
            <li><a class="dropdown-item rounded-2" href="Carros/atualizarCr.php">Atualizar Carro</a></li>
            <li><a class="dropdown-item rounded-2" href="Carros/deletarCr.php">Deletar Carro</a></li>
            <li><a class="dropdown-item rounded-2" href="Carros/exibirCr.php">Exibir Carros</a></li>
        </ul>

        <ul class="dropdown-menu position-static d-grid gap-1 p-2 rounded-3 mx-0 shadow w-220px" data-bs-theme="light">
            <li class="dropdown-item rounded-2">Aluguel:</li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item rounded-2" href="Aluguel/cadastroAl.php">Realizar aluguel</a></li>
            <li><a class="dropdown-item rounded-2" href="Aluguel/exibirAl.php">Exibir alugueis</a></li>
        </ul>

        <ul class="dropdown-menu position-static d-grid gap-1 p-2 rounded-3 mx-0 border-0 shadow w-220px" data-bs-theme="dark">
            <li class="dropdown-item rounded-2">Clientes:</li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item rounded-2" href="Clientes/cadastroCl.php">Cadastrar Cliente</a></li>
            <li><a class="dropdown-item rounded-2" href="Clientes/atualizarCl.php">Atualizar Cliente</a></li>
            <li><a class="dropdown-item rounded-2" href="Clientes/deletarCl.php">Deletar Cliente</a></li>
            <li><a class="dropdown-item rounded-2" href="Clientes/exibirCl.php">Exibir Clientes</a></li>
        </ul>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>