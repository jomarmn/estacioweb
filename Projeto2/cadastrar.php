<?php
    require_once 'classes/usuarios.php';
    $u = new Usuario;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Cadastro</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<div id='corpo-form'>
    <h1>Cadastrar</h1>
    <form method="POST">
        <input type="text" name="nome" placeholder="Nome Completo" maxlength="50">
        <input type="text" name="telefone" placeholder="Telefone" maxlength="11">
        <input type="email" name="email" placeholder="Usuário" maxlength="40">
        <input type="password" name="senha" placeholder="Senha" maxlength="20">
        <input type="password" name="confSenha" placeholder="Confirmar Senha">
        <center><input type="submit" value="Salvar"></center>
    </form>
</div>
<?php
//verificar se clicou no botao
if(isset($_POST['nome']))
{
    $nome = addslashes($_POST['nome']);
    $telefone = addslashes($_POST['telefone']);
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    $confirmarsenha = addslashes($_POST['confSenha']);
    //verificar se esta preenchido
    if (!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confirmarsenha)) {
        $u->conectar("projeto","localhost","root","");
        if ($u->msgErro == "") {   //se est tudo ok
            if($senha == $confirmarsenha){
                if($u->cadastrar($nome,$telefone,$email,$senha)){
                    ?>
                    <div id="msg-sucesso">
                        Cadastrado com sucesso! Acesse para entrar!
                    </div>
                    <?php
                } else {
                    ?>
                    <div class="msg-erro">
                        E-mail já cadastrado!
                    </div>
                    <?php
                }
            } else {
                ?>
                    <div class="msg-erro">
                        Senha e confirmar senha não correspondem!
                    </div>
                <?php
            }
        } else {
            ?>
            <div class="msg-erro">
            <?php echo "Erro: ".$u->msgErro;?>
            </div>
            <?php
        }

    } else {
        ?>
        <div class="msg-erro">
            Preencha todos os campos!
        </div>
        <?php
    }
}
?>
        <div class="btn">
        <a href="areaPrivada.php"><strong>Voltar</strong></a>
        </div>
</body>
</html>