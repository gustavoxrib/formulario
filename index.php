<?php

$Host = 'localhost'; 
$Username = 'root';
$Password = '';
$Name = 'formulario_dev';

$conexao = mysqli_connect ($Host, $Username, $Password, $Name) or die ("Erro de Conexão");

if(isset($_POST['submit'])) {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $aplicacao = $_POST['aplicacao'];
    $senior = $_POST['nivel'];     
    $experiencia = $_POST['experiencia'];

    $result = mysqli_query ($conexao, "INSERT INTO devs (nome, email, cidade, estado, aplicacao, senioridade, experiencia, criacao)
    VALUES ('$nome', '$email', '$cidade', '$estado', '$aplicacao', '$senior', '$experiencia', NOW())");

    if ($result)
    {
        echo 'Conexão com o Banco de Dados efetuada com sucesso.';
    }
    else
    {
        echo 'Não foi possível cadastrar.';
    }

    if ($conexao->connect_errno)
    {
        echo "Houve um erro: ".mysqli_connect_error();
    }
    else
    {
        echo "Conexão efetuada com sucesso.";
    }
    
    mysqli_close($conexao);
    
    //print_r($_POST['nome']);
    //print_r('<br>');
    //print_r($_POST['email']);
    //print_r('<br>');
    //print_r($_POST['cidade']);
    //print_r('<br>');
    //print_r($_POST['estado']);
    //print_r('<br>');
    //print_r($_POST['aplicacao']);
    //print_r('<br>');
    //print_r($_POST['nivel']);
    //print_r('<br>');
    //print_r($_POST['experiencia']);
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index.css" media="screen">
    <title>Cadastro de Dev's</title>
</head>

<body>
    <div class="box">
        <form action="" method="POST">
            <fieldset>
                <legend><a href="https://github.com/gustavoxrib/formulario.git"><b>Cadastro de Dev's (GitHub)</b></a>
                </legend>
                <br>
                <div class="inputbox">
                    <input type="text" name="nome" id="nome" class="inputuser" required>
                    <label for="nome" class="labelinput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="teext" name="email" id="email" class="inputuser" required>
                    <label for="nome" class="labelinput">E-mail</label>
                </div>
                <br><br>
                <div class="option2">
                    <div class="inputbox">
                        <input type="text" name="cidade" id="cidade" class="inputuser" required>
                        <label for="cidade" class="labelinput">Cidade</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="estado" id="estado" class="inputuser" required>
                        <label for="estado" class="labelinput">UF</label>
                    </div>
                </div>
                <br>
                <label><b>De qual lado da aplicação você desenvolve?</b></label><br><br>
                <input type="radio" id="front-end" name="aplicacao" value="front-end" required>
                <label for="front-end">Front-end</label>
                <input type="radio" id="back-end" name="aplicacao" value="back-end" required>
                <label for="back-end">Back-end</label>
                <input type="radio" id="fullstack" name="aplicacao" value="fullstack" required>
                <label for="fullstack">Fullstack</label>
                <br>
                <div class="senioridade">
                    <label class="senior"><b>Senioridade:</b></label>
                    <select name="nivel">
                        <option>Selecione</option>
                        <option>Junior</option>
                        <option>Pleno</option>
                        <option>Senior</option>
                    </select>
                </div>

                <br>
                <div>
                    <label><b>Selecione as tecnologias que utiliza:</b></label>
                </div>
                <br>
                <div class="option">
                    <div class="grade">
                        <input type="checkbox" id="tecnologia1" name="tecnologia[]" value="HTML">
                        <label for="tecnologia1">HTML</label>
                    </div>
                    <div class="grade">
                        <input type="checkbox" id="tecnologia2" name="tecnologia[]" value="CSS">
                        <label for="tecnologia2">CSS</label>
                    </div>
                    <div class="grade">
                        <input type="checkbox" id="tecnologia3" name="tecnologia[]" value="Javascript">
                        <label for="tecnologia3">JavaScript</label>
                    </div>
                    <div class="grade">
                        <input type="checkbox" id="tecnologia4" name="tecnologia[]" value="PHP">
                        <label for="tecnologia4">PHP</label>
                    </div>
                    <div class="grade">
                        <input type="checkbox" id="tecnologia5" name="tecnologia[]" value="C#">
                        <label for="tecnologia5">C#</label>
                    </div>
                    <div class="grade">
                        <input type="checkbox" id="tecnologia6" name="tecnologia[]" value="Python">
                        <label for="tecnologia6">Python</label>
                    </div>
                    <div class="grade">
                        <input type="checkbox" id="tecnologia7" name="tecnologia[]" value="Java">
                        <label for="tecnologia7">Java</label>
                    </div>
                    <div class="grade">
                        <input type="checkbox" id="tecnologia8" name="tecnologia[]" value="Getz">
                        <label for="tecnologia8">Getz</label>
                    </div>
                </div>
                <br>
                <div>
                    <label for="experiencia"><b>Conte um pouco da sua experiência:</b></label>
                </div>
                <div>
                    <textarea rows="4" id="experiencia" name="experiencia"></textarea>
                    <br>
                    <div class="botao">                        
                        <button type="submit" name="submit" id="concluido">Concluído</button>
                        <button type="reset" id="limpar">Limpar</button>
                    </div>
            </fieldset>
        </form>
    </div>
</body>

</html>