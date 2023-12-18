<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../BOOTSTRAP/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>Home</title>
    
    <style>

        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, #4A4E59, #D7D7D9);
            text-align: center;
            color: white;
        }
        .box{
            position: absolute;
            top: 70%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 40px;  
            border-radius: 10px;
        }
        a{
            text-decoration: none;
            color: white;
            border: 2px solid #D7D7D9;
            padding: 15px;
            border-radius: 10px;
            font-size: 15px;
            color: white; 
        }
        a:hover{
            background-color: #7D828C;
        }

    </style>
</head>
<body>
<div class=" p-5 mb-5 d-flex justify-content-center bg-dark p-2 text-white" ><br><img src="../AZON/img/logo6.png" alt="logo_Azon" ></div>
<hr> 
    <br><br> 
    <h1></h1>
    <h5>Faça o login! | Faça o seu Cadastro!</h5>
        <div class="box">
        <a href="login.php">Login</a>
        <a href="formulário_rm.php">Cadastre-se</a>

    </div>
    <script src="../BOOTSTRAP/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>