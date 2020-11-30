<?php
    class Usuario
    {
        private $pdo;
        public $msgErro = ""; //tudo ok

        public function conectar($nome,$host,$usuario,$senha)
        {
            global $pdo;
            try {
                $pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);
            } catch (PDOException $e) {
                $msgErro = $e->getMessage(); 
            }            
        }

        public function cadastrar($nome,$telefone,$email,$senha)
        {
            global $pdo;
            //verificar se o email já está cadastrado
            $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e");
            $sql->bindValue(":e",$email);
            $sql->execute();
            if($sql->rowCount() > 0){
                return false; //já está cadastrado
            } else { //caso não, cadastrar
                $sql = $pdo->prepare("INSERT INTO usuarios (nome, telefone, email, senha) VALUES (:n, :t, :e, :s)");
                $sql->bindValue(":n",$nome);
                $sql->bindValue(":t",$telefone);
                $sql->bindValue(":e",$email);
                $sql->bindValue(":s",md5($senha)); //necessario colocar o md5 na função logar tambem
                $sql->execute();
                return true;
            }            
        }

        public function logar($email,$senha)
        {
            global $pdo;
            //verificar se o email e senha estao cadastrados, se sim
            $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e AND senha = :s");
            $sql->bindvalue(":e",$email);
            $sql->bindvalue(":s",md5($senha)); // md5 é necessário para poder autenticar com o que foi guardado no banco
            $sql->execute();
            if($sql->rowCount() > 0){
                //entrar no sistema (Sessão)
                $dado = $sql->fetch();
                session_start();
                $_SESSION['id_usuario'] = $dado['id_usuario'];
                return true; //logado com sucesso
            } else {
                return false; //falha ao logar
            }       
        }
    }
?>