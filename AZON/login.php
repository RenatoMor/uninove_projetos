<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Login</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap');

body {
	margin: 0px;
	font-family: 'Noto Sans', sans-serif;
}

body * {
	box-sizing: border-box;
}

.main-login {
	width: 100vw;
	height: 100vh;
	background: #9C9C9C;
	display: flex;
	justify-content: center;
	align-items: center;
}

.left-login {
	width: 50vw;
	height: 100vh;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
}

.left-login > h1 {
	color: #5C5C5C;  
	font-size: 2.0vw;
}

.login-image {
	width: 300px;
}
.left-logo{
	position: absolute;
	top: 20px;
	left: 16px;
	font-size: 18px;
}
.btn-secondary {     
	border: none;
	padding: 8px 10px 8px 10px;
	background-color: #5C5C5C;
	color: #E8E8E8;
	position: absolute;
	top: 30px;
	right: 50px;
	font-size: 12px;
	border-radius: 8px;
    text-decoration: none;
    transition: all 0.5s ease;
}
.btn-secondary:hover {
    background-color: #BABDBF;
}
/*------------------------------------------------------*/

.right-login {
	width: 50vw;
	height: 100vh;
	display: flex;
	justify-content: center;
	align-items: center;
}

.card-login {
	width: 60%;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	padding: 30px 35px;
	background: #0F0F0F;
	border-radius: 20px;
	box-shadow: 0px 10px 20px 20px #707070;
}

.card-login > h1 {
	color: #F0F0F0;
	font-weight: 800px;
	margin: 0;
}

/*------------------------------------------------------*/

form {
	width: 100%;
	display: flex;
	flex-direction: column;
	align-items: flex-start;
	justify-content: center;
	margin: 10px 0px;

}

/* form > input {
	width: 100%;
	border: none;
	border-radius: 10px;
	padding: 15px;
	background: #E8E8E8;
	color: #3D3D3D;
	font-size: 12pt;
	box-shadow: 0px 10px 40px #9C9C9C;
	outline: none;
	box-sizing: border-box; 
}

form > label {
	color: #fff;
	margin-bottom: 10px;
}

form > input::placeholder {
	color: #9C9C9C;
} */

/*------------------------------------------------------*/

.text-field {
    width: 100%;
	display: flex;
	flex-direction: column;
	align-items: flex-start;
	justify-content: center;
	margin: 10px 0px;
}

.text-field > input {
	width: 100%;
	border: none;
	border-radius: 10px;
	padding: 15px;
	background: #E8E8E8;
	color: #3D3D3D;
	font-size: 12pt;
	box-shadow: 0px 10px 40px #9C9C9C;
	outline: none;
	box-sizing: border-box; 
}

.text-field > label {
	color: #fff;
	margin-bottom: 10px;
}

.text-field > input::placeholder {
	color: #9C9C9C;
}


/*------------------------------------------------------*/


.inputSubmit {
	width: 100%;
	padding: 16px 0px;
	border: none;
	border-radius: 8px;
	outline: none;
	text-transform: uppercase;
	font-weight: 800;
	letter-spacing: px;
	color: #292943;
	background: #E8E8E8;
	cursor: pointer;
	box-shadow: 0px 20px 40px -15px #fff;
	display: flex;
	justify-content: center;
	margin: 25px 0px 15px 0px ;
}

/*------------------------------------------------------*/

@media only screen and (max-width: 950px){
	.card-login {
		width: 85%;
	}
}

@media only screen and (max-width: 600px){ /*Smartphone*/
	.main-login {
		flex-direction:column; 
	}

 	.left-login > h1{
 		display: none;
 	}

 	.left-login {
 		width: 100%;
 		height: auto;
 	}

 	.right-login {
 		width: 100%;
 		height: auto;
 	}

 	.login-image{
 		width: 30vw;
 	}

 	.card-login {
 		width: 90%;
 	}
}
    </style>
</head>
<body>
    
    <a href="formulário_rm.php" class="btn btn-secondary">Voltar</a>

	<div class="left-logo">
		<img src="../AZON/img/logo6.png" alt="logo_Azon" ></div>
	</div>

	<div class="main-login">    

		<div class="left-login">
			<h1> <br> <br>  E entre em nossa comunidade...</h1>
			<img src="./img/techCompany.svg" class="login-image" alt="techCompany">
		</div>

		<div class="right-login">

			<div class="card-login">
				<h1>Login</h1>
				<form action="testLogin.php" method="POST"> 
					<div class="text-field">
					<label for="usuario">Usuário</label>
					<input type="text" name="email" placeholder="Usuario"> 
				</div>

				<div class="text-field">
					<label for="senha">Senha</label>
					<input type="password" name="senha" placeholder="Senha">
				</div>
				<!-- <button class="btn-login">Login</button> -->
				<input class="inputSubmit" type="submit" name="submit" value="Login">
				</form>
			</div>
			
		</div>

	</div>
	
</body>
</html>