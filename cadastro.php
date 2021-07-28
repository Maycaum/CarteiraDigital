<!DOCTYPE html>
<html lang="pt br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
    <title>Carteira Virtual</title>
    <link rel="stylesheet" type="text/css" href="css/cadastro.css">

    
</head>
<body>
    

        <a href="index.php"><img src="img/verde.png" alt="verde" width="187,5" height="187,5" class="img"></a>

        <form class="formulario" method="POST" action="envia_formulario.php">
            <div class = "titulo">
                <h1>Cadastro De Usuario</h1>
            </div>
            <div class="texto-formulario">
                <div class="nomes">
                        <label for="name">Nome: </label>
                        <input type="text" name="nome" id="nome" required>
                        <br><br>
                        <label for="sobrenome"> Sobrenome: </label>
                        <input type="text" name="sobrenome" id="sobrenome" required>
                    <br>         
                </div>
                <div class="email">
                    <label for="email">Email:</label>
                    <input type="email" name="email" required>
                </div>
                <br>
                <div class="nome">
                    <label for="idade">Idade:</label>
                    <input type="number" name="idade" id="idade">
                    <br><br>
                    <label for="cpf">CPF:</label>
                    <input type="cpf" type="" name="cpf" id="cpf" placeholder="Ex.: 000.000.000-00" maxlength="14" required>
                    <script type="text/javascript">
                        var campoCpf = document.getElementById('cpf');
                        campoCpf.oninput = function (){
                            var cpf = campoCpf.value;
                            if(cpf.length == 3 || cpf.length ==7){
                                campoCpf.value +=".";
                            }
                            if(cpf.length == 11){
                                campoCpf.value +="-"
                            }
                        }
                    </script>
                    <br><br>
                    <label for="cpf">RG:</label>
                    <input type="text" name="rg" id="rg" placeholder="Ex.: 00.000.000-0"maxlength="12"  >
                    <script type="text/javascript">
                        var campoRg = document.getElementById('rg');
                        campoRg.oninput = function (){
                            var rg = campoRg.value;
                            if(rg.length == 2 || rg.length ==6){
                                campoRg.value +=".";
                            }
                            if(rg.length == 10){
                                campoRg.value +="-"
                            }
                        }
                    </script>
                    <br>
                </div>
                <br>
                <div>
                    <label>Estado Civil</label>
                    <select id="estadocivil" name="estadocivil">
                        <option selected disable value="" >Escolha </option>
                        <option>Solteiro</option>
                        <option>Casado</option>
                        <option>União estavel</option>
                        <option>viúvo</option>
                    </select>
        
                </div>
                <br>
                        <div class="local" >
                        <label>Localização</label>
                        <select id="estado" name="localizacao">
                            <option selected disable value="" >Escolha </option>
                            <option>SP</option>
                            <option>RJ</option>
                            <option>GO</option>
                            <option>DF</option>
                            <option>AM</option>
                        </select>
                       </div>

                       
                       <div class="profisaum" >
                            <label>Profissão</label>
                            <select id="profissao" name="profissao">
                            <option selected disable value="" >Escolha </option>
                            <option>Médico</option>
                            <option>Policial</option>
                            <option>Professor</option>
                            <option>ADM</option>
                         </div>
                     </select>
                        <div class="sangue" >
                            <label>Tipo sanguineo</label>
                            <select id="sangue" name="sangue">
                                <option selected disable value="" >Escolha </option>
                                <option>-O</option>
                                <option>O</option>
                                <option>A</option>
                                <option>B</option>
                                <option>AB</option>
                                <option>-AB</option>
                                
                            </select>                  
                        </div>
                        
                        <div class="pontos" >
                            <label>Pontos na Carteira</label>
                            <select id="pontos" name="pontos">
                                <option selected disable value="" >Escolha</option>
                                <option>0 a 10</option>
                                <option>10 a 20</option>
                                <option>20 a 30</option>
                                <option>30 a 40</option>
                            
                            </select>

                        </div>



                
                    
                    <button class="botao" type="submit">Concluido</button>
            </div>          
        </form>

    </div>
</body>
</html>

