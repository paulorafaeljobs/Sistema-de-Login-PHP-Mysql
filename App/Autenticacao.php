<?php
require_once 'Conexao.php';
function Login($email,$senha){
    $sql = 'SELECT * FROM user where email_user = ?'; 
    $enviar = Conexao::getConexao()->prepare($sql);
    $enviar->bindValue(1,$email);
    $enviar->execute();
    if($enviar->rowCount() > 0){
        $result = $enviar->fetchAll(\PDO::FETCH_ASSOC);
        foreach($result as $value){
            $idDB = $value['id'];
            $nomeDB = $value['name_user'];
            $emailDB = $value['email_user'];
            $passBD = $value['pass_user']; 	
        }
        if(password_verify($senha,$passBD)){
            SessaoEntrar($idDB,$nomeDB,$emailDB);   
            Logs("Usuario Logado",$email);          
        }else{
        Logs("Error Senha Invalida",$email);
        }
    }else{
        Logs("Error Usuario Não Cadastrado",$email);
    }
};
function Cadastrar($nome,$email,$senha){  
    $sql = 'SELECT * FROM user where email_user = ?'; 
    $enviar = Conexao::getConexao()->prepare($sql);
    $enviar->bindValue(1,$email);
    $enviar->execute();
    if($enviar->rowCount() > 0){
        Logs("Error Email já Cadastrado",$email);
    }else{
        $pass = password_hash($senha, PASSWORD_DEFAULT);
        $sql = 'INSERT INTO user(name_user,email_user,pass_user) VALUES (?,?,?);';
        $enviar = Conexao::getConexao()->prepare($sql);
        $enviar->bindValue(1, $nome);
        $enviar->bindValue(2, $email);
        $enviar->bindValue(3, $pass);
            if($enviar->execute()){
                Login($email,$senha);
            }else{
                Logs("Error Erro ao Cadastrar Usuario",$email);
            }
    }
};
function Forgot(){
    $NovaSenha = strtoupper(substr(md5(date('Hsi')), 0, 6));
    $SenhaHash = password_hash($new_pass, PASSWORD_DEFAULT);
    $sql = 'UPDATE user SET pass_user = ? WHERE email_user = ?';
};
function SessaoEntrar($id,$nome,$email){
    session_start();
    $_SESSION['id'] = $id;
    $_SESSION['nome'] = $nome;
    $_SESSION['email'] = $email;
    header("location: .././");
};
function Logs($acao,$email){
    $dataHora = date('d/m/Y - H:i:s');
    $arquivo = "logs.txt";
    $conteudo = "$dataHora  $acao   $email\n";
    $arquivoAberto = fopen($arquivo,"a");
    fwrite($arquivoAberto, $conteudo);
    fclose($arquivoAberto);
};