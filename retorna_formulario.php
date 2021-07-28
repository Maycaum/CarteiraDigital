<?php
include 'conexao.php';
    $conexao = $conn->query ("SELECT * FROM cadastro");

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Retorno</title>
</head>
<body>
    <table border ="1">
        <tr>
            <td>nome</td>
            <td>Sobrenome</td>
            <td>Email</td>
            <td>Idade</td>
            <td>cpf</td>
            <td>rg</td>
            <td>estado Civil</td>
            <td>Localização</td>
            <td>Profissão</td>
            <td>Tipo sanguineo</td>
            <td>Pontos na carteira</td>
        </tr>
    <?php while($dados = $conexao->fetch_array()) { ?>
        <tr>
        <td><?php echo $dados["nome"];?></td>
        <td><?php echo $dados["sobrenome"];?></td>
        <td><?php echo $dados["email"];?></td>
        <td><?php echo $dados["idade"];?></td>
        <td><?php echo $dados["cpf"];?></td>
        <td><?php echo $dados["rg"];?></td>
        <td><?php echo $dados["estadocivil"];?></td>
        <td><?php echo $dados["localizacao"];?></td>
        <td><?php echo $dados["profissao"];?></td>
        <td><?php echo $dados["sangue"];?></td>
        <td><?php echo $dados["pontos"];?></td>
        </tr>
    <?php } ?>
    </table>
</body>
</html>
