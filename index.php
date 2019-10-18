<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade Hash</title>
    <style>

    </style>
</head>
<body>
<div style="text-align: left; font-size: 30px;">
    <form method="post">
    <h2>Faça login para continuar</h2>

    <label>Login:</label>
    <input type="text">

    <label>Senha:</label>
    <input name="senha" type="password" required>

    <button type="submit" name="enviar"> Enviar </button><br>

    </form>
    <br>
    <?php

    if(isset($_POST["enviar"])){
        $senha = $_POST["senha"];

        echo "Sua senha criptografada em md5 fica: <b>".md5($senha)."</b><br>";
        echo "Sua senha criptografada em sha1 fica: <b>".sha1($senha)."</b><br>";
        echo "Sua senha criptografada em Base64 fica: <b>".base64_encode($senha)."</b><br>";
        echo "Sua senha criptografada em Hash (tiger192,4) fica: <b>".hash('tiger192,4', $senha)."</b><br>";
        echo "Sua senha criptografada em Hash (haval256,5) fica: <b>".hash('haval256,5', $senha)."</b><br>";
        echo "Sua senha criptografada em Crypt fica: <b>".crypt('haval256,5', $senha)."</b><br><hr>";

        echo 'Para a Equipe a Hash de espalhamento mais interessante é a Hash($parametroHash, $parametroMensagem).<br><hr>
              <b>Parâmetros</b><br>
              $parametroHash: Nome do algoritmo de hash selecionado (por exemplo, "md5", "sha256", "haval160,4", etc.)<br>
              $parametroMensagem: Mensagem a ser criptografada.<br><hr>
              Com essa Hash, temos acesso a diversar formas de espalhamento em uma mesmo metodo, dificultando a invasão<br>
              de um terceiro ao sistema e o acesso a qualquer tipo de informação';


    }

    ?>
</div>
</body>
</html>
