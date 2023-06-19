<?php       
    session_start();

    include_once('config.php');

    // print_r($_SESSION);

    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) 
    {        
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM usuarios WHERE id LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY id DESC";
    }
    else 
    {
        $sql = "SELECT * FROM usuarios ORDER BY id DESC";
    }

    

    $result = $conexao->query($sql);

    // print_r($result);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../BOOTSTRAP/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>Sistema</title>
    <style>
        body{
            background-image: linear-gradient(to right, #4A4E59, #D7D7D9);
            color: white;
            text-align: center;
        }
        .table-bg
        {
            background: rgba(0, 0, 0, 0.3);
            border-radius: 10px 10px 0 0;
        }
        .box-search
        {
            display: flex;
            justify-content: center;
            gap: 1%;            
        }
        .btn-dark{
            position: relative;
            right: 800px;
            background-color: #353940; 
            border-color: #D7D7D9;
        }
        .d-flex{
            position: relative; 
            left: 500px;
        }
    </style>
</head>
<body>
    <nav class="navbar navibar-light justify-content-center fs-3 mb-2"
    style="background-color: #353940"><br><img src="../AZON/img/logo6.png" alt="logo_Azon" ></div>       
        <div class="d-flex">
            <a href="sair.php" class="btn btn-light me-5">Sair</a>
        </div>
    </nav>
    <?php
         echo "<h5>Bem vindo ao Sistema! | <u>$logado</u></h5>";
    ?>
    <hr>
    <div class="row">        
        <div class="box-search">
            <input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar">
            <button onclick="searchData()" class="btn btn-light">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>        
            </button>            
            <a href="formulário_rm.php" class="btn btn-dark">Cadastro</a>            
        </div>
    </div>
        <div class="m-4">
        <table class="table text-white table-bg">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Senha</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Data de Nascimento</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">...</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$user_data['id']."</td>";
                        echo "<td>".$user_data['nome']."</td>";
                        echo "<td>".$user_data['senha']."</td>";
                        echo "<td>".$user_data['email']."</td>";
                        echo "<td>".$user_data['telefone']."</td>";
                        echo "<td>".$user_data['sexo']."</td>";
                        echo "<td>".$user_data['data_nasc']."</td>";
                        echo "<td>".$user_data['cidade']."</td>";
                        echo "<td>".$user_data['estado']."</td>";
                        echo "<td>".$user_data['endereco']."</td>";
                        echo "<td>
                        <a class='btn btn-sm' href='edit.php?id=$user_data[id]' title='Editar'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                        <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                        <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
                      </svg>
                            </a> 
                            <a class='btn btn-sm' href='delete.php?id=$user_data[id]' title='Deletar'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
                            <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z'/>
                          </svg>
                            </a>
                            </td>";
                        echo "</tr>";
                    }
                    ?>
            </tbody>
        </table>
                </div>
    <script src="../BOOTSTRAP/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

<script>
    var search = document.getElementById('pesquisar');

    search.addEventListener("keydown", function(event) {
        if (event.key === "Enter") 
        {
            searchData();
        }
    });

    function searchData()
    {
        window.location = 'sistema.php?search='+search.value;
    }
</script>
</html>