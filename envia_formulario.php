<?php  
session_start();
include 'conexao.php';  
    $_SESSION["nome"] = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $estadocivil = $_POST['estadocivil'];
    $localizacao = $_POST['localizacao'];
    $profissao = $_POST['profissao'];
    $sangue = $_POST['sangue'];
    $pontos = $_POST['pontos'];
  
    // SQL
      $conexao = $conn;
      $conexao->query("INSERT INTO cadastro (nome, sobrenome, email, idade, cpf, rg, estadocivil, localizacao, profissao, sangue, pontos ) 
                      values('$nome', '$sobrenome', '$email', '$idade', '$cpf', '$rg', '$estadocivil', '$localizacao', '$profissao', '$sangue', '$pontos')" );
      $conexao -> autocommit(FALSE);
      $conexao->commit();
    echo 'nego nei';


if($_POST['profissao'] = 'ADM'){
    echo "<SCRIPT LANGUAGE='JavaScript'>
    window.location.href='retorna_formulario.php';
    </SCRIPT>";
}
?>