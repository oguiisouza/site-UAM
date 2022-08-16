<!-- github.com/oguiisouza | guilhermesc.com -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Luz Ingá</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: url('images/back.jpg');
        }
        div{
            background-color: rgba(0, 0, 0, 0.6);
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
            text-align: center;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        .inputSubmit{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            
        }
        .inputSubmit:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }
        .button {
			background-color: #FFFF;
			border: 0;
			border-radius: 3.5em;
			color: #000;
			cursor: pointer;
			display: inline-block;
			height: 3.5em;
			line-height: 3.5em;
			outline: 0;
			padding: 0 2em 0 2em;
			position: absolute;

			-moz-appearance: none;
			-webkit-appearance: none;
			-o-appearance: none;
			-ms-appearance: none;
			appearance: none;

			-moz-transition: all 0.2s ease-in-out;
			-webkit-transition: all 0.2s ease-in-out;
			-o-transition: all 0.2s ease-in-out;
			-ms-transition: all 0.2s ease-in-out;
			transition: all 0.2s ease-in-out;
		}
    </style>
</head>
<a class= button href="index.php">Voltar</a>
<body>
    <div>
        <h1>Login</h1>
        <br>
        <form action="testLogin.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Entrar">
        </form>
    </div>
</body>
</html>