<?PHP
include "cadastro.php";
include "conexao.php";
include "cadastroDAO.php";

$msg = "";

if (!empty($_POST)){
    $objeto = new cadastro();
    $objeto->set("login", $_POST["login"]);
    $objeto->set("senha", $_POST["senha"]);
    
      //Percorre a Variável Global $_POST
    foreach($_POST as $chave=>$botao) {
        if($botao == "btnEnviar"){
            $msg = $objeto->cadastrar();        
        }
    }    
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form method="post" action="">
            Login: <input type="text" name="inLog">
            Senha: <input type="password" name="inPwd">
            <input type="submit" name="btnEnviar" value="Enviar">
        </form>
    </div>    
</body>
</html>