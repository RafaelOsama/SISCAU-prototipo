<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>SISCAU</title>
   
</head>
<body>
    <div>
        <h1>Login</h1>
        <form action="testLogin.php" method="POST">
            <input type="Text" name="nome-sobrenome" placeholder="Nome e Sobrenome">
            <br><br>
            <input type="Password" name="senha" placeholder="Senha">
            <br><br>
            <a class="ResetPassword" href="#">Esqueci minha senha</a>
            <br><br>
            <input class="InputSubmit" type="submit" name="submit" value="Entrar">
            <br>
            
        </form>
    </div>
    <script>
    function logar(){
        var nome = documente.getElementById('Nome').value;
        var senha = document.getElementById('senha').value;
        if(nome == "bill" && senha == "123"){
             alert('Sucesso');
        }
        else{
            alert('ERRO')
        }
    }
</script>
</body>
</html>
